<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Tabuada</title>
</head>

<body>
    <br><a href="exemploFor.php" class="w3-button w3- teal">Voltar</a><br>
    <?php
    $t = -1;
    if (isset($_REQUEST["btn0"]))
        $t = 0;
    elseif (isset($_REQUEST["btn1"]))
        $t = 1;
    elseif (isset($_REQUEST["btn2"]))
        $t = 2;
    elseif (isset($_REQUEST["btn3"]))
        $t = 3;
    elseif (isset($_REQUEST["btn4"]))
        $t = 4;
    elseif (isset($_REQUEST["btn5"]))
        $t = 5;
    elseif (isset($_REQUEST["btn6"]))
        $t = 6;
    elseif (isset($_REQUEST["btn7"]))
        $t = 7;
    elseif (isset($_REQUEST["btn8"]))
        $t = 8;
    elseif (isset($_REQUEST["btn9"]))
        $t = 9;
    else {
        $t = $_REQUEST['tabuada'];
    }
    ?>
    <div class="w3-quarter w3-display-middle w3- responsive w3-teal">
        <table class="w3-table-all w3-hoverable w3-text-black">
            <tr class="w3-teal ">
                <th class="w3-center">Tabuada do <?php echo  $t ?> com FOR</th>
            </tr>
            <?php for ($i = 1; $i <= 10; $i++) { ?>
                <tr>
                    <td class="w3-center"><?php echo  $t ?> X <?php echo  $i ?> = <?php echo  $t * $i ?></td>
                </tr>
            <?php } ?>
        </table>
        <table class="w3-table-all w3-hoverable w3-text-black">
            <tr class="w3-teal ">
                <th class="w3-center">Tabuada do <?php echo  $t ?> com WHILE</th>
            </tr>
            <?php $i = 1;
            while ($i <= 10) { ?>
                <tr>
                    <td class="w3-center"><?php echo  $t ?> X <?php echo  $i ?> = <?php echo  $t * $i ?></td>
                </tr>
            <?php $i++;
            } ?>
        </table>
        <table class="w3-table-all w3-hoverable w3-text-black">
            <tr class="w3-teal ">
                <th class="w3-center">Tabuada do <?php echo  $t ?> com DO-WHILE</th>
            </tr>
            <?php $i = 1;
            do { ?>
                <tr>
                    <td class="w3-center"><?php echo  $t ?> X <?php echo  $i ?> = <?php echo  $t * $i ?></td>
                </tr>
            <?php $i++;
            }while ($i <= 10); ?>
        </table>
    </div>
</body>

</html>