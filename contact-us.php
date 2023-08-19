<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>India Ki Company: Your Expert Partner for New Company Registration and Incorporation Services</title>
    <!-- mobile responsive meta -->


    <?php include 'head.php'; ?>
</head>

<body>
    <div class="boxed_wrapper">
        <?php include 'header.php'; ?>
        <div class="inner-banner text-center">
            <div class="container">
                <div class="box">
                    <h3>Contact Us</h3>
                </div><!-- /.box -->
                <div class="breadcumb-wrapper">
                    <div class="clearfix">
                        <div class="pull-left">
                            <ul class="list-inline link-list">
                                <li><a href="index.php">Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div><!-- /.container -->
                </div>
            </div><!-- /.container -->
        </div>
        <section class="contact_us sec-padd-bottom sec-padd-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="contact-info2">
                            <h4>Contact Us</h4>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>Coporate Office: IndiaKiCompany, Sector 41 Main,
                                    Dadri Main Rd, Aghapur, Noida, Uttar Pradesh 201301 </li>


                                <!-- <li><i class="fa fa-mobile-phone"></i>Mobile: +91-8700166882</li>
                                <li><i class="fa fa-whatsapp"></i>WhatsApp: +91-8700166882</li> -->
                                <li><i class="fa fa-mobile-phone"></i>Mobile: <a
                                        href="tel:+918700166882">+91-8700166882</a></li>
                                <li><i class="fa fa-whatsapp"></i>WhatsApp: <a
                                        href="https://wa.me/918700166882">+91-8700166882</a></li>

                                <li><i class="fa fa-envelope"></i>Email:<a href="mailto:info@indiakicompany.com">
                                        info@indiakicompany.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <div class="section-title">
                            <h3>Send Your Message Us</h3>
                        </div>
                        <div class="default-form-area">
                            <form class="default-form" action="#" id="contact-form1" method="post">
                                <input type="hidden" name="send-contact-mail" />
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Your Name *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Your Mail *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control"
                                                placeholder="Your Phone *" pattern="[0-9]{10}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control"
                                                placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control textarea"
                                                placeholder="Your Message...."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <button class="thm-btn2 submit-btn" type="submit" name="submit">send
                                                message</button>
                                        </div>
                                    </div>
                                    <div id="form-message-success" style="display:none;font-size:20px;margin-top:10px;"
                                        class="mb-4 text-center text-success">
                                        Your message was sent, Thank you!
                                    </div>
                                    <div id="form-message-danger" style="display:none;font-size:20px;margin-top:10px;"
                                        class="mb-4 text-center text-danger">
                                        Something went wrong!, please try again.
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>
        <?php include 'foot.php'; ?>
        <script>
        $("#contact-form1").submit(function(event) {
            
            event.preventDefault();
            $(".submit-btn").html("<i class=`fa fa-circle-notch fa-spin`></i> Please wait...");
            $(".submit-btn").prop('disabled', true);
            $('#form-message-success').hide();
            $('#form-message-danger').hide();
            var formValues = $(this).serialize();
            $.post("mail-service.php", formValues, function(data) {
                $(".submit-btn").html("Send Message Now");
                $(".submit-btn").prop('disabled', false);
                if (data) {
                    $('#form-message-success').show().delay(5000).fadeOut(500);
                    $("#contact-form1")[0].reset();
                } else {
                    $('#form-message-danger').show().delay(5000).fadeOut(500);
                }
            });
        });
        </script>
    </div>

</body>

</html>