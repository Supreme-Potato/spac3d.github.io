$(document).ready(function () {
	// MODAL
	$('select').formSelect();
	$('.collapsible').collapsible();
	$('#modal1').modal();
	$('#modal2').modal();
	$('#modal3').modal();
	$('.collapsible').collapsible();
	$('.slider').slider({
		full_width: false,
		interval: 5000,
		transition: 800,
	});
	$('.parallax').parallax();
	$('.carousel').carousel({
		fullWidth: true,
		indicators: true
	});
	$('.sidenav').sidenav();
	$('.fixed-action-btn').floatingActionButton();
	$('.tooltipped').tooltip();
});

var header = $('header');
var range = 200;
var headerText = $('header-text');

$(window).on('scroll', function () {
	$(".header-text").css("color", "red");
	var scrollTop = $(this).scrollTop(),
		height = header.outerHeight(),
		offset = height / 1.1,
		calc = 1 - (scrollTop - offset + range) / range;


	header.css({
		'opacity': calc
	});

	if (calc > '1') {
		header.css({
			'opacity': 1
		});



	} else if (calc < '0') {
		header.css({
			'opacity': 0
		});

	}

});
