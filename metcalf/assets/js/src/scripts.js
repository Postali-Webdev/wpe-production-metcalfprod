/**
 * Theme scripting
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";
	$('#menu-icon').addClass('open');


	//Hamburger animation
	 var hamburger = $('#header-top_mobile');
	  hamburger.click(function() {
	     hamburger.find('#menu-icon').toggleClass('active');
	    // Add class to prevent body scroll when menu open
	    $('body').toggleClass('menu-open');
	    $('#mobile-nav').toggleClass('menu-appear');
	     return false;
	    
	  });


    // Toggle mobile menu
	$('.accordion-toggle').click(function() {
	  
	  //$('#mobile-nav').slideToggle(200);
	});

	//Close navigation on #menu-icon tap
	$('.toggle-nav.active').click(function() {		 
	  $('#mobile-nav').slideUp(200);
	});	

	// Mobile nav menu accordion - Append a div that opens nested <ul> while maintaining clickability of parent <li><a>
	$('#global .sub-menu').slideToggle();
	$('#menu-primary-navigation > li.menu-item-has-children > a').after('<div class="accordion-toggle"><div class="fa fa-angle-down"></div></div>');
	$('#menu-primary-navigation-1 > li.menu-item-has-children > a').after('<div class="accordion-toggle"><div class="fa fa-angle-down"></div></div>');
	$('#global #menu-primary-navigation').on('click', 'li.menu-item-has-children', function() {
	  $(this).find('div').toggleClass('toggle-background');
	  $(this).find('div').toggleClass('toggle-rotate');

	  $(this).find('.sub-menu').slideToggle(200);
	});
	

	$('#menu-sidebar-menu .sub-menu, #big-menu .sub-menu').slideToggle();
	// disable default link behavior for accordion menus
	$('#big-menu li a').click(function(e) {
		e.preventDefault(); 
	});

	// in-page accordions
	$('#menu-sidebar-menu .accordion-toggle, #big-menu .accordion-toggle').click(function() {
	  $(this).parent().find('.sub-menu').slideToggle(200);
	  $(this).parent().toggleClass('highlight');
	});

	// sidebar accordions
	$('#menu-sidebar-menu li.menu-item-has-children a.accordion-toggle').click(function(e) {
		e.preventDefault();
	});
	$('#menu-sidebar-menu li.menu-item-has-children .sub-menu li.menu-item-object-page > a').addClass('menu-sidebar_internal-link');
	$('#menu-sidebar-menu li.menu-item-has-children > a')
		.addClass('accordion-toggle')
		.append('<span class="icon icon-plus-icon" id="expand-plus"></span>')
		.click(function(e) {
		e.preventDefault();
	});
	$('#menu-sidebar-menu li.menu-item-has-children .accordion-toggle').click(function() {
		$(this).next('ul').slideToggle(200);
		$(this).parent().toggleClass('highlight');
	});
	

	// add active page state to top menu for desktop
	jQuery(function($) {
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $('.menu-item a').each(function() {
            if (this.href === path) {
                $(this).addClass('this-page');
            }
        });
    });

	//keeps menu expanded so user can tab through sub-menu, then closes menu after user tabs away from last child
	$(document).ready(function() {
		$('.menu-item-has-children').on('focusin', function() {
			var subMenu = $(this).find('.sub-menu');
			subMenu.addClass('show');

			$(this).find('.sub-menu > li:last-child').on('focusout', function() {
				subMenu.removeClass('show');
			});
			$(this).find('.sub-menu').on('mouseout', function() {
				subMenu.addClass('remove');
			});
		});
	});
	
	
});