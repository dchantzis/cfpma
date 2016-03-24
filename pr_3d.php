<?php
/*
#################
pr_index.php
page for project: index[dot]html
#################
*/
session_start();
require("functionsinc.php");

$pageID = 'pr_3d';

if(!(isset($_POST['loadtype']) && (($_POST['loadtype'] == 'json') || ($_POST['loadtype'] == 'dom')) ))
{
	$projectsNaviArray = find_previous_n_next_pages($pageID);
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CFPMA: Carbon Friendly Proto Media Alliance - Steampunk Themed 3D Animation</title>
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
        <div id='wallpaper'><img src='layout/images/wp_3d.png' id='wallpaperimg' width='100%' height='100%'/></div>
        
        <div id='wrapper'>
            <?=get_sidebar('pr_3d')?>
            <?=get_projectsList()?>
            <?=get_submission_details(1)?>
            <div id='content_placeholder'>
                <div id='content'>
                    <div class='prj_col01'>
                        <div class='prj_title'>Project: Steampunk themed 3D Animation</div>
                        
						<iframe src="http://player.vimeo.com/video/15394572" width="590" height="443" frameborder="0"></iframe>
                    </div><!--prj_col03-->
                    <div class='prj_col02'>
                    	<br /><br /><br /><br />
                        <div class='prj_info'>
                            The project brief of this project asked for the design of two devices:
                                <ul class='prj_info_list'>
                                    <li>a screen apparatus</li>
                                    <li>a projector device</li>
                                </ul>
                            These devices where to be designed by implementing the designs of old srap and unused items or by customizing old devices.
                            All designs should transmit a general notion from the Victorian times. <br/>
                            The designs should then be constructed in 3D using <b>Blender</b>.<br />
                            The second part was to create a 30 second 3D animation using these two devices. <br /><br />
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
	$param_wallpaper = 'layout/images/wp_3d.png';
	$pr_title = 'steampunk themed 3D animation';
	$pr_pagefile = 'pr_3d.php';
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
                        <div class='prj_title'>Project: Steampunk themed 3D Animation</div>
                        
						<iframe src="http://player.vimeo.com/video/15394572" width="590" height="443" frameborder="0"></iframe>
                    </div><!--prj_col03-->
                    <div class='prj_col02'>
                    <br /><br /><br /><br />
                        <div class='prj_info'>
                            The project brief of this project asked for the design of two devices:
                                <ul class='prj_info_list'>
                                    <li>a screen apparatus</li>
                                    <li>a projector device</li>
                                </ul>
                            These devices where to be designed by implementing the designs of old srap and unused items or by customizing old devices.
                            All designs should transmit a general notion from the Victorian times. <br/>
                            The designs should then be constructed in 3D using <b>Blender</b>.<br />
                            The second part was to create a 30 second 3D animation using these two devices. <br /><br />
                        </div>
                    </div><!--prj_col02-->
<?
}
?>