<?php

return array(
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view'
        )
    ),
    'router' => array(
        'routes' => array(
            'sayhello' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/sayhello',
                    'defaults' => array(
                        'controller' => 'Helloworld\Controller\Index',
                        'action' => 'index',
                    )
                )
            )
        )
    ),
    'service_manager' => array(
        'invokables' => array(
            'greetingService' => 'Helloworld\Service\GreetingService'
        )
    ),
    'controllers' => array(
        'factories' => array(
            'Helloworld\Controller\Index' => 'Helloworld\Controller\IndexControllerFactory'
        )
    )
);