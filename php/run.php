<?php
$name = $_GET['name'];
$email = $_GET['email'];
$product = $_GET['product'];
$text = $_GET['text'];

echo $name;
echo $email;
echo $product;
echo $text;

$empfanger = "toodledesigns.order@gmail.com";
$betreff = "Auftrag erhalten!";
$nachricht = "$name hat was bestellt! \nEr will: $product. \nEs soll so aussehen: $text. \nSeine E-mail lautet: $email";
$header = "From: $name <$email>";
	
mail($empfanger, $betreff, $nachricht, $header);	
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Order recieved</title>
	<link rel="stylesheet" href="../css/style_run_php.css">
</head>

<body>
	<h1>Your order has been recieved!</h1>
</body>
</html>