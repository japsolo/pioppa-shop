/* global $ */

// Main-Nav
$('.toggle-nav').click(function (e) {
	e.preventDefault();
	$('.main-nav').toggleClass('show');
	$('html, body').toggleClass('no-scroll');
	if ($('i', this).hasClass('ion-navicon-round')) {
		$('i', this).removeClass('ion-navicon-round');
		$('i', this).addClass('ion-close-round');
		$('.toggle-nav').css({
			'background-color': '#D62327'
		});
	} else {
		$('i', this).removeClass('ion-close-round');
		$('i', this).addClass('ion-navicon-round');
		$('.toggle-nav').css({
			'background-color': 'rgba(102, 102, 102, 0.7)'
		});
	}
});

// Sticky-Top-Button
var headerTop = $('.main-header').offset().top;
var headerBottom = headerTop + 500;
$(window).scroll(function () {
	var scrollTop = $(window).scrollTop();
	if (scrollTop > headerBottom) {
		if ($('#btn-top').is(':hidden')) {
			$('#btn-top').fadeIn('slow');
		}
	} else {
		$('#btn-top').fadeOut('fast');
	}
});

// To Top Button
$('#btn-top').click(function (e) {
	e.preventDefault();
	$('html, body').animate({scrollTop: 0}, 'slow');
});

// Categories Nav
$('.category-list-wrap h3').click(function () {
	var father = $(this).parent();
	$('ul', father).slideToggle(350);
});

$('.categories-products-list h2').click(function () {
	$('.category-list-wrap').slideToggle(350);
});

// Select box change text
var combo = $('.select-box_combo');
combo.bind('change', changeText);
function changeText () {
	var value = $('option:selected', this).text();
	var parent = $(this).parent();
	$('span', parent).text(value);
}

// Buttons-navbar
let docW = $(document).width();
if (docW >= 992) {
	$('.first-level-nav > li > a').click(e => e.preventDefault());
}

$(window).resize(function () {
	let docW = $(document).width();
	if (docW >= 992) {
		$('.first-level-nav > li > a').click(e => e.preventDefault());
	}
});
