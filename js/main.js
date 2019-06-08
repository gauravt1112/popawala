 $(window).load(function(){
	 resizeDivider();
	 setDivHeightForThree();
	 
});

 $(function() {
  resizeBanner();

});
 
$(window).resize(function(){
    resizeBanner();
	 resizeDivider();
	 setDivHeightForThree();
	 
});

function resizeBanner(){
	var wh = window.innerHeight - 158;
	
	$(".home-banner").height(wh+"px");
	/*  $(".home-banner").backstretch("img/banner1.png"); */
}



function resizeDivider(){

width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
	var wh = $(".inner-second-column").innerHeight();
	var th = $(".inner-second-column-text").innerHeight();
	$(".divider").innerHeight(wh+"px");
	
	
width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
	var wh = $(".indenting-second-column").innerHeight();
	var th = $(".indenting-second-column-text").innerHeight();
	$(".divider2").innerHeight(wh+"px");
	
	
width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
	var wh = $(".global-second-column").innerHeight();
	var th = $(".global-second-column-text").innerHeight();
	$(".divider3").innerHeight(wh+"px");
	
	/*if(width < 992){
		$(".indenting-second-column").find("p").css("height","auto");
	}else{
		$(".indenting-second-column").find("p").innerHeight(th+"px");
	}*/
}

function setDivHeightForThree(){
		var lw = $(".left-col").innerWidth();
		$(".mid-col").width(lw);
		$(".mid-col").css("margin-left","auto");
		$(".mid-col").css("margin-right","auto");
}

