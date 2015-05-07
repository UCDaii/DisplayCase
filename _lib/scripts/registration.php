<?
include "_lib/scripts/mysql_conn.php.php"; 
// Parse the form data and add inventory item to the system
if (isset($_POST['UserName'])) {
	
    $UserName = mysql_real_escape_string($_POST['UserName']);
	$Password = mysql_real_escape_string($_POST['Password']);
	$FirstName = mysql_real_escape_string($_POST['FirstName']);
	$LastName = mysql_real_escape_string($_POST['LastName']);
	$Email = mysql_real_escape_string($_POST['Email']);
	$Phone = mysql_real_escape_string($_POST['Phone');
	$Age = mysql_real_escape_string($_POST['Age']);
	$City = mysql_real_escape_string($_POST['City']);
	$State = mysql_real_escape_string($_POST['State']);
	$Country = mysql_real_escape_string($_POST['Country']);
	$MajorName = mysql_real_escape_string($_POST['MajorName']);
	$CollegeName = mysql_real_escape_string($_POST['CollegeName']);
	// See if that product name is an identical match to another product in the system
	$Sql = mysql_query("SELECT id FROM Users WHERE UserName='$UserName' LIMIT 1");
	$Match = mysql_num_rows($Sql); // count the output amount
    if ($Match > 0) {
		echo 'Sorry you tried to create a duplicate user into the system, <a href="../../registration.php">click here</a>';
		exit();
	}
	// Add this product into the database now
	$Sql = mysql_query("INSERT INTO products (product_name, price, details, weight, section, subsection, category, subcategory, date_added) 
        VALUES('$product_name','$price','$details', '$weight', '$section', '$subsection', '$category','$subcategory',now())") or die (mysql_error());
     $pid = mysql_insert_id();
	// Place image in the folder 
	$newname = "$pid.jpg";
	move_uploaded_file( $_FILES['fileField']['tmp_name'], "_lib/products/$newname");
	header("location: admin_index.php"); 
    exit();
}
?>