<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">

    <title><?= isset($title) ? $title . ' - ' :  '' ?> CRUD</title>
</head>

<body>

    <div class="d-flex">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark sidebar-dashboard" style="width: 240px;">
            <div class="text-center">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <div class="">
                        <i class="bi bi-person-lines-fill fs-2 me-2"></i>
                        <span class="fs-4">Sidebar</span>
                    </div>
                </a>

            </div>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <!-- <li class="nav-item">
                <a href="#" class="nav-link " aria-current="page">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#home"></use>
                    </svg>
                    Home
                </a>
            </li> -->
                <li>
                    <a href="/" class="nav-link text-white <?= url_is('/') ? 'active' : '' ?>">
                        <i class="bi me-2 bi-speedometer2 "></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <i class="bi me-2 bi-table "></i>
                        Orders
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <i class="bi me-2 bi-bag "></i>
                        Products
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <i class="bi me-2 bi-person-circle"></i>
                        Customers
                    </a>
                </li>
                
            </ul>
            <hr>
            <div class="text-center fw-light ">
                <a href="https://github.com/EdivandroLima" class="text-white text-decoration-none">
                    <i class="bi me-1 bi-github"></i>
                    Edivandro Lima
                </a>

            </div>
        </div>

        <div class="bg-light  col ">
            <div class="bg-white px-3 py-2 d-flex shadow-sm">

                <div class="dropdown ms-auto">
                    <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle"
                        id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="" class="rounded-circle me-2"
                            width="32" height="32">
                        <strong>mdo</strong>
                    </a>
                    <ul class="dropdown-menu  text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?= site_url('logout') ?>">Sign out</a></li>
                    </ul>
                </div>
            </div>

            <div class="container py-4">
                <!-- content -->
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </div>

    <script src="<?= asset('js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>