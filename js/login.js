function wrongPassword(){
	var item = $('#login-menu-item');
	item.addClass('wrong-login');
	setTimeout(function(){item.removeClass('wrong-login');}, 3000);
}

function logInOut(){
	var item = $('#login-menu-item u');

	if(item.html() == 'LogOut'){

		item.html('LogIn');
		item.removeClass('logout');
		$('li').hover(
			function(e){
				$(this).find('> #login-sub-menu').css('top','0px');
			},
			function(e){
				$(this).find('> #login-sub-menu').css('top','-120px');
			}
		);
		//$('#welcome-block').css('top','-120px');

		$.ajax({
	    	type: "GET",
	    	url: 'php/logout.php',
	    	dataType: 'json',
	    	success: function(data) {
	    		console.log(data);
		     	if (data.result == 'true') {  
		    		
		    		hideWelcome();
		    		window.location.href = "main.php";

		      	} else {
		      		alert('LogOut error!');

		      	}
	    	},
		    error: function (xhr, ajaxOptions, thrownError){
		      alert(xhr.status);
		      alert(thrownError);
		    }
  		});
	} 	
}

function showWelcome(msg, type){
	$('#welcome-block').css('top','0px');
	$('#welcome-block').html('Welcome,<br>' + type + '<br>' + msg + '!');
}

function hideWelcome(){
	$('#welcome-block').css('top','-120px');
}


function userIn(msg, type){
	var item = $('#login-menu-item u');	
	item.html('LogOut');
	$('li').hover(
		function(e){
			$(this).find('> #login-sub-menu').css('top','-120px');
		}
	);
	item.addClass('logout');

	showWelcome(msg, type);
}


function onClickSubmit(script_path){

	$.ajax({
    	type: "POST",
    	url: script_path,
    	dataType: 'json',
    	data: $("#login-form").serialize(),
    	success: function(data) {

	     	if (data.result == 'true') {  

	     		//window.location.href = "main.php";

	    		if(script_path == 'php/login.php'){
	    			userIn(data.message, data.type);
	 	    	} else {
	 	    		alert(data.message);	
	 	    	}

	      	} else {
	      		wrongPassword();
	        	alert(data.message);
	      	}
    	},
	    error: function (xhr, ajaxOptions, thrownError){
	      alert(xhr.status);
	      alert(thrownError);
	    }
  	});
}