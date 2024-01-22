<?php
    // var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'root/CSS/htmlfont.css.php'; ?>
    <title>Yummy Food Restaurant</title>
    <?php
    include_once 'components/linkbootstrap5.php';

    ?>
</head>

<body>
    <?php include_once 'components/header.php'; ?>
    <div class="container">
        <div class="row">
            <?php
            include 'components/title.php';
            createTitle($array_title["h1"][1], $array_title['p'][1], '', 'title-h1', 'title-p', '', 'hero-title')
            ?>
        </div>
        <div style= "display:flex; justify-content: center;margin: 0rem 2rem 2rem;" class="search">
            <form action="#" method="post">
                <input style="width: 41rem ;height: 3rem;;border: 1px solid; border-radius: 20px; outline: none; padding-left:30px" type="text" name="search" value="" placeholder="Typing name to search...">
                <button style="margin-left: 1rem;" class= "btn" type="submit">Search</button>
            </form>
        </div>
        <!-- <div class="row" style="gap:15px; display:flex; flex-direction: row; justify-content: center; "> -->
        <div>
            <?php
                include_once 'components/button.php';
            ?>
            <form action="#" method="post">
                <div class="row" style="gap:15px; display:flex; flex-direction: row; justify-content: center; ">
                <?php
                $arrayButton = ["All", "Breakfast", "Main Dishes", "Drinks", "Desserts"];
                $classButton = 'btn-ourmenu-allmenu';
                


                foreach ($arrayButton as $key) {
                    if ($key == 'Main Dishes'){$key = 'Main';}
                    $active ='';
                    createbtnmenu($key,$classButton,$active);
                }
                ?>

                </div>
            </form>    

        </div>
    </div>


    <div class="container" style="margin-top:2em">
        <div class="row" style="gap:2em;">
            <?php
            include 'components/food-item.php';
            $i = 0;

            while ($i < count($Foods)) {
                createFood($Foods[$i], $class);
                $i++;
            }
            ?>
        </div>
    </div>

    <div class="container" style="margin-top: 1em;">
        <div class="sp">
            <div class="row">
                <div class="col-4" style="padding: 105px 95px 95px 85px;">                    
                    <?php
                    createTitle("You can order through apps", "Lorem ipsum dolor sit amet consectetur 
                            adipiscing elit enim bibendum sed et aliquet aliquet risus tempor semper.", '', 'content-title-h2-menu', 'content-title-p1-menu');
                    ?>
                </div>
                
                <div class="col-8 d-flex flex-column">
                    <div class="row d-flex flex-row gap-4" >
                        <div class="col-3">
                            <?php
                                include_once 'components/sponsors.php';
                                createSponsor($arraySponsors[0]);
                            ?>
                        </div>

                        <div class="col-3">
                            <?php
                                createSponsor($arraySponsors[1]);
                            ?>
                        </div>
                        <div class="col-3">
                            <?php
                                createSponsor($arraySponsors[2]);
                            ?>
                        </div>
                    </div>
                    <div class="row d-flex flex-row ms-3" >
                        <div class="col-4">
                            <?php
                                createSponsor($arraySponsors[3]);
                            ?>
                        </div>

                        <div class="col-4">
                            <?php
                                createSponsor($arraySponsors[4]);
                            ?>
                        </div>
                        <div class="col-4">
                            <?php
                                createSponsor($arraySponsors[5]);
                            ?>
                        </div>
                    </div>
                    <div class="row d-flex flex-row gap-4" >
                        <div class="col-3">
                            <?php
                                createSponsor($arraySponsors[6]);
                            ?>
                        </div>

                        <div class="col-3">
                            <?php
                                createSponsor($arraySponsors[7]);
                            ?>
                        </div>
                        <div class="col-3">
                            <?php
                                createSponsor($arraySponsors[8]);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- footer -->
    <div>
        <?php
        include_once 'components/footer.php';
        ?>
    </div>

</body>

</html>