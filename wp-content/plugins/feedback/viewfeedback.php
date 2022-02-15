<body>
	<center>
		<table border="1">
<tr>
	<td colspan="5">
		<center>
	<h2>User Feedbacks</h2>	
</td>		
</tr>
<tr>
	<th>Id</th>
	<th>Name</th>
	<th>Feedback</th>
	<th>Email</th>
	<th>Delete</th>
</tr>
<?php
global $wpdb;
$tablename=$wpdb->prefix.'feedback';
if(isset($_GET['uname']))
{
	$uname=$_GET['uname'];
	$quetydel="delete from ".$tablename." where name='$uname'";
	$wpdb->query($quetydel);
	
}

	$query="select * from ".$tablename;
	$result=$wpdb->get_results($query);
	
	foreach($result as $row)
	{
		echo '<tr>';
		echo '<td>'.$row->id.'</td>';
		echo '<td>'.$row->name.'</td>';
		echo '<td>'. $row->feedback.'</td>';
		echo '<td>'.$row->email.'</td>';
		echo '<td>';
		echo '<a href="?page=feedback&uname='.$row->name.'">Delete</a>';
		echo '</td></tr>';
		}
	
	
	?>
	</table>
	</center>
	</body>
