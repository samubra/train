<?php
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
$this->breadcrumbs=array(
	UserModule::t("Login"),
);
?>
	
			<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'loginForm',
    'type'=>'horizontal',
)); ?>
                <div class="control-group">
                    <div class="input-prepend">
                        <span class="add-on"><span class="icon-user"></span></span>
                         <?php echo $form->textField($model, 'username', array('placeholder'=>'用户名')); ?>
                    </div>                
                </div>
                <div class="control-group">
                    <div class="input-prepend">
                        <span class="add-on"><span class="icon-lock"></span></span>
                        <?php echo $form->passwordField($model, 'password', array('placeholder'=>'密  码')); ?>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span8">
                        <div class="control-group" style="margin-top: 5px;">
                            <label class="checkbox"><input type="checkbox" name="UserLogin[rememberMe]">记住登录信息</label>                                                
                        </div>                    
                    </div>
                    <div class="span4">
                        <button type="submit" class="btn btn-block">登录</button>       
                    </div>
                </div>
		<?php $this->endWidget(); ?>    
            <div class="row-fluid">
                <div class="span6 white">
                </div>
                <div class="span1"></div>
                <div class="span5 change">
                    <p><?php echo CHtml::link(UserModule::t("Register"),Yii::app()->getModule('user')->registrationUrl,array('class'=>'tip','title'=>'加入我们')); ?> | <?php echo CHtml::link(UserModule::t("Lost Password?"),Yii::app()->getModule('user')->recoveryUrl,array('class'=>'tip','title'=>'找回密码')); ?></p>
                </div>            
            </div>

<?php
$form = new CForm(array(
    'elements'=>array(
        'username'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'password'=>array(
            'type'=>'password',
            'maxlength'=>32,
        ),
        'rememberMe'=>array(
            'type'=>'checkbox',
        )
    ),

    'buttons'=>array(
        'login'=>array(
            'type'=>'submit',
            'label'=>'Login',
        ),
    ),
), $model);
?>