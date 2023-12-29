<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to Bootstrap CSS -->
    <?php include 'root/CSS/bookTable.css.php';?>
    <?php include 'root/CSS/htmlfont.css.php'; ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Yummy Food Restaurant</title>
</head>

<body>
    <!-- init header -->
    <?php include 'components/header.php'; ?>

    <div class="container-fluid" id="container-fluid">
        <div class="container-fluid bg-1 p-5" id="bg-1" >
                <?php include 'components/title.php';
                createTitle($array_title['h1'][2], $array_title['p'][2], "", "title-h1", "title-p", "", "hero-title"); ?>
        </div>
        <div class="container-fluid" id="container-map" >
         <img src="../root/assets/images-table/map.png" alt="Bottom Image" class="full-width-image" id="container-map" >
        </div>
        <div class="container" >
            <form action="" method="get" >
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="date">Date</label>
                        <input type="date" name="date" class="form-control" id="date">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="time">Time</label>
                        <input type="time" name="time" class="form-control" id="time">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="fullName">Full Name</label>
                        <input type="text" name="fullname" class="form-control" value="" id="fullName" placeholder="Enter your name" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Phone</label>
                        <input type="tel" name="phone" class="form-control" value="" id="phone" placeholder="x-xxx-xxx-xxxx" >
                    </div>
                </div>
                <div class="form-group pb-4">
                <label for="num-guests">Total Person</label>
                        <select class="form-control people-book" id="num-guests" name="num-guests">
                            <option value="1">1 Person</option>
                            <option value="2">2 Person</option>
                            <option value="3">3 Person</option>
                            <option value="4">4 Person</option>
                            <option value="5">5 Person</option>
                            <option value="6">6 Person</option>
                        </select>
                </div>
                <?php include_once 'components/button.php';  
                    createButton($array_button[0],"id-book-table","btn-send active");
                    ?>
            </form>
        </div>
    </div>
   
    <!-- init footer -->
    <?php include 'components/footer.php'; ?>

</body>

</html>