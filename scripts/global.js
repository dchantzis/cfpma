var previousProjectURL = 'pr_photography.php';
var nextProjectURL = 'pr_index.php';
var doNothing = '';
var contactMessageMaxLength = 2500;
var switchContentReq = null;
var contentPath = null;


window.addEvent('domready',function() {

	//if javascript is enabled, then do the following
	$$('a').setProperty('title', '');
	$$('project_navi').setProperty('href', '#');
	$$('.enhanced').removeClass('visibilityhidden');
	

	$('navi_basic_notes').hide();
	$('navi_language_bar_notes').hide();
	$('navi_projects_notes').hide();
	//$('wallpaper').fade(1);

	init_contactme_elements();
	
	//if javascript is enables the following changes are made to the pages DOM:
	$('footer_col03').dispose();
	$('footer_col01').setStyle('width', '300px');
	$('footer_col02').setStyle('width', '300px');
	$('footer_align_fix').setStyle('width', '650px');
	$('footer').setStyle('height', '200px');


	var loaderYellow = new Fx.Slide('yellow_background', {mode: 'horizontal'});
	//loaderYellow.slideIn().chain(function(){$('wallpaperimg').src = 'layout/images/wp_illustrations.png'; loaderYellow.slideOut();});
	var logoNotes = new Fx.Slide('logo_notes', {mode: 'horizontal',duration: 400,});
	
	//var projectsList = new Fx.Slide('projects_list', {mode: 'horizontal'});
	logoNotes.hide();
	loaderYellow.hide();
	$$('.project_item').fade('hide');
	$('submission_details').fade('hide');
	
	yellowBackgroundWidth = (window.innerWidth)+'px';
	yellowBackgroundHeight = (window.innerHeight)+'px';
	$('yellow_background').setStyle('width', yellowBackgroundWidth);
	$('yellow_background').setStyle('height', yellowBackgroundHeight);
	$('yellow_background').setStyle('top', (window.innerWidth)+'50px');
	
	//$('fixed_section').setStyle('margin-top', (window.innerHeight+15)+'px');
	new Fx.SmoothScroll({duration: 500},window);

	if(document.body.className == 'index'){
		//LOGO LINK TO HOME
		doNothing = function(e){e.stop();}
		$('gohome').addEvent('click',doNothing);
	}//

	$('logo').addEvent('mouseover', function(event){event.stop(); logoNotes.toggle();});
	$('logo').addEvent('mouseout', function(event){event.stop(); logoNotes.toggle();});
	$('logo_notes').addEvent('mouseout', function(event){event.stop(); logoNotes.slideOut();});

	$('navi_basic').addEvent('mouseout',function(e){e.stop();
		$('navi_basic_notes').hide();
		$('navi_basic_notes').innerHTML = '';
	});
	$('navi_about').addEvent('mouseover',function(e){e.stop();
		$('navi_basic_notes').innerHTML = 'about CFPMA';
		$('navi_basic_notes').show();
	});
	$('navi_contact').addEvent('mouseover',function(e){e.stop();
		$('navi_basic_notes').innerHTML = 'contact us';
		$('navi_basic_notes').show();
	});
	$('navi_info').addEvent('mouseover',function(e){e.stop();
		$('navi_basic_notes').innerHTML = 'submission information';
		$('navi_basic_notes').show();
	});
	$('navi_info').addEvent('click',function(e){e.stop();
		$('submission_details').fade('toggle');
	});
	$('footer_submission_info').addEvent('click',function(e){e.stop();
		$('submission_details').fade('toggle');
	});
	$('submission_details_close').addEvent('click',function(e){e.stop();
		$('submission_details').fade(0);
	});
	
	$('navi_projects').addEvent('click',function(e){e.stop();
		$$('li.line01').fade(1);
		$$('li.line02').fade(1);
	});
	
	$('navi_language_bar').addEvent('mouseout',function(e){e.stop();
		$('navi_language_bar_notes').hide();
		$('navi_language_bar_notes').innerHTML = '';
	});
	$('navi_eng').addEvent('mouseover',function(e){e.stop();
		$('navi_language_bar_notes').innerHTML = 'english version';
		$('navi_language_bar_notes').show();
	});
	$('navi_gr').addEvent('mouseover',function(e){e.stop();
		$('navi_language_bar_notes').innerHTML = 'greek version [inactive feature]';
		$('navi_language_bar_notes').show();
	});
	
	$('navi_projects').addEvent('mouseout',function(e){e.stop();
		$('navi_projects_notes').hide();
		$('navi_projects_notes').innerHTML = '';
	});
	$('projects_all').addEvent('mouseover',function(e){e.stop();
		$('navi_projects_notes').innerHTML = 'all';
		$('navi_projects_notes').show();
	});
	$('projects_prev').addEvent('mouseover',function(e){e.stop();
		$('navi_projects_notes').innerHTML = 'previous';
		$('navi_projects_notes').show();
	});
	$('projects_next').addEvent('mouseover',function(e){e.stop();
		$('navi_projects_notes').innerHTML = 'next';
		$('navi_projects_notes').show();
	});
	
	$('projects_all').addEvent('click',function(e){e.stop();
		$('pr_index').fade('toggle').chain(function(){
   			$('pr_3d').fade('toggle').chain(function(){
   				$('pr_illustration').fade('toggle').chain(function(){
   					$('pr_photography').fade('toggle').chain(function(){
   						$('pr_flash').fade('toggle'); //pr_photography
					}.delay(100));
				}.delay(100));
			}.delay(100));
		}.delay(100));
	});
	
	$('projects_prev').addEvent('click', function(e){e.stop();
		if($('content')){$('content').dispose();} $('submission_details').fade(0);
		loaderYellow.slideIn().chain(function(){
			validateNsubmitMultipleValues(previousProjectURL);
			loaderYellow.slideOut();
		});// 
	});
	$('projects_next').addEvent('click', function(e){e.stop();
		if($('content')){$('content').dispose();} $('submission_details').fade(0);
		loaderYellow.slideIn().chain(function(){
			validateNsubmitMultipleValues(nextProjectURL);
			loaderYellow.slideOut();
		});// 
	});
	//
	//
	$('pr_index').addEvent('click', function(e){e.stop();
		if($('content')){$('content').dispose();} $('submission_details').fade(0);
		loaderYellow.slideIn().chain(function(){			
			validateNsubmitMultipleValues('pr_index.php');
			loaderYellow.slideOut();
		});// 
	});
	$('pr_flash').addEvent('click', function(e){e.stop();
		if($('content')){$('content').dispose();} $('submission_details').fade(0);
		loaderYellow.slideIn().chain(function(){
			validateNsubmitMultipleValues('pr_flash.php');
			loaderYellow.slideOut();
		});// 
	});
	$('pr_3d').addEvent('click', function(e){e.stop();
		if($('content')){$('content').dispose();} $('submission_details').fade(0);
		loaderYellow.slideIn().chain(function(){
			validateNsubmitMultipleValues('pr_3d.php');
			loaderYellow.slideOut();
		});// 
	});
	$('pr_illustration').addEvent('click', function(e){e.stop();
		if($('content')){$('content').dispose();} $('submission_details').fade(0);
		loaderYellow.slideIn().chain(function(){
			validateNsubmitMultipleValues('pr_illustration.php');
			loaderYellow.slideOut();
		});// 
	});
	$('pr_photography').addEvent('click', function(e){e.stop();
		if($('content')){$('content').dispose();} $('submission_details').fade(0);
		loaderYellow.slideIn().chain(function(){
			validateNsubmitMultipleValues('pr_photography.php');
			loaderYellow.slideOut();
		});// 
	});
});

