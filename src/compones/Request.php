<?php
/**
 * Created by PhpStorm.
 * User: M
 * Date: 2017/9/14
 * Time: 下午9:06
 */

namespace zander84\modernadmin\compones;
use Yii;

class Request extends \yii\web\Request
{
    public $action_key = '_action';

    public $action_new = 'new';
    public $action_update= 'update';
    public $action_find = 'find';
    public $action_delete = 'delete';
    public $action_before_modal = 'action_before_modal';
    public $action_modal = 'action_modal';


    public function getIsNew()
    {
        if($this->isPost  && $this->isAjax && ($this->post($this->action_key) == $this->action_new)) {
            return true;
        }else{
            return false;
        }
    }


    public function getIsDel()
    {
        if($this->isPost  && $this->isAjax && ($this->post($this->action_key) == $this->action_delete)) {
            return true;
        }else{
            return false;
        }
    }

    public function getIsBeforeModal()
    {
        if($this->isPost  && $this->isAjax && ($this->post($this->action_key) == $this->action_before_modal)) {
            return true;
        }else{
            return false;
        }
    }

    public function getIsModal()
    {
        if($this->isPost  && $this->isAjax && ($this->post($this->action_key) == $this->action_modal)) {
            return true;
        }else{
            return false;
        }
    }

    public function getIsFind()
    {
        if($this->isPost  && $this->isAjax && ($this->post($this->action_key) == $this->action_find)) {
            return true;
        }else{
            return false;
        }
    }

    public function getIsUpdate()
    {
        if($this->isPost  && $this->isAjax && ($this->post($this->action_key) == $this->action_update)) {
            return true;
        }else{
            return false;
        }
    }

    public function getMyurl()
    {
        return  $this->resolveRequestUri();
    }

    public function setActionUpdate()
    {
        $_POST[$this->action_key] = $this->action_update;
    }

    public function setActionNew()
    {
        $_POST[$this->action_key] = $this->action_new;
    }

    public function setActionModal()
    {
        $_POST[$this->action_key] = $this->action_modal;
    }
}