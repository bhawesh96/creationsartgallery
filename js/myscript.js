$(document).ready(function(){

	$('#formsubmit').click(function(){
		var name = $('#name').val();
		var phone = $('#phone').val();
		var message = $('#message').val();
		if(name!="" && phone!="" && message!=""){
		$.post("php/upload.php", {name:name, phone:phone, message:message}, function(data){
				
				})
		.done(function(){
			alert('Successfully Submitted!');
			console.log('uploaded');
			$('#name, #phone, #message').val(" ");
		})
		.fail(function(){
			alert('Oops! There was a technical error, please try again' + data);
			console.log(data);
		});
	}
	else{
		alert('Please fill in all the fields');
	}


	
	});
});
