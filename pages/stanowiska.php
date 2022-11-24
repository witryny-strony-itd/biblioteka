<h1>Tabela <i>stanowiska</i></h1>

<?php
$query = 'SELECT * FROM stanowiska;';
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0) {
    echo '<p>Zawiera ' . mysqli_num_rows($result) . ' wierszy</p>';
    echo '<table>';
    echo '<tr><th>Id stanowiska</th><th>Nazwa</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Id_stanowisko'] . '</td><td>' . $row['Nazwa'] . '</td><td>'. '<a href="?page=stanowiska_formularz&stanowiska=' . $row['Id_stanowisko'] .' ">Edycja</a>' . '</td></tr>';
    }
    echo '</table>';
}
else {
    echo 'brak danych';
}

?>