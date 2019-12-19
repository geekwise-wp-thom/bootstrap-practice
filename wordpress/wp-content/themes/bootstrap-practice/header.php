<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>


    <meta name="description" content="">
    <meta name="author" content="">


    <meta name="viewport" content="width=device-width">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="stylesheet" href="style.css">

    <?php wp_head(); ?>
</head>
<body>
    <header class="container-fluid d-flex justify-content-center">
            <h1>You're going to love the most amazing website ever!</h1>
    </header>
    <nav class="container navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <div class="d-flex justify-content-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown Items
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item text-white" href="#">Tickles</a>
                        <a class="dropdown-item text-white" href="#">Rainbows</a>
                        <a class="dropdown-item text-white" href="#">Unicorns</a>
                    </div>
                </li>
            </div>
        </ul>
    </div>
    </nav>
</body>