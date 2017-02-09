<?php

return array(
    'jquery' => array(
        'basePath' => 'zii.widgets.jui.assets.redmond-1-12-1.external.jquery',
        'js' => array('jquery.js'),
    ),
    'jqueryui' => array(
        'basePath' => 'zii.widgets.jui.assets.redmond-1-12-1',
        'css' => array('jquery-ui.min.css'),
        'js' => array('jquery-ui.min.js'),
        'depends' => array('jquery')
    ),
	'yii' => array(
		'js' => array('jquery.yii.js'),
        'depends' => array('jquery')
	),
	'yiiactiveform' => array(
		'js' => array('jquery.yiiactiveform.js'),
        'depends' => array('jquery')
	),
);
