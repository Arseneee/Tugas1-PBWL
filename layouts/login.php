<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Suendri">
	<title>Pemrograman Berbasis Web Lanjutan | Project11</title>

	<link rel="shortcut icon" href="<?php echo AST; ?>/img/favicon.ico" type="image/x-icon">
	<style>
		body {
			background: #00FFFF;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			margin: 0;
		}

		* {
			font-family: sans-serif;
			box-sizing: border-box;
		}

		form {
			width: 400px;
			border: 2px solid #3498db;
			padding: 30px;
			background: #fff;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			animation: glow 2s infinite alternate;
		}

		@keyframes glow {
			from {
				box-shadow: 0 0 5px 2px yellow, 0 0 10px 4px yellow, 0 0 15px 6px yellow;
			}

			to {
				box-shadow: 0 0 10px 4px #00FFFF, 0 0 20px 8px #00FFFF, 0 0 30px 12px #00FFFF;
			}
		}

		h2 {
			text-align: center;
			margin-bottom: 20px;
			color: #333;
		}

		input {
			display: block;
			border: 2px solid #ccc;
			width: 100%;
			padding: 10px;
			margin: 10px 0;
			border-radius: 5px;
			transition: box-shadow 0.3s ease;
		}

		input:focus {
			box-shadow: 0 0 5px 2px #3498db;
		}

		label {
			font-size: 18px;
			padding: 10px;
			color: #333;
		}

		button {
			background: #3498db;
			padding: 10px 15px;
			border: none;
			border-radius: 5px;
			color: #fff;
			cursor: pointer;
		}

		button:hover {
			background: #2980b9;
		}

		.error {
			background: #e74c3c;
			color: #fff;
			padding: 10px;
			border-radius: 5px;
			margin: 20px 0;
		}

		h1 {
			text-align: center;
			color: #333;
			margin-bottom: 40px;
		}

		a {
			background: #555;
			padding: 10px 15px;
			border-radius: 5px;
			color: #fff;
			text-decoration: none;
			float: right;
		}

		a:hover {
			background: #333;
		}
	</style>
</head>

<body>
	<main>
		<?php
		require_once ROOT . "app/views/" . $view . ".php";
		session_destroy();
		?>
	</main>
</body>

</html>