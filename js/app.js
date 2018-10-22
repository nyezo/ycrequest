$(document).ready(function(){
	
	$(window).scroll(function(){
		var scrollTop = $(window).scrollTop();
		var minScroll = 300;
		if($("#contents").length){
			offset = $("#contents").offset();
			minScroll = offset.top + $("#contents").outerHeight() + 50;
		}
		if(scrollTop > minScroll){
			$('body').addClass('scrolled');
		}else{
			$('body').removeClass('scrolled');
		}
	});

	$(".menu-toggle").click(function(){
		if($('body').toggleClass('nav-open'));
	});

	if($("#contents")){
		$("#contents-menu").html($("#contents").html());
		$('body').addClass('has-contents');
	}

	$(".nav .contents-nav .toggle").click(function(){
		$(this).closest('.contents-nav').toggleClass('open');
	});

	$(".contents-menu, .contents-nav .toggle").click(function(e){
		e.stopPropagation();
	});

	$('body').click(function(){
		$('.contents-nav').removeClass('open');
	});

	$('.tabs-content .tabs a').click(function(e){
		e.preventDefault();
		$(this).closest('.tabs-content').find('.content').removeClass('visible');
		$(this).closest('.tabs').find('.active').removeClass('active');
		$(this).closest('li').addClass('active');
		$($(this).attr('href')).addClass('visible');
	});

	$(".expandable .toggle").click(function(){
		$(this).closest('.expandable').toggleClass('open');
	});

});