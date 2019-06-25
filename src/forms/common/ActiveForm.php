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
    public $top_errors;

    //异常存在于数据库down或者事务没有激活，不使用savepoint事务
    //______________________________________________________________________
    public static function transaction(\Closure $callback, $attempts = 1)
    {
        $startTime = microtime(true);
        $res = self::__transaction($callback, $attempts);


        if(isset(Yii::$app->params['log']['record_mysql_transaction']) && Yii::$app->params['log']['record_mysql_transaction']){
            $endTime = microtime(true);
            Yii::info($endTime-$startTime, 'transaction');
        }

        return$res;
    }



    private static function  __transaction(\Closure $callback, $attempts = 1)
    {
        for ($currentAttempt = 1; $currentAttempt <= $attempts; $currentAttempt++) {

            try{
                $transaction = Yii::$app->db->beginTransaction();
            } catch (\Throwable $e) {
                Yii::$app->db->close();
                if($currentAttempt >= $attempts){
                    Yii::error('beginTransaction 失败', 'transaction');
                    return false;
                }else{
                    continue;
                }
            }

            $boolean = $callback();

            if ($boolean) {
                try {
                    $transaction->commit();
                    return true;
                }
                catch (\Throwable $e) {
                    Yii::$app->db->close();
                    if($currentAttempt >= $attempts){
                        Yii::error('commit 失败', 'transaction');
                        return false;
                    }else{
                        continue;
                    }
                }
            } else {
                try {
                    $transaction->rollBack();
                } catch (\Throwable $e) {
                    Yii::$app->db->close();
                    Yii::error('rollBack 失败', 'transaction');
                }

                return false;
            }
        }
    }


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
