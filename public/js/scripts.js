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

function stickyRelocate () {
	var windowTop = $(window).scrollTop();
	var anchor = $('.sticky-anchor').offset().top;
	if (windowTop > anchor) {
		$('.main-nav').addClass('stick');
	} else {
		$('.main-nav').removeClass('stick');
	}
}

$(function () {
	$(window).scroll(stickyRelocate);
});

// On focus-blur input contact form
$('.form-control input, .form-control textarea').focus(function () {
	$(this).css('opacity', '1');
});

$('.form-control input, .form-control textarea').blur(function () {
	if ($(this).val() !== '') {
		$(this).css('opacity', '0.4');
	}
});

$('.select-box_combo').change(function () {
	var padre = $(this).parent();
	var combo = $(this, padre);
	console.log(combo.val());
	if (combo.val() !== '') {
		$(padre).css('opacity', '0.4');
	}
});

// Select box change text
var combo = $('.select-box_combo');
combo.bind('change', changeText);
function changeText () {
	var value = $('option:selected', this).text();
	var parent = $(this).parent();
	$('span:not(.fake-arrow)', parent).text(value);
}

// More-Less product
var btnLess = $('.shop-cart-quantity button[name=lessBtn]');
var btnMore = $('.shop-cart-quantity button[name=moreBtn]');

btnLess.click(function () {
	var parent = $(this).parent();
	var quantity = $('input[name=productQuantity]', parent);
	if (quantity.val() > 1) {
		var actualValue = quantity.val();
		actualValue--;
		quantity.val(actualValue);
	}
});

btnMore.click(function () {
	var parent2 = $(this).parent();
	var quantity2 = $('input[name=productQuantity]', parent2);
	var actualValue2 = quantity2.val();
	actualValue2++;
	quantity2.val(actualValue2);
});

// Delete product
var deleteBtn = $('img[data-id=deleteBtn]');

deleteBtn.click(function () {
	var grantParent = $(this).parent().parent();
	grantParent.fadeOut('slow');
});

// Custom-Input-File
(function (document, window, index) {
	var inputs = document.querySelectorAll('.inputfile');

	Array.prototype.forEach.call(inputs, function (input) {
		var label = input.nextElementSibling;
		var labelVal = label.innerHTML;

		input.addEventListener('change', function (e) {
			var fileName = '';
			if (this.files && this.files.length > 1) {
				fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
			} else {
				fileName = e.target.value.split('\\').pop();
			}

			if (fileName) {
				label.querySelector('span').innerHTML = fileName;
			} else {
				label.innerHTML = labelVal;
			}
		});
	});
}(document, window, 0));
