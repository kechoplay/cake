<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;


Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    $routes->connect('/', ['controller' => 'Home', 'action' => 'index', 'home']);
    $routes->connect('/login', ['controller' => 'Users', 'action' => 'login']);
//    $routes->connect('/admin', ['controller' => 'Users', 'action' => 'login']);

    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    $routes->fallbacks(DashedRoute::class);

});

Router::prefix('admin', function ($routes) {
    $routes->connect('/', ['controller' => 'Users', 'action' => 'index']);
//    $routes->connect('/users/add', ['controller' => 'Users', 'action' => 'add']);
//    $routes->connect('/users', ['controller' => 'Users', 'action' => 'index']);
//    $routes->connect('/categories', ['controller' => 'Categories', 'action' => 'index']);
//    $routes->connect('/categories/add', ['controller' => 'Categories', 'action' => 'add']);
//    $routes->connect('/articles', ['controller' => 'Articles', 'action' => 'view']);
//    $routes->connect('/articles/add', ['controller' => 'Articles', 'action' => 'add']);


    $routes->fallbacks(DashedRoute::class);
});

Router::scope('/bookmarks', ['controller' => 'Bookmarks'], function ($router) {
    $router->connect('/tagged/*', ['action' => 'tags']);
});


Plugin::routes();
