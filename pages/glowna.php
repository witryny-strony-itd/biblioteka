<h1>Strona główna</h1>

<pre>
<?= print_r($_COOKIE); ?>
    </pre>
<pre>
    <?= print_r($_SESSION) ?>
</pre>

<?php
if (isset($_COOKIE['ciastko'])) {
    echo '<p>Dane z ciasteczka wyświetlane jako Tablica asocjacyjna PHP:</p><pre>';
    print_r(json_decode($_COOKIE['ciastko'],true));
    echo '</pre>';

    echo '<p>Dane z ciastka wyswietlane jako tekst JSON:</p><pre>'
    . $_COOKIE['ciastko'] . '</pre>';
}
?>
<br>
<?php
if (isset($_COOKIE['dzialy'])) {
    echo '<p>Dane z ciasteczka wyświetlane jako Tablica asocjacyjna PHP:</p><pre>';
    print_r(json_decode($_COOKIE['dzialy'],true));
    echo '</pre>';

    echo '<p>Dane z ciastka wyswietlane jako tekst JSON:</p><pre>'
        . $_COOKIE['dzialy'] . '</pre>';
}
?>

