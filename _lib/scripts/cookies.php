<?require_once("mysqli_conn.php");?>
<?
if(isset($_COOKIE['UserName']) && isset($_COOKIE['Password'])){

	$UserName = $_COOKIE['UserName'];
	$Password = $_COOKIE['Password'];

	include($_SERVER['DOCUMENT_ROOT']."/_lib/api/users/UserLogin.php");

	$Count = mysqli_num_rows($Sql);
	if ($Count > 0) { // evaluate the count
		while($Row = mysqli_fetch_array($Sql)){ 
		    $Id = $Row["UserId"];
		    $FirstName = $Row["FirstName"];
		    $HPW = $Row["Password"];
		    $Avatar = $Row["Avatar"];
		}
		if($Password == $HPW){
			echo "<li class='has-dropdown'>";
          	echo "<a href='profile.php?UserId=" . $Id . "'><img src='" . $Avatar . "'/>" . $FirstName . "</a>";
          	echo "<ul class='dropdown'>";
            echo "<li><a href='profile.php?UserId=" . $Id ."'>Profile</a></li>";
            echo "<li><a href='#'>Options</a></li>";
            echo "<li><a href='logout.php?UserId=" . $Id. "'>Sign Out</a></li>";
          	echo "</ul>";
        	echo "</li>";
        	$CookiesValidated = 1;
		} else {
			echo "Something doesn't add up...";
		}
	} else {
		echo "User doesn't exist!";
	}
} else {
	echo "<li><a href='login.php'>Login</a></li><li style='color: #fff;background-color: transparent;padding: 10px 0px;'>|</li><li><a href='registration.php'>Register</a></li>";
	$CookiesValidated = 0;
}
?>