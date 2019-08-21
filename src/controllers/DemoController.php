<?php

namespace zander84\modernadmin\controllers;

use app\models\web\form\TestForm;
use Yii;
use zander84\modernadmin\controllers\common\ModernController;
use zander84\modernadmin\forms\DemoSearchForm;
use zander84\modernadmin\helpers\Animation;
use zander84\modernadmin\models\Demo;
use zander84\modernadmin\forms\DemoForm;
use zander84\modernadmin\widgets\ModernActiveDataProvider;

class DemoController extends ModernController
{


    public function actionList()
    {

        $this->layout = '@modern-layouts/demo';
        $request = Yii::$app->request;
 
        $form = new DemoForm();
        $search = new DemoSearchForm();
        $search->load($request->get());
        $query = $search->query();

        if ($request->isFind){
            //____ 查找
            $form->findOne(['id'=>$request->post('id')]);
            //____ 设置更新行为
            $request->setActionUpdate();

        } elseif($request->isNew){
            //____ 保存数据
            if($form->validload($request->post())){
                $this->setflash($form->doTransaction('saveDemo'));

                //____ 初始化form 跟 search
                $form = new DemoForm();
                $search = new DemoSearchForm();
                $query = $search->query();
            }

        }elseif ($request->isUpdate){
            $form->findOne(['id'=>$request->post('id')]);

            if($form->validload($request->post(),true)){
                $this->setflash($form->doTransaction('saveDemo'));

                //____ 初始化form
                $form = new DemoForm();
                //____ 设置添加行为
                $request->setActionNew();
            }
        }elseif ($request->isDel){
            $this->setflash($form->delByID($request->post('id')));
            $request->setActionNew();
        }elseif ($request->isBeforeModal){
            $del_form = new DemoForm();
            $del_form->ids = $request->post('ids');
            $request->setActionModal();
            return $this->renderAjax('@modern-demo/test/deletes',['del_form'=>$del_form]);
        }elseif ($request->isModal){
            $del_form = new DemoForm();
            if($del_form->load(Yii::$app->request->post()) && $del_form->validate()){
                 Animation::modalSwalWithPjax('pjax','success');
            }
            return $this->renderAjax('@modern-demo/test/deletes',['del_form'=>$del_form]);
        }

        $dataProvider = new ModernActiveDataProvider($query);
        return $this->render('@modern-demo/list',['form'=>$form, 'search'=>$search, 'dataProvider'=>$dataProvider]);
    }


}
