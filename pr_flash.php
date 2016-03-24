<?php
/*
#################
pr_index.php
page for project: index[dot]html
#################
*/
session_start();
require("functionsinc.php");

$pageID = 'pr_flash';

if(!(isset($_POST['loadtype']) && (($_POST['loadtype'] == 'json') || ($_POST['loadtype'] == 'dom')) ))
{
	$projectsNaviArray = find_previous_n_next_pages($pageID);
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   	<title>CFPMA: Carbon Friendly Proto Media Alliance - Flash Game</title>
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
    <script src="projectfiles/flash/Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
    </head>
    
    <body class='<?=$pageID?>'>
    
        <a name='top' id='top' />
        <?=get_stuffToLoad()?>
        <div id='wallpaper'><img src='layout/images/wp_flash.png' id='wallpaperimg' width='100%' height='100%'/></div>
        
        <div id='wrapper'>
            <?=get_sidebar('pr_flash')?>
            <?=get_projectsList()?>
            <?=get_submission_details(1)?>
            <div id='content_placeholder'>
                <div id='content'>
                    <div class='prj_col01'>
                        <div class='prj_title'>Project: CFPMA Flash Game</div>
                      <div class='prj_info'>
						
                        <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','590','height','405','title','PuzzleGame','src','projectfiles/flash/puzzleGame','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','projectfiles/flash/puzzleGame' ); //end AC code
</script>
						<noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="700" height="480" title="PuzzleGame">
                          <param name="movie" value="projectfiles/flash/puzzleGame.swf" />
                          <param name="quality" value="high" />
                          <embed src="projectfiles/flash/puzzleGame.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="590" height="405"></embed>
                        </object></noscript>
						<div class='prj_links'><a href='http://dimitrioschantzis.com/demos/cfpma.flash/' class='prj_link' target='_blank' title='cfpma flash game website'>» website</a></div>
                        </div>
                    </div><!--prj_col01-->
                    <div class='prj_col02'>
                    	<br /><br /><br /><br /><br /><br /><br /><br />
                    	<div>Puzzle Game 1: designs, screenshot and video by <b>Dimitrios Chantzis (s0972736)(2009)</b></div>
                        <br />
                        <div>Puzzle Game 2: designs, screenshot and video by <b>Antigoni Makri (s0971087)(2009)</b></div>
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
	$param_wallpaper = 'layout/images/wp_flash.png';
	$pr_title = 'cfpma flash game';
	$pr_pagefile = 'pr_flash.php';
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
<script language="javascript">window.location = "pr_flash.php";</script>
<?
}
?>