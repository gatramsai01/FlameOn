<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlameOn</title>
    <link rel="icon" href="http://localhost/Flameno/Assets/images/flameon.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fyellowoka+One&family=Play&display=swap" rel="stylesheet">

    <!-- aos css cdn link  -->
    <link rel="stylesheet" href="Assets/css/home.css">
    <link rel="stylesheet" href="Assets/css/style1.css">


    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <!-- <link rel="stylesheet" href="style.css"> -->

</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<!-- header section starts  -->

<nav>
    <div class="menu-icon">
        <span class="fas fa-bars"></span>
    </div>
    <div class="logo">
        Flame On
    </div>
    <div class="nav-items">
        <li><a class="active" href="https://localhost/Flameno/home">home</a></li>
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
    <form action="search.php">
        <input type="search" name="search" class="search-data" placeholder="Search" required>
        <button type="submit" name="submit_search" class="fas fa-search"></button>
    </form>
</nav>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content" data-aos="fade-right">
        <h3>Whats Better Than Home made Food!</h3>
        <p>Delectable home-cooked food will make you go wow, the foods that are prepared at home are way better than cooked in restaurants, hotels, or someplace else and the main reason why homemade meals are better for health is that homemade food is hygienic!</p>
        <a href="https://localhost/Flameno/category/All/0"><button class="btn">Search recipe</button></a>

    </div>

    <div class="image" data-aos="fade-up">
        <img src="Assets/images/home/plate.png" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image" data-aos="fade-right"> <img src="Assets/images/home/girl.jpg" alt=""><img src="bl" alt=""></div>


    <div class="content" data-aos="fade-left">
        <h3>a word about us</h3>
        <p>
            A website that introduces our viewers to the delight of food and aspires to be their companion in making delicious food. So join us to create memories with mouth-watering dishes while we’ll guide you through the entire process!
        </p>
        <a href="https://localhost/Flameno/about"><button class="btn">learn more</button></a>
    </div>

</section>

<!-- about section ends -->

<section class="menu" id="menu">

<h1 class="heading"> our delicious <span>menu</span> </h1>

<ul class="list" data-aos="fade-down">
    <a href="category.php?categoryName=Indian&categoryId=1"> <li class="btn" >Indian</li></a>
    <a href="category.php?categoryName=Italian&categoryId=2"><li class="btn" >Italian</li></a>
    <a href="category.php?categoryName=Japanese&categoryId=3"><li class="btn">Japanese</li></a>
    <a href="category.php?categoryName=Arabian&categoryId=4"><li class="btn" >Arabian</li></a>
    <a href="category.php?categoryName=Chinese&categoryId=5"><li class="btn" >Chinese</li></a>

</ul>

<div class="row" data-aos="fade-right">

    <div class="image" data-aos="fade-left">
        <img src="https://images.pexels.com/photos/718742/pexels-photo-718742.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" id="menu-img" alt="">
    </div>

    <div class="content">
        <div class="info">

       <p>Perhaps the oldest and simplest cultural exchange one can undertake, is trying world cuisines. Essentially, a plate of food can offer insight to the culture and local customs of its origin. It was a pleasant surprise when I stumbled upon an article that highlighted countries with the greatest influence on world palate. Joel Waldfogel’s paper, titled ‘Dining out as a cultural trade’, used restaurant listings from TripAdvisor, Yelp, Tabelog and sales figures from Euromonitor to estimate world ‘trade’ in cuisines from 52 countries. He denotes domestic consumption of foreign cuisine as an ‘import’ and foreign consumption of domestic cuisine as an ‘export’. </p>
        </div>
    </div>

</div>

</section>

<footer>
    <div class="footer">
        <div class="footercontainer">
            <a href="https://www.facebook.com/profile.php?id=100025107904109"><i class="fab fa-facebook-f"></i></a>
            <a href="https://instagram.com/flameon_connect?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/FlameOn61180072?s=09"><i class="fab fa-twitter"></i></a>
            <a href="https://www.youtube.com/channel/UCOTyXXEvBKFWXQAxcy6fvCg"><i class="fa fa-youtube"></i></a>
        </div>

        <div class="footercontainer">
            <ul>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Career</a></li>
            </ul>
        </div>

        <div class="footercontainer">
            Copyright © 2021 - All rights reserved
        </div>
    </div>
</footer>


<script>
    const menuBtn = document.querySelector(".menu-icon span");
    const searchBtn = document.querySelector(".search-icon");
    const cancelBtn = document.querySelector(".cancel-icon");
    const items = document.querySelector(".nav-items");
    const form = document.querySelector("form");
    const row = document.querySelector(".row");
    menuBtn.onclick = ()=>{
        items.classList.add("active");
        menuBtn.classList.add("hide");
        searchBtn.classList.add("hide");
        cancelBtn.classList.add("show");
    }
    cancelBtn.onclick = ()=>{
        items.classList.remove("active");
        menuBtn.classList.remove("hide");
        searchBtn.classList.remove("hide");
        cancelBtn.classList.remove("show");
        form.classList.remove("active");
        cancelBtn.style.color = "#ff3d00";
        row.style.marginTop = "20px";
    }
    searchBtn.onclick = ()=>{
        form.classList.add("active");
        searchBtn.classList.add("hide");
        cancelBtn.classList.add("show");
        row.style.marginTop = "100px";
    }
</script>

<!-- footer section ends -->

</body>
</html>
