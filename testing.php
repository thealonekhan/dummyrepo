<?php

    $value = '4242';

    echo str_replace("+", "", $value);

    echo "<br />";

    echo strtr($value, ['+' => '']);

?>