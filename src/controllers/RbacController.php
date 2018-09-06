<?php

namespace zander84\modernadmin\controllers;

use app\models\web\form\TestForm;
use Yii;
use zander84\modernadmin\controllers\common\ModernController;
use zander84\modernadmin\forms\rbac\RbacForm;
use zander84\modernadmin\forms\rbac\RbacSearchForm;
use zander84\modernadmin\helpers\Animation;
use zander84\modernadmin\widgets\ModernActiveDataProvider;

class RbacController extends ModernController
{


    public function actionRule()
    {

        $request = Yii::$app->request;

        $form = new RbacForm();
        $form->scenario = 'addRule';
        $search = new RbacSearchForm();
        $search->scenario = 'rule';

        $search->load($request->get());
        $query = $search->queryRule();

        if ($request->isFind){
            $form->scenario = 'updateRule';
            //____ 查找
            $form->findRule($request->post('id'));
            //____ 设置更新行为
            $request->setActionUpdate();

        } elseif ($request->isUpdate){
            $form->scenario = 'updateRule';
            $form->findRule($request->post('id'));

            if($form->validload($request->post(),true)){
                $this->setflash($form->doTransaction('saveRule'));

                //____ 初始化form
                $form = new RbacForm();
                $form->scenario = 'addRule';
                //____ 设置添加行为
                $request->setActionNew();
            }
        }elseif($request->isNew){
            //____ 保存数据
            if($form->validload($request->post())){
                $this->setflash($form->doTransaction('saveRule'));

                //____ 初始化form 跟 search
                $form = new RbacForm();
                $form->scenario = 'addRule';
                $search = new RbacSearchForm();
                $search->scenario = 'rule';
                $query = $search->queryRule();
            }

        }
        elseif ($request->isDel){
            $this->setflash($form->delRule($request->post('id')));
            $request->setActionNew();
        }
        elseif ($request->isBeforeModal){
            $del_form = new RbacForm();
            $del_form->scenario = 'delRules';
            $del_form->ids = $request->post('ids');
            $request->setActionModal();
            return $this->renderMyAjax('@modern-views/rbac/rule/deletes',['del_form'=>$del_form]);
        }
        elseif ($request->isModal){
            $del_form = new RbacForm();
            $del_form->scenario = 'delRules';
            if($del_form->load($request->post()) && $del_form->validate()){
                $del_form->delRules();
                 Animation::modalSwalWithPjax('pjax','success');
            }
            return $this->renderMyAjax('@modern-views/rbac/rule/deletes',['del_form'=>$del_form]);
        }

        $dataProvider = new ModernActiveDataProvider(['query'=>$query,'pagination'=>false],false);
        return $this->render('@modern-views/rbac/rule/index',['form'=>$form, 'search'=>$search, 'dataProvider'=>$dataProvider]);
    }


    public function actionMenu()
    {

        $request = Yii::$app->request;

        $form = new RbacForm();
        $form->scenario = 'addMenu';
        $search = new RbacSearchForm();
        $search->scenario = 'menu';
        $search->load($request->get());
        $query = $search->queryMenu();

        if ($request->isFind){
            $form->scenario = 'updateMenu';
            //____ 查找
            $form->findMenu($request->post('id'));
            //____ 设置更新行为
            $request->setActionUpdate();

        } elseif ($request->isUpdate){
            $form->scenario = 'updateMenu';
            $form->findMenu($request->post('id'));

            if($form->validload($request->post(),true)){
                $this->setflash($form->doTransaction('saveMenu'));

                //____ 初始化form
                $form = new RbacForm();
                $form->scenario = 'addMenu';
                //____ 设置添加行为
                $request->setActionNew();
            }
        }elseif($request->isNew){
            //____ 保存数据
            if($form->validload($request->post())){
                $this->setflash($form->doTransaction('saveMenu'));

                //____ 初始化form 跟 search
                $form = new RbacForm();
                $form->scenario = 'addMenu';
                $search = new RbacSearchForm();
                $search->scenario = 'menu';
                $query = $search->queryMenu();
            }
        }
        elseif ($request->isDel){
            $this->setflash($form->delMenu($request->post('id')));
            $request->setActionNew();
        }



        $dataProvider = new ModernActiveDataProvider(['query'=>$query,'pagination'=>false],false);
        return $this->render('@modern-views/rbac/menu/index',['form'=>$form, 'search'=>$search, 'dataProvider'=>$dataProvider]);
    }


    public function actionRole()
    {

        $request = Yii::$app->request;

        $form = new RbacForm();
        $form->scenario = 'addRole';
        $search = new RbacSearchForm();
        $search->scenario = 'role';
        $search->load($request->get());
        $query = $search->queryRole();

        if ($request->isFind){
            $form->scenario = 'updateRole';
            //____ 查找
            $form->findRole($request->post('id'));
            //____ 设置更新行为
            $request->setActionUpdate();

        } elseif ($request->isUpdate){
            $form->scenario = 'updateRole';
            $form->findRole($request->post('id'));

            if($form->validload($request->post(),true)){
                $this->setflash($form->doTransaction('saveRole'));

                //____ 初始化form
                $form = new RbacForm();
                $form->scenario = 'addRole';
                //____ 设置添加行为
                $request->setActionNew();
            }
        }elseif($request->isNew){
            //____ 保存数据
            if($form->validload($request->post())){
                $this->setflash($form->doTransaction('saveRole'));

                //____ 初始化form 跟 search
                $form = new RbacForm();
                $form->scenario = 'addRole';
                $search = new RbacSearchForm();
                $search->scenario = 'role';
                $query = $search->queryRole();
            }
        }
        elseif ($request->isDel){
            $this->setflash($form->delRole($request->post('id')));
            $request->setActionNew();
        }
        elseif ($request->isBeforeModal){
            $del_form = new RbacForm();
            $del_form->scenario = 'delRoles';
            $del_form->ids = $request->post('ids');
            $request->setActionModal();
            return $this->renderMyAjax('@modern-views/rbac/role/deletes',['del_form'=>$del_form]);
        }
        elseif ($request->isModal){
            $del_form = new RbacForm();
            $del_form->scenario = 'delRoles';
            if($del_form->load($request->post()) && $del_form->validate()){
                $del_form->delRoles();
                Animation::modalSwalWithPjax('pjax','success');
            }
            return $this->renderMyAjax('@modern-views/rbac/role/deletes',['del_form'=>$del_form]);
        }

        $dataProvider = new ModernActiveDataProvider(['query'=>$query,'pagination'=>false],false);
        return $this->render('@modern-views/rbac/role/index',['form'=>$form, 'search'=>$search, 'dataProvider'=>$dataProvider]);
    }

}
