<form action="result.php" method="get">
  <p>お名前：<input type="text" name="my_name"></p>
  <p>ご希望商品：
    <input type="radio" name="abc" value="A賞">A賞
    <input type="radio" name="abc" value="B賞">B賞
    <input type="radio" name="abc" value="C賞">C賞
  </p>
  <p>個数：<select name="number">
    <?php for($i=1;$i<=10;$i++){ ?>
      <option value="<?php echo $i; ?>">
      <?php echo $i;?>
      </option>
   <?php } ?>
  </select></p>
  <input type="submit" value="申込">

</form>