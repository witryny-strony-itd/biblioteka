<h1>Tabela <i>stanowiska</i></h1>

<?php
$query = 'SELECT * FROM stanowiska;';
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0) {
    echo '<p>Zawiera ' . mysqli_num_rows($result) . ' wierszy</p>';
    echo '<table>';
    echo '<tr><th>Id stanowiska</th><th>Nazwa</th><th><a href="?page=stanowiska_dodaj&stanowiska=">Dodaj</a> </th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Id_stanowisko'] . '</td><td>' . $row['Nazwa'] . '</td><td>'. '<a href="?page=stanowiska_formularz&stanowiska=' . $row['Id_stanowisko'] .' ">Edycja</a>' . '</td></tr>';
    }
    echo '</table>';
}
else {
    echo 'brak danych';
}
if (isset($_COOKIE['stanowiska']))
{
    $historyArrays = json_decode(($_COOKIE)['stanowiska']);
    echo '<p> Historia edycji: <a class="collapse_link" data-collapse-block-id="stanowiska_historia_lista" href="#">&dArr;</a></p>';
    //echo '<pre>';
    //print_r($historyArrays);
    //echo '</pre>';
    echo '<ul id="stanowiska_historia_lista" style="display: none;">';
    foreach ($historyArrays as $editNumber => $editArray)
    {
        echo '<li>Edycja nr' . $editNumber . ': ';
        foreach ($editArray as $key => $value)
        {
            echo $key . ' = ' . $value . ' | ';
        }
        echo '</li>';
    }
    echo '</ul>';
}
?>