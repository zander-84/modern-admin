<?php
/**
 * Created by PhpStorm.
 * User: marvin
 * Date: 2018/8/25
 * Time: 20:26
 */

namespace zander84\modernadmin\forms\rbac;
use Yii;
use zander84\modernadmin\forms\common\ActiveForm;
use zander84\modernadmin\models\Demo;
use zander84\modernadmin\models\rbac\RbacAuthItem;


class RbacForm extends ActiveForm
{

    public $name;
    public $description;
    public $ids;
    public $children;
    /**
     * {@inheritdoc}
     */

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name','description'], 'required', 'on'=>['addRule', 'updateRule','addMenu','updateMenu']],
            [['name','description'], 'string', 'max' => 60, 'on'=>['addRule', 'updateRule','addMenu','updateMenu', 'addRole', 'updateRole']],

            [['name'], 'validateUniqueRuleName', 'on' => ['addRule', 'updateRule']],
            [['name'], 'validateUniqueMenuName', 'on' => ['addMenu','updateMenu']],
            [['name'], 'validateUniqueRoleName', 'on' => ['addRole','updateRole']],

            [['ids'], 'required','on' => ['delRules','delRoles']],
            [['ids'], 'string','on' => ['delRules','delRoles']],

            [['children'], 'each', 'rule'=>['string'], 'on'=>['addMenu', 'updateMenu', 'addRole', 'updateRole']],
            [['children'], 'validateMenuChildren', 'on'=>['addMenu', 'updateMenu']],
            [['children'], 'validateRoleChildren', 'on'=>['addRole','updateRole']],

