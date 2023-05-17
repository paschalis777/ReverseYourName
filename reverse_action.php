

<style>
    body {
        background-color: blanchedalmond;
        text-align: center;
        padding-top: 100px;
    }

    p{
        font-weight: bolder;
    }
</style>
<body>
    <p>Your Result Is Here </p>

<?php

if (!empty($_POST["reverse"])) {
    $reverse_array = str_split($_POST["reverse"], 2);
    $reversed_text = '';
    $i = sizeof($reverse_array) - 1;
    for ($i; $i >= 0; $i--) {
        $reversed_text .= $reverse_array[$i];
    }
    echo '<input type="text" name="reverse" placeholder="' . $reversed_text . '" />';
} else {
    echo '<input type="text" name="reverse" placeholder="REVERSE YOUR NAME :)" />';
}
?>

</body>