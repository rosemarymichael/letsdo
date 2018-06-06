
var base_url = 'http://192.168.2.100/citemp/user_management/';
var current_url = window.location.href;

$(function(){
	
	$("#sign_up").submit(function(event){

		var form_data = $("#user_signup").serialize();
		console.log(form_data);
	});
     

});