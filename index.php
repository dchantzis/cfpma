<?php
	session_start();
	require("functionsinc.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CFPMA: Carbon Friendly Proto Media Alliance - Home</title>
<style type="text/css" media="screen"> 
	@import url(./layout/css/layoutinc.css);
</style>
	<script type="text/javascript" src="scripts/mootools/mootools-core-1.3-full-compat.js"></script>
    <script type="text/javascript" src="scripts/mootools/mootools-more.js"></script>
    <script type="text/javascript" src="scripts/commonajaxfunctions.js"></script>
    <script type="text/javascript" src="scripts/commonfunctions.js"></script>
    <script type="text/javascript" src="scripts/validatensubmit.inc.js"></script>
    <script type="text/javascript" src="scripts/global.js"></script>   
</head>

<body class='index'>

    <a name='top' id='top' />
 	<?=get_stuffToLoad()?>
	<div id='wallpaper'><img src='layout/images/wp_index.png' id='wallpaperimg' width='100%' height='100%'/></div>
    
    <div id='wrapper'>
		<?=get_sidebar('home')?>
		<?=get_projectsList()?>
        <?=get_submission_details(1)?>
        <div id='content_placeholder'>
			<div class='clearboth'>&nbsp;</div>
        </div><!--content_placeholder-->
		<?=get_footer()?>
	</div><!--wrapper-->

</body>

</html>
