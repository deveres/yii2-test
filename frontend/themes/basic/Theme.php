<?php

namespace frontend\themes\basic;

use Yii;

class Theme extends \yii\base\Theme
{
    /**
     * @inheritdoc
     */
   public $pathMap = [
        
        '@app/modules' => [
            '@app/themes/basic/modules',
          
        ],
        
    ];
    
 
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        /*
        Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapAsset'] = [
            'sourcePath' => '@alias/themes/site/assets',
            'css' => [
                'css/bootstrap.min.css'
            ]
        ];
        Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapPluginAsset'] = [
            'sourcePath' => 'alias/themes/site/assets',
            'js' => [
                'js/bootstrap.min.js'
            ]
        ];
        */
    }
} 
