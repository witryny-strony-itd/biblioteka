<h1>Dodaj stanowiska:</h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") // Zapisz dane z formularza do bazy [INSERT]
{
    $Nazwa = $_POST['Nazwa'] ? htmlspecialchars(trim($_POST['Nazwa'])) : '';

    $query = sprintf("INSERT INTO stanowiska (Nazwa) VALUES ('%s');",
    mysqli_real_escape_string($conn,$Nazwa)
    );
    //echo '<pre>' . $query . '</pre>';
    if(mysqli_query($conn,$query))
    {
        echo '<h4 class="success">Nowe Dane zostały dodane</h4>';
    }
    else
    {
        echo '<h4 class="failure">Błąd w czasie dodawania:</h4><br>'
        . mysqli_error($conn);
    }
}
?>
<form action="?page=stanowiska_dodaj" method="post">
    <table>
        <tr><td><label for="nazwa" id="nazwa">Nazwa Stanowiska</label></td><td><input type="text" name="Nazwa" id="nazwa" maxlength="40" > </td></tr>
        <tr><td><input type="submit" value="Zapisz"></td></tr>
    </table>
</form>