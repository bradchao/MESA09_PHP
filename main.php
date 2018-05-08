Main Page
<?php
    include_once 'sql.php';
    include_once 'Member.php';
    include_once 'Cart.php';
    include_once 'Product.php';
    session_start();

    if (!isset($_SESSION['member'])) header('Location: login.php');

    $sql = "select * from product";
    $result = $mysqli->query($sql);


    ?>
<hr>
Product List:<br>
<table border="1" width="100%">
    <tr>
        <th>PName</th>
        <th>Price</th>
        <th>Num.</th>
        <th>Update Cart</th>
    </tr>
    <?php
    while ($product = $result->fetch_object("Product")){
        echo '<tr>';
        echo "<td>{$product->pname}</td>";
        echo "<td>{$product->price}</td>";

        echo '<td><input type="number"></td>';
        echo '<td><input type="button" value="update"></td>';

        echo '</tr>';
    }
    ?>

</table>


<hr>
<a href="logout.php">Logout</a>



