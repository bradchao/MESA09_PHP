<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    include_once 'sql.php';
    include_once 'Product.php';

    if (isset($_REQUEST['editid'])){
        // 撈出指定的資料
        $editid = $_REQUEST['editid'];
        $sql = "select * from product where id={$editid}";
        $result = $mysqli->query($sql);
        $product = $result->fetch_object("Product");

    }

?>
Edit Product:
<hr />
<form>
    PName: <input name="pname" value="<?php echo $product->pname;?>"/><br/>
    Price: <input type="number" name="price" value="<?php echo $product->price;?>"/><br/>
    Qty.: <input type="number" name="qty" value="<?php echo $product->qty;?>" /><br/>
    <input type="submit" value="Edit" />
</form>

