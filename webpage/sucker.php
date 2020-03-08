<?php
		$issetAll = (empty($_REQUEST["credit_card"]) or empty($_REQUEST["type"]) or empty($_REQUEST["name"]) or empty($_REQUEST["section"]));
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<?php
		if(!$issetAll){ ?>
			<h1>Thanks, sucker!</h1>
			<p>Your information has been recorded.</p>
			<dl>
				<dt>Name</dt>
				<dd><?= $_REQUEST["name"] ?></dd>
				<dt>Section</dt>
				<dd><?= $_REQUEST["section"] ?></dd>
				<dt>Credit Card</dt>
				<dd><?= $_REQUEST["credit_card"]."(".($_REQUEST["type"] == "Visa"?"mastercard":"visa").")" ?></dd>
				<?php
					$file = 'suckers.txt';
					$new_content = $_REQUEST["name"].";".$_REQUEST["section"].";".$_REQUEST["credit_card"].";".$_REQUEST["type"]."\n";
					file_put_contents($file, $new_content, FILE_APPEND);
				?>
			</dl>
			<p>Here are all the suckers that have submitted here:</p>
			<pre>
				<?php
					echo file_get_contents($file);
				?>
			</pre>
	<?php } else { ?>
			<h1>Sorry</h1>
		  <p>You didn't fill out the form completely! <a href="buyagrade.php">Try again?</a></p>
		<?php } ?>
	</body>
</html>
