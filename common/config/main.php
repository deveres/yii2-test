<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
		'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'cache' => 'cache', //�������� ����������� 
			 'defaultRoles' => ['user','moder','admin']
        ],
        
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
