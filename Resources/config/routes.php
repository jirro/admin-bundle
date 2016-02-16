<?php

/*
 * This file is part of the Jirro package.
 *
 * (c) Rendy Eko Prastiyo <rendyekoprastiyo@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    // home
    [
        'path'      => '/admin',
        'method'    => 'GET',
        'target'    => 'Jirro\Bundle\AdminBundle\Controllers\DashboardController::indexAction',
    ],

    // dashboard
    [
        'path'      => '/admin/dashboard',
        'method'    => 'GET',
        'target'    => 'Jirro\Bundle\AdminBundle\Controllers\DashboardController::indexAction',
    ],

    // users
    [
        'path'      => '/admin/users',
        'method'    => 'GET',
        'target'    => 'Jirro\Bundle\AdminBundle\Controllers\UsersController::indexAction',
    ],
    [
        'path'      => '/admin/users',
        'method'    => 'POST',
        'target'    => 'Jirro\Bundle\AdminBundle\Controllers\UsersController::indexAction',
    ],

    // groups
    [
        'path'      => '/admin/groups',
        'method'    => 'GET',
        'target'    => 'Jirro\Bundle\AdminBundle\Controllers\GroupsController::indexAction',
    ],
    [
        'path'      => '/admin/groups',
        'method'    => 'POST',
        'target'    => 'Jirro\Bundle\AdminBundle\Controllers\GroupsController::indexAction',
    ],
    [
        'path'      => '/admin/groups/add',
        'method'    => 'GET',
        'target'    => 'Jirro\Bundle\AdminBundle\Controllers\GroupsController::addAction',
    ],
    [
        'path'      => '/admin/groups/add',
        'method'    => 'POST',
        'target'    => 'Jirro\Bundle\AdminBundle\Controllers\GroupsController::addAction',
    ],

    // resources
    [
        'path'      => '/admin/resources',
        'method'    => 'GET',
        'target'    => 'Jirro\Bundle\AdminBundle\Controllers\ResourcesController::indexAction',
    ],
    [
        'path'      => '/admin/resources',
        'method'    => 'POST',
        'target'    => 'Jirro\Bundle\AdminBundle\Controllers\ResourcesController::indexAction',
    ],

    // account controls
    [
        'path'      => '/admin/account-controls',
        'method'    => 'GET',
        'target'    => 'Jirro\Bundle\AdminBundle\Controllers\AccountControlsController::indexAction',
    ],
    [
        'path'      => '/admin/account-controls',
        'method'    => 'POST',
        'target'    => 'Jirro\Bundle\AdminBundle\Controllers\AccountControlsController::indexAction',
    ],
];
