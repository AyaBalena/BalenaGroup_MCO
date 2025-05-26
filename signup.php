<!DOCTYPE htnl>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts.js"></script>
</head>

<body> class="bg-login-index">

<div class="form">

<form class="subform" action="signup.php" method="post">
    <h2>Sign Up</h2>
 <label>Email</label> <br>
 <input type="email" name="email" required placeholder="Enter your email"> <br>
 <label>Password</label> <br>
    <input type="password" name="password" required placeholder="Enter your password"> <br>
    <label>Confirm Password</label> <br>
    <input type="password" name="confirm_password" required placeholder="Confirm your password"> <br>
    <button type="submit" name="signup">Sign Up</button>
</button> <br>
</div>
<div class="button>
<div>Have already an account? <a href="login.php">Login</a></div>
</div>
</form>

<!-- FOOTER -->
<footer>
    <p>&copy; 2024 Balena & Friends. All rights reserved.</p>
</footer>

</div>

<script>
    document.querySelector("form").addEventListener("submit", function(event) {
        const password = document.querySelector("input[name='password']").value;
        const confirmPassword = document.querySelector("input[name='confirm_password']").value;

        if (password !== confirmPassword) {
            event.preventDefault();
            alert("Passwords do not match!");
        }
    });
</script>

</body>
</html>