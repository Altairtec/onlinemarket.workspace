<?php

return array(
    'controllers' => array(
        'invokables' => array(
        ),
        'factories' => array(
            'market-post-controller' => 'Market\Factory\PostControllerFactory',
            'market-index-controller' => 'Market\Factory\IndexControllerFactory',
            'market-view-controller' => 'Market\Factory\ViewControllerFactory',
        ),
        'aliases' => array(
            'index' => 'market-index-controller',
            'alt' => 'market-view-controller',
            'post' => 'market-post-controller',
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'market-post-form' => 'Market\Factory\PostFormFactory',
            'market-post-filter' => 'Market\Factory\PostFilterFactory',
            'general-adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
            'listings-table' => 'Market\Factory\ListingsTableFactory',
        ),
        'services' => array(
            'date_expires' => array(
                '2015-04-22',
                '2015-05-22',
                '2015-06-22',
            ),
            'market-expire-days' => array(
                '1' => '1 day',
                '5' => '5 days',
                '10' => '10 days',
                '20' => '20 days',
            ),
             'market-captcha-options' => array(
                'titmeout' => 300 ,
                'height' => '40',
                'imgDir'    => __DIR__ . '/../../../public/img/captcha',
                'imgUrl'    => '/img/captcha',
                'font' => __DIR__ . '/../../../public/fonts/AliquamREG.ttf' ,
            )
            /*
            'market-captcha-options' => array(
                'font' => __DIR__ . '/../../../data/fonts/arial.ttf',
                'imgDir' => __DIR__ . '/../../../public/captcha',
                'imgUrl' => '/captcha',
                'fontSize' => 50,
                'height' => 100,
                'width' => 200,
                'dotNoiseLevel' => 40,
                'lineNoiseLevel' => 6
            ),
            */
        ),
    ),
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/',
                    'defaults' => array(
                        'controller' => 'market-index-controller',
                        'action' => 'index'
                    ),
                ),
            ),
            'market' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/market[/]',
                    'defaults' => array(
                        'controller' => 'market-index-controller',
                        'action' => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'view' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => 'view[/]',
                            'defaults' => array(
                                'controller' => 'market-view-controller',
                                'action' => 'index',
                            ),
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            'main' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => 'main[/:category]',
                                    'defaults' => array(
                                        'action' => 'index',
                                    ),
                                ),
                            ),
                            'item' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => 'item[/:itemId]',
                                    'defaults' => array(
                                        'action' => 'item'
                                    ),
                                    'constraints' => array(
                                        'itemId' => '[0-9]*'
                                    ),
                                ),
                            ),
                        ),
                    ),
                    'post' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => 'post[/]',
                            'defaults' => array(
                                'controller' => 'market-post-controller',
                                'action' => 'index'
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
