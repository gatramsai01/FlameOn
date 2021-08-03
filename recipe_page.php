<?php include ('inc/recipePage-header.php');
include ('connect.php'); ?>

<body>
<!-- ======= Mobile nav toggle button ======= -->
<button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
<?php
$recipePage="SELECT Recipe_Name,Recipe_img,Recipe_About FROM recipe WHERE recipe.Recipe_Id=".$_GET['recipe_id'];
$recipePage_query=mysqli_query($mysql,$recipePage);
$recipePage_ass=mysqli_fetch_assoc($recipePage_query);

?>
<!-- ======= nav======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="http://localhost/Flameno/Assets/images/Recipe/<?php echo $recipePage_ass['Recipe_img'] ?>" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="#"><?php echo $recipePage_ass['Recipe_Name'] ?></a></h1>
        </div>

        <nav class="nav-menu">
            <ul>
                <li class="active"><a href="https://localhost/Flameno/home"><span>Home</span></a></li>
                <li><a href="#about"><span>About <?php echo $recipePage_ass['Recipe_Name'] ?></span></a></li>
                <li><a href="#procedure"><span>Procedure</span></a></li>

            </ul>
        </nav><!-- .nav-menu -->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
</header><!-- nav Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
        <h1><?php echo $recipePage_ass['Recipe_Name'] ?> </h1>
    </div>
</section><!-- End Hero -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


<script src="http://localhost/Flameno/Assets/vendor/jquery/jquery.min.js"></script>

<!-- Vendor JS Files -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>About <?php echo $recipePage_ass['Recipe_Name'] ?> </h2>
                <p><?php echo $recipePage_ass['Recipe_About'] ?></p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="http://localhost/Flameno/Assets/images/Recipe/<?php echo $recipePage_ass['Recipe_img'] ?> " class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>Ingredients needed</h3>
                    <div class="row">
                        <?php
                        $ingerdient="SELECT Ingredients_name,Ingredients_quantity FROM ingredients WHERE ingredients.Recipe_Id=".$_GET['recipe_id'];
                        $ingerdient_query=mysqli_query($mysql,$ingerdient);
                        $ingerdient_ass=mysqli_fetch_assoc($ingerdient_query);
                        do{?>


                        <div class="col-lg-6">
                            <ul style=" margin-bottom: 10px ;">
                                <li><i class="icofont-rounded-right"></i><strong><?php echo $ingerdient_ass['Ingredients_name'];?>:</strong> <?php echo $ingerdient_ass['Ingredients_quantity']; ?></li>
                            </ul>
                        </div>
                        <?php
                        }while( $ingerdient_ass=mysqli_fetch_assoc($ingerdient_query));
                        ?>

                    </div>
                    <p style="margin-top: 20px">
                        Using the ingredients correctly and carefully on each step can lead you to a great result while making this recipe.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->



    <!-- ======= Procedure Section ======= -->
    <section id="procedure" class="procedure">
        <div class="container">

            <div class="section-title">
                <h2>Procedure</h2>

            </div>

            <div class="row">
                <?php
                $steps="SELECT step_no,step_name,step_duration,step_process FROM steps WHERE steps.Recipe_Id=".$_GET['recipe_id'];
                $steps_query=mysqli_query($mysql,$steps);
                $steps_ass=mysqli_fetch_assoc($steps_query);
                do{
                ?>
                <div class="col-lg-6" data-aos="fade-up">
                    <h3 class="procedure-title">Step-<?php echo $steps_ass['step_no']; ?></h3>
                    <div class="procedure-item pb-0">
                        <?php if($steps_ass['step_name']!=null){?>
                        <h4><?php echo $steps_ass['step_name']; ?></h4>
                        <?php }?>
                        <?php if($steps_ass['step_duration']!=null){?>
                        <h5><?php echo $steps_ass['step_duration']; ?></h5>
                        <?php }?>
                        <p><?php echo $steps_ass['step_process']; ?></p>
                    </div>
                </div>
                <?php }while($steps_ass=mysqli_fetch_assoc($steps_query)); ?>
            </div>

        </div>
    </section><!-- End procedure Section -->

</main><!-- End #main -->


</body>
<?php include ('inc/recipePage-footer.php')?>

