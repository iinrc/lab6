//vendor/signin.php
$('.login_btn').click(function(e){
	e.preventDefault();
	
	let login = $('input[name = "login"]').val(), password = $('input[name = "password"]').val()
	
	$.ajax({
		url: 'vendor/signin.php',
		type: 'POST',
		dataType: 'json',
		data: { 
			login: login,
			password: password
		},
		success (data){
		
		if (data.status){
			document.location.href = 'profile.php';
		}
		else {
			$('.msg').removeClass('none').text(data.message);
		}
		}
	});
});