<?php
IF($_POST['user_choice']){
	$user_choice = $_POST['user_choice'];
	
	$Choosefrom= array(Rock, Paper, Scissors);
	$Choice= rand(0,2);
	$Computer=$Choosefrom[$Choice];

	IF($user_choice == $Computer){
	echo 'Result : Draw +0';
	$_SESSION['Score']= (int)$_SESSION['Score'];
	}
	ELSE IF($user_choice == 'Rock' && $Computer == 'Scissors'){
	echo 'Result : Win +1';
	$_SESSION['Score']= (int)$_SESSION['Score'] +1;
	}
	ELSE IF($user_choice == 'Rock' && $Computer == 'Paper'){
	echo 'Result : Lose -1';
	$_SESSION['Score']= (int)$_SESSION['Score'] -1;
	}
	ELSE IF($user_choice == 'Scissors' && $Computer == 'Rock'){
	echo Result : Lose -1';
	$_SESSION['Score']= (int)$_SESSION['Score'] -1;
	}
	ELSE IF($user_choice == 'Scissors' && $Computer == 'Paper'){
	echo 'Result : Win +1';
	$_SESSION['Score']= (int)$_SESSION['Score'] +1;
	}
	ELSE IF($user_choice == 'Paper' && $Computer == 'Rock'){
	echo 'Result : Win +1';
	$_SESSION['Score']= (int)$_SESSION['Score'] +1;
	}
	ELSE IF($user_choice == 'Paper' && $Computer == 'Scissors'){
	echo 'Result : Lose -1';
	$_SESSION['Score']= (int)$_SESSION['Score'] -1;
	}
	echo 'You\'re score is currently: '.$_SESSION['Score'].' ';
	echo '<a href="RPS.php">Play Again ?</a>';
}
ELSE IF(){
echo '<form action="RPS.php" method="post" />
<input type="image" src="Rock.png" alt="Rock" name="user_choice" value="Rock" title="Rock" /> <br /><br />
<input type="image" src="Paper.png" alt="Paper" name="user_choice" value="Paper" title="Paper" /> <br /><br />
<input type="image" src="Scissors.png" alt="Scissors" name="user_choice" value="Scissors" title="Scissors" /> <br /><br />
</form> ';
}
?>
