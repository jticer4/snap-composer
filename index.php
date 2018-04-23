<?php

// Initialize your autoloader (this example is using composer)
require 'vendor/autoload.php';

// Instantiate the Highlighter.
$hl = new Highlight\Highlighter();

// Set the languages you want to detect automatically.
$hl->setAutodetectLanguages(array('php', 'python', 'perl'));

// Highlight some code.
$highlightMe = $hl->highlightAuto(file_get_contents('arloFunction.php'));

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Snap Composer</title>
		<link rel="function" type="text/html" href="./arloFunction.php">
		<meta charset="utf-8"/>
	</head>
	<body>
		<!-- Print the highlighted code: -->
		<pre class="hljs <?= $highlightMe->language ?>">
      <?= $highlightMe->value ?>
	</body>
</html>