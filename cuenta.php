<?php
require 'includes/templates/header.php';
if ((!isset($_SESSION['usuario'])) && (!isset($_SESSION['email']))) {
    session_destroy();
    // header('Location: cuenta.php#angel-ruiz');
    ?><META HTTP-EQUIV="REFRESH" CONTENT="1;URL=http://localhost/01ingeangel.com/logout.php"><?php
} else {
    ?>
    <title>Tu Cuenta</title>
    <div class="contenedorf">
        <?php
    echo ($_SESSION['usuario']);
        ?>
    </div>
<?php
}
require 'includes/templates/footer.php';
?>