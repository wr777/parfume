<?php
$this->widget('bootstrap.widgets.TbNavbar', array(
    'collapse' => false,
    //'type' => 'inverse',
    'fixed' => false,
    'fluid' => true,
    'brand' => false,
    //'brand' => 'isocork77.ru',
    //'brandUrl' => array('/' . Yii::app()->defaultController . '/index/'),
    'htmlOptions' => array(
        'class' => 'navbar-static-top'
    ),
    'items' => array(
        array(
            'class' => 'bootstrap.widgets.TbMenu',
            'encodeLabel' => false,
            'items' => $this->params['items'],
        )/*,
        array(
            'class' => 'bootstrap.widgets.TbMenu',
            'items' => $this->controller->yupe->getLanguageSelectorArray(),
            'htmlOptions' => array(
                'class' => 'pull-right',
            ),
        )*/
    ),
));
?>
