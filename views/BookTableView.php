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
    <?php include 'components/header.php'; ?><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    <?php if (isset($_SESSION['bookingSuccess'])) : ?>
        <?php if ($_SESSION['bookingSuccess']) : ?>
            var successMessage = $("<div>").text("Please wait for the admin browser and will send you a confirmation email later!");
            successMessage.addClass("success-message");
            $("body").append(successMessage);
        <?php else : ?>
            var failureMessage = $("<div>").text("Failed to create booking.");
            failureMessage.addClass("failure-message");
            $("body").append(failureMessage);
        <?php endif; ?>

        setTimeout(function() {
            $(".success-message, .failure-message").remove();
        }, 5000);

        <?php unset($_SESSION['bookingSuccess']); ?>
    <?php endif; ?>
</script>
    <div class="container-fluid" id="container-fluid">
        <div class="container-fluid bg-1 p-5" id="bg-1" >
                <?php include 'components/title.php';
                createTitle($array_title['h1'][2], $array_title['p'][2], "", "title-h1", "title-p", "", "hero-title"); ?>
        </div>
        <div class="container-fluid" id="container-map" >
         <img src="./root/assets/images-table/map.png" alt="Bottom Image" class="full-width-image" id="container-map" >
        </div>
        <div class="container" >
        <form action="" method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control <?php echo !empty($dateError) ? 'is-invalid' : ''; ?>" id="date">
            <?php if (!empty($dateError)) : ?>
                <div class="invalid-feedback"><?php echo $dateError; ?></div>
            <?php endif; ?>
        </div>
        <div class="form-group col-md-6">
            <label for="time">Time</label>
            <input type="time" name="time" class="form-control <?php echo !empty($timeError) ? 'is-invalid' : ''; ?>" id="time">
            <?php if (!empty($timeError)) : ?>
                <div class="invalid-feedback"><?php echo $timeError; ?></div>
            <?php endif; ?>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="fullName">Full Name</label>
            <input type="text" name="fullname" class="form-control <?php echo !empty($fullNameError) ? 'is-invalid' : ''; ?>" value="" id="fullName" placeholder="Enter your name" required>
            <?php if (!empty($fullNameError)) : ?>
                <div class="invalid-feedback"><?php echo $fullNameError; ?></div>
            <?php endif; ?>
        </div>
        <div class="form-group col-md-6">
            <label for="phone">Phone</label>
            <input type="tel" name="phone" class="form-control <?php echo !empty($phoneError) ? 'is-invalid' : ''; ?>" value="" id="phone" placeholder="x-xxx-xxx-xxxx">
            <?php if (!empty($phoneError)) : ?>
                <div class="invalid-feedback"><?php echo $phoneError; ?></div>
            <?php endif; ?>
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
    <button type="submit" class="btn btn-primary">Book Table</button>
</form>
        </div>
    </div>
   
    <!-- init footer -->
    <?php include 'components/footer.php'; ?>

</body>

</html>