            [['name'], 'required', 'on'=>['addRole', 'updateRole']],


        ];
    }

    public function validateUniqueRoleName($attribute)
    {

        $count = RbacAuthItem::getCntsByName($this->$attribute,1);
        if($this->real_model){
            if($this->real_model->name != $this->name){
                if($count > 0){
                    $this->addError($attribute, 'All ready exist');
                }
            }
        }else{
            if($count > 0){
                $this->addError($attribute, 'All ready exist');
            }
        }

    }

    public function validateRoleChildren($attribute)
    {

        $count = count($this->$attribute);
        $countDB = RbacAuthItem::find()->andWhere(['in', 'name', $this->$attribute])->andWhere(['type'=>2])->count();
        if($count != $countDB){
            $this->addError($attribute, '子权限出错');
        }
    }

    public function validateMenuChildren($attribute)
    {
        foreach ($this->$attribute as $child){
            if(strpos($child, 'menu_') === 0  || strpos($child, '/') === false) {
                $this->addError($attribute, '子权限出错');
                return ;
            }
        }
        $count = count($this->$attribute);
        $countDB = RbacAuthItem::find()->where(['in', 'name', $this->$attribute])->count();
        if($count != $countDB){
            $this->addError($attribute, '子权限出错');
        }
    }


    public function validateUniqueRuleName($attribute)
    {
        if(strpos($this->$attribute, 'menu_') === 0){
            $this->addError($attribute, 'Can\'t start with menu_');
        }
        if(strpos($this->$attribute, '/') === false){
            $this->addError($attribute, 'Should like controller/action');
        }

        $count = RbacAuthItem::getCntsByName($this->$attribute,2);
        if($this->real_model){
            if($this->real_model->name != $this->name){
                if($count > 0){
                    $this->addError($attribute, 'All ready exist');
                }
            }
        }else{
            if($count > 0){
                $this->addError($attribute, 'All ready exist');
            }
        }

    }

    public function validateUniqueMenuName($attribute)
    {
        if(strpos($this->$attribute, 'menu_') !== 0){
            $this->addError($attribute, 'must start menu_');
        }

        if(strpos($this->$attribute, '/') !== false){
            $this->addError($attribute, 'can\'t with / ');
        }

        $count = RbacAuthItem::getCntsByName($this->$attribute,2);
        if($this->real_model){
            if($this->real_model->name != $this->name){
                if($count > 0){
                    $this->addError($attribute, 'All ready exist');
                }
            }
        }else{
            if($count > 0){
                $this->addError($attribute, 'All ready exist');
            }
        }

    }

    public function saveRole()
    {
        $auth = Yii::$app->authManager;
        $_POST['id'] = $this->name;

        if($this->real_model){
            $role = $this->real_model;
            $oldName = $role->name;
            $role->name = $this->name;
            $role->description = $this->description;
            if(!$auth->update($oldName, $role)){
                return false;
            }
        }else{
            if(!$auth->getRole($this->name)){
                $role = $auth->createRole($this->name);
                $role->description = $this->description;
                if(!$auth->add($role)){
                    return false;
                }
            }
        }

        $auth->removeChildren($role);
        if($this->children){
            foreach ($this->children as $child){
                if(!$auth->addChild($role, $auth->getPermission($child))){
                    return false;
                }
            }
        }

        return true;
    }

    public function saveMenu()
    {
        $auth = Yii::$app->authManager;
        $_POST['id'] = $this->name;

        if($this->real_model){
            $permission = $this->real_model;
            $oldName = $permission->name;
            $permission->name = $this->name;
            $permission->description = $this->description;
            if(!$auth->update($oldName, $permission)){
                return false;
            }
            if(!RbacAuthItem::removeChildren($permission)){
                return false;
            }

            if($this->children){
                foreach ($this->children as $child) {
                    if(!$auth->addChild($permission,$auth->getPermission($child))){
                        return false;
                    }
                }
            }
            return true;

            
        }else{
            $permission = $auth->createPermission($this->name);
            $permission->description = $this->description;
            if(!$auth->add($permission)){
                return false;
            }
            if($this->children){
                foreach ($this->children as $child) {
                    if(!$auth->addChild($permission,$auth->getPermission($child))){
                        return false;
                    }
                }
            }
            return true;
        }

    }

    public function saveRule()
    {
        $auth = Yii::$app->authManager;
        $_POST['id'] = $this->name;

        if($this->real_model){
            $permission = $this->real_model;
            $oldName = $permission->name;
            $permission->name = $this->name;
            $permission->description = $this->description;
            return $auth->update($oldName,$permission);
        }else{
            $permission = $auth->createPermission($this->name);
            $permission->description = $this->description;
            return $auth->add($permission);
        }

    }

    public function delRoles()
    {
        $ids = explode(',', $this->ids);

        foreach ($ids as $id){
            if($id){
                $this->delRole($id);
            }

        }
        return true;
    }

    public function delRole($name)
    {
        $auth = Yii::$app->authManager;
        $role = $auth->getRole($name);
        if(!$role){
            return false;
        }

        if(!RbacAuthItem::removeChildren($role)){
            return false;
        }

        return $auth->remove($role);
    }

    public function delMenu($name)
    {
        $auth = Yii::$app->authManager;
        $permission = $auth->getPermission($name);
        if(!$permission){
            return false;
        }

        $substr_count = substr_count((string)$name, '_'); //____ 一个的话是大菜单
        $query = RbacAuthItem::find();
        if($substr_count == 1){
            $query->where(['like', 'name' ,$name.'%', false ]);
        }
        else{
            $query->where(['name'=>$name]);
        }
        $children = $query->select('name')->asArray()->all();
        foreach ($children as $child){
            $permission = $auth->getPermission($child);
            if(!RbacAuthItem::removeChildren($permission)){
                return false;
            }
            if(!$auth->remove($permission)) {
                return false;
            }
        }

        return true;

    }

    public function delRule($name)
    {
        $auth = Yii::$app->authManager;
        $permission = $auth->getPermission($name);
        if($permission){
            return $auth->remove($permission);
        }else{
            return false;
        }

    }

    public function delRules()
    {

        $ids = explode(',', $this->ids);

        foreach ($ids as $id){
            if($id){
                $this->delRule($id);
            }

        }
        return true;
    }

    public function findMenu($name)
    {
        $auth = Yii::$app->authManager;
        $permission = $auth->getPermission($name);

        if($permission){
            $this->real_model = $permission;
            $this->description = $permission->description;
            $this->name = $permission->name;
            $this->children = RbacAuthItem::getMenuChildren($name);
        }
        return $this;
    }

    public function findRole($name)
    {
        $auth = Yii::$app->authManager;
        $role = $auth->getRole($name);

        if($role){
            $this->real_model = $role;
            $this->description = $role->description;
            $this->name = $role->name;
            $this->children = RbacAuthItem::roleMenu($name);
        }
        return $this;
    }


    public function findRule($name)
    {
        $auth = Yii::$app->authManager;
        $auth_item = $auth->getPermission($name);
        if($auth_item){
            $this->real_model = $auth_item;
            $this->description = $auth_item->description;
            $this->name = $auth_item->name;
        }
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        if(in_array($this->scenario,['addRule','updateRule','delRules'])){
            return [
                'name' => '权限路径',
                'description' => '权限名称',
            ];
        }elseif (in_array($this->scenario,['addMenu','updateMenu'])){
            return [
                'name' => '菜单ID',
                'description' => '菜单名称',
                'children' => '子权限',
            ];
        }elseif (in_array($this->scenario,['addRole','updateRole'])){
            return [
                'name' => '角色名称',
                'description' => '描述',
                'children' => '菜单',
            ];
        }


    }

}
