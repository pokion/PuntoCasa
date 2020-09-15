$(document).ready(function(){
	$('.sidenav').sidenav({edge: 'right'});
	$('.collapsible').collapsible();
	$('.nestActivator').click(function(){
		$('.navNest').toggleClass('nestOff');
	});
	$('.materialboxed').materialbox();
	$('.collapsible').collapsible();
});