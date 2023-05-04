<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ana Sayfa • <?=Variables::SITE_TITLE()?></title>
    <link rel="icon" type="image/svg+xml" href="<?=Variables::PUBLIC_ROOT()?>assets/image/favicon.svg">
    <link rel="stylesheet" href="<?=Variables::PUBLIC_ROOT()?>vendor/bootstrap-5.3.0-alpha3/scss/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=Variables::PUBLIC_ROOT()?>vendor/devextreme-22.2.3/css/dx.generic.custom-scheme.css"/>
</head>
<body>
<div class="container-fluid mt-3">
    <div class="row">
        <nav class="navbar navbar-expand-lg" data-bs-theme="dark" style="background-color: #6f2cef;">
            <div class="container">
                <a class="navbar-brand" href="#" title="<?= Variables::SITE_TITLE() ?>">
                    <img src="<?= Variables::PUBLIC_ROOT() ?>assets/image/svg/icon_64x64.svg" alt="Bootstrap" width="36" height="36">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?=Variables::SITE_URL()?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=Variables::SITE_URL()?>pages/customers">Customers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=Variables::SITE_URL()?>pages/employees">Employees</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Orders
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?=Variables::SITE_URL()?>pages/customers">Orders List</a></li>
                                <li><a class="dropdown-item" href="<?=Variables::SITE_URL()?>pages/customers">Order Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=Variables::SITE_URL()?>pages/customers">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=Variables::SITE_URL()?>pages/customers">Shippers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=Variables::SITE_URL()?>pages/customers">Suppliers</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="container mt-3">
    <div class="row">
        <div class="col">

        </div>
    </div>
</div>

