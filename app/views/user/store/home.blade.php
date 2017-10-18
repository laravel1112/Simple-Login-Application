<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">

    <title>
       Products List
    </title>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>

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
		<div>
			<h2 class="text-center">User List</h2>
		</div>
		<table class="table table-bordered" style="margin-top: 30px;">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Email</th>
					<th>Birthday</th>
					<th></th>
				</tr>
			</thead>	
			<tbody>
				
				<?php foreach ($stores as $key => $news_item):{ ?>
				<tr>
					<td><?php echo $key + 1; ?>
					<td><?php echo $news_item['name'] ?></td>
					<td><?php echo $news_item['email'] ?></td>
					<td><?php echo $news_item['birthday'] ?></td>
					<td>
					<a href="{{ URL::route('user.store.edit',$news_item['id']) }}" class="btn btn-success">Edit</a>
					<a href="{{ URL::route('user.store.del', $news_item['id']) }}" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				<?php }endforeach; ?>
				
			</tbody>
		</table>
		<div>
			<a href="{{ URL::route('user.auth.logOut') }}" class="btn btn-primary pull-right" style="">Log out</a>
			<a href="signup" class="btn btn-primary pull-center">Add User</a>
			<div class="clearfix"></div>
		</div>
	</div>
</body>