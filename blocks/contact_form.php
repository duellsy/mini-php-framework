<div id="contacform">
	<form id="get-in-touch">
	
		<h2>Get in touch!</h2>
		
		<?php if(isset($contact_message)){
			echo('<p>'.$contact_message.'</p>');
		}?>
		
		<div class="clearfix">
			<input class="large" id="name" name="name" type="text" placeholder="Your name" value="<?php echo(isset($_POST['phone'])?$_POST['name']:'')?>" />
		</div>
		
		<div class="clearfix">
			<input class="large" id="email" name="email" type="text" placeholder="Email" value="<?php echo(isset($_POST['phone'])?$_POST['email']:'')?>" />
		</div>
		
		<div class="clearfix">
			<input class="large" id="phone" name="phone" type="text" placeholder="Phone (optional)" value="<?php echo(isset($_POST['phone'])?$_POST['phone']:'')?>" />
		</div>
		
		<div class="clearfix">
			<textarea class="large" style="height: 75px" name="message" placeholder="Message" id="message"><?php echo(isset($_POST['phone'])?$_POST['message']:'')?></textarea>
		</div>
		
		<button class="submit-btn pull-right">Send Message</button>
	
	</form>
</div>