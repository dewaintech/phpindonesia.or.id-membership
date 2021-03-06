<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $profile common\models\Profile */
/* @var $form yii\widgets\ActiveForm */


$this->title = 'Update user account';
$this->params['breadcrumbs'][] = ['label' => 'Profile', 'url' => ['/profile']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="col-md-9 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Update user account</div>
            <div class="panel-body">
                   <div class="profile-form">
                    <?php $form = ActiveForm::begin([
                            'layout' => 'horizontal',
                            'enableAjaxValidation' => true,
                            'enableClientValidation' => false,
                            'fieldConfig' => [
                                'horizontalCssClasses' => [
                                    'wrapper' => 'col-sm-9',
                                ],
                            ],
                    ]); ?>


                    <?= $form->field($profile, 'fullname')->textInput(['maxlength' => true]) ?>
                    
                    <? if(trim($profile->email) != ""){
                        echo $form->field($profile, 'email')->textInput(['maxlength' => true]);
                    }else{
                    ?>
                        <div class="form-group field-profilecrud-email">
                            <label class="control-label col-sm-3" for="profilecrud-email">Email</label>
                            <div class="col-sm-9">
                    <?
                                echo $profile->email . '<span class="label label-warning">Not Verified</span>';
                    ?>
                            </div>
                        </div>
                    <?    
                    }
                    ?>
                    

                    <?= $form->field($profile, 'gender')->radioList([1=>'Laki-Laki',2=>'Perempuan']) ?>

                    <?= $form->field($profile, 'phone')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($profile, 'address')->textArea(['maxlength' => true]) ?>

                    <?= $form->field($profile, 'province')->textInput() ?>

                    <?= $form->field($profile, 'city')->textInput() ?>

                    <?= $form->field($profile, 'district')->textInput() ?>

                    <?= $form->field($profile, 'subdistrict')->textInput() ?>

                    <?= $form->field($profile, 'postcode')->textInput(['maxlength' => true]) ?>


                    <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-9">
                            <?= Html::submitButton('Update', ['class' => 'btn btn-block btn-success']) ?>
                        </div>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </div>

