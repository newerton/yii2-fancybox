<?php
/**
 * @copyright Copyright (c) 2014 Newerton Vargas de Araújo
 * @link https://newerton.com
 */

namespace newerton\fancybox;

use yii\web\AssetBundle;

/**
 * Class FancyBoxAsset
 * @package newerton\fancybox
 */
class FancyBoxAsset extends AssetBundle
{

    /**
     * @var string
     */
    public $sourcePath = '@vendor/newerton/yii2-fancybox/src/assets/';

    /**
     * @var string[]
     */
    public $css = [
        'jquery.fancybox.css',
    ];

    /**
     * @var string[]
     */
    public $js = [
        'jquery.fancybox.min.js',
    ];

    /**
     * @var string[]
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
} 
