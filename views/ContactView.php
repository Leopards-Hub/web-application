<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../root/CSS/contact.css.php'; ?>
    <title>Yummy Food Restaurant</title>
</head>
<body>
    <!-- init header -->
    <?php include '../components/header.php'; ?>
    <div class="container-fluid" id="container-fluid">
        <div class="container-fluid bg-1 p-5" id="bg">
            <?php include '../components/title.php';
            createTitle($array_title['h1'][4], $array_title['p'][4], "", "title-h1", "title-p", "", "hero-title"); ?>
        </div>
        <div class="container-fluid bg-white p-5" id="bg">
        </div>
        <div class="container">
            <form>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-6" style="padding: 0;width:48%" >
                        <label for="name" class="form-label custom-label" style="margin-left: 12px;">Name</label>
                        <input type="text" class="form-control rounded-pill" id="name" placeholder="Enter your name">
                    </div>
                    <div class="col-md-6" style="padding: 0;width:48%" >
                        <label for="email" class="form-label custom-label" style="margin-left: 12px;">Email</label>
                        <input type="email" class="form-control rounded-pill" id="email" placeholder="Enter your email">
                    </div>
                </div>
                <div class="row">
                    <label for="subject" class="col-form-label custom-label">Subject</label>
                    <input type="text" class="form-control rounded-pill" id="subject" placeholder="Enter the subject">
                </div>
                <div class="row">
                    <label for="message" class="col-form-label custom-label">Message</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
                </div>
                <div class="row"></div>
                <div class="row">
                    <?php createButton("Send", "btn-id-send", "send active") ?>
                </div>
            </form>
        </div>
        <div class="container" id="contact-us" >
        <?php include '../components/contact-us.php' ; ?>
            <div class="row d-flex flex-row">
                <div class="col-4"><?php generateContactUs($array_contact_us['label'][0],$array_contact_us['content'][0],"custom-class");?></div>
                <div class="col-4"><?php generateContactUs($array_contact_us['label'][1],$array_contact_us['content'][1],"hour-location");?></div>
                <div class="col-4"><?php generateContactUs($array_contact_us['label'][2],$array_contact_us['content'][2],"hour-location");?></div>
                
            </div>
            
        </div>
    </div>
    <!-- init footer -->
    <?php include '../components/footer.php'; ?>
</body>

</html>