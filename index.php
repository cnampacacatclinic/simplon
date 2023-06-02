<?php      require_once 'config/function.php';
            require_once 'inc/header.inc.php';

            if (isset($_GET['a']) && $_GET['a']=='dis'){

                unset($_SESSION['user']);
                $_SESSION['messages']['info'][]='A bientôt !!';
                header('location:./');
                exit();


            }
            ?>
<section class="fontImage1"></section>
<section class="fontImage2"></section>

<?php     require_once 'inc/footer.inc.php';          ?>