function loadPageContent(resultsArray)
{
	//change the body className with that of the loaded current project
	document.body.className = resultsArray[10]; //currentprojectid
	$('gohome').removeEvent('click',doNothing);
	
	$('wallpaperimg').src = resultsArray[1]; //wallpaper
	previousProjectURL = resultsArray[8]; //prevproject
	nextProjectURL = resultsArray[9]; //nextproject
	$('projectsnext_element').href = resultsArray[8]; //prevproject
	$('projectsnext_element').href = resultsArray[9]; //nextproject
	
	var contentElement = new Element('div', {'id': 'content'});
	contentElement.inject($('content_placeholder') , 'top');
	//$('content').innerHTML = resultsArray[4];
	
	contentPath = resultsArray[3];
	switchContentReq = new Request.HTML({url:contentPath, 
		onSuccess: function(html) {switchSiteContents('success',html);}, 
		onFailure: function() {switchSiteContents('failure',html);}
	}).post({'loadtype': 'dom'});
	switchContentReq.send();

	/*
	json response 'blueprint'
	resultsArray[0] = responseObj.responsetype;
	resultsArray[1] = responseObj.wallpaper;
	resultsArray[2] = responseObj.title;
	resultsArray[3] = responseObj.pagefile;
	resultsArray[4] = responseObj.description;
	resultsArray[5] = responseObj.images;
	resultsArray[6] = responseObj.video;
	resultsArray[7] = responseObj.flash;
	resultsArray[8] = responseObj.prevproject;
	resultsArray[9] = responseObj.nextproject;
	resultsArray[10] = responseObj.currentprojectid;
	*/
}//loadPageContent

