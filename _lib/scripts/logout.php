<?
if(isset($_COOKIE['UserName']) && isset($_COOKIE['Password'])){
	unset($_COOKIE['UserName']);
	unset($_COOKIE['Password']);
	setcookie('UserName', '', time()-3600, "/", "displaycase.co");
	setcookie('Password', '', time()-3600, "/", "displaycase.co");
	$Output = "You have been logged out!";
} else {
	$Output = "You're not logged in, login here: <a href='login.php'>Login</a>";
}
?>