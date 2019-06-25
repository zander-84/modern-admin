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

class SearchForm extends Model
{
    public $per_page = 10;
    public $allow_per_page = [10=>10,30=>30,50=>50];

    

    public function rules ()
    {
        return [
            [['per_page'],'in','range' => array_values($this->allow_per_page)],
        ];
    }


}
