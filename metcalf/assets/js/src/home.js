/**
 * Home Page Scripting
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";
	
/* PRACTICE AREAS BLOCK */

	$('.tab-content-container .tab-content').hide();
	  //Then show the first content div
	  
	  $('.tab-content-container .tab-content:first').show();
	  
	  //Add active class to the first tab link
	  $('ul.tab-selectors li:first').addClass('active');
	  
	  //Functionality when a tab is clicked
	  $('ul.tab-selectors li a').click(function(){
		
		//Firstly remove the current active class
		$('ul.tab-selectors li').removeClass('active');
		
		//Apply active class to the parent(li) of the link tag
		$(this).parent().addClass('active');
		
		//Set currentTab to this link
		var currentTab = $(this).attr('href');
		
		//Hide away all tabs
		$('.tab-content-container .tab-content').hide();  
		
		//show the current tab
		$(currentTab).show();
		
		//Stop default link action from happening
	    return false;
	}); 

/* DEFENSE BLOCK */

	$('.tab-content-container-big .tab-content-big').hide();
	  
	  //Then show the first content div
	  $('.tab-content-container-big .tab-content-big:first').show();

	  $('.tab-content-container-big #tab-3-big').show();
	  
	  //Add active class to the first tab link
	  $('ul.tab-selectors-big li:first').addClass('active');
	  
	  //Functionality when a tab is clicked
	  $('#fp-defense ul.tab-selectors-big li').click(function(){
		
		//Firstly remove the current active class
	    $('#fp-defense ul.tab-selectors-big li').removeClass('active');
		
		//Apply active class to the parent(li) of the link tag
		$(this).closest('li').addClass('active');
		
		//Set currentTab to this link
	    var currentTab = $(this).children('a').attr('href');
		
		//Hide away all tabs
	    $('#fp-defense .tab-content-container-big .tab-content-big').hide();   
		
		//show the current tab
	    $(currentTab).show();
		
		//Stop default link action from happening
	    return false;
	}); 

	//Functionality when a tab is clicked
	$('#fp-court ul.tab-selectors-big li').click(function(){

		//Firstly remove the current active class
		$('#fp-court ul.tab-selectors-big li').removeClass('active');
		
		//Apply active class to the parent(li) of the link tag
		$(this).closest('li').addClass('active');
		
		//Set currentTab to this link
		var currentTab = $(this).children('a').attr('href');
		
		//Hide away all tabs
		$('#fp-court .tab-content-container-big .tab-content-big').hide();   
		
		//show the current tab
		$(currentTab).show();
		
		//Stop default link action from happening
		return false;
	}); 


});