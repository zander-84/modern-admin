<?php
/**
 * Created by PhpStorm.
 * User: marvin
 * Date: 2018/8/25
 * Time: 20:26
 */

namespace zander84\modernadmin\forms\rbac;
use Yii;
use yii\base\Model;
use zander84\modernadmin\models\Demo;
use zander84\modernadmin\models\rbac\RbacAuthItem;

class RbacSearchForm extends Model
{


    public $name;
    public $description;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name','description'], 'string', 'max' => 60,'on' => 'rule'],
            [['name','description'], 'string', 'max' => 60,'on' => 'menu'],
            [['name','description'], 'string', 'max' => 60,'on' => 'role'],
        ];
    }


    public function queryRule()
    {
       return RbacAuthItem::find()
           ->andWhere(['=', 'type', 2])
           ->andWhere(['not like', 'name', 'menu_%', false])
           ->andFilterWhere(['like','description',$this->description])
           ->andFilterWhere(['like','name',$this->name])
           ->addOrderBy('description asc');
    }

    public function queryMenu()
    {
        return RbacAuthItem::find()
            ->andWhere(['=', 'type', 2])
            ->andWhere(['like', 'name', 'menu_%', false])
            ->andFilterWhere(['like','description',$this->description])
            ->orderBy('name asc');
    }

    public function queryRole()
    {
        return RbacAuthItem::find()
            ->andWhere(['=', 'type', 1])
            ->andFilterWhere(['like','name',$this->name])
            ->orderBy('name asc');
    }

    public function attributeLabels()
    {
        if(in_array($this->scenario,['rule'])){
            return [
                'name' => '权限路径',
                'description' => '权限名称',
            ];
        }elseif (in_array($this->scenario,['menu'])){
            return [
                'name' => '菜单ID',
                'description' => '菜单名称',
            ];
        }elseif (in_array($this->scenario,['role'])){
            return [
                'name' => '角色名',
                'description' => '描述',
            ];
        }



    }

}
