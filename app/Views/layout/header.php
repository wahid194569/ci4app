<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <!-- biasanya ini online tapi tumben ini bisa -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- biasanya adalah format manual penggunaan bootstrap css  -->
    <!-- <link href="../../../public/assets/css/bootstrap-grid.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">-->
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">MA Miftahul Ulum</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <!-- kalau mengakses menggunakan xampp -->
                            <!-- <a class="nav-link active" aria-current="page" href="<?= base_url('/'); ?>">Home</a> -->

                            <!-- mengakses menggunakan CI or php spark serve -->
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <!-- kalau mengakses menggunakan xampp -->
                            <!-- <a class="nav-link" href="<?= base_url('/pages/about'); ?>">About Us</a> -->

                            <!-- mengakses menggunakan CI or php spark serve -->
                            <a class="nav-link" href="/pages/about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>