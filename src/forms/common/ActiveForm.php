<?php
/**
 * Created by PhpStorm.
 * User: marvin
 * Date: 2018/8/25
 * Time: 20:26
 */

namespace zander84\modernadmin\forms\common;
use Yii;
use yii\base\Model;

class ActiveForm extends Model
{

    public $real_model;

    public function doTransaction($callback, $params = [])
    {
        $transaction = Yii::$app->db->beginTransaction();
        $boolean = call_user_func([$this, $callback], $params);

        if($boolean){
            try {
                $transaction->commit();
                return true;
            }catch (\Exception $e){
                Yii::error('commit error');
                return false;
            }

        }
        else{
            try {
                $transaction->rollBack();
            }catch (\Exception $e){
                Yii::error('rollBack error');
            }
            return false;
        }
    }


    public function validload ($data, $is_update = false, $message = null)
    {
        $session = Yii::$app->getSession();

        if($this->load($data) && $this->validate()){
            if($is_update && !$this->real_model){
                $message = $message ? $message : 'find error';
                $session->setFlash('error',$message);
                return false;
            }
            else{
                return true;
            }
        }
        else{
            $session->setFlash('error','data error');
            return false;
        }
    }


    public function lastPage($class,$pagesize = 10)
    {
        return ceil($class::find()->count()/$pagesize);
    }
}
