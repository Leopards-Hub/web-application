<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to Bootstrap CSS -->
    <?php include '../root/CSS/bookTable.css.php';?>
    <?php include '../root/CSS/htmlfont.css.php'; ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Yummy Food Restaurant</title>
</head>

<body>
    <!-- init header -->
    <?php include '../components/header.php'; ?>

    <div class="container-fluid" id="content-bookTable">
    
        <div class="text-bookTable">
            <?php include '../components/title.php';
            createTitle($array_title['h1'][2], $array_title['p'][1], '', 'title-h1-table', 'title-p');
            ?>
        </div>
        <div class="img-map">
        <img src="../root/assets/images-table/map.png" alt="Bottom Image" class="full-width-image">
        </div>
        <div class="form-bookTable container shadow p-3 mb-5 bg-white rounded" style="max-width:550px;">
            <form class="form">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="time">Time</label>
                        <input type="time" class="form-control" id="time">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="fullName">Full Name</label>
                        <input type="text" class="form-control" value="Enter your name"id="fullName">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" value="x-xxx-xxx-xxxx" id="phone">
                    </div>
                </div>
                <div class="form-group">
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
                <?php include_once '../components/button.php';  
                    createButton($array_button[0],"","btn-send");
                    ?>
            </form>
        </div>
    </div>
   
    <!-- init footer -->
    <?php include '../components/footer.php'; ?>

    
</body>

</html>