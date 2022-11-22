<h1>Lista tabel w bazie danych <i>biblioteka</i></h1>

<?php
$query = 'SHOW TABLES;';
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Tabela</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Tables_in_biblioteka'] . '</td></tr>';
    }
    echo '</table>';
}
else {
    echo 'brak danych';
}

?>
