// Call Stellar.js functionality (for parallax effects)
$(function() {
	$.stellar();
});


// Generated by CoffeeScript 1.6.3
//(function(){$(function(){var e,t;$("a.swap").click(function(e){var t,n,r;r=$(this).attr("data-swap");t=function(){return $("#"+r).fadeIn()};n=function(e){return $(".slots-left h2")[0].innerHTML=e};$("section").fadeOut(400);setTimeout(t,600);$.get("functions.php",{p:r,verbose:!0},n,"html");return e.preventDefault()});$("input[type=radio]").on("click",function(){var e,t;t=$(this).attr("data-swap");e=function(){return $("select."+t).removeAttr("disabled").fadeIn()};$("select.placement").attr("disabled","disabled");$("select.placement").fadeOut(400);return setTimeout(e,600)});$("#zk5k-form").submit(function(e){var t,n;e.preventDefault();$(this).find("p.alert, p.success").fadeOut().remove();n=$("#zk5k-form").serialize();t=$(this);return $.ajax("handler.php",{type:"POST",data:n,success:function(e){t.prepend("<p class='success'>"+e+"</p>");$("p.success").fadeIn(200);return t[0].reset()},error:function(e,n,r){return t.prepend("<p class='alert'>"+e.responseText+"</p>")}})});e=function(){var e,n,r,i,s,o,u,a;s=new Date;n=raceDate-s;u=$(".time-left h2")[0];if(n<0){clearInterval(t);u.innerHTML="";return}e=Math.floor(n/_day);r=Math.floor(n%_day/_hour);i=Math.floor(n%_hour/_minute);o=Math.floor(n%_minute/_second);a="<div>Race Start</div> <div>"+e+"<span>d</span> "+r+"<span>h</span> "+i+"<span>m</span> "+o+"<span>s</span></div>";return u.innerHTML=a};e();return t=setInterval(e,1e3)})}).call(this);

// Call function @ window scroll event.
$(window).scroll(function() {


	// Checks how far down the user has scrolled (scrollTop() checks this [in pixels])
	// and if the user has scrolled more than 30px and doesn't already have the 'compressed'
	// class, then add it. If the user scrolls above (under) 30px, remove the class	
	if($(window).scrollTop() > 30) { 
		$('nav').addClass('compressed'); 
	}
	else {
		$('nav').removeClass('compressed'); 
	}
});