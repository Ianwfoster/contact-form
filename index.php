<!doctype html>
<html lang="en">
<head>
	<!-- universal and bootstrap meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap  link to CSS -->
	<!-- jQuery Form, Additional Methods, Validate -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

	<!-- Your JavaScript Form Validator -->
	<script src="javaScript/form-validate.js"></script>

	<!-- Google reCAPTCHA -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>contact-form</title>
</head>
<body>












</div>
Contact Form

/**Create contact form.


<form id="ians-contact-form" action="../php/" method="post">
	<div class="form-group">
		<label for="contactDemoName">Name <span class="text-danger">*</span></label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"></span>
				<i class="fa fa-user" aria-hidden="true"></i>
			</div>
			<input type="text" class="form-control" id="contactDemoName" name="contactDemoName" placeholder="Name">
		</div>
	</div>
	<div class="form-group">
		<label for="contactDemoEmail">Email <span class="text-danger">*</span></label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"></span>
				<i class="fa fa-envelope" aria-hidden="true"></i>
			</div>
			<input type="email" class="form-control" id="email" name="email" placeholder="Email" />
		</div>
	</div>
	<div class="form-group">
		<label for="Subject">Subject</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"></span>
				<i class="fa fa-pencil" aria-hidden="true"></i>
			</div>
			<input type="text" class="form-control" id="Subject" name="subject" placeholder="Subject">
		</div>
	</div>
	<div class="form-group">
		<label for="Message">Message <span class="text-danger">*</span></label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"></span>
				<i class="fa fa-comment" aria-hidden="true"></i>
			</div>
			<textarea class="form-control" rows="5" id="message" name="message" placeholder="I <3 CopyPasta :D~ (2000 characters max)"></textarea>
		</div>
	</div>

	<!-- reCAPTCHA -->
	<div class="g-recaptcha" data-sitekey="6LetKsIUAAAAACITuyGsdfCQsuRX6v3aJXnqf7MI">

	</div>

	<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
	<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
</form>
</body>
</html>