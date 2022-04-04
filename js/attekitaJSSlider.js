/*
 * Attekita Simple Slider - jQuery Plugin
 *
 * Portifolio: http://www.attekita.com
 *
 * Copyright (c) 2014 - Bullas Attekita
 * Version: 1.0 
 * Requires: jQuery v1.3+
 */

var attekitaJSSlider = function(options){   
  this.options = $.extend({  
    nodes: '.node',  
    nodesPerPage: 1,  
    prevButton: '.nav_prev',  
    nextButton: '.nav_next', 
	useNavigation: false, 
	auto: false,
	time: 7000,
	duration: 1,
	useDots: false,
	dotsContainer: 'contDot',
	classDots: 'dot',
	classAtive: 'active', 
	usePagination: false,
	maxPagesNodes:10,
	arrowHtmlGo:'<img src="img/arrow.png">',
	arrowHtmlBack:'<img src="img/arrow2.png">',
	scrollPosition: 200,
	doScroll:false,
	displayAlt:false,
	altContainer:'.alt_cont'
  }, options);
  this.nodes = null;
  this.dots = null;
  this.navLeft = null;
  this.navRight = null;
  this.isAnimating = false;
  this.currentPage = 0; 
  this.totalPages = 0;
  this.totalNodes = 0;
  this.interval = null;
  this.currentPageNode = 0;
  this.totalPagesNodes = 0;
};

attekitaJSSlider.prototype = {  
  getCurrentPage:function(){
  return this.currentPage;  
  },
  getNumberPages:function(){ 
  return this.totalPages;
  },
  getNumberNodes:function(){
  return this.totalNodes;
  },  
  goToPage: function(index){
	  /*Setup self representation*/
	  var self = this;
	  if(this.isAnimating == false){
		  this.currentPage = index;
		  var $init = this.currentPage * this.options.nodesPerPage;
		  var i = 0;
		  
		  this.nodes.hide();
		  for(var $u = $init; $u < $init + this.options.nodesPerPage; $u++){
			  var node = this.nodes.eq($u);
			  node.css({opacity: 0});
			  node.show();
			  TweenLite.killTweensOf(node);
			  TweenLite.fromTo(node, this.options.duration, {opacity:0},{css:{opacity:1}, ease:'Power3.easeOut',delay:i * 0.1});
			  i++;
		  }
		  
		  if(this.options.displayAlt == true && this.options.nodesPerPage == 1){
			$(this.options.altContainer).hide();
			if(this.nodes.eq($init).attr('alt').length >0){
			$(this.options.altContainer).html(this.nodes.eq($init).attr('alt'));
			$(this.options.altContainer).fadeIn('fast');
			}
		  }

		  if(this.options.useDots){
			  this.dots.removeClass(this.options.classAtive);
			  this.dots.eq(this.currentPage).addClass(this.options.classAtive);
		  }
		  
	  	  if(this.options.auto){
		   clearInterval(this.interval);
		   this.interval =  setInterval( function(){self.next();}, this.options.time);
	  	  }
		  
	  }
  },
  next:function(){
	    if(this.currentPage < this.totalPages - 1){
        	this.goToPage(parseInt(this.currentPage) + 1);
      	}else{
			this.goToPage(0);
		}
  },
  kill:function(){
	  /*Remove navigation*/
	  if(this.options.useNavigation){
		this.navLeft.unbind( "click" ); 
		this.navRight.unbind( "click" ); 
		this.navLeft.show();  
		this.navRight.show();
	  }
	  /*Remove Dots*/
	  if(this.options.useDots){
		   $('#' + this.options.dotsContainer).html("");
		   
	  }
	  
	  delete this;
  },
  buildPages:function(index){ 
  
  	  var self = this;
	  this.currentPageNode = index;
	  var $init = this.currentPageNode * this.options.maxPagesNodes;
	  $('#' + self.options.dotsContainer + ' .dts').hide();
	  for(var $u = $init; $u < $init + this.options.maxPagesNodes; $u++){
		  $('#' + self.options.dotsContainer + ' .dts').eq($u).stop().show();
	  }
	  
  },
  init:function(){
	  /*Setup self representation*/
	  var self = this;
	  /*Setup navigation*/
	  if(this.options.useNavigation){
	  this.navLeft = $(this.options.prevButton);
	  this.navRight = $(this.options.nextButton);	  
	  
	  this.navLeft.click(function(){
      	if(self.currentPage > 0 ){
        	self.goToPage(parseInt(self.currentPage) - 1);
      	} 
	  });
	  this.navRight.click(function(){
      	if(self.currentPage < self.totalPages - 1){
        	self.goToPage(parseInt(self.currentPage) + 1);
      	}
	  });
	  }
	  /*Get nodes*/
	  this.nodes = $(this.options.nodes);
	  this.totalNodes = this.nodes.length;
	  this.totalPages = Math.ceil(this.totalNodes/this.options.nodesPerPage);
	  this.totalPagesNodes = Math.ceil(this.totalPages/this.options.maxPagesNodes);
	  if(this.totalPages == 1){
		 this.options.auto = false; 
		 if(this.options.useNavigation){
			 this.navLeft.hide();
			 this.navRight.hide();
		 }
	  }
	  /*Start Slider*/
	  if(this.options.useDots){
		   $('#' + this.options.dotsContainer).html("");
		   if(this.totalPages > 1){

		   for(var $u = 0; $u < this.totalPages; $u++){
			   if(this.options.usePagination){
	 		   	var $pag = $u + 1;
			   	$('#' + self.options.dotsContainer).append('<span class="' + self.options.classDots + ' dts" index="'+ $u +'">' + $pag + '</span>');  
			   	
		   	    }else{
				 $('#' + self.options.dotsContainer).append('<span class="' + self.options.classDots + ' dts" index="'+ $u +'"></span>');
			   }
		   }	

		   if(this.totalPagesNodes > 1){
			   $('#' + self.options.dotsContainer).prepend('<span class="' + self.options.classDots + ' back">'+ self.options.arrowHtmlBack +'</span>');  
			   $('#' + self.options.dotsContainer).append('<span class="' + self.options.classDots + ' go">'+ self.options.arrowHtmlGo +'</span>');
			   $('#' + self.options.dotsContainer + " .back").click(function(){
      				if(self.currentPageNode > 0 ){
        			self.buildPages(parseInt(self.currentPageNode) - 1);
      				} 
	  			});
			   $('#' + self.options.dotsContainer + " .go").click(function(){
      				if(self.currentPageNode < self.totalPagesNodes - 1){
        			self.buildPages(parseInt(self.currentPageNode) + 1);
      				}
	  			});
		   }
		   if(this.options.usePagination){
		   this.buildPages(0);
		   }	   
		   }
			this.dots = $('#' + self.options.dotsContainer + ' .dts');
			this.dots.click(function(){
				self.goToPage($(this).attr('index'));
				var body = $("html, body");
				if(self.options.doScroll){
				body.animate({scrollTop:self.options.scrollPosition}, '500', 'swing');
				}
	  		});

	  }
	  
	  this.nodes.hide();
	  this.goToPage(this.currentPage);

	  

  
  }
 
}      