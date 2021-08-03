<?php
include ('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
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
    <form action="search.php" method="get">
        <input type="search" name="search" class="search-data" placeholder="Search"  required>
        <button type="submit" name="submit_search" class="fas fa-search"></button>
    </form>
</nav>

<?php
if(isset($_GET['submit_search'])){
    $search=mysqli_real_escape_string($mysql,$_GET['search']);

    $recipe="SELECT Recipe_Id,Recipe_Name,Recipe_tag,Recipe_img FROM recipe WHERE recipe.Recipe_Name LIKE '%$search%'";
    $recipe_query=mysqli_query($mysql,$recipe);
    $queryResult=mysqli_num_rows($recipe_query);
    $recipe_ass=mysqli_fetch_assoc($recipe_query);
    if($queryResult>0){
echo "<h2 style='margin:30px 100px 0px'> There are " .$queryResult." results</h2>";
        ?>

    <div class="cardscontainer" style="margin:0 0 180px">
        
        <div class="grid">

           <?php do{
                ?>
                <div class="grid__item">
                    <div class="card"><img class="card__img" src="Assets/images/Recipe/<?php echo$recipe_ass['Recipe_img']?>" alt="<?php echo$recipe_ass['Recipe_img']?>">
                        <div class="card__content">
                            <h1 class="card__header"><?php echo$recipe_ass['Recipe_Name']?></h1>
                            <p class="card__text"><?php echo$recipe_ass['Recipe_tag']?></p><a href="recipe_page.php?recipe_id=<?php echo$recipe_ass['Recipe_Id']?>"><button class="card__btn">Explore <span>&rarr;</span> </button></a>
                        </div>
                    </div>
                </div>
            <?php }while($recipe_ass=mysqli_fetch_assoc($recipe_query));
            }
else{
    echo' <h2 style="padding-bottom:35%; margin:40px ">there are no matching results for your search!</h2>';
}
            }
            ?>
        </div>
    </div>
<footer style="position:absolute; bottom: 0; width: 100vw;">
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




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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

