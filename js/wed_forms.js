// LOGIN FUNCTIONS
$('#login_form').submit(function(){
	$.ajax({
		url: '/wizard?cl=login&fn=login',
		type: 'POST',
		data: $(this).serialize(),
		success: function(data){
			if (data=1)
			{
				// Success, reload page
				window.location.replace("/");
			}
			else
			{
				$('#result').html(data).css('color', 'red');
			}
		},
		error: function() {
			$('#result').html('Sorry, a system error occurred.').css('color', 'red');
		}
	});
	return false;
});

$('#logout').click(function(){
	$.ajax({
		url: '/wizard?cl=login&fn=logout',
		type: 'POST',
		data: $(this).serialize(),
		success: function(data){
			if (data=1)
			{
				// Success, reload page
				// window.location.replace("/");
			}
			else
			{
				$('#result').html(data).css('color', 'red');
			}
		},
		error: function() {
			$('#result').html('Sorry, a system error occurred.').css('color', 'red');
		}
	});
	return false;
});

$('#account_form').submit(function(){
	$.ajax({
		url: '/wizard?cl=login&fn=newAccount',
		type: 'POST',
		data: $(this).serialize(),
		success: function(data){
			if (data=1)
			{
				// Success, reload page
				window.location.replace("/");
			}
			else
			{
				$('#result').html(data).css('color', 'red');
			}
		},
		error: function() {
			$('#result').html('Sorry, a system error occurred.').css('color', 'red');
		}
	});
	return false;
});

$('#forgot_form').submit(function(){
	$.ajax({
		url: '/wizard?cl=login&fn=forgotMyStuff',
		type: 'POST',
		data: $(this).serialize(),
		success: function(data){
			if (data=1)
			{
				// Success, reload page
				window.location.replace("/");
			}
			else
			{
				$('#result').html(data).css('color', 'red');
			}
		},
		error: function() {
			$('#result').html('Sorry, a system error occurred.').css('color', 'red');
		}
	});
	return false;
});