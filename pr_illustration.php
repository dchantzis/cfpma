<?php
/*
#################
pr_index.php
page for project: index[dot]html
#################
*/
session_start();
require("functionsinc.php");

$pageID = 'pr_illustration';

if(!(isset($_POST['loadtype']) && (($_POST['loadtype'] == 'json') || ($_POST['loadtype'] == 'dom')) ))
{
	$projectsNaviArray = find_previous_n_next_pages($pageID);
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CFPMA: Carbon Friendly Proto Media Alliance - Illustrations</title>
    <style type="text/css" media="screen"> 
        @import url(./layout/css/layoutinc.css);
    </style>
	<script type="text/javascript" src="scripts/mootools/mootools-core-1.3-full-compat.js"></script>
    <script type="text/javascript" src="scripts/mootools/mootools-more.js"></script>
    <script type="text/javascript" src="scripts/commonajaxfunctions.js"></script>
    <script type="text/javascript" src="scripts/commonfunctions.js"></script>
    <script type="text/javascript" src="scripts/validatensubmit.inc.js"></script>
    <script type="text/javascript" src="scripts/global.js"></script>   
    <script type="text/javascript">
    	previousProjectURL = '<?=$projectsNaviArray['prev']?>';
		nextProjectURL = '<?=$projectsNaviArray['next']?>';
    </script>
    </head>
    
    <body class='<?=$pageID?>'>
    
        <a name='top' id='top' />
        <?=get_stuffToLoad()?>
        <div id='wallpaper'><img src='layout/images/wp_illustration.png' id='wallpaperimg' width='100%' height='100%'/></div>
        
        <div id='wrapper'>
            <?=get_sidebar('pr_illustration')?>
            <?=get_projectsList()?>
            <?=get_submission_details(1)?>
            <div id='content_placeholder'>
                <div id='content'>
					<div class='prj_col01'>
                        <div class='prj_title'>Project: Illustrations</div>
                        <ul class='image_grid'>
                            <li><a href='projectfiles/illustration/illo01.jpg' target='_blank'><img src='projectfiles/illustration/illo01thumb2.jpg' alt='' /></a></li>
                            <li><a href='projectfiles/illustration/illo02.jpg' target='_blank'><img src='projectfiles/illustration/illo02thumb2.jpg' alt='' /></a></li>
                            <li><a href='projectfiles/illustration/illo03.jpg' target='_blank'><img src='projectfiles/illustration/illo03thumb2.jpg' alt='' /></a></li>
                            <li><a href='projectfiles/illustration/illo04.jpg' target='_blank'><img src='projectfiles/illustration/illo04thumb2.jpg' alt='' /></a></li>
                            <li><a href='projectfiles/illustration/illo05.jpg' target='_blank'><img src='projectfiles/illustration/illo05thumb2.jpg' alt='' /></a></li>
                            <li><a href='projectfiles/illustration/illo06.jpg' target='_blank'><img src='projectfiles/illustration/illo06thumb2.jpg' alt='' /></a></li>
                            <li><a href='projectfiles/illustration/illo07.jpg' target='_blank'><img src='projectfiles/illustration/illo07thumb2.jpg' alt='' /></a></li>
                        </ul><!--image_grid-->
                        
                    </div><!--prj_col03-->
                    <div class='prj_col02'>
                    	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                        <div class='prj_info'>
                            Quality illustrations and web designs by resident renown artist <b>James Doe</b>.
                            <br /><br />
                            <div class='prj_links'><a href='http://jamesdoe.com/' class='prj_link' target='_blank' title='james doe website'>» website</a></div>
                        </div>
                    </div><!--prj_col02-->
                </div><!--content-->
                <div class='clearboth'>&nbsp;</div>
            </div><!--content_placeholder-->
            <?=get_footer()?>
        </div><!--wrapper-->
    
    </body>
    
    </html>
<?php
}//if
if( isset($_POST['loadtype']) && $_POST['loadtype'] == 'json' )
{
	$param_wallpaper = 'layout/images/wp_illustration.png';
	$pr_title = 'illustration';
	$pr_pagefile = 'pr_illustration.php';
	$param_description = 'a';
	$param_images = 'b';
	$param_video = 'c';
	$param_flash = 'd';
	$projectsNaviArray = find_previous_n_next_pages($pageID);
	$param_prevProject = $projectsNaviArray['prev'];
	$param_nextProject = $projectsNaviArray['next'];
	$param_currentProjectID = $pageID;
	json_loadpage_response($param_wallpaper,$pr_title,$pr_pagefile,$param_description,$param_images,$param_video,$param_flash,$param_prevProject,$param_nextProject,$param_currentProjectID);
	exit;
}//if
if( isset($_POST['loadtype']) && $_POST['loadtype'] == 'dom')
{
?>
					<div class='prj_col01'>
                        <div class='prj_title'>Project: Illustrations</div>
                        <ul class='image_grid'>
                            <li><a href='projectfiles/illustration/illo01.jpg' target='_blank'><img src='projectfiles/illustration/illo01thumb2.jpg' alt='' /></a></li>
                            <li><a href='projectfiles/illustration/illo02.jpg' target='_blank'><img src='projectfiles/illustration/illo02thumb2.jpg' alt='' /></a></li>
                            <li><a href='projectfiles/illustration/illo03.jpg' target='_blank'><img src='projectfiles/illustration/illo03thumb2.jpg' alt='' /></a></li>
                            <li><a href='projectfiles/illustration/illo04.jpg' target='_blank'><img src='projectfiles/illustration/illo04thumb2.jpg' alt='' /></a></li>
                            <li><a href='projectfiles/illustration/illo05.jpg' target='_blank'><img src='projectfiles/illustration/illo05thumb2.jpg' alt='' /></a></li>
                            <li><a href='projectfiles/illustration/illo06.jpg' target='_blank'><img src='projectfiles/illustration/illo06thumb2.jpg' alt='' /></a></li>
                            <li><a href='projectfiles/illustration/illo07.jpg' target='_blank'><img src='projectfiles/illustration/illo07thumb2.jpg' alt='' /></a></li>
                        </ul><!--image_grid-->
                        
                    </div><!--prj_col03-->
                    <div class='prj_col02'>
                    	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                        <div class='prj_info'>
                            Quality illustrations and web designs by resident renown artist <b>James Doe</b>.
                            <br /><br />
                            <div class='prj_links'><a href='http://jamesdoe.com/' class='prj_link' target='_blank' title='james doe website'>» website</a></div>
                        </div>
                    </div><!--prj_col02-->
<?
}
?>