<DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Лабораторная работа №6</title>
    </head>
    <body>
    <form action="lab06_2.php" method="GET">
        <p>Выберите область:<br></p>
        <?php
        $f=file('oblinfo.txt');
        echo '<select name="menu">';
        for($i=1;$i<=81;$i=$i+3) {
            $obl = $f[$i];
            $num = $f[$k];
            echo '<option value="'.$i.'"">' . $obl . '</option>';
        }
        echo '</select>';
        echo '<p><input type="submit"></p>';
        ?>
    </form>
    </body>
    </html>