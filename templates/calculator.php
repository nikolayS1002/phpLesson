<h2>Калькулятор</h2>

<?php
var_dump($calc);
extract($calc);
?>
<form action="" method="post">
    <input type="text" name="arg1" value="<?=$arg1?>">
    <select name="operation">
        <option value="sum">+</option>
        <option value="sub">-</option>
        <option value="mult">*</option>
        <option value="del">/</option>
    </select>
    <input type="text" name="arg2" value="<?=$arg2?>">
    <input type="submit">
    <input type="text" name="result" value="<?=$result?>">
</form>