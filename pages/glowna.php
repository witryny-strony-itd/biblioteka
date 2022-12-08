<h1>Strona główna</h1>

<pre>
<?= print_r($_COOKIE) ?>
    </pre>
<pre>
    <?= print_r($_SESSION) ?>
</pre>
<h3>Wszystko z supertablicy $_GET
    <a id="jakiesid1" style="display: block;" href="#" onclick="document.getElementById('jakiesid2').style.display='block';document.getElementById('jakiesid1').style.display='none';">
    &dArr;
</a></h3>
<div id="jakiesid2" style="display: none;">
    <a href="#"  onclick="document.getElementById('jakiesid1').style.display='block';document.getElementById('jakiesid2').style.display='none';">
        &uArr;
    </a>

    <pre><?= print_r($_GET) ?></pre>

</div>
<h3>Wszystko z supertablicy $_POST
    <a id="jakiesid3"  href="#" onclick="document.getElementById('jakiesid4').style.display='block';document.getElementById('jakiesid3').style.display='none';">
        &dArr;
    </a></h3>
<div id="jakiesid4" style="display: none" >
    <a href="#" style="display: inline"  onclick="document.getElementById('jakiesid3').style.display='block';document.getElementById('jakiesid4').style.display='none';">
        &uArr;
    </a>

    <pre style="display: block"><?= print_r($_POST) ?></pre>

</div>
<h3>Wszystko z super tablicy $_COOKIE
<a class="collapse_link" data-collapse-block-id="cookie"
   href="#">&dArr;</a></h3>
<pre id="cookie" style="display: none">
    <?= print_r($_COOKIE) ?>
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

