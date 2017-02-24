<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $title ?></title>
	    <meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
	<style>
		#head{
			border-bottom: 3px solid #668cff;
			background-color: #1a53ff;
			margin-bottom: 20px;
			
		}
		.head-tag{
			margin-bottom: 50px;
			
		}
		.head-tag a{
			color: #fff;
		}
	</style>

	<div class="container-fluid" id="head">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center head-tag"><a href="<?php echo base_url() ?>"><?php echo $heading ?></a></h1>
			</div>
		</div>
	</div>


