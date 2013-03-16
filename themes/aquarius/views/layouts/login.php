<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->
    
    <title><?php echo $this->pageTitle;?></title>
    
    <link href="<?php echo app()->theme->baseUrl;?>/public/css/stylesheets.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="<?php echo app()->theme->baseUrl;?>/public/css/ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->    
    <link rel='stylesheet' type='text/css' href='<?php echo app()->theme->baseUrl;?>/public/css/fullcalendar.print.css' media='print' />
    
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js'></script>
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js'></script>
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins/jquery/jquery.mousewheel.min.js'></script>
    
    <script type='text/javascript' src='<?php echo app()->theme->baseUrl;?>/public/js/plugins/cookie/jquery.cookies.2.2.0.min.js'></script>
    
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
    
</head>
<body>
    <?php echo $content;?>
</body>
</html>
