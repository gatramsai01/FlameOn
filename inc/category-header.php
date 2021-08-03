<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category-<?php echo $_GET['catgoryName'];?></title>
    <link rel="icon" href="http://localhost/Flameno/Assets/images/flameon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="http://localhost/Flameno/Assets/css/category.css">
    <link rel="stylesheet" href="http://localhost/Flameno/Assets/css/style1.css">
</head>
<body style="position: relative;">
<nav>
    <div class="menu-icon">
        <span class="fas fa-bars"></span>
    </div>
    <div class="logo">
        Flame On
    </div>
    <div class="nav-items">
        <li><a href="http://localhost/Flameno/home">Home</a></li>
        <li><a href="http://localhost/Flameno/category/all/0">Recipes</a></li>
        <li><a href="https://localhost/Flameno/about">About</a></li>
        <li><a href="https://localhost/Flameno/contact">Contact</a></li>
    </div>
    <div class="search-icon">
        <span class="fas fa-search"></span>
    </div>
    <div class="cancel-icon">
        <span class="fas fa-times"></span>
    </div>
    <form action="http://localhost/Flameno/search.php" method="get">
        <input type="search" name="search" class="search-data" placeholder="Search"  required>
        <button type="submit" name="submit_search" class="fas fa-search"></button>
    </form>
</nav>