function switchSiteContents(type,html){
	if(type=='success'){$('content').set('text', ''); $('content').adopt(html);}//success
	else if(type=='failure') { $('content').set('text', 'Error: Unable to load page.');}//failure
}//switchSiteContents()

function init_contactme_elements()
{
	$('contact_name').addEvent('click',function(e){e.stop(); if($('contact_name').value=='[type your name][required]'){$('contact_name').value='';}});
	$('contact_name').addEvent('blur',function(e){e.stop(); if($('contact_name').value==''){$('contact_name').value='[type your name][required]';}});
	
	$('contact_email').addEvent('click',function(e){e.stop(); if($('contact_email').value=='[type your email][required]'){$('contact_email').value='';}});
	$('contact_email').addEvent('blur',function(e){e.stop(); if($('contact_email').value==''){$('contact_email').value='[type your email][required]';}});
	
	$('contact_regarding').addEvent('click',function(e){e.stop(); if($('contact_regarding').value=='[regarding][not required]'){$('contact_regarding').value='';}});
	$('contact_regarding').addEvent('blur',function(e){e.stop(); if($('contact_regarding').value==''){$('contact_regarding').value='[regarding][not required]';}});
	
	$('contact_message').addEvent('click',function(e){e.stop(); if($('contact_message').value=='[type your message][required]'){$('contact_message').value='';}});
	$('contact_message').addEvent('focus',function(e){e.stop(); if($('contact_message').value=='[type your message][required]'){$('contact_message').value='';}});
	$('contact_message').addEvent('blur',function(e){e.stop(); if($('contact_message').value==''){$('contact_message').value='[type your message][required]';}});
	
	$('contact_message').addEvent('keyup',function(e){e.stop(); countChars('contact_message','scounter',contactMessageMaxLength);});
	$('contact_send').addEvent('click',function(e){e.stop(); alert('This is only a demo site. This function is inactive.') });
}//init_contactme_elements()
function countChars(fieldID,counterID,maxChars)
{
	var remainingChars = maxChars-$(fieldID).value.length;
	$(counterID).innerHTML = remainingChars;
	if(remainingChars<=99) {$(counterID).style.color="#FF0000";}
	if(remainingChars>99) {$(counterID).style.color="#999999";}
}//countChars(elementID)
