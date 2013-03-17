<!DOCTYPE html>
<html lang="zh_cn">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->
    


    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js'></script>
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js'></script>
   
    
    <title><?php echo $this->pageTitle;?></title>

    
    <link href="<?php echo app()->theme->baseUrl;?>/public/css/stylesheets.css" rel="stylesheet" type="text/css" />  
    <!--[if lt IE 8]>
        <link href="<?php echo app()->theme->baseUrl;?>/public/css/ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->            
    <link rel='stylesheet' type='text/css' href='<?php echo app()->theme->baseUrl;?>/public/css/fullcalendar.print.css' media='print' />
    
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins/cookie/jquery.cookies.2.2.0.min.js'></script>   
     <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins/jquery/jquery.mousewheel.min.js'></script>
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins/bootstrap.min.js'></script>
    
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins/charts/excanvas.min.js'></script>
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins/charts/jquery.flot.js'></script>    
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins/charts/jquery.flot.stack.js'></script>    
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins/charts/jquery.flot.pie.js'></script>
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins/charts/jquery.flot.resize.js'></script>
    
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins/sparklines/jquery.sparkline.min.js'></script>
    
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins/fullcalendar/fullcalendar.min.js'></script>
    
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins/select2/select2.min.js'></script>
    
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins/uniform/uniform.js'></script>
    
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins/maskedinput/jquery.maskedinput-1.3.min.js'></script>
    
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins/validation/languages/jquery.validationEngine-en.js' charset='utf-8'></script>
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins/validation/jquery.validationEngine.js' charset='utf-8'></script>
    
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins/animatedprogressbar/animated_progressbar.js'></script>
    
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins/qtip/jquery.qtip-1.0.0-rc3.min.js'></script>
    
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins/cleditor/jquery.cleditor.js'></script>
    
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins/dataTables/jquery.dataTables.min.js'></script>    
    
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/cookies.js'></script>
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/actions.js'></script>
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/charts.js'></script>
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins.js'></script>
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/settings.js'></script>
    
