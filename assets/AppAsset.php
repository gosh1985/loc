<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
  //  'css/bootstrap.min.css' ,
    'css/font-awesome.min.css' ,
    'css/prettyPhoto.css' ,
    'css/price-range.css' ,
    'css/animate.css' ,
    'css/main.css' ,
    'css/responsive.css' ,
    'css/some.css',   //this file just for adding some style to category menu
    'css/cart.css'   //this file for adding cursor:pointer to cart
    ];
    public $js =[
  //    'js/jquery.js',
  //  'js/bootstrap.min.js',
      'js/jquery.scrollUp.min.js',
      'js/price-range.js',
      'js/jquery.prettyPhoto.js',
      'js/jquery.cookie.js',
      'js/jquery.accordion.js',
      'js/main.js',
      'js/cart.js',  //this file for ajax request to cart
      'js/some.js',   //this file just for adding function to category menu
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
