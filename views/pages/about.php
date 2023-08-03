<?php
require_once "models/Users/User.php";
$pageTitle = "About page custom";
require_once "views/fixed/header.php";
require_once "vendor/kafka0238/crest/src/crest.php";
?>
<?php
    $info = CRest::call("methods");

    var_dump($info);

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

