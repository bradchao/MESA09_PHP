
<table border="1" width="100%">
    <?php
        for ($k = 0; $k < 2; $k++ ){
            echo '<tr>';
            for ($j = 2; $j <= 5; $j++){
                echo '<td>';
                for ($i = 1; $i<=9; $i++){
                    $r = $j * $i;
                    echo "{$j} x {$i} = {$r}<br>";
                }
                echo '</td>';
            }
            echo '</tr>';

        }
    ?>

</table>