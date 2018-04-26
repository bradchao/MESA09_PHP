<?php
    $result = $x = $y = '';   // string
    if (isset($_GET['x']) && isset($_GET['y'])) {
        $x = $_GET['x'];
        $y = $_GET['y'];

        $result = $x + $y;  // integer
        //echo "{$x} + {$y} = {$result}";

    }
?>
<form>
    <input type="text" name="x" value="<?php echo $x;  ?>"/>
    <select>
        <option>+</option>
        <option>-</option>
        <option>x</option>
        <option>/</option>
    </select>
    <input type="text" name="y" value="<?php echo $y; ?>" />
    <input type="submit" value="=" />
    <?php
        echo $result;
    ?>
</form>