<DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>ˠ᮰ಮୠ࡮⠠ٵ</title>
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
    echo '<td width="70%">Ρ렱⼼/td>';
    echo '<td>͠ᨫ孨堲뱮</td>';
    echo '<td>ר᫮ ⳧/td>';
    echo '<td>ר᫮ ⳧�100 ⻱ �嫥�</td>';
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