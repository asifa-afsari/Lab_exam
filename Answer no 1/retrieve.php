<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM student");
?>
<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
</head>
<body>
<table>
<tr>
<td>ID</td>
<td>Name</td>
<td>Age</td>
<td>User Name</td>
<td>Password</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["ID"]; ?></td>
<td><?php echo $row["Name"]; ?></td>
<td><?php echo $row["Age"]; ?></td>
<td><?php echo $row["user_name"]; ?></td>
<td><?php echo $row["password"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html> 