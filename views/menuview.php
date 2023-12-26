<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <?php
    include_once '../components/linkbootstrap5.php';

    ?>
</head>

<body>
    <?php include_once '../components/header.php'; ?>
    <div class="container">
        <div class="row">
            <?php
            include '../components/title.php';
            createTitle($array_title["h1"][1], $array_title['p'][1], '', 'title-h1', 'title-p', '', 'hero-title')
            ?>
        </div>
        <div class="row" style="gap:15px; display:flex; flex-direction: row; justify-content: center; ">
            <?php
            include_once '../components/button.php';
            $arrayButton = ["All", "Breakfast", "Main Dishes", "Drinks", "Desserts"];
            foreach ($arrayButton as $key) {
                createButton($key, "btn-id", "btn active btn-ourmenu-allmenu");
            }
            ?>
        </div>
    </div>


    <div class="container" style="margin-top:2em">
        <div class="row" style="gap:2em;">
            <?php
            $i = 0;
            include '../components/food-item.php';
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
                            adipiscing elit enim bibendum sed et aliquet aliquet risus tempor semper.", '', 'content-title-h2', 'content-title-p1');
                    ?>
                </div>
                
                <div class="col-8 d-flex flex-column">
                    <div class="row d-flex flex-row gap-4" >
                        <div class="col-3">
                            <?php
                                include_once '../components/sponsors.php';
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
        include_once '../components/footer.php';
        ?>
    </div>

</body>

</html>