<?php
include('main.php');
?>

<body>

    <div id="wrapper">
        <?php
        include('header.php');
        ?>
        <section class="section normalhead lb">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                        <h2>Contact Us</h2>
                        <p class="lead">This is your default page example. You can add anything here..</p>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
        <section class="section">
            <div class="container">
                <div class="row contactv2 text-center">
                    <div class="col-md-4">
                        <div class="small-box">
                            <i class="flaticon-message"></i>
                            <h4>Contact us today</h4>
                            <small>Phone: +971 55 403 5941</small>
                            <!-- <small>Fax: +90 987 665 55 45</small> -->
                            <p><a href="mail:to">info@bluebee.ae</a></p>
                            <p><a href="mail:to">sales@bluebee.ae</a></p>
                        </div><!-- end small-box -->
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="small-box">
                            <i class="flaticon-home-marker"></i>
                            <h4>Visit Our Office</h4>
                            <small>Office No: 1004-0450-08DM </small>
                            <small>Al Rostamani Real Estate Building</small>
                            <small>Diera - Dubai</small>
                            <p><a href="#">View on Google Map</a></p>
                        </div><!-- end small-box -->
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="small-box">
                            <i class="flaticon-user"></i>
                            <h4>Be Social</h4>
                            <small>Twitter: @yourhandle</small>
                            <small>Facebook: facebook.com/yourhandle</small>
                            <p><a href="#">Email Newsletter</a></p>
                        </div><!-- end small-box -->
                    </div><!-- end col -->
                </div><!-- end contactv2 -->

                <div class="row">
                    <div class="col-md-12 mb30">
                        <div class="mapv2">
                            <div id="map"></div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class=" small-box col-md-12">
                        <h4 class="text-center">Get in Touch with Us</h4>
                        <form role="form" method="post" class="contactform">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                            </div>
                            
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                            </div>
                            <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit Form</button>
                        </form>
                    </div><!-- end col -->

                    <!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

    </div>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];


        $mailto = 'helnasunilkumar@gmail.com';  //office mail
        $subject = "Contact Form"; //getting subject line from client
        $subject2 = "Confirmation: Message was submitted successfully "; // For customer confirmation

        //Email body I will receive
        $message = "Cleint Name: " . $name . "\n"
            . "Phone Number: " . $phone . "\n\n"
            . "Email: " . $email . "\n\n"
            . "Client Message: " . "\n" . $_POST['message'];

        //Message for client confirmation
        $message2 = "Dear" . $name . "\n"
            . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
            . "You submitted the following message: " . "\n" . $_POST['message'] . "\n\n"
            . "Regards," . "\n" . "- BlueBee Team.";

        //Email headers
        $headers = "From: " . $email; // Client email, I will receive
        $headers2 = "From: " . $mailto; // This will receive client

        //PHP mailer function

        $result1 = mail($email, $subject, $message, $headers); // This email sent to My address
        $result2 = mail($mailto, $subject2, $message2, $headers2); //This confirmation email to client
        //mail("helnasunilkumar@gmail.com","My subject",$message);

        //Checking if Mails sent successfully

        if ($result1 && $result2) {
            echo "Your Message was sent Successfully!";
        } else {
            echo "Sorry! Message was not sent, Try again Later.";
        }
    };
    ?>
    <?php include('footer.php'); ?>

    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAkADq7R0xf6ami9YirAM1N-yl7hdnYBhM "></script>
    <!-- MAP & CONTACT -->
    <script src="js/map.js"></script>
</body>

</html>