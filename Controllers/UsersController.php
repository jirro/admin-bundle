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
use Jirro\Bundle\AccountBundle\Domain\User;

class UsersController extends StandardController
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
            ->select('users')
            ->from('Jirro\Bundle\AccountBundle\Domain\User', 'users')
            ->setFirstResult($firstResult)
            ->setMaxResults($maxResults)
        ;

        $filters = $request->getSession()->get(__METHOD__, new ParameterBag());
        if ($filters) {
            if ($filters->get('username') !== null && $filters->get('username') !== '') {
                $queryBuilder
                    ->andWhere('UPPER(users.username) = :username')
                    ->setParameter('username', strtoupper($filters->get('username')))
                ;
            }

            if ($filters->get('email') !== null && $filters->get('email') !== '') {
                $queryBuilder
                    ->andWhere('UPPER(users.email) = :email')
                    ->setParameter('email', strtoupper($filters->get('email')))
                ;
            }

            if ($filters->get('name') !== null && $filters->get('name') !== '') {
                $queryBuilder
                    ->andWhere('(
                        UPPER(users.firstName) = :name
                        OR UPPER(users.middleName) = :name
                        OR UPPER(users.lastName) = :name
                    )')
                    ->setParameter('name', strtoupper($filters->get('name')))
                ;
            }

            if ($filters->get('state') !== null && $filters->get('state') !== '') {
                $queryBuilder
                    ->andWhere('UPPER(users.state) = :state')
                    ->setParameter('state', $filters->get('state'))
                ;
            }
        }

        $paginator = new Paginator($queryBuilder->getQuery(), $page);

        return new Response($this->getView()->render('Admin::users/index', [
            'paginator' => $paginator,
            'filters'   => $filters,
            'states'    => User::getStates(),
        ]));
    }
}
