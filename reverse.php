<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> REVERSE </title>
</head>

<style>

    form{
        padding-top: 20px;
        padding-left: 50px;
        text-align: center;
    }


    P{
        padding-top: 50px;
     font-weight: bolder;
     text-align: center;
    }

    body{
        background-color: blanchedalmond;
    }
</style>

<body>

    <div>
        <P> "Reverse Your Name: A PHP Function to Reverse User Input" </P>
        <form method="POST" action="reverse_action.php">
            <input type="text" name="reverse" placeholder="REVERSE YOUR NAME :) "> <br>
            <BR>
            <button type="submit"> PUSH THE BUTTON </button>





        </form>
    </div>

    <?php 





if (!empty($_POST["reverse"])) {
    $reverse_array = str_split($_POST["reverse"], 2);
    $i = sizeof($reverse_array) - 1;
    for ($i; $i >= 0; $i--) {
        echo $reverse_array[$i];
    }
}










?>





</body>

</html>