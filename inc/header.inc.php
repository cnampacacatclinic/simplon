
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.3/lux/bootstrap.min.css" integrity="sha512-+TCHrZDlJaieLxYGAxpR5QgMae/jFXNkrc6sxxYsIVuo/28nknKtf9Qv+J2PqqPXj0vtZo9AKW/SMWXe8i/o6w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="fontInter">

<header>
<nav id="navStartIsland" class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?=  BASE_PATH; ?>"><img id="logo" alt="logo" src="assets/img/logo_starisland.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="menuStartisland" class="collapse navbar-collapse" id="navbarColor01">
        <a id="favHome" href="<?=  BASE_PATH; ?>"><img alt="Acceuil" src="assets/img/symbole_home_1.png">
                        <span class="visually-hidden">(current)</span>
                    </a>
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallerie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Devenir VIP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Serveur</a>
                </li>
                <?php     if (connect()):           ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ADMIN</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?=  BASE_PATH.'back/userList.php'; ?>">Gestion utilisateur</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?=  BASE_PATH.'back/'; ?>">Accès Back-office</a>
                    </div>
                </li>
                <?php     endif;           ?>

            </ul>
            <?php     if (connect()):           ?>
            <a href="<?=  BASE_PATH.'?a=dis'; ?>" class="btn btn-primary">Déconnexion</a>
            <?php     else:           ?>
            <a href="<?=  BASE_PATH.'security/login.php'; ?>" class="btn btn-primary">Connexion</a>
            <?php        endif;        ?>

        </div>
    </div>
</nav>
</header>
<main class="container paddingMarginZero">
    <?php     if (isset($_SESSION['messages']) && !empty($_SESSION['messages'])):           ?>
    <?php     foreach ($_SESSION['messages'] as $type=>$messages):
      ?>
    <?php     foreach ($messages as $key=>$message):           ?>
    <div class="alert alert-<?=  $type; ?> text-center w-50 mx-auto">
        <p><?=  $message; ?></p>
    </div>

    <?php   unset($_SESSION['messages'][$type][$key]);
            endforeach;  endforeach;  endif;           ?>