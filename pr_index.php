<?php
/*
#################
pr_index.php
page for project: index[dot]html
#################
*/
session_start();
require("functionsinc.php");

$pageID = 'pr_index';

if(!(isset($_POST['loadtype']) && (($_POST['loadtype'] == 'json') || ($_POST['loadtype'] == 'dom')) ))
{
	$projectsNaviArray = find_previous_n_next_pages($pageID);
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CFPMA: Carbon Friendly Proto Media Alliance - Index[dot]HTML</title>
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
        <div id='wallpaper'><img src='layout/images/wp_index[dot]html.png' id='wallpaperimg' width='100%' height='100%'/></div>
        
        <div id='wrapper'>
            <?=get_sidebar('pr_index')?>
            <?=get_projectsList()?>
            <?=get_submission_details(1)?>
            <div id='content_placeholder'>
                <div id='content'>
                    <div class='prj_col01'>
                        <div class='prj_title'>Project: index[dot]html</div>
                        <div class='prj_info'>
							<span class='bold'>Index.html</span> is a group project participating in the <span class='bold'>Digital Media Studio Project (DMSP)</span> for the <span class='bold'>MSc in Design and Digital Media</span> (2009-2010) at the <span class='bold'>University of Edinburgh</span>.
            <br /><br />
           				The group consists of three University students: <span class='bold'>Dimitris Patrikios</span>, <span class='bold'>Siyao Chen</span> and <span class='bold'>Dimitrios Chantzis</span>, supervised by <span class='bold'>Dr. Chris Speed</span>.
            <br /><br/>
            Briefly, index.html is about:
            <ul class='prj_info_list'>
                <li><span class='bold'>understanding</span> that every geographical location can be interpreted in unique and interesting ways according to whoever experiences it.</li>               
                <li><span class='bold'>acknowleding</span> that spaces and places can be described as indexes to databases.</li>               
                <li><span class='bold'>reasearching</span> how inadequate are modern geographical systems to shape our experiences of the environment.</li>                
                <li><span class='bold'>experimenting</span> on ways to enrich the representation of data that refer to our surroundings.</li>
                <li><span class='bold'>creating</span> a physical map to act as a database filled with sounds, smells, emotions and visions that people experienced while walking in a selected area in Edinburgh.</li>
                <li><span class='orange2'>implementing</span> unique ways to express data and export information.</li>
			</ul>
                        </div>
                        <div class='prj_links'><a href='http://dimitrioschantzis.com/demos/index[dot]html/' class='prj_link' target='_blank' title='index[dot]html website'>» website</a></div>
                        <div class='prj_images'>
                        	<ul class='image_grid'>
                            	<li><a href='projectfiles/index[dot]html/index01.jpg' target='_blank'><img src='projectfiles/index[dot]html/index01thumb.jpg' alt='' /></a></li>
                                <li><a href='projectfiles/index[dot]html/index02.jpg' target='_blank'><img src='projectfiles/index[dot]html/index02thumb.jpg' alt='' /></a></li>
                                <li><a href='projectfiles/index[dot]html/index03.jpg' target='_blank'><img src='projectfiles/index[dot]html/index03thumb.jpg' alt='' /></a></li>
                                <li><a href='projectfiles/index[dot]html/index04.jpg' target='_blank'><img src='projectfiles/index[dot]html/index04thumb.jpg' alt='' /></a></li>
                                <!--<li><a href=''><img src='projectfiles/index[dot]html/index05thumb.jpg' alt='' /></a></li>-->
                        	</ul><!--image_grid-->
                        </div>
                    </div><!--prj_col01-->
                    <div class='prj_col02'>
                        <iframe src='http://player.vimeo.com/video/11342848' width='150' height="120" frameborder='0'></iframe>
                        <br />
                        <iframe src='http://player.vimeo.com/video/11342162' width='150' height="120" frameborder='0'></iframe>
                        <br />
                        <iframe src='http://player.vimeo.com/video/11343283' width='150' height="120" frameborder='0'></iframe>
                        <br />
                        <iframe src='http://player.vimeo.com/video/11342286' width='150' height="120" frameborder='0'></iframe>
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
	$param_wallpaper = 'layout/images/wp_index[dot]html.png';
	$pr_title = 'index[dot]html';
	$pr_pagefile = 'pr_index.php';
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
                        <div class='prj_title'>Project: index[dot]html</div>
                        <div class='prj_info'>
							<span class='bold'>Index.html</span> is a group project participating in the <span class='bold'>Digital Media Studio Project (DMSP)</span> for the <span class='bold'>MSc in Design and Digital Media</span> (2009-2010) at the <span class='bold'>University of Edinburgh</span>.
            <br /><br />
           				The group consists of three University students: <span class='bold'>Dimitris Patrikios</span>, <span class='bold'>Siyao Chen</span> and <span class='bold'>Dimitrios Chantzis</span>, supervised by <span class='bold'>Dr. Chris Speed</span>.
            <br /><br/>
            Briefly, index.html is about:
            <ul class='prj_info_list'>
                <li><span class='bold'>understanding</span> that every geographical location can be interpreted in unique and interesting ways according to whoever experiences it.</li>               
                <li><span class='bold'>acknowleding</span> that spaces and places can be described as indexes to databases.</li>               
                <li><span class='bold'>reasearching</span> how inadequate are modern geographical systems to shape our experiences of the environment.</li>                
                <li><span class='bold'>experimenting</span> on ways to enrich the representation of data that refer to our surroundings.</li>
                <li><span class='bold'>creating</span> a physical map to act as a database filled with sounds, smells, emotions and visions that people experienced while walking in a selected area in Edinburgh.</li>
                <li><span class='orange2'>implementing</span> unique ways to express data and export information.</li>
			</ul>
                        </div>
                        <div class='prj_links'><a href='http://dimitrioschantzis.com/demos/index[dot]html/' class='prj_link' target='_blank' title='index[dot]html website'>» website</a></div>
                        <div class='prj_images'>
                        	<ul class='image_grid'>
                            	<li><a href='projectfiles/index[dot]html/index01.jpg' target='_blank'><img src='projectfiles/index[dot]html/index01thumb.jpg' alt='' /></a></li>
                                <li><a href='projectfiles/index[dot]html/index02.jpg' target='_blank'><img src='projectfiles/index[dot]html/index02thumb.jpg' alt='' /></a></li>
                                <li><a href='projectfiles/index[dot]html/index03.jpg' target='_blank'><img src='projectfiles/index[dot]html/index03thumb.jpg' alt='' /></a></li>
                                <li><a href='projectfiles/index[dot]html/index04.jpg' target='_blank'><img src='projectfiles/index[dot]html/index04thumb.jpg' alt='' /></a></li>
                                <!--<li><a href=''><img src='projectfiles/index[dot]html/index05thumb.jpg' alt='' /></a></li>-->
                        	</ul><!--image_grid-->
                        </div>
                    </div><!--prj_col01-->
                    <div class='prj_col02'>
                        <iframe src='http://player.vimeo.com/video/11342848' width='150' height="120" frameborder='0'></iframe>
                        <br />
                        <iframe src='http://player.vimeo.com/video/11342162' width='150' height="120" frameborder='0'></iframe>
                        <br />
                        <iframe src='http://player.vimeo.com/video/11343283' width='150' height="120" frameborder='0'></iframe>
                        <br />
                        <iframe src='http://player.vimeo.com/video/11342286' width='150' height="120" frameborder='0'></iframe>
                    </div>
<?
}
?>
