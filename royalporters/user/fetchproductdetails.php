<?php
include "../db.php";

$userid = $_POST['userid'];

$sql = "SELECT * FROM products WHERE product_id=".$userid;
$result = mysqli_query($con,$sql);

$response = "<table border='0' width='100%'>";
while( $row = mysqli_fetch_array($result) ){
 $id = $row['product_id'];
 $emp_name = $row['product_name'];
 $salary = $row['product_price'];
 $gender = $row['product_image1'];
 $city = $row['product_image2'];
 $email = $row['product_image3'];
 
 $response .= "<tr>";
 $response .= "<td>Name : </td><td>".$emp_name."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Salary : </td><td>".$salary."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Gender : </td><td>".$gender."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>City : </td><td>".$city."</td>";
 $response .= "</tr>";

 $response .= "<tr>"; 
 $response .= "<td>Email : </td><td>".$email."</td>"; 
 $response .= "</tr>";

}
$response .= "</table>";

echo $response;
exit;