<h1>Tabela <i>pracownicy</i></h1>

<?php
$query = 'SELECT * FROM pracownicy;';
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0) {
    echo '<p>Zawiera ' . mysqli_num_rows($result) . ' wierszy</p>';
    echo '<table>';
    echo '<tr><th>Nr_pracownika</th><th>Nazwisko</th><th>Imie</th><th>Nazwa_stanowiska</th><th>Miasto</th><th>Data_zatrudnienia</th><th>wynagrodzenie</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        $stanowiska = array('Bibliotekarz','Księgowy','Kierownik','Dyrektor','Konserwator');
        foreach ($stanowiska as $k => $v) {
            if ($k == $row['Id_stanowisko']-1) {
                $stanowisko = $v;
            }
        }
        echo '<tr><td>' . $row['Id_pracownika'] . '</td><td>' . $row['Nazwisko'] . '</td><td>' . $row['Imie'] . '</td><td>' . $stanowisko . '</td><td>' . $row['Miasto'] . '</td><td>' . $row['Data_zatrudnienia'] . '</td><td>' . $row['wynagrodzenie'] . '</td></tr>';
    }
    echo '</table>';
}
else {
    echo 'brak danych';
}

?>