<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>FlameNo-About</title>
      <link rel="icon" href="http://localhost/Flameno/Assets/images/flameon.png" type="image/png">
    <link rel="stylesheet" href="Assets/css/nicepage.css" media="screen">
<link rel="stylesheet" href="Assets/css/about.css" media="screen">
      <link rel="stylesheet" href="Assets/css/style1.css" media="screen">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <meta name="generator" content="Nicepage 3.20.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body">
  <nav>
      <div class="menu-icon">
          <span class="fas fa-bars"></span>
      </div>
      <div class="logo">
          Flame On
      </div>
      <div class="nav-items">
          <li><a class="active" href="https://localhost/Flameno/home">Home</a></li>
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
    <section class="u-clearfix u-section-1" id="carousel_da2d">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-size-36">
              <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                  <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-top-xs u-container-layout-1">
                    <h5 class="u-text u-text-1">About Me</h5>
                    <p class="u-custom-font u-heading-font u-text u-text-palette-4-base u-text-2">
                        Flame on features several recipes from five different cuisines which are epicurious. Each recipe consists of well thought out procedures and with the help of our search bar you can find the recipe to the food of your liking. Our website helps you to take on the role of becoming a better cook for your family and friends.
                    </p>
                      <p class="u-custom-font u-heading-font u-text u-text-palette-4-base u-text-2">
                          We as a team of 12 members made an effort in developing this website and bringing this in front of you by working together efficiently. We dedicate this website to all the mothers and everyone who cooks for their loved ones to create rejoicing moments and memories.
                      </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-size-24">
              <div class="u-layout-col">
                <div class="u-align-center u-container-style u-layout-cell u-palette-4-base u-size-60 u-layout-cell-2">
                  <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-2">
                    <div class="u-image u-image-circle u-image-1" data-image-width="720" data-image-height="1080"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <footer>
      <div class="footer">
          <div class="footercontainer">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-youtube"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
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


  </body>
</html>