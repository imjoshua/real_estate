<?php session_start();
if(isset($_SESSION['user_id']))
{
     header("Location: pagination.php");
}
?>


<?php
include 'header.php';
?>

<h2>Please Login</h2>

<table id="structure">
    <tr>
        <td id="page">
            <h2>Admin Login</h2>
            <form action="adminlogin.php" method="post">
                <table>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username"  value="<?php echo htmlentities($username); ?>" /></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" value="<?php echo htmlentities($password); ?>" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="login" id="login" value="Login" /></td>
                    </tr>
                </table>
            </form>
            <ul id="displayerror"> <?=$errorString?> </ul>
        </td>
    </tr>
</table>

<?php
include 'footer.php';
?>

