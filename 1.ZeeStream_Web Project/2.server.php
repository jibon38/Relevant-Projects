<? php
	session_start();

	// Initializing Variables
	$username = "";
	$email    = "";
	//$password = "";
	$errors = array();

	// connect to the database
	$db = mysqli_connect('localhost', 'root', '', 'registration');


	// If the 'register' button is clicked
	if (isset($_POST['register'])) {         // here 'register' is the submit button name in '1.register.php' file.

		// receive all input values from the form
		//$username = stripcslashes($username);  
		//$email    = stripcslashes($email);
		//$password = stripcslashes($password); 
		  
		$username = mysqli_real_escape_string($_POST['username']);
		$email = mysqli_real_escape_string($_POST['email']);
		$password = mysqli_real_escape_string($_POST['password']);


	  	// first check the database to make sure 
	  	// a user does not already exist with the same username and/or email
	  
	    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
	    $result = mysqli_query($db, $user_check_query);
	    $user = mysqli_fetch_assoc($result);
	  

	    if($user) { // if user exists
	    	if($user['username'] == $username) {
	      		echo "Username already exists.";
	    	}

	    	if($user['email'] == $email) {
	     	 	echo "Email already exists.";
	    	}
	    	if($user['password'] == $password) {
	     	 	echo "Password already exists.";
	    	}
	 	}

	  	$password = md5($password);     //encrypt the password before saving in the database.
	  	$sql = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')";
	  	mysqli_query($db, $sql);

	  	$_SESSION['success'] = header('location: 0.index.php');

	  	//header('location: 0.index.php');   // redirecting to the home page after registering.
	  //}
	}


	// LOGIN USER
	if (isset($_POST['login'])) {          // 'login' is the button name for Login.
		
	    $email = mysqli_real_escape_string($_POST['email']);
	    $password = mysqli_real_escape_string($_POST['password']);

	  	$password = md5($password);
	  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	  	$result = mysqli_query($db, $query);

	  	if(mysqli_num_rows($result); == 1){

	  	  $_SESSION['success'] = header('location: 0.index.php');
	  	  //header('location: 0.index.php');
	  	}
		else {
	  		echo "Wrong email/password combination.";
	  		//header('location: 5.login.php');
	  	}
	}

?>
