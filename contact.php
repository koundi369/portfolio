<?php 
include 'inc.php';
include 'navbar.php';
?>

<?php 

	
	if (isset($_POST['submit'])) {

		session_start();

		$_SESSION["email"]	= $_POST['email'];
		$_SESSION["subject"] = $_POST['subject'];
		$_SESSION["textarea"] = $_POST['textarea'];

		$error = array();

		if(isset($_POST['email'])){

			$error['email'] = "Please enter the email!"; 
		}
		if(isset($_POST['subject'])){

			$error['subject'] = "Please enter the name!"; 
		}
		if(isset($_POST['textarea'])){

			$error['textarea'] = "Please enter the comments!"; 
		}


		$to = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['textarea'];

		mail($to, $subject, $message);
		
		header("location:success.php");	
	
		
	}
	
?>
<style type="text/css">
	form{
		width: 50%;
	    margin: auto;
	}
</style>
<h2>Contact Form</h2>
<div class="container">
		<form method="POST" name="form" onsubmit="return valid();">
			<div class="form-group">
			<label for="email">Email:</label><input type="email" name="email" class="form-control" placeholder="Enter email">
			</div>
			<p>
				<?php
					if (isset($error['email'])):
				?>
					<div class="alert alert-danger">
						<?php echo $error['email']; ?>
					</div>
				<?php endif; ?>
			</p>
			<div class="form-group">
				<label>Subject:</label><input type="text" name="subject" class="form-control" placeholder="Enter subject">
			</div>
			<p>
				<?php
					if (isset($error['subject'])):
				?>
					<div class="alert alert-danger">
						<?php echo $error['subject']; ?>
					</div>
				<?php endif; ?>
			</p>
			<div class="form-group">	
			<label for="textarea">Comment:</label>
			<textarea class="form-control" name="textarea" rows="4" id="comment"></textarea>
			</div>
			<p>
				<?php
					if (isset($error['textarea'])):
				?>
					<div class="alert alert-danger">
						<?php echo $error['textarea']; ?>
					</div>
				<?php endif; ?>
			</p>
			<div class="form-group">
				<button class="btn btn-primary" name="submit" type="submit">Submit</button>
				<button class="btn btn-info" type="reset">Reset</button>
			</div>
		</form>
</div>
<script>
	function valid() {
		var email = document.forms['form']['email'];
		var name = document.forms['form']['subject'];
		var textarea = document.forms['form']['textarea'];

		if (email.value == "") {
			window.alert("Please enter the valid email!");
			email.focus();
			return false;
		}
		if (email.value.indexOf("@", 0) < 0)                 
    	{ 
        	window.alert("Please enter a valid e-mail address."); 
        	email.focus(); 
        	return false; 
    	} 
   
    	if (email.value.indexOf(".", 0) < 0)                 
    	{ 
        	window.alert("Please enter a valid e-mail address."); 
        	email.focus(); 
        	return false; 
    	}
    	if (subject.value == "") {
			window.alert("Please enter the user subject!");
			name.focus();
			return false;
		} 
		if (textarea.value == "") {
			window.alert("Please enter Comments!");
			textarea.focus();
			return false;
		}
	}
</script>
<?php
	include 'footer.php';
?>
