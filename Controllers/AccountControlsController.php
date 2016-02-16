<?php

/*
 * This file is part of the Jirro package.
 *
 * (c) Rendy Eko Prastiyo <rendyekoprastiyo@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jirro\Bundle\AdminBundle\Controllers;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\ParameterBag;
use Jirro\Component\Http\Route\Controller\StandardController;
use Jirro\Component\ORM\Tools\Pagination\Paginator;

class AccountControlsController extends StandardController
{
    public function indexAction(Request $request)
    {
        $page        = $request->query->get('page', 1);
        $maxResults  = 10;
        $firstResult = $maxResults * ($page - 1);

        if ($request->isMethod(Request::METHOD_POST)) {
            switch (strtoupper($request->request->get('formAction'))) {
                case 'FILTER':
                    $request->getSession()->set(__METHOD__, $request->request);
                    break;
                default :
                    $request->getSession()->set(__METHOD__, new ParameterBag());
            }
        }

        $queryBuilder = $this
            ->getObjectManager()
            ->createQueryBuilder()
            ->select('accountControls')
            ->from('Jirro\Bundle\AccountBundle\Domain\AccountControl', 'accountControls')
            ->leftJoin('accountControls.resource', 'resources')
            ->leftJoin('accountControls.user', 'users')
            ->leftJoin('accountControls.group', 'groups')
            ->orderBy('resources.name', 'ASC')
            ->addOrderBy('accountControls.action', 'ASC')
            ->addOrderBy('users.username', 'ASC')
            ->addOrderBy('groups.code', 'ASC')
            ->setFirstResult($firstResult)
            ->setMaxResults($maxResults)
        ;

        $filters = $request->getSession()->get(__METHOD__, new ParameterBag());
        if ($filters) {
            if ($filters->get('resource') !== null && $filters->get('resource') !== '') {
                $queryBuilder
                    ->andWhere('UPPER(resources.name) = :resource')
                    ->setParameter('resource', strtoupper($filters->get('resource')))
                ;
            }

            if ($filters->get('group') !== null && $filters->get('group') !== '') {
                $queryBuilder
                    ->andWhere('UPPER(groups.code) = :group')
                    ->setParameter('group', strtoupper($filters->get('group')))
                ;
            }

            if ($filters->get('user') !== null && $filters->get('user') !== '') {
                $queryBuilder
                    ->andWhere('UPPER(users.username) = :user')
                    ->setParameter('user', strtoupper($filters->get('user')))
                ;
            }
        }

        $paginator = new Paginator($queryBuilder->getQuery(), $page);

        return new Response($this->getView()->render('Admin::account-controls/index', [
            'paginator' => $paginator,
            'filters'   => $filters,
        ]));
    }
}
