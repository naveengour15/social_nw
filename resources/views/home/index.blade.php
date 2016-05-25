<!DOCTYPE html>
<html>
	<head>
		<title>SocialN/W</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	    <link rel="stylesheet" href="css/color.css" type="text/css">
		<script src="js/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
        <script src="js/TweenLite.min.js"></script>
		<script src="js/validation.js"></script>
		
		</head>
    <body>
        <div class="container">
			<div class="row" style="margin-top:20px">
			    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
					<form role="form" action="/login" method="post" onsubmit="return loginValidation()">
						<fieldset>
							<h2>Please Sign In</h2>
							<hr class="colorgraph">
							<div class="form-group">
			                    <input type="text" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
							</div>
							<div class="form-group">
			                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
							</div>
							<span class="button-checkbox">
								<button type="button" class="btn" data-color="info">Remember Me</button>
			                    <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
								<a href="" class="btn btn-link pull-right">Forgot Password?</a>
							</span>
							<hr class="colorgraph">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
			                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<a href="/register" class="btn btn-lg btn-primary btn-block">Register</a>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>

		</div>

		<script type="text/javascript">

		</script>

    </body>
</html>