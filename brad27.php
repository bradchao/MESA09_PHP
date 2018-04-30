<?php
    include 'bradapis.php';

    $result = '';
    if (!isset($_POST['answer'])){
        // 首次進入
        $answer = createAnswer(3);
    }else{
        // 之後進入
        $answer = $_POST['answer'];
        $guess = $_POST['guess'];
        $result = checkAB($answer, $guess);
    }

    //echo $answer . '<br>';

?>
<form method="post">
    Guess Number: <input type="number" name="guess"/>
    <input type="submit" value="Guess" />
    <input type="hidden" name="answer" value="<?php echo $answer; ?>">
</form>
<hr />
<div><?php echo $result; ?></div>