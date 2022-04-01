<!DOCTYPE html>
<html>
<body>
<form method="get" action="">
<select id="cars" name="test">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select>
 <input type="submit" value="Submit" name="submit">
</form>

<?php
    echo "<pre>";
    echo print_r($_GET);
    echo "</pre>";
?> 

</body>
</html>