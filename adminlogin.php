<?php include('config.php'); ?>
<?php

// START FORM PROCESSING
if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

//validating name
    if (!$username)
        $errors[count($errors)] = 'Please enter your name.';
//validating email
    if (!$password)
        $errors[count($errors)] = 'Please enter your password.';
//if all validation passed
    if (!$errors) {
        // Check database to see if username and password exist there.
        $query = "SELECT user_id, password FROM admin WHERE user_id = '$username'AND password = '$password'";
        $result_set = mysql_query($query);


        if (mysql_num_rows($result_set) == 1) {
            // username/password authenticated
            // and only 1 match
            $found_user = mysql_fetch_array($result_set);
            session_start();
            $_SESSION['user_id'] = $found_user['user_id'];
             header("Location: pagination.php");
        } else {
            // username/password combo was not found in the database
            $errors[count($errors)] = "Username/password combination incorrect.<br />
					Please make sure your caps lock key is off and try again.";
            for ($i = 0; $i < count($errors); $i++) {
                $errorString .= "<li>" . $errors[$i] . "</li> \n";
            }
            include 'index.php';
        }
    } else {
        for ($i = 0; $i < count($errors); $i++) {
            $errorString .= "<li>" . $errors[$i] . "</li> \n";
        }
        include 'index.php';
    }
}
?>