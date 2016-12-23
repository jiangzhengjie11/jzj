<?php
    require "regularExpression.php";
    $regEx=new regularExpression();
    var_dump($regEx->inArraySearch());
    echo "<br>";
    var_dump($regEx->inUrlSearch());
    echo "<br>";

    var_dump($regEx->searchURL());
    echo '</br>';
    var_dump($regEx->deleteHtmlTag());
    echo '</br>';