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
	  autoplay: true,
	  prevArrow:"<button type='button' class='slick-prev slick-buttons icon icon-arrow-icon'>Previous</button>",
	  nextArrow:"<button type='button' class='slick-next slick-buttons icon icon-arrow-icon'>Next</button>",
	  slidesToShow: 5,
	  slidesToScroll: 1,
	  responsive: [
		{
	      breakpoint: 992,
	      settings: {
	        slidesToShow: 4,
	        slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 1
	      }
	    },
		{
	      breakpoint: 667,
	      settings: {
	        slidesToShow: 2,
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
	
});