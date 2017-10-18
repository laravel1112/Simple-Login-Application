
<html>
	<head>
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
    {{ HTML::script('/assets/js/bootstrap.min.js') }}
    {{ HTML::script('/assets/js/bootstrap.js') }}
    {{ HTML::script('/assets/css/bootstrap-datepicker.js') }}
		
	</head>
	<body>
	
			<div class="contanier">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
					
						<h2 class="text-center">Create User</h2>
						
						
						<div class="alert alert-danger" role="alert">
							
						</div>
						
						
						<form method="POST" class="form-login margin-top-normal" action="{{URL::route('user.store.doUpdate') }}" role="form">
							<input type="hidden" name="id" value="<?php echo $user['id']?>"/>
							<div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
							    <div class="col-sm-10">
							      <input type="name" class="form-control" name="name" placeholder="Name" value="<?php echo $user['name']?>">
							    </div>
							 </div>
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
							    <div class="col-sm-10">
							      <input type="password" class="form-control" name="pass" placeholder="Password" >
							    </div>
							  </div>
							  
							   <div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Repassword</label>
									<div class="col-sm-10">
									  <input type="password" class="form-control" name="repass" placeholder="Repassword">
									</div>
								</div>
							  
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
							    <div class="col-sm-10">
							      <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $user['email']?>">
							    </div>
							  </div>
							  
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Birthday</label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" name="birthday" placeholder="Birthday" id="datepicker" value="<?php echo $user['birthday']?>">
							    </div>
							  </div>
							  
							  <div class="form-group">
							    <div class="col-sm-offset-2 col-sm-10">
							      <button type="submit" class="btn btn-success">Submit</button>
							      <a href="{{URL::route('user.auth.login') }}" class="btn btn-warning">Back</a>
							    </div>
							  </div>
							  
						 </form>
					</div>
				</div>
				
			</div>
		<script language="javascript"> $('#datepicker').datepicker({format:'yyyy-mm-dd'}); </script>
	</body>
