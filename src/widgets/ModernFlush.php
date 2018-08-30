<?php

namespace zander84\modernadmin\widgets;

use  yii\base\Widget;


class ModernFlush extends Widget {


    public $alertTypes = [
        'error'   => 'error',
        'danger'  => 'error',
        'success' => 'success',
        'info'    => 'info',
        'warning' => 'warning'
    ];

    public $options = [
        'progressBar' => true,
        'closeButton' => false,
        'positionClass'=> 'toast-top-right',
        'timeOut'=> 2000,
    ];


    public function init()
    {
        parent::init();
        $session = \Yii::$app->getSession();
        $flashes = $session->getAllFlashes();
        foreach ($flashes as $type => $data) {
            if (isset($this->alertTypes[$type])) {
                $data = (array) $data;
                foreach ($data as $message) {
                    $this->toastr($type, $message, $type, $this->options);
                }
                $session->removeFlash($type);
            }
        }
    }


    protected function toastr($toastType, $message, $title, $jsonOptions = [])
    {
        $view = $this->getView();

        $jsonOptions = json_encode($jsonOptions);

        switch($toastType){
            case 'error':
                $js = "toastr.error('".$message."', '".$title."', ".$jsonOptions.")";
                break;
            case 'warning':
                $js = "toastr.warning('".$message."', '".$title."', ".$jsonOptions.")";
                break;
            case 'info':
                $js = "toastr.info('".$message."', '".$title."', ".$jsonOptions.")";
                break;
            case 'success':
                $js = "toastr.success('".$message."', '".$title."', ".$jsonOptions.")";
                break;
        }

        if(isset($js)){
            $view->registerJs($js);
        }
        
    }
}