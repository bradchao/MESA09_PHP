<?php
    include_once 'sql.php';
    include_once 'Product.php';

    $sql = 'select * from product';
    $result = $mysqli->query($sql);

?>
<a href="addProduct.php">Add New</a>
<hr />
Product List:<br>
<table border="1" width="100%">
    <tr>
        <th>id</th>
        <th>pname</th>
        <th>price</th>
        <th>qty</th>
    </tr>
    <?php
    while ( $product = $result->fetch_object('Product')){
         echo '<tr>';
         echo "<td>{$product->id}</td>";
         echo "<td>{$product->pname}</td>";
         echo "<td>{$product->price}</td>";
         echo "<td>{$product->qty}</td>";
         echo '</tr>';
    }

    ?>
</table>