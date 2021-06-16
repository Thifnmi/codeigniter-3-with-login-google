<?php
	// Function login after call API from Google
	function loginFromSocialCallBack($socialUser) {
    include('connect_db.php');
    $result = mysqli_query($con, "SELECT id_account, fullname, phone, email, username, password, level from tb_account WHERE email = '" . $socialUser['email'] . "'");
    if ($result->num_rows == 0) {
        $result = mysqli_query($con, "INSERT INTO tb_account (fullname, email, level) VALUES ('" . $socialUser['name'] . "', '" . $socialUser['email'] . "', 0 );");
        if (!$result) {
            echo mysqli_error($con);
            exit;
        }
        $result = mysqli_query($con, "SELECT id_account, email, fullname from tb_account WHERE email ='" . $socialUser['email'] . "'");
    }
    if ($result->num_rows > 0) {
        $user = mysqli_fetch_assoc($result);
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['current_user'] = $user;
        header('Location: ./login.php');
    }
}
?>