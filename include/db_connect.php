<?php
$conn = mysqli_connect('localhost', 'biblioteka', 'uwu', 'biblioteka');
if (!$conn) {
    die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: "
        . mysqli_connect_error());
}
?>
