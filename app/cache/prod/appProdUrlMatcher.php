<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // album
        if (0 === strpos($pathinfo, '/album') && preg_match('#^/album/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'album')), array (  '_controller' => 'Acme\\MyBundle\\Controller\\AlbumController::indexAction',));
        }

        // builder
        if (0 === strpos($pathinfo, '/builder') && preg_match('#^/builder/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'builder')), array (  '_controller' => 'Acme\\MyBundle\\Controller\\BuilderController::indexAction',));
        }

        // home
        if (rtrim($pathinfo, '/') === '/home') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'Acme\\MyBundle\\Controller\\HomeController::indexAction',  '_route' => 'home',);
        }

        if (0 === strpos($pathinfo, '/m')) {
            // manage
            if (0 === strpos($pathinfo, '/manage') && preg_match('#^/manage/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'manage')), array (  '_controller' => 'Acme\\MyBundle\\Controller\\ManageController::indexAction',));
            }

            // model
            if (0 === strpos($pathinfo, '/model') && preg_match('#^/model/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'model')), array (  '_controller' => 'Acme\\MyBundle\\Controller\\ModelController::indexAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'Acme\\MyBundle\\Controller\\HomeController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
