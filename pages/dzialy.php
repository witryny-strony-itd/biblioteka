<?php
$zapytanie = 'Select * from dzialy;';
$wynik = mysqli_query($conn, $zapytanie);
echo '<label><h1>Tabela działy</h1></label>';
echo '<table>';
echo '<th>Id działu</th><th>Nazwa</th>';
if(mysqli_num_rows($wynik) > 0){
    $dzialy=array();
    while ($row = mysqli_fetch_assoc($wynik)){
        $dzialy[]=$row;
        echo '<tr><td>' . $row['Id_dzial'] . '</td>' . '<td>' . $row['Nazwa'] . '</td><td>'. '<a href="?page=dzialy_form&dzialy=' . $row['Id_dzial'] . '">Edycja</a></td></tr>';
    }setcookie('dzialy',json_encode($dzialy),86400+time(),'/');
}
?>