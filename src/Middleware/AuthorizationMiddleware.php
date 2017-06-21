<?php

namespace App\Middleware;

use Cake\Network\Session;
use Cake\Core\Configure;
use Zend\Diactoros\Response\RedirectResponse;

class AuthorizationMiddleware
{
//    public function __invoke($request, $response, $next)
//    {
//        // TODO: Implement __invoke() method.
//        $session = Session::create(Configure::read('Session'));
//        $checkHasUserSession = $session->check('user');
//        $path = $request->getUri()->getPath();
//        if ($path === '/admin/*' && !$checkHasUserSession) {
//            return new RedirectResponse('login');
//        }
//        return $next($request, $response);
//    }
}