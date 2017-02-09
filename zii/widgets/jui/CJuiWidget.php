<?php
/**
 * CJuiWidget class file.
 *
 * @author Sebastian Thierer <sebathi@gmail.com>
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link http://www.yiiframework.com/
 * @copyright 2008-2013 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

/**
 * This is the base class for all JUI widget classes.
 *
 * @author Sebastian Thierer <sebathi@gmail.com>
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @package zii.widgets.jui
 * @since 1.1
 */

abstract class CJuiWidget extends CWidget
{
    /**
     * @var array the initial JavaScript options that should be passed to the JUI plugin.
     */
    public $options = array();

    /**
     * @var array the HTML attributes that should be rendered in the HTML tag representing the JUI widget.
     */
    public $htmlOptions = array();

    /**
     * Initializes the widget.
     * This method will publish JUI assets if necessary.
     * It will also register jquery and JUI JavaScript files and the theme CSS file.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        Yii::app()->getClientScript()->registerCoreScript('jqueryui');
        parent::init();
    }

}