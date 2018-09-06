<?php
namespace zander84\modernadmin\compones;

use Yii;
use yii\base\Behavior;
use yii\base\Controller;

class RbacBehavior extends Behavior
{

    public $allowActions= [];
    public $userAllowActions= [];
    public $superAdminIDS= [];
    public $enabled = true;
    public $forbidden ;



    public function events()
    {
        return [
            Controller::EVENT_BEFORE_ACTION => 'rbacAction',
        ];
    }


    //_________________________________________________________________________________________
    public function rbacAction($event)
    {
        //return true;
        if(!$this->enabled){
            return true;
        }

        if(!$this->forbidden){
            echo 'need forbidden page';
            exit();
        }


        $action = $event->action;
        $rule = $action->getUniqueId();

        if($rule == trim($this->forbidden,'/')){
            return true;
        }
        //____ 白名单
        if($this->checkAllowActions($this->allowActions, $rule)){
            return true;
        }

        //____ for user
        if(Yii::$app->user->isGuest) {
            $event->isValid = false;
            return $action->controller->redirect('/'.trim($this->forbidden,'/'));
        }
        else{
            $user = Yii::$app->user->identity;

            if($this->checkAllowActions($this->userAllowActions, $rule)){
                return true;
            }

            //____ super admin
            if(in_array($user->getId(),$this->superAdminIDS)){
                return true;
            }

            //____ check role
            if(Yii::$app->user->can($rule)) {
                return true;
            }

            $event->isValid = false;
            return $action->controller->redirect('/'.trim($this->forbidden,'/'));
        }
    }

    protected function checkAllowActions($allowActions,$rule)
    {

        foreach($allowActions as $allow) {
            if(substr($allow, -1) == '*') {
                if(strpos($rule, rtrim($allow, '*')) === 0) {
                    return true;
                }
            }
            else {
                if($rule == $allow) {
                    return true;
                }
            }
        }
        return false;
    }

    public  function menu($items)
    {

        if(!$this->enabled){
            return $items;
        }


        $user = Yii::$app->user->identity;
        if(in_array(Yii::$app->user->identity->getId(), $this->superAdminIDS)){
            return $items;
        }

        $userAllowActions = $this->allowActions;
        $auth = Yii::$app->authManager;
        $role = $auth->getRolesByUser($user->getId());
        if($role){
            $role = (array_keys($role))[0];
            $permissons = $auth->getPermissionsByRole($role);

            $permissons  =  $permissons ? array_keys($permissons) : [];
            $userAllowActions = array_merge($userAllowActions, $permissons);


            $items = $this->filterMenu($items, $userAllowActions);
            return $items;
        }

       return [];
    }




    protected  function filterMenu($items, $allowActions)
    {
        foreach ($items as $kItem=>$item){

            if(isset($item['items'])){
                foreach ($item['items'] as $k=>$v){
                    $url = $v['url'][0];
                    if(!in_array(trim($url,'/'), $allowActions)){
                        unset($items[$kItem]['items'][$k]);
                    }
                }
                if(!$items[$kItem]['items']){
                    unset($items[$kItem]);
                }
            }
            else{
                $url = $item['url'][0];
                if(!in_array(trim($url,'/'), $allowActions)){
                    unset($items[$kItem]);
                }
            }
        }
        return $items;
    }



}
