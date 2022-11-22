<h1>Tabela <i>czytelnicy</i></h1>

<?php
$query = 'SELECT * FROM czytelnicy;';
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0) {
    echo '<p>Zawiera ' . mysqli_num_rows($result) . ' wierszy</p>';
    echo '<table>';
    echo '<tr><th>Nr_czytelnika</th><th>Nazwisko</th><th>Imie</th><th>Data_ur</th><th>Ulica</th><th>Kod</th><th>Miasto</th><th>Data_zapisania</th><th>Data_skreslenia</th><th>Nr_legitymacji</th><th>Funkcja</th><th>Plec</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Nr_czytelnika'] . '</td><td>' . $row['Nazwisko'] . '</td><td>' . $row['Imie'] . '</td><td>' . $row['Data_ur'] . '</td><td>' . $row['Ulica'] . '</td><td>' . $row['Kod'] . '</td><td>' . $row['Miasto'] . '</td><td>' . $row['Data_zapisania'] . '</td><td>' . $row['Data_skreslenia'] . '</td><td>' . $row['Nr_legitymacji'] . '</td><td>' . $row['Funkcja'] . '</td><td>' . $row['Plec'] . '</td></tr>';
    }
    echo '</table>';
}
else {
    echo 'brak danych';
}

?>