</head>
<body>
    <div class="wrapper"> 
            
        <div class="header">
            <a class="logo" href="index.html"><img src="<?php echo app()->theme->baseUrl;?>/public/img/logo.png" alt="<?php echo $this->pageTitle;?>" title="<?php echo $this->pageTitle;?>"/></a>
            <ul class="header_menu">
                <li class="list_icon"><a href="#">&nbsp;</a></li>
                <li class="settings_icon">
                    <a href="#" class="link_themeSettings">&nbsp;</a>
                    
                    <div id="themeSettings" class="popup">
                        <div class="head clearfix">
                            <div class="arrow"></div>
                            <span class="isw-settings"></span>
                            <span class="name">主题设置</span>
                        </div>
                        <div class="body settings">
                            <div class="row-fluid">
                                <div class="span3"><strong>样式：</strong></div>
                                <div class="span9">
                                    <a class="styleExample tip active" title="Default style" data-style="">&nbsp;</a>                                    
                                    <a class="styleExample silver tip" title="Silver style" data-style="silver">&nbsp;</a>
                                    <a class="styleExample dark tip" title="Dark style" data-style="dark">&nbsp;</a>
                                    <a class="styleExample marble tip" title="Marble style" data-style="marble">&nbsp;</a>
                                    <a class="styleExample red tip" title="Red style" data-style="red">&nbsp;</a>                                    
                                    <a class="styleExample green tip" title="Green style" data-style="green">&nbsp;</a>
                                    <a class="styleExample lime tip" title="Lime style" data-style="lime">&nbsp;</a>
                                    <a class="styleExample purple tip" title="Purple style" data-style="purple">&nbsp;</a>                                    
                                </div>
                            </div>                            
                            <div class="row-fluid">
                                <div class="span3"><strong>背景：</strong></div>
                                <div class="span9">
                                    <a class="bgExample tip active" title="Default" data-style="">&nbsp;</a>
                                    <a class="bgExample bgCube tip" title="Cubes" data-style="cube">&nbsp;</a>
                                    <a class="bgExample bghLine tip" title="Horizontal line" data-style="hline">&nbsp;</a>
                                    <a class="bgExample bgvLine tip" title="Vertical line" data-style="vline">&nbsp;</a>
                                    <a class="bgExample bgDots tip" title="Dots" data-style="dots">&nbsp;</a>
                                    <a class="bgExample bgCrosshatch tip" title="Crosshatch" data-style="crosshatch">&nbsp;</a>
                                    <a class="bgExample bgbCrosshatch tip" title="Big crosshatch" data-style="bcrosshatch">&nbsp;</a>
                                    <a class="bgExample bgGrid tip" title="Grid" data-style="grid">&nbsp;</a>
                                </div>
                            </div>                            
                            <div class="row-fluid">
                                <div class="span3"><strong>固定宽度：</strong></div>
                                <div class="span9">
                                    <input type="checkbox" name="settings_fixed" value="1"/>
                                </div> 
                            </div>
                            <div class="row-fluid">
                                <div class="span3"><strong>隐藏菜单:</strong></div>
                                <div class="span9">
                                    <input type="checkbox" name="settings_menu" value="1"/>
                                </div>                                           
                            </div>                            
                        </div>
                        <div class="footer">                            
                            <button class="btn link_themeSettings" type="button">关闭</button>
                        </div>
                    </div>                    
                    
                </li>
            </ul>    
        </div>

        <div class="menu">                

            <div class="breadLine">            
                <div class="arrow"></div>
                <div class="adminControl active">
                    你好，<?php echo user()->name;?>
                </div>
            </div>

            <div class="admin">
                <div class="image">
                    <img src="<?php echo app()->theme->baseUrl;?>/public/img/users/aqvatarius.jpg" class="img-polaroid"/>                
                </div>
                <ul class="control">                
                    <li><span class="icon-comment"></span> <a href="messages.html">短消息</a> <a href="messages.html" class="caption red">12</a></li>
                    <li><span class="icon-cog"></span> <a href="<?php echo url('/user/profile');?>">个人设置</a></li>
                    <li><span class="icon-share-alt"></span> <a href="<?php echo url('/user/logout');?>">注销</a></li>
                </ul>
                <div class="info">
                    <span>欢迎回来，最近登录是在： <br/><?php echo user()->lastvisit_at;?></span>
                </div>
            </div>


    <?php 
        $this->widget('Menu', array(
            	'linkLabelWrapper'=>'span',
                'htmlOptions'=>array('class'=>'navigation'),
                'activateParents'=>true,
                    'items'=>array(
                        array('label'=>'首页', 'url'=>array('/site/index'),'icon'=>'isw-grid'),
                        array('label'=>'New Arrivals', 'url'=>array('/site', 'tag'=>'new'),'icon'=>'isw-delete','itemOptions'=>array('class'=>'openable'),
                                    'items'=>array(

                                array('label'=>'site/contact', 'url'=>array('site/contact'),'icon'=>'icon-edit'),
                                array('label'=>'New Arrivals', 'url'=>array('product/new', 'tag'=>'new'),'icon'=>'icon-plus'),
                                array('label'=>'New Arrivals', 'url'=>array('product/new', 'tag'=>'new'),'icon'=>'icon-edit'),
                                array('label'=>'New Arrivals', 'url'=>array('product/new', 'tag'=>'new'),'icon'=>'icon-delete'),)),
                        array('label'=>'权限管理', 'url'=>array('/rights'), 'visible'=>Yii::app()->getModule('user')->isAdmin(),'icon'=>'isw-unlock',
                            'itemOptions'=>array('class'=>'openable'),
                            'items'=>array(
                                array(
                                    'label'=>Rights::t('core', 'Assignments'),
                                    'url'=>array('/rights/assignment/view'),
                                    'itemOptions'=>array('class'=>'item-assignments'),
                                    'icon'=>'icon-check'
                                ),
                                array(
                                    'label'=>Rights::t('core', 'Permissions'),
                                    'url'=>array('/rights/authItem/permissions'),
                                    'itemOptions'=>array('class'=>'item-permissions'),
                                    'icon'=>'icon-lock'
                                ),
                                array(
                                    'label'=>Rights::t('core', 'Roles'),
                                    'url'=>array('/rights/authItem/roles'),
                                    'itemOptions'=>array('class'=>'item-roles'),
                                    'icon'=>'icon-user'
                                ),
                                array(
                                    'label'=>Rights::t('core', 'Tasks'),
                                    'url'=>array('/rights/authItem/tasks'),
                                    'itemOptions'=>array('class'=>'item-tasks'),
                                    'icon'=>'icon-flag'
                                ),
                                array(
                                    'label'=>Rights::t('core', 'Operations'),
                                    'url'=>array('/rights/authItem/operations'),
                                    'itemOptions'=>array('class'=>'item-operations'),
                                    'icon'=>'icon-fire'
                                ),
                            )),
                    )
            )
        );
    ?>
         

            

        </div>

        <div class="content">


            <div class="breadLine">

                <?php 
                $this->widget('Breadcrumbs', array(
                    'links'=>$this->breadcrumbs,
                ));?>

                <ul class="buttons">
                    <li>
                        <a href="#" class="link_bcPopupList"><span class="icon-user"></span><span class="text">Users list</span></a>

                        <div id="bcPopupList" class="popup">
                            <div class="head clearfix">
                                <div class="arrow"></div>
                                <span class="isw-users"></span>
                                <span class="name">List users</span>
                            </div>
                            <div class="body-fluid users">

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="<?php echo app()->theme->baseUrl;?>/public/img/users/aqvatarius_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Aqvatarius</a>                                    
                                        <span>online</span>
                                    </div>
                                </div>                                 

                            </div>
                            <div class="footer">
                                <button class="btn" type="button">Add new</button>
                                <button class="btn btn-danger link_bcPopupList" type="button">Close</button>
                            </div>
                        </div>                    

                    </li>                
                    <li>
                        <a href="#" class="link_bcPopupSearch"><span class="icon-search"></span><span class="text">Search</span></a>

                        <div id="bcPopupSearch" class="popup">
                            <div class="head clearfix">
                                <div class="arrow"></div>
                                <span class="isw-zoom"></span>
                                <span class="name">Search</span>
                            </div>
                            <div class="body search">
                                <input type="text" placeholder="Some text for search..." name="search"/>
                            </div>
                            <div class="footer">
                                <button class="btn" type="button">Search</button>
                                <button class="btn btn-danger link_bcPopupSearch" type="button">Close</button>
                            </div>
                        </div>                
                    </li>
                </ul>

            </div>

            <div class="workplace">
                <div class="page-header">
                    <h1><?php echo CHtml::encode($this->headTitle);?><small><?php echo CHtml::encode($this->headInfo);?></small></h1>
                </div>
                <div class="row-fluid">
                    <?php $this->widget('bootstrap.widgets.TbAlert', array(
                        'block'=>true, // display a larger alert block?
                        'fade'=>true, // use transitions?
                        'closeText'=>''//'&times;', // close link text - if set to false, no close link is displayed
                        
                    ));?>
                 <?php echo $content;?>
            </div>

        </div>   
    </div>
</body>
</html>
