<h1>Edycja rekordu <i>Tabeli stanowiska</i></h1>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $Id_stanowisko = $_POST['Id_stanowisko'] ? intval($_POST['Id_stanowisko']) : 0;
    $Nazwa = $_POST['Nazwa'] ? htmlspecialchars($_POST['Nazwa']) : '';
    $query = sprintf("UPDATE `stanowiska` SET Nazwa='%s' WHERE Id_stanowisko=%u;",
    mysqli_real_escape_string($conn,$Nazwa),
    mysqli_real_escape_string($conn,$Id_stanowisko),
    );
    if (mysqli_query($conn,$query)){
        echo "Zaktualizowano i jest git";
    }
    else{
        echo "Błąd w czasie aktualizacji:" . mysqli_error($conn);
    }
    if (isset($_COOKIE['stanowiska'])) {
        $cookieArray = json_decode($_COOKIE['stanowiska'], true);
    }
        $cookieArray[] = array('Id_stanowisko' => $Id_stanowisko, 'Nazwa' => $Nazwa,'Data' => date('Y-m-d H:i:s'));
        setcookie('stanowiska', json_encode($cookieArray, JSON_UNESCAPED_UNICODE), time() + (86400 * 30),"/");


}

else{
$Id_stanowisko = isset($_GET['stanowiska']) ? intval($_GET['stanowiska']) : 0;
$query = sprintf("SELECT * FROM `stanowiska` WHERE Id_stanowisko=%u;",
mysqli_real_escape_string($conn,$Id_stanowisko));

$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
if($row){
    setcookie('ciastko', json_encode($row, JSON_UNESCAPED_UNICODE), 86400+time(), '/');
    ?>
<form action="?page=stanowiska_formularz" method="post">
    <table>
        <tr><td><label for="id" id="id">Id stanowiska</label></td><td><input type="text" readonly id="id" name="Id_stanowisko" maxlength="40" value="<?= $row['Id_stanowisko']?>"> </td></tr>
        <tr><td><label for="nazwa" id="nazwa">Nazwa Stanowiska</label></td><td><input type="text" name="Nazwa" id="nazwa" maxlength="40" value="<?= $row['Nazwa']?>"> </td></tr>
        <tr><td><input type="submit" value="Zapisz"></td></tr>
    </table>
</form>
<?php
}
else{
    echo 'zapytanie zwróciło pusty wynik';
}}


?>

