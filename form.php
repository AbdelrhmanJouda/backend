<link rel="stylesheet" href="style.css">
<div>
<?php

echo "\n";
echo "name =  ". $_GET["username"];
echo "<br>";
echo  "pass =  " . $_GET["password"]; 
echo "<br>";
echo "Lang =  " . $_GET["languge"];
echo "<br>";
echo "Message =  " . $_GET["message"];
?>
</div>
<form action="index.php">
<button type="submit">back to form</button>
</form>