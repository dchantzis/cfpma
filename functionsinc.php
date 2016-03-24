<?php
//$type can be 'home' or 'projects'
function get_sidebar($pageID)
{
	$projectsNaviArray = find_previous_n_next_pages($pageID);
?>
<div id='yellow_background' class='enhanced visibilityhidden'>&nbsp;</div>
<div id='sidebar'>
    <div id='logo'><a href='index.php' id='gohome' class='main' title='[Carbon Friendly Proto Media Alliance]'>cfpm<span class='red'>a</span></a></div>
    <div id='logo_notes' class='enhanced visibilityhidden'>[Carbon Friendly Proto Media <span class='red'>Alliance</span>]</div>
    
    <div id='navi_basic'>
        <span id='navi_about'><a href='#about' class='basic' title='[About]'>...</a></span>
        <span id='navi_contact'><a href='#contact' class='basic' title='[Contact Us]'><img src='layout/images/mail_s.gif' /></a></span>
        <span id='navi_info'><a href='#info' class='basic' title='[Info]'>i</a></span>
    </div>
    <div id='navi_basic_notes' class='enhanced visibilityhidden'></div>
    
    <div id='navi_language_bar'>
    	<span id='navi_eng' class='selected'><a href='#eng' class='basic' title='[English]'>eng</a></span>
        /
        <span id='navi_gr'><a href='#eng' class='basic' title='[Greek]'>gr</a></span>
    </div>
    <div id='navi_language_bar_notes' class='enhanced visibilityhidden'></div>
    
    <div id='navi_projects'>
    	<span id='projects_all'><a href='index.php' class='basic project_navi' title='[All Projects]'>projects</a></span>
        <span id='projects_prev'><a id='projectsprev_element' href='<?=$projectsNaviArray['prev']?>' class='basic project_navi' title='[Previous Project]'>&lt;</a></span>
        <span id='projects_next'><a id='projectsnext_element' href='<?=$projectsNaviArray['next']?>' class='basic project_navi' title='[Next Project]'>&gt;</a></span>
    </div>
    <div id='navi_projects_notes' class='enhanced visibilityhidden'></div>
</div><!--sidebar-->
<?
}//get_sidebar()

function get_projectsList()
{
?>
<ul id='projects_list'>
    <li id='pr_index' class='project_item'><a href='pr_index.php' class='projects_navi'>index[dot]html</a></li>
    <li id='pr_3d' class='project_item'><a href='pr_3d.php' class='projects_navi'>steampunk themed 3D animation</a></li>
    <li id='pr_illustration' class='project_item'><a href='pr_illustration.php' class='projects_navi'>illustration</a></li>
    <li id='pr_photography' class='project_item'><a href='pr_photography.php' class='projects_navi'>photography</a></li>
   	<li id='pr_flash' class='project_item'><a href='pr_flash.php' class='projects_navi'>cfpma flash game</a></li>
</ul><!--projects_list-->    
<?
}//get_projectsList()

function get_submission_details($type)
{
	switch($type)
	{
		case 1:
?>
<div id='submission_details'>
	<div id='submission_details_close'><span>close</span></div>
    <div>Project brief: Move A. cfpma media site</div>
    
    The global organization cfpma (Carbon Friendly Proto Modern Alliance) wants a website that provides a platform for promoting its own activities and that of various designers, artists and producers in the areas of film, performance, and digital media. cfpma requires a website for showcasing still images, video and sonic outputs.
    You are to provide a simple website that displays or links to flash or QT videos. Using CSS style sheets create two versions of your website
    <ol> 
        <li>suitable for viewing in the browser of a desktop/laptop computer </li>
        <li>cfpma-mobile: suitable for viewing on a mobile smartphone platform (480x320 px at 163 ppi)</li>
    </ol>
    You can deploy some of the symbolism and iconography developed in the course P00174. Video sources will include those developed in that course. Use HTML routines for embedding video on your web page.

	
</div><!--submission_details-->
<?php
		break;
		case 2:
?>
<div id='footer_col03'>

    <div class='footer_section_title'>Project brief: Move A. cfpma media site</div>
    
    The global organization cfpma (Carbon Friendly Proto Modern Alliance) wants a website that provides a platform for promoting its own activities and that of various designers, artists and producers in the areas of film, performance, and digital media. cfpma requires a website for showcasing still images, video and sonic outputs.
    You are to provide a simple website that displays or links to flash or QT videos. Using CSS style sheets create two versions of your website
    <ol> 
        <li>suitable for viewing in the browser of a desktop/laptop computer </li>
        <li>cfpma-mobile: suitable for viewing on a mobile smartphone platform (480x320 px at 163 ppi)</li>
    </ol>
    You can deploy some of the symbolism and iconography developed in the course P00174. Video sources will include those developed in that course. Use HTML routines for embedding video on your web page.

</div><!--submission_details-->
<?php
		break;
	}//switch($type)
}//get_submission_details()

