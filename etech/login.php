<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index.html");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="wrapper">
    <h1>Login</h1>
    <div class="invalid">
    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
    </div>
    
    
    <form method="post">
        <label for="email"></label>
        <input type="email" name="email" id="email" placeholder="Email"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
        
        <label for="password"></label>
        <input type="password" name="password" id="password" placeholder="Password">
        
        <button>Log in</button>
    </form>
    <div class="member">
        Not a Member?<a href="signup.html">
            Register Now
        </a>
    </div>
    </div>
    
    
</body>
</html>








