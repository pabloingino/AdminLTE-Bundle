<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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

        if (0 === strpos($pathinfo, '/mibundle')) {
            // mi_homepage
            if ($pathinfo === '/mibundle') {
                return array (  '_controller' => 'MiBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mi_homepage',);
            }

            // tempOriginal
            if ($pathinfo === '/mibundle/original') {
                return array (  '_controller' => 'MiBundle\\Controller\\DefaultController::originalAction',  '_route' => 'tempOriginal',);
            }

        }

        // pruebas_index
        if (0 === strpos($pathinfo, '/pruebas') && preg_match('#^/pruebas/(?P<name>[a-zA-Z]*)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_pruebas_index;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pruebas_index')), array (  '_controller' => 'AppBundle\\Controller\\PruebasController::indexAction',  'page' => 1,));
        }
        not_pruebas_index:

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
