<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">

    <title>
       Products List
    </title>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="" rel="stylesheet" type="text/css"/>

    {{ HTML::style('/assets/css/bootstrap.min.css') }}
    {{ HTML::style('/assets/css/bootstrap.css') }}
    {{ HTML::style('/assets/css/bootstrap-theme.min.css') }}
    {{ HTML::style('/assets/css/datepicker.css') }}
    {{ HTML::style('/assets/css/style_common.css') }}
    {{ HTML::style('/assets/css/style_other.css') }}
    
    <!-- END GLOBAL MANDATORY STYLES -->

  
</head>
<body> 
	<div class="container">
		<?php if (isset($alert)) { ?>
        <div class="alert alert-<?php echo $alert['type'];?> alert-dismissibl fade in">
            <button type="button" class="close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <p>
                <?php echo $alert['msg'];?>
            </p>
        </div>
        <?php } ?>
			<div class="row text-center" style="margin-top: 30px;">
				<div class="col-md-4 col-md-offset-4">
				<div class="alert alert-success" role="alert"></div>
				</div>
			</div>
		
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<form method="post" action="{{ URL::route('user.auth.doLogin') }}" class="reg-page"> 
					<div class="reg-header text-center" style="margin-bottom: 20px;">
						<h2>Login Page</h2>
					</div>
					<div class="input-group ">
	                    <span class="input-group-addon"><i class="fa fa-icon-user"></i></span>
	                    <input type="text" placeholder="Username" class="form-control" name="name">
		            </div> 
		            <div class="input-group margin-top-normal" style="margin-top: 10px;">
	                    <span class="input-group-addon"><i class="icon-user"></i></span>
	                    <input type="password" placeholder="Password" class="form-control" name="pass">
	                </div> 
				   <div class="row">
					    <div class="col-md-6 text-center" style="margin-top: 10px;">
					    	<button class="btn btn-danger" type="submit">Login</button>
					    </div>
					    <div class="col-md-6 text-center" style="margin-top: 10px;">
					    	<a href="{{ URL::route('user.auth.signup') }}" class="btn btn-danger" type="submit">SignUp</a>
					    </div>
	                </div>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>