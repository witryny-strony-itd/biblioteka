<h1>Tabela <i>dzialy</i></h1>

<?php
$query = 'SELECT * FROM dzialy;';
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0) {
    echo '<p>Zawiera ' . mysqli_num_rows($result) . ' wierszy</p>';
    echo '<table>';
    echo '<tr><th>Id_dzial</th><th>Nazwa</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Id_dzial'] . '</td><td>' . $row['Nazwa'] . '</td></tr>';
    }
    echo '</table>';
}
else {
    echo 'brak danych';
}

?>