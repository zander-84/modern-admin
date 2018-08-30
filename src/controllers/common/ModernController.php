<?php

namespace zander84\modernadmin\controllers\common;

use Yii;

use yii\web\Controller;


class ModernController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex($id='index')
    {

        $this->layout = '@modern-layouts/main';
        return $this->render('@modern-sites/' . $id);
    }





    public function setflash($boolean, $message = null)
    {
        $session = Yii::$app->getSession();
        if($boolean){
            $message = $message ? $message : 'success';
            $session->setFlash('success', $message);
        }
        else{
            $message = $message ? $message : 'failure';
            $session->setFlash('error',$message);
        }
    }
    
}
