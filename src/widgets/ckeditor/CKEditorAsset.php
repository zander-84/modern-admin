<?php
/**
 * @copyright Copyright (c) 2013-16 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace zander84\modernadmin\widgets\ckeditor;

use yii\web\AssetBundle;

/**
 * CKEditorAsset
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\ckeditor
 */
class CKEditorAsset extends AssetBundle
{
    public $sourcePath = '@vendor/zander-84/modern-admin/src/views/assets/assets/ckeditor';
    public $js = [
        'ckeditor.js',
        'adapters/jquery.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset'
    ];
}
