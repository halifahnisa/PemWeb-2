<?php
    //Array Buah
    $array_buah = [
        'p' => 'pisang',
        'j' => 'jeruk',
        'a' => 'apel',
        'm' => 'mangga',
    ];

    echo '<ol>';
    foreach ($array_buah as $key => $value) {
        echo '<li>' . $key . ' - ' . $value . '</li>';
    }
    echo '</ol>';

    echo sort($array_buah);

    echo '<ol>';
    foreach ($array_buah as $key => $value) {
        echo '<li>' . $key . ' - ' . $value . '</li>';
    }
    echo '</ol>';
?>