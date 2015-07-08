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

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'Alterd\\Controller\\CharacterSheetController::indexAction',  '_route' => 'index',);
        }

        if (0 === strpos($pathinfo, '/sheet')) {
            // list_sheet
            if ($pathinfo === '/sheet/list') {
                return array (  '_controller' => 'Alterd\\Controller\\CharacterSheetController::fetchAllAction',  '_route' => 'list_sheet',);
            }

            // update_sheet
            if ($pathinfo === '/sheet/update') {
                return array (  '_controller' => 'Alterd\\Controller\\CharacterSheetController::updateAction',  '_route' => 'update_sheet',);
            }

            // generate_sheet
            if ($pathinfo === '/sheet/generate') {
                return array (  '_controller' => 'Alterd\\Controller\\CharacterSheetController::generateAction',  '_route' => 'generate_sheet',);
            }

            // view_sheet
            if ($pathinfo === '/sheet/view') {
                return array (  '_controller' => 'Alterd\\Controller\\CharacterSheetController::viewAction',  '_route' => 'view_sheet',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
