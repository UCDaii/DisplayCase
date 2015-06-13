<? include "_lib/api/categories/GatherAllCategories.php"; ?>
<?
$Count = mysqli_num_rows($Sql);
if ($Count > 0) {
	while($Row = mysqli_fetch_array($Sql)){
		$CategoryName[] = $Row["CategoryName"];
	}
}
?>