<div class="cardscontainer">
    <div class="grid">
        <?php
        $catPage="SELECT Recipe_Id,Recipe_Name,Recipe_tag,Recipe_img FROM recipe WHERE Category_Id=".$_GET['categoryId'];
        $catPage_query=mysqli_query($mysql,$catPage);
        $catPage_ass=mysqli_fetch_assoc($catPage_query);
        do{
            ?>
            <div class="grid__item">
                <div class="card"><img class="card__img" src="http://localhost/Flameno/Assets/images/Recipe/<?php echo$catPage_ass['Recipe_img']?>" alt="<?php echo$catPage_ass['Recipe_img']?>">
                    <div class="card__content">
                        <h1 class="card__header"><?php echo$catPage_ass['Recipe_Name']?></h1>
                        <p class="card__text"><?php echo$catPage_ass['Recipe_tag']?></p><a href="http://localhost/Flameno/recipe/<?php echo$catPage_ass['Recipe_Id']?>"><button class="card__btn">Explore <span>&rarr;</span> </button></a>
                    </div>
                </div>
            </div>
        <?php }while($catPage_ass=mysqli_fetch_assoc($catPage_query))
        ?>
    </div>
</div>
