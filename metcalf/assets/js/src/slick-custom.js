/**
 * Slick Custom
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";

	$('.slides').slick({
		dots: false,
		infinite: true,
		fade: true,
		autoplay: true,
  		autoplaySpeed: 5000,
  		speed: 1300,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: false,
    	nextArrow: false,
    	swipeToSlide: true,
		cssEase: 'ease-in-out'
	});

	$('#awards-repeater').slick({
	  infinite: true,
	  prevArrow:"<button type='button' class='slick-prev slick-buttons icon icon-arrow-icon'>Previous</button>",
	  nextArrow:"<button type='button' class='slick-next slick-buttons icon icon-arrow-icon'>Next</button>",
	  slidesToShow: 5,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});

	$('.results-slick').slick({
		dots: false,
		infinite: true,
		prevArrow:"<button type='button' class='slick-prev slick-buttons icon icon-arrow-icon'>Previous</button>",
	  nextArrow:"<button type='button' class='slick-next slick-buttons icon icon-arrow-icon'>Next</button>",
	});

	$('#testimonial-slick').slick({
		dots: false,
		infinite: true,
		autoplay: false,
		fade: true,
  		autoplaySpeed: 5000,
  		speed: 600,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow:"<button type='button' class='slick-prev slick-buttons icon icon-arrow-icon'>Previous</button>",
	  nextArrow:"<button type='button' class='slick-next slick-buttons icon icon-arrow-icon'>Next</button>",
    	swipeToSlide: true,
		cssEase: 'ease-in-out'
	});


	$('#fp-slick').slick({
		dots: true,
		infinite: true,
		autoplay: false,
		fade: true,
		autoplaySpeed: 9000,
		pauseOnHover: true,
		pauseOnFocus: true,
  		speed: 600,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow:"<button type='button' class='slick-prev slick-buttons icon icon-arrow-icon'>Previous</button>",
	    nextArrow:"<button type='button' class='slick-next slick-buttons icon icon-arrow-icon'>Next</button>",
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
		responsive: [
			{
				breakpoint: 992,
				settings: {
					dots: false,
					autoplay: true
				}
			}
		]
	});


	$('#slick-slide-control30').html('DUI <span class="icon-arrow-icon"></span>');
	$('#slick-slide-control31').html('Domestic Violence <span class="icon-arrow-icon"></span>');
	$('#slick-slide-control32').html('Violent Crimes <span class="icon-arrow-icon"></span>');
	$('#slick-slide-control33').html('Sex Crimes <span class="icon-arrow-icon"></span>');
	$('#slick-slide-control34').html('Drug Crimes <span class="icon-arrow-icon"></span>');
	$('#slick-slide-control35').html('Personal Injury <span class="icon-arrow-icon"></span>');
	
});