<?php

/*
--------------------------------
|   Nux md5 Hash tool V1.0.0   |
| https://github.com/nux-xader |
|  https://wa.me/6281251389915 |
--------------------------------
*/

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Nux-md5 hash tool V1.0.0</title>

	<style type="text/css">
		body {
			background-color: black;
			font-family: sans-serif;
			color: white;
		}

		h1 {
			margin-top: 3%;
			text-align: center;
			color: cyan;
		}

		.cmd {
			margin-top: 8%;
			text-align: center;
		}

		#btn {
			margin-top: 1rem;
		}

		.result-hash {
			text-align: center;
			font-weight: bold;
			margin-top: 1rem;
		}
	</style>

</head>
<body>
	<h1>Nux-md5 Hash tool V1.0.0</h1>
	<form class="cmd" action="/" method="GET">
		<input type="text" name="text" placeholder="Enter a word here"> <br>
		<input type="submit" id="btn" value="Hash">
	</form>
	<?php if (isset($_GET['text'])) : ?>
		<pre class="result-hash"><?php echo md5($_GET['text']); ?></pre>
	<?php endif ?>
</body>
</html>