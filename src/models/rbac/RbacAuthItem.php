<?php

namespace zander84\modernadmin\models\rbac;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "rbac_auth_item".
 *
 * @property string $name
 * @property int $type
 * @property string $description
 * @property string $rule_name
 * @property resource $data
 * @property int $created_at
 * @property int $updated_at
 *
 * @property RbacAuthAssignment[] $rbacAuthAssignments
 * @property RbacAuthRule $ruleName
 * @property RbacAuthItemChild[] $rbacAuthItemChildren
 * @property RbacAuthItemChild[] $rbacAuthItemChildren0
 * @property RbacAuthItem[] $children
 * @property RbacAuthItem[] $parents
 */
class RbacAuthItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rbac_auth_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'type'], 'required'],
            [['type', 'created_at', 'updated_at'], 'integer'],
            [['description', 'data'], 'string'],
            [['name', 'rule_name'], 'string', 'max' => 64],
            [['name'], 'unique'],
            [['rule_name'], 'exist', 'skipOnError' => true, 'targetClass' => RbacAuthRule::className(), 'targetAttribute' => ['rule_name' => 'name']],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRbacAuthAssignments()
    {
        return $this->hasMany(RbacAuthAssignment::className(), ['item_name' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRuleName()
    {
        return $this->hasOne(RbacAuthRule::className(), ['name' => 'rule_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRbacAuthItemChildren()
    {
        return $this->hasMany(RbacAuthItemChild::className(), ['parent' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRbacAuthItemChildren0()
    {
        return $this->hasMany(RbacAuthItemChild::className(), ['child' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChildren()
    {
        return $this->hasMany(RbacAuthItem::className(), ['name' => 'child'])->viaTable('rbac_auth_item_child', ['parent' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParents()
    {
        return $this->hasMany(RbacAuthItem::className(), ['name' => 'parent'])->viaTable('rbac_auth_item_child', ['child' => 'name']);
    }


    public static function getCntsByName($name, $type)
    {
        return self::find()->andWhere(['name' => $name])->andWhere(['type'=>$type])->count();
    }

    public static function getMenuChildren($parent)
    {
        $auth = Yii::$app->authManager;
        $children = $auth->getChildren($parent);
        $children && $children = array_keys($children);
        return $children;
    }

    public static function removeChildren($object)
    {
        $auth = Yii::$app->authManager;
        if($auth->getChildren($object->name)){
            return $auth->removeChildren($object);
        }
        return true;
    }

    public static function childrenRule()
    {
        $children = self::find()
            ->andWhere(['=', 'type', 2])
            ->andWhere(['not like', 'name', 'menu_%', false])
            ->select(['name', 'description'])
            ->orderBy('description asc')
            ->all();

        $children = ArrayHelper::map($children, 'name', 'description');
        return $children;
    }

    //____ $parent @string
    public static function childrenName($parent)
    {
        $auth = Yii::$app->authManager;
        $children = $auth->getChildren($parent);
        $children && $children = array_keys($children);
        return $children;
    }

    public static function menu()
    {
        $result = [];
        $key = '';
        $chilren = self::find()
            ->andWhere(['=', 'type', 2])
            ->andWhere(['like', 'name', 'menu_%', false])
            ->select(['name', 'description'])
            ->asArray()
            ->all();
        if($chilren){
            foreach ($chilren as $k=>$child) {
                if(substr_count($child['name'],'_') == 1){
                    $key = $child['name'];
                    continue;
                }
                $result[$key][$child['name']] = $child['description'];
            }
        }

        return $result;
    }

    public static function roleMenu($name)
    {
        $auth = Yii::$app->authManager;
        $menu = $auth->getChildren($name);
        return $menu ? array_keys($menu) : [];
    }

    public static function roles()
    {
        $auth = Yii::$app->authManager;
        $roles = $auth->getRoles();
        if($roles){
            $roles = array_keys($roles);
            $roles = array_combine($roles,$roles);
        }
        return $roles;
    }
    
    
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => '权限路径',
            'type' => Yii::t('app', 'Type'),
            'description' => '权限名称',
            'rule_name' => Yii::t('app', 'Rule Name'),
            'data' => Yii::t('app', 'Data'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

}
