<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        $soma = $numero1 + $numero2;
    }
?>