<?php
namespace frontend\modules\news;
use Yii;
use frontend\components\AppModule;
class Module extends AppModule
{
    public $controllerNamespace = 'frontend\modules\news\controllers';
    public function init()
    {
        parent::init();
        // custom initialization code goes here
        //  Yii::$app->errorHandler->errorAction = 'site/default/error';
    }
}