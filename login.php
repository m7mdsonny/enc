<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylereg.css">
	<script type="text/javascript" src="js/jquery-3.7.0.min.js"></script>
	<script type="text/javascript" src="js/validateRegister.js"></script>
    <title>Login</title>
</head>
<body>
<main>
	<form>
	<h1>Login</h1>
        <div>
		<div id="alertemail"></div>
		<div id="alertpass"></div>
		<div id="alertok"></div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="emailLog">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="passwordLog">
        </div>

        <button type="button" id="log">Login</button>
        <footer>New member? <a href="register.php">Register here</a></footer>
    </form>
</main>
</body>
</html>