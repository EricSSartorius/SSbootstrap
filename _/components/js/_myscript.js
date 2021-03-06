$(function() {

	//activate schedule tabs
	//var hash = window.location.hash;
	//hash && $('ul.nav a[href="' + hash + '"]').tab('show');

	//controlling opening of accordions
	//$('#monday.accordion-body').addClass('in');
	//$('#artists #tuesday.accordion-body').addClass('in');
	//$('#artists #wednesday.accordion-body').addClass('in');
	//$('#artists #thursday.accordion-body').addClass('in');
	//$('#artists #friday.accordion-body').addClass('in');

	//add bootstrap classes to photos
	$('.aboutthemembers img').addClass('img-circle');
	//$('.memberinfo .photogrid img').addClass('img-circle');


	//highlight the current nav
	$("#home a:contains('HOME')").parent().addClass('active');
	$("#about a:contains('ABOUT')").parent().addClass('active');
	$("#members a:contains('MEMBERS')").parent().addClass('active');
	$("#gallery a:contains('GALLERY')").parent().addClass('active');
	//$("#events a:contains('EVENTS')").parent().addClass('active');
	$("#booking a:contains('BOOKING')").parent().addClass('active');


	//make menus drop automatically
	//$('ul.nav li.dropdown').hover(function() {
	//	$('.dropdown-menu', this).fadeIn();
	//}, function() {
	//	$('.dropdown-menu', this).fadeOut('fast');
	//});//hover

	//show tooltips
	$("[data-toggle='tooltip']").tooltip({ animation: true});

	//show modals

	$('.modalphotos img').on('click', function() {
		$('#modal').modal({
			show: true,
		})

		var mysrc = this.src.substr(0, this.src.length-7) + '.jpg';
		$('#modalimage').attr('src', mysrc);
		$('#modalimage').on('click', function(){
				$('#modal').modal('hide');
		})//hide modal
	});//show modal


}); //jQuery is loaded