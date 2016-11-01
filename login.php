<?php include 'menu.php'; ?>
<form method="POST" action="login.php">
<TABLE BORDER=0>
<tr><td>tunnus</td> <td><input type="text" name="tunnus"></td></tr>
<tr><td>salasana</td> <td><input type="password" name="sala"></td></tr>
<tr><td></td><td><input type="submit" name="nappi" value="Kirjaudu"></td></tr>
</TABLE>	
</form>
<?php
if(isset($_POST['nappi'])){

	$oikeatunnus="jeppe";
	$oikeasalasana="test";
	if ($_POST['tunnus'] == $oikeatunnus and $_POST['sala'] == $oikeasalasana) {
		//if ($_POST['sala'] == $oikeasalasana) {
			//oikea tunnus ja salasana
			header('Location:oma.php');
		//}
	}
	else {
		echo "Tunnus ja salasana eivät täsmää";
	}
}
?>

<?php include 'footer.php'; ?>