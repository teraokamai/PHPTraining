<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>training02</title>
</head>
<body>
  <form action="output.php" method="POST">
    <!-- <div>
      <label>1</label>
      <input type="checkbox" name="check[]" value="1">
    </div>
    <div>
      <label>2</label>
      <input type="checkbox" name="check[]" value="2">
    </div>
    <div>
      <label>3</label>
      <input type="checkbox" name="check[]" value="3">
    </div>
    <div>
      <label>4</label>
      <input type="checkbox" name="check[]" value="4">
    </div>
    <div>
      <label>5</label>
      <input type="checkbox" name="check[]" value="5">
    </div> -->

    <?php
      for($i =1;$i <=5; $i++){
        print "<div><label>".$i.'</label><input type="checkbox" name="check[]" value='.$i.'></div>';
      }
    ?>
    <div>
      <input type="submit" value="送信">
    </div>
    </form> 
</body>
</html>