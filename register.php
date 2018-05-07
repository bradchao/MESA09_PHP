<?php
    include_once 'sql.php';

    if (isset($_REQUEST['account'])){
        $account = $_REQUEST['account'];
        $passwd = password_hash($_REQUEST['passwd'],
            PASSWORD_DEFAULT);
        $name = $_REQUEST['name'];

        $sql = "insert into `member` (`account`,`passwd`,`name`) " .
            "values ('{$account}','{$passwd}','{$name}')";

        if ($mysqli->query($sql)){
            header('Location: login.php');
        }else{
            echo 'insert error';
        }

    }

?>

<form>
    Account: <input name="account" /><br>
    Password: <input type="password" name="passwd" /><br>
    Real name: <input name="name" /><br>
    <input type="submit" value="New" />
</form>