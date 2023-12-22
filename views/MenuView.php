
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu</title> 
        <?php
            include '../components/linkbootstrap5.php';
        ?>    
    </head>
    <body>
        <?php include_once '../components/header.php'; ?>
        <div class="container">
            <div class="row">    
                <?php
                    include '../components/title.php';
                    createTitle($array_title["h1"][1],$array_title['p'][1],'', 'title-h1', 'title-p','','hero-title')
                ?>
            </div>
            <div class="row" style="gap:15px; display:flex; flex-direction: row; justify-content: center; ">
                <?php
                    include_once '../components/button.php';
                    $arrayButton=["All", "Breakfast", "Main Dishes","Drinks","Desserts"];
                    foreach($arrayButton as $key){
                        createButton($key,"btn-id","btn active btn-ourmenu-allmenu");   
                    }
                ?>
            </div>
        </div>

                
        <div class="container" style="margin-top:2em">
            <div class="row" style="gap:2em;">
                <?php
                    $i =0;
                    include '../components/food-item.php';
                    while($i < count($Foods)){
                        createFood($Foods[$i],$class);
                        $i++;
                    }       
                ?>
            </div>
        </div>

        <div class="container">
            <div class="row">
                    <div class="col-5">
                        <?php 
                            createTitle($array_title["h1"][1],$array_title['p'][1],'', 'title-h1', 'title-p','','hero-title');
                        ?>
                    </div>
                    <div class="col-7"></div>
                        <?php ;?>
            </div>

        </div>
    </body>
