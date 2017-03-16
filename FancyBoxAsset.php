<?php
/**
 * @copyright Copyright (c) 2014 Newerton Vargas de Araújo
 * @link http://newerton.com.br
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace newerton\fancybox;

use yii\web\AssetBundle;

class FancyBoxAsset extends AssetBundle
{
    /**
     * Unique value to set an empty asset via Yii AssetManager configuration.
     */
    public $sourcePath = '@bower/fancybox';

    public $css = [
        'source/jquery.fancybox.css'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        $this->js = [
            'source/jquery.fancybox' . (!YII_DEBUG ? '.pack' : '') . '.js'
        ];
        parent::init();
    }


} 
