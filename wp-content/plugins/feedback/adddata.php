<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<title></title>
</head>
<?php
	global $wpdb;
	$res = null;
	$err = null;
	
	if(isset($_POST['submit_btn'])){
		if($_POST['uname']=="" || $_POST['email']=="" || $_POST['feedback_txt']==""){
			$err = "Please fill the fields";
		}
		else{
			$name = $_POST['uname'];
			$email = $_POST['email'];
			$feedback = $_POST['feedback_txt'];

			$insert_query = "insert into ".$wpdb->prefix."feedback(name,email,feedback) values('$name', '$email', '$feedback')";
			$res = $wpdb->query($insert_query);
			if($res){
				$res = "Thanks for your feedback";
			}
			else{
				$res = "Failed to submit your feedback";
			}
		}
	}
?>
<body>
	<div class="container">
		<form method="post" style="width: 400px; align-items: center;">
			<div>
				<p style="color:#2aba25;"><?php echo $res; ?></p>
				<p style="color:red;"><?php echo $err; ?></p>
			</div>

			<div>
				<h3>Enter your feedback:</h3>
			</div>
			<div style="margin-top: 50px;">
				<h5>Name</h5>
				<input type="text" name="uname" class="form-control">
			</div>
			<div>
				<h5>Email</h5>
				<input type="text" name="email" class="form-control">
			</div>
			<div>
				<h5>Feedback</h5>
				<textarea class="form-control" style="height:100px" name="feedback_txt"></textarea>
			</div>
			
				<button name="submit_btn" class="btn btn-primary" style="margin-top:15px;">submit</button>
				
		</form>
	</div>
</body>
</html>