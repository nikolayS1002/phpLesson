<h2>Калькулятор</h2>

<?php
extract($calc);
?>
<form action="" method="post">
    <input type="text" name="arg1" value="<?= $arg1 ?>">
    <select name="operation">
        <option value="sum" <?php if ($op == 'sum') echo 'selected'; ?>>+</option>
        <option value="sub" <?php if ($op == 'sub') echo 'selected'; ?>>-</option>
        <option value="mult" <?php if ($op == 'mult') echo 'selected'; ?>>*</option>
        <option value="del" <?php if ($op == 'del') echo 'selected'; ?>>/</option>
    </select>
    <input type="text" name="arg2" value="<?= $arg2 ?>">
    <input type="submit">
    <input type="text" name="result" value="<?= $result ?>">
</form>