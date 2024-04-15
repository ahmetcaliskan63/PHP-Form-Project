<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>

   
<?php

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$yas = htmlspecialchars($_POST["number"]);
$cinsiyet = htmlspecialchars($_POST["cinsiyet"]);

echo "Ad:$name <br/>";
echo "E-posta:$email<br/>";
echo "Yaş:$yas<br/>";
echo "Cinsiyet:$cinsiyet<br/>";


?>

</body>
</html>