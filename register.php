<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylereg.css">
	<script type="text/javascript" src="js/jquery-3.7.0.min.js"></script>
	<script type="text/javascript" src="js/validateRegister.js"></script>
    <title>Register</title>
</head>
<body>
<main>
    <form>
        <h1>Sign Up</h1>
        <div>
		<div id="alertuser"></div>
		<div id="alertemail"></div>
		<div id="alertpass"></div>
		<div id="alertpass2"></div>
		<div id="alertcheck"></div>
		<div id="alertok"></div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="password2">Password Again:</label>
            <input type="password" name="password2" id="password2">
        </div>
        <div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
                with the
                <a href="#" title="term of services">term of services</a>
            </label>
        </div>
        <button type="button" id="reg">Register</button>
        <footer>Already a member? <a href="login.php">Login here</a></footer>
    </form>
</main>
</body>
</html>