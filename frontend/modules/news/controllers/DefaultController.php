<?php
namespace frontend\modules\news\controllers;
use Yii;
use yii\filters\AccessControl;
use frontend\components\AppController;

/**
 * Site controller
 */
class DefaultController extends AppController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'view'],
                        'allow' => true,
                        'roles' => ['?'],
                    ]
                    
                ],
            ]
        ];
    }
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ]
            
        ];
    }
   
     /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
      return $this->render('index', ['message' => "ураааааа"]);
        
    }
    
         /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionView()
    {
        return $this->render('view');
    }
}