<?php
namespace zander84\modernadmin\widgets\form;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use zander84\modernadmin\helpers\HtmlHelper;
use zander84\modernadmin\widgets\ModernCard;
use zander84\modernadmin\widgets\ModernLayout;

class ModernSmallForm extends ModernActiveForm
{

    public $form;
    public $identities = [];




    public function beforeRun ()
    {
        echo $this->fieldAction();
        if($this->identities){
            foreach ($this->identities as $k=>$v){
                echo  Html::hiddenInput($k, Yii::$app->request->post($v));
            }
        }
        return parent::beforeRun(); // TODO: Change the autogenerated stub
    }

    public function fieldAction()
    {
        $request = Yii::$app->request;
        $key = $request->action_key;
        $new = $request->action_new;
        $update = $request->action_update;
        $behavior = isset($_POST[$key]) && $_POST[$key] ? $_POST[$key] : $new;

        if($behavior == $new ){
            $id = $this->id;
            $action = $this->action;
            if($action && strpos($action,'?')){
                $action = strstr($action,'?', true);
            }

            Yii::$app->view->registerJs('
                $("#'.$id.'").attr("action", "'.$action.'")
            ');
        }

        return Html::hiddenInput($key, $behavior);
    }



    public function fieldHidden($name, $val=false)
    {
        return Html::hiddenInput($name, $val);
    }


}