<!DOCTYPE HTML>
<html>
<head>
<title>Odczyt danych z tabeli Rezerwacja</title>
<meta charset="UTF-8">
<style>

    tr, td, table {
        border: solid, 1px, black;
        text-align: center;
        padding: 2px;
    }

</style>
</head>
<body>
<?php
$do_bazy = mysqli_connect('localhost', 'root', '', 'baza');
if (!$do_bazy) {
 echo "Błąd połączenia z serwerem MySQL.<br>";
 ?>
 </body>
 </html>
 <?php
 exit;
} else {
 $zapytanie = mysqli_query($do_bazy, 'SELECT * FROM Klient');
 if (!$zapytanie) {
 mysqli_close();
 echo "Błąd w zapytaniu<br>";
 ?>
 </body>
 </html>
 <?php
 exit;
 } else {
 ?>
 <table>
 <tr>
 <td>Id Stolika</td>
 <td>Numer Stolika</td>
 <td>Data Rezeracji</td>
 <td>Liczba Osób</td>
 <td>Telefon</td>
 </tr>
 <?php
 while ($wiersze = mysqli_fetch_row($zapytanie)) {
 echo "<tr>";
 echo "<td>$wiersze[0]</td>";
 echo "<td>$wiersze[1]</td>";
 echo "<td>$wiersze[2]</td>";
 echo "<td>$wiersze[3]</td>";
 echo "<td>$wiersze[4]</td>";
 echo "</tr>";
 }
 ?>
 </table>
 <?php
 mysqli_close($do_bazy);
 }
}
?>
</body>
</html>