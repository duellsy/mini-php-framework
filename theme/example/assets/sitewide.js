$(document).ready(function(){

	/******************************************
	 * Ajax the landing page registration
	 *******************************************/
	$('#get-in-touch').live('submit', function(e){
		
		// hide this button, and show another fake button saying it's processing
		$submit_btn = $('#get-in-touch .submit-btn');
		$submit_btn.html('Please wait...');

		e.preventDefault();

		$.ajax({
			url: 'includes/process_contact.php',
			data: $(this).serialize(),
			type: 'POST',
			success: function(data){
				$('#contacform').html(data);
			}
		});
		
	});
	
});