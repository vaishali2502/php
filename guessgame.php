<?php
session_start();

if (!isset($_POST["guess"])) {
     $_SESSION["count"] = 0; 
     $message = "Welcome to the guessing machine!";
     $_POST["numtobeguessed"] = rand(0,1000);
     echo $_POST["numtobeguessed"];
} else if ($_POST["guess"] > $_POST["numtobeguessed"]) { 
    $message = $_POST["guess"]." is too big! Try a smaller number.";
    $_SESSION["count"]++; 
} else if ($_POST["guess"] < $_POST["numtobeguessed"]) { 
    $message = $_POST["guess"]." is too small! Try a larger number.";
    $_SESSION["count"]++; 
} else { 
    $_SESSION["count"]++;
    $message = "Well done! You guessed the right number in ".$_SESSION["count"]." attempt(s)!"; 
    unset($_SESSION["count"]);
       
}
?>
<html>

    <head>
        <title>A PHP number guessing script</title>
    </head>
    <body>
    <h1><?php echo $message; ?></h1>
        <form action="" method="POST">
        <p><strong>Type your guess here:</strong>
            <input type="text" name="guess"></p>
            <input type="hidden" name="numtobeguessed" 
                   value="<?php echo $_POST["numtobeguessed"]; ?>" ></p>
    <p><input type="submit" value="Submit your guess"/></p>
        </form>
    </body>
</html>