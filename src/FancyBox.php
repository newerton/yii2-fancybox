<?php

/**
 * @copyright Copyright (c) 2014 Newerton Vargas de Araújo
 * @link https://newerton.com
 */

namespace newerton\fancybox;

use yii\base\InvalidConfigException;
use yii\base\Widget;
use yii\helpers\Json;

/**
 * fancyBox is a tool that offers a nice and elegant way to add zooming
 * functionality for images, html content and multi-media on your webpages
 *
 * @author Newerton Vargas de Araújo <contato@newerton.com.br>
 * @since 1.0
 */
class FancyBox extends Widget
{

    /**
     * @var type string target of the widget
     */
    public $target;

    /**
     * @var type boolean whether to enable the easing functions. You must set the eansing on $config
     */
    public $helpers = false;

    /**
     * @var type bollean whether to enable mouse interaction
     */
    public $mouse = true;
    // @ array of config settings for fancybox
    /**
     *
     * @var type array of config settings for fancybox
     */
    public $config = [];

    /**
     * @var array to use for $.fancybox.open( [group], [options] ) scenario
     */
    public $group = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        if (is_null($this->target)) {
            throw new InvalidConfigException('"FancyBox.target has not been defined.');
        }
        // publish the required assets
        $this->registerAssets();
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $view = $this->getView();

        $config = Json::encode($this->config);

        if (!empty($this->group)) {
            $config = Json::encode($this->group) . ',' . $config;
        }
        $view->registerJs("jQuery('{$this->target}').fancybox({$config});");
    }

    /**
     * Registers required script for the plugin to work as DatePicker
     */
    public function registerAssets()
    {
        $view = $this->getView();

        FancyBoxAsset::register($view);

        if ($this->mouse) {
            MousewheelAsset::register($view);
        }

        if ($this->helpers) {
            FancyBoxHelpersAsset::register($view);
        }
    }

}