function get_footer()
{
?>
<div id='fixed_section' class='height_correction'>
    <div id='section_about'>
        <a name='about' id='about'></a>
        <div class='section_title'>about</div>
        <div class='section_underline'>&nbsp;</div>
        <div class='section_body'>
        
        	<img id='doorstep' src='layout/images/doorstep.jpg' title='' alt='Alison House Doorstep' width='133' height='200' />
			
CFPMA(Carbon Friendly Proto Modern Alliance) is a global organization with activities spanning from design (digital and analogue), illustration, film, animation, performance to digital media. <br /><br />
This  is just a <b>DEMO</b> website.

			<div class='clearboth'>&nbsp;</div>
        </div><!--section_body-->
        
    </div><!--section_about-->
    
    <div id='section_contact'>
        <a name='contact' id='contact' />
        <div class='section_title'>contact</div>
        <!--<div id='section_underline'>&nbsp;</div>-->
        <div class='section_body'>

                        <div id='contact_container'>
                        
                            <div id='contact_loader' class='displaynone'>&nbsp;</div>
                            <div id='contact_messages' class='displaynone' class='messages'>&nbsp;</div>
                            
                            <ul id='contact'>
                                <li>
                                    <input class='formtext' type='text' name='contact_name' id='contact_name' maxlength='70' value='[type your name][required]' />
                                    <span id='contact_name_message' class='messages'></span>
                                </li>
                                <li>
                                    <input class='formtext' type='text' name='contact_email' id='contact_email' maxlength='70' value='[type your email][required]' />
                                    <span id='contact_email_message' class='messages'></span>
                                </li>
                                <li>
                                    <input class='formtext' type='text' name='contact_regarding' id='contact_regarding' maxlength='180' value='[regarding][not required]' />
                                    <span id='contact_regarding_message' class='messages'></span>
                                </li>
                                <li>
                                    <textarea class='formtext' name='contact_message' id='contact_message' cols='' rows=''>[type your message][required]</textarea>
                                    <span id='contact_message_message' class='messages'></span>
                                </li>
                                <li class='charcounters'><span class='counters' id='scounter'>2500</span> remaining characters</li>
                                <li><input class='button' type='submit' name='contact_send' id='contact_send' value='send' /></li>
                            </ul>
                        </div><!--contact_container-->


        </div><!--section_body-->
    </div><!--section_contact-->
</div><!--fixed_section-->
<div class='clearboth'>&nbsp;</div>
<div id='footer'>
	<div id='footer_align_fix'>
        <div id='footer_col01'>
            <span class='footer_section_title'>General Links</span>
            <ul id='general_links' class='footer_navi'>
            	<li><a href='index.php' class=''>Home</a></li>
                <li><a href='#about' class=''>About</a></li>
                <li><a href='#contact' class=''>Contact Us</a></li>
                <li><a href='#top' id='footer_submission_info' class=''>Submission Information</a></li>
            </ul>
        </div>
        
        <div id='footer_col02'>
            <span class='footer_section_title'>Projets Links</span>
            <ul id='projects_links' class='footer_navi'>
                <li><a href='pr_index.php' class=''>index[dot]html</a></li>
                <li><a href='pr_flash.php' class=''>cfpma flash game</a></li>
                <li><a href='pr_3d.php' class=''>steampunk themed 3D animation</a></li>
                <li><a href='pr_illustration.php'>illustration</a></li>
                <li><a href='pr_photography.php'>photography</a></li>
            </ul>
        </div>
        
        <?=get_submission_details(2)?>
        
    </div><!--footer_align_fix-->
    <div class='clearboth'>&nbsp;</div>
</div><!--footer-->

<div id='copyright'>A <a href='http://ddm.ace.ed.ac.uk/postgradstudy/' class='basic' title='MSc Design and Digital Media'>University of Edinburgh, MSc Design and Digital Media</a> submission revision, 2011 by <a href='http://dimitrioschantzis.com' class='basic' title='[Website]'>Dimitrios Chantzis</a></div><!--copyright-->
<?
}//get_footer()

