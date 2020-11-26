<link rel="stylesheet" href="style.css">
<div>
<?php

echo "\n";
echo "name =  ". $_POST["username"];
echo "<br>";
echo  "pass =  " . $_POST["password"]; 
echo "<br>";
echo "Lang =  " . $_POST["languge"];
echo "<br>";
echo "Message =  " . $_POST["message"];
?>
</div>
<form action="index.php">
<button type="submit">back to form</button>
</form>