<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="tinycms"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Please sign in.';
    exit;
} else {
    if ($_SERVER["PHP_AUTH_PW"] == strip_tags(file_get_contents("../password.php"))) {
        false;
    } else {
        echo "Invalid login. Try clearing logins!";
        exit;
    }
}
?>
<?php
    unlink($_GET["page"]);
    header("Refresh: 0; url=index.php")
?>