function find_previous_n_next_pages($pageID)
{
	$projectsNaviArray = array("prev" => "", "next" => "");
	
	switch($pageID)
	{
		case 'pr_index':
			$projectsNaviArray['prev'] = 'pr_flash.php';
			$projectsNaviArray['next'] = 'pr_3d.php';
			break;
		case 'pr_3d':
			$projectsNaviArray['prev'] = 'pr_index.php';
			$projectsNaviArray['next'] = 'pr_illustration.php';
			break;
		case 'pr_illustration':
			$projectsNaviArray['prev'] = 'pr_3d.php';
			$projectsNaviArray['next'] = 'pr_photography.php';
			break;
		case 'pr_photography':
			$projectsNaviArray['prev'] = 'pr_illustration.php';
			$projectsNaviArray['next'] = 'pr_flash.php';
			break;
		case 'pr_flash':
			$projectsNaviArray['prev'] = 'pr_photography.php';
			$projectsNaviArray['next']= 'pr_index.php';
			break;
		default:
			//'index.php'
			$projectsNaviArray['prev'] = 'pr_photography.php';
			$projectsNaviArray['next']= 'pr_index.php';
			break;
	}//switch
	
	return $projectsNaviArray;
}//find_previous_n_next_pages($pageID)

function json_loadpage_response($param_wallpaper,$pr_title,$pr_pagefile,$param_description,$param_images,$param_video,$param_flash,$param_prevProject,$param_nextProject,$param_currentProjectID)
{
	$response = array();
	$response['responsetype'] = 'routine';
	$response['wallpaper'] = $param_wallpaper;
	$response['title'] = $pr_title;
	$response['pagefile'] = $pr_pagefile;
	$response['description'] = $param_description;
	$response['images'] = $param_images;
	$response['video'] = $param_video;
	$response['flash'] = $param_flash;
	$response['prevproject'] = $param_prevProject;
	$response['nextproject'] = $param_nextProject;
	$response['currentprojectid'] = $param_currentProjectID;
	
	echo json_encode($response);
	exit;
}//json_loadpage_response($param_wallpaper,$pr_title,$param_description,$param_images,$param_video,$param_flash,$param_prevProject,$param_nextProject,$param_currentProjectID)

function get_stuffToLoad()
{
?>
<img src='./layout/images/wp.png' class='displaynone' />
<img src='./layout/images/bglineblack97.png' class='displaynone' />
<img src='./layout/images/bglinewhite80.png' class='displaynone' />

<img src='./layout/images/wp_index[dot]html.png' class='displaynone' />
<img src='./layout/images/wp_illustration.png' class='displaynone' />
<img src='./layout/images/wp_3d.png' class='displaynone' />
<img src='./layout/images/wp_photography.png' class='displaynone' />
<img src='./layout/images/wp_flash.png' class='displaynone' />

<img src='./layout/images/bglinewhite80.png' class='displaynone' />
<img src='./layout/images/bglinewhite80.png' class='displaynone' />
<img src='./layout/images/bglinewhite80.png' class='displaynone' />
<?
}//get_stuffToLoad()
?>