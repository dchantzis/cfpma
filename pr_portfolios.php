<?php
/*
#################
pr_index.php
page for project: Portfolios
#################
*/
?>
<?php
	session_start();
	require("functionsinc.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CFPMA: Carbon Friendly Proto Media Alliance - Portfolios</title>
<style type="text/css" media="screen"> 
	@import url(./layout/css/layoutinc.css);
</style>
<script type="text/javascript" src="scripts/mootools/mootools-1.2.4.js"></script>
<script type="text/javascript" src="scripts/global.js"></script>
</head>

<body class='pr_portfolios'>

    <a name='top' id='top' />
 	<?=get_stuffToLoad()?>
	<div id='wallpaper'><img src='layout/images/wp_index[dot]com.png' id='wallpaperimg' width='100%' height='100%'/></div>
    
    <div id='wrapper'>
		<?=get_sidebar('projects')?>
		<?=get_projectsList()?>
        <?=get_submission_details(1)?>
        <div id='content_placeholder'>
            <div id='content'>
                <div class='prj_col01'>
                    <div class='prj_title'>Project: index[dot]html</div>
                    <div class='prj_info'></div>
                    <div class='prj_links'></div>
                    <div class='prj_images'></div>
                </div><!--prj_col01-->
                <div class='prj_col02'>
                    <iframe src="http://player.vimeo.com/video/11342848" width="400" height="320" frameborder="0" class='videos'></iframe>
                </div>
            </div><!--content-->
        </div><!--content_placeholder-->
		<?=get_footer()?>
	</div><!--wrapper-->

</body>

</html>
