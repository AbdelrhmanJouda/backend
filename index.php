<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>backend</title>
</head>
<body>
<div>
<form action="form.php" method="get" autocomplete="off">
    <label for="username">username</label>
    <input type="text" name="username" value='' id="myInput" placeholder="name" >
    <br>
    <label for="password">password</label>
    <input type="password" name="password" placeholder="password" value="">
    <br>
    <label for="languge">Choose a Languge:</label>
<select name="languge">
  <option value="PHP">PHP</option>
  <option value="Java">Java</option>
  <option value="Javascript">Javascript</option>
  <option value="Python">Python</option>
</select> 
<br>
<textarea name="message" rows="10" cols="30" placeholder="Type your message" value="">

</textarea> 
<br>
    <button type="submit" name="submit"> submit </button>

</form>
    </div>
</body>
</html>