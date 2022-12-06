<h1>Edycja rekordu tabeli <i>dzialy</i></h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") //Zapisz dane z formularza do bazy [UPDATE]
{
    $Id_dzial = $_POST['Id_dzial'] ? intval($_POST['Id_dzial']) : 0;
    $Nazwa = $_POST['Nazwa'] ? htmlspecialchars($_POST['Nazwa']) : '';

    $query = sprintf("UPDATE dzialy SET Nazwa='%s' WHERE Id_dzial=%u;",
        mysqli_real_escape_string($conn, $Nazwa),
        mysqli_real_escape_string($conn,$Id_dzial),
    );
    //echo '<pre>' . $query . '</pre>';
    if (mysqli_query($conn,$query)){
        echo "Pomyślnie zaktualizowano";
    }
    else{
        echo "Błąd w czasie aktualizacji: " . mysqli_error($conn);
    }
}
else //Wpisz dane z bazy na formularz [SELECT]
{
    $Id_dzial = isset($_GET['dzialy']) ? intval($_GET['dzialy']) : 0;

    $query = sprintf("SELECT * FROM dzialy where Id_dzial=%u;",
        mysqli_real_escape_string($conn,$Id_dzial));

    echo '<pre>' . $query . '</pre>';

    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($result);
    if ($row)
    {
        ?>
        <form action="?page=dzialy_form" method="post">
            <table>
                <tr>
                    <td>Id_dzial</td><td><input id="Id_dzial" maxlength="40" name="Id_dzial" type=number" value="<?= $row['Id_dzial'] ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nazwa</td><td><input id="Nazwa" maxlength="40" name="Nazwa" type=text" value="<?= $row['Nazwa'] ?>"></td>
                </tr>
                <tr>
                    <td style="border-right: 0px"></td><td style="border-left: 0px"><input type="submit" value="Zapisz"></td>
                </tr>
            </table>
        </form>
        <?php
    }
    else
    {
        echo 'Zapytanie zwróciło pusty wynik';
    }
}