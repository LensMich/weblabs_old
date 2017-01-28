<DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Лабораторная работа №6</title>
    </head>
    <body>
    <style>
        table{
            text-align: center;
            border-collapse: collapse;
            border: 2px solid black;
        }
        td{
            border: 1px solid lightgrey;
        }
    </style>
    <?php
    $f=file('oblinfo.txt');
    $o=$_GET['menu'];
    $obl=$f[$o];
    $nas=$f[$o+1];
    $vuz=$f[$o+2];
    echo '<table>';
    echo '<tr>';
    echo '<td width="70%">Область</td>';
    echo '<td>Насиление тыс.</td>';
    echo '<td>Число вузов</td>';
    echo '<td>Число вузов на 100 тыс населения</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td width="70%">'.$obl.'</td>';
    echo '<td>'.$nas.'</td>';
    echo '<td>'.$vuz.'</td>';
    $na=round(($vuz/($nas/100)),2);
    echo '<td>'.$na.'</td>';
    echo '</tr>';
    echo '</table>';
    ?>
    </body>
    </html>