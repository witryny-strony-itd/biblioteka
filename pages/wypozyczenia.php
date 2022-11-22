<h1>Tabela <i>wypożyczenia</i></h1>

<?php
$query = 'SELECT * FROM wypozyczenia;';
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0) {
    echo '<p>Zawiera ' . mysqli_num_rows($result) . ' wierszy</p>';
    echo '<table>';
    echo '<tr><th>Nr_transakcji</th><th>Sygnatura</th><th>Nr_pracownika</th><th>Nr_czytelnika</th><th>Data_wypozyczenia</th><th>Data_zwrotu</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Nr_transakcji'] . '</td><td>' . $row['Sygnatura'] . '</td><td>' . $row['Id_pracownika'] . '</td><td>' . $row['Nr_czytelnika'] . '</td><td>' . $row['Data_wypozyczenia'] . '</td><td>' . $row['Data_zwrotu'] . '</td></tr>';
    }
    echo '</table>';
}
else {
    echo 'brak danych';
}

?>