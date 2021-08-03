<?php include 'connect.php'; ?>
<?php include 'inc/category-header.php'; ?>
<div class="row" id="myDIV">
    <a href="http://localhost/Flameno/category/All/0" class="tab">All</a>
<!--categories-->
<?php
$catopt="SELECT * FROM `Category`";
$catopt_query=mysqli_query($mysql,$catopt);
$catopt_rs=mysqli_fetch_assoc($catopt_query);
do{?>
<a href="http://localhost/Flameno/category/<?php echo $catopt_rs['Category_Name']?>/<?php echo $catopt_rs['Category_Id']?>" class="tab"><?php echo $catopt_rs['Category_Name']; ?></a>
    <?php
}while($catopt_rs=mysqli_fetch_assoc($catopt_query))

 ?>
</div><!--categories-end-->
<?php if(($_GET['categoryId']==0))   {?>
<!--// recipe cards for ALL-->
<div class="cardscontainer">
    <div class="grid">
        <?php
        $recipe="select Recipe_Id,Recipe_Name,Recipe_tag,Recipe_img from recipe";
        $recipe_query=mysqli_query($mysql,$recipe);
        $recipe_ass=mysqli_fetch_assoc($recipe_query);
        do{
            ?>
            <div class="grid__item">
                <div class="card"><img class="card__img" src="http://localhost/Flameno/Assets/images/Recipe/<?php echo$recipe_ass['Recipe_img']?>" alt="<?php echo$recipe_ass['Recipe_img']?>">
                    <div class="card__content">
                        <h1 class="card__header"><?php echo$recipe_ass['Recipe_Name']?></h1>
                        <p class="card__text"><?php echo$recipe_ass['Recipe_tag']?></p><a href="http://localhost/Flameno/recipe/<?php echo$recipe_ass['Recipe_Id']?>"><button class="card__btn">Explore <span>&rarr;</span> </button></a>
                    </div>
                </div>
            </div>
        <?php }while($recipe_ass=mysqli_fetch_assoc($recipe_query))
        ?>
    </div>
</div>
<!--    recipe cards All end-->
<?php }
else{
include('inc/category_page.php');
};?>
<?php include 'inc/category-footer.php'; ?>
