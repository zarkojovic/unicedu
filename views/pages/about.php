<?php
require_once "models/Users/User.php";

require_once "views/fixed/header.php";
?>
<?php
    try {
        $user = User::getUser('1');
        var_dump($user);
    } catch (ErrorException $ex) {
        var_dump($ex->getMessage());
    }
?>

<?php
require_once "views/fixed/footer.php";
?>

