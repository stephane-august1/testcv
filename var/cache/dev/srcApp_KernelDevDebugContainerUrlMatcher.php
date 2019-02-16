<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/' => array(array(array('_route' => 'home', '_controller' => 'App\\Controller\\CvController::home'), null, null, null, false, false, null)),
            '/base' => array(array(array('_route' => 'base', '_controller' => 'App\\Controller\\CvController::base'), null, null, null, false, false, null)),
            '/news' => array(array(array('_route' => 'news', '_controller' => 'App\\Controller\\NewsController::news'), null, null, null, false, false, null)),
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, false, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/news/([^/]++)(*:21)'
                    .'|/show/([^/]++)(*:42)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:80)'
                        .'|wdt/([^/]++)(*:99)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:144)'
                                .'|router(*:158)'
                                .'|exception(?'
                                    .'|(*:178)'
                                    .'|\\.css(*:191)'
                                .')'
                            .')'
                            .'|(*:201)'
                        .')'
                    .')'
                    .'|/(en|fr)(?'
                        .'|(*:222)'
                        .'|/(?'
                            .'|article(*:241)'
                            .'|meteo(*:254)'
                        .')'
                    .')'
                .')/?$}sDu',
        );
        $this->dynamicRoutes = array(
            21 => array(array(array('_route' => 'blog_edit', '_controller' => 'App\\Controller\\NewsController::news'), array('id'), null, null, false, true, null)),
            42 => array(array(array('_route' => 'show', '_controller' => 'App\\Controller\\NewsController::show'), array('id'), null, null, false, true, null)),
            80 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, true, null)),
            99 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, true, null)),
            144 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, false, null)),
            158 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, false, null)),
            178 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, false, null)),
            191 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, false, null)),
            201 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, true, null)),
            222 => array(array(array('_route' => 'index', '_locale' => 'en', '_controller' => 'App\\Controller\\CvController::home'), array('_locale'), null, null, true, true, null)),
            241 => array(array(array('_route' => 'article', '_locale' => 'en', '_controller' => 'App\\Controller\\NewsController::article'), array('_locale'), null, null, false, false, null)),
            254 => array(array(array('_route' => 'meteo', '_locale' => 'en', '_controller' => 'App\\Controller\\AppMeteoController::meteo'), array('_locale'), null, null, false, false, null)),
        );
    }
}
