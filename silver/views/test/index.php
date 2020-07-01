<?php

use brussens\datetimepicker\Widget as DateTimePicker;
use yii\widgets\ActiveForm;

?>

<div style="position:relative;">

<?php

$form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
]);

echo $form->field($model, 'resolutionDate')->widget(DateTimePicker::className(), [
    'format' => 'DD-MM-YYYY HH:mm:ss',
    'clientOptions' => [
        'locale' => 'ru', //If you do not want to use auto-detection
        'icons' => [
            'time' => 'el-icon-time',
            'date' => 'el-icon-calendar',
            'up' => 'el-icon-chevron-up',
            'down' => 'el-icon-chevron-down',
        ],
        'sideBySide' => true,
    ],
]);

ActiveForm::end();

?>

</div>