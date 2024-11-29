<?php
if (!isset($_COOKIE["dane"]) && !isset($_POST["nazw"])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dane_user</title>
</head>
<body>
<form action="odwiedziny.php" method="post">
Podaj nazwisko i imię:<br>
<input type="text" name="nazw" value=" " size="35">
<p><input type="submit" value="Wyślij" name="wyslij"></p>
</form>

<?php
} else {
	if(isset($_POST["nazw"])) {
		setcookie("dane", $_POST["nazw"], time()+60*60*24*365);
		//echo "<p>Dziękujemy za wprowadze danych.</p>";
	//} else {
		//echo "<p>Witamy po raz kolejny! " . $_COOKIE["dane"] . "</p>";
	}
}

?>
</body>
</html>