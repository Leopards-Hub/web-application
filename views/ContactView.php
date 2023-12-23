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
                <!-- Hàng đầu tiên: Name và Email -->
                <div class="row d-flex flex-row">
                    <!-- Phần tử con đầu tiên -->
                    <div class="col-6">
                        <label for="name" class="form-label custom-label">Name</label>
                        <input type="text" class="form-control rounded-pill" id="name" placeholder="Enter your name">
                    </div>
                    <!-- Phần tử con thứ hai -->
                    <div class="col-6">
                        <label for="email" class="form-label custom-label">Email</label>
                        <input type="email" class="form-control rounded-pill" id="email" placeholder="Enter your email">
                    </div>
                </div>
                <!-- Hàng thứ hai: Subject -->
                <div class="row">
                    <label for="subject" class="col-form-label custom-label">Subject</label>
                    <input type="text" class="form-control rounded-pill" id="subject" placeholder="Enter the subject">
                </div>
                <!-- Hàng thứ ba: Message -->
                <div class="row">
                    <label for="message" class="col-form-label custom-label">Message</label>
                    <textarea class="form-control " id="message" rows="5" placeholder="Enter your message"></textarea>
                </div>

                <!-- Nút Submit -->
                <div class="row">
                    <?php createButton("Send", "btn-id-send", "btn-send") ?>
                </div>
            </form>

        </div>

    </div>
    <!-- init footer -->
    <?php include '../components/footer.php'; ?>
</body>

</html>