<?php
#PHP INCLUDES
include "connect.php";
include "Includes/templates/header.php";
?>

<!-- Home Section -->
<section class="header" style="background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url('images/ui_background.jpg');">
    <nav>
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus icon'></i>
            <div class="logo_name">C.R.M.S</div>
        </div>

        <div class="nav-links" id="navLinks">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="./#services">SERVICES</a></li>
                <li><a href="./#brands">BRANDS</a></li>
                <li><a href="company/user-login.php">COMPANY</a></li>
                <li><a href="./#contact-us">CONTACT</a></li>
            </ul>
        </div>
    </nav>

    <div class="text-box">
        <h1>WHEELS FOR YOU</h1>
        <p>
            Always on the move? If Yes, then you're in the right place. Access your favourite vehicle with just a single click. We provide<br> the best car rental services in the area with rates so low, you won't think twice. Go ahead and make the right choice.
        </p>
        <a href="./#reserve" class="visit-btn">BOOK NOW</a>
    </div>
</section>
<!---------------- Services ------------------>
<section class="services" id="services">
    <div class="inner-services">
        <h1>What We Offer</h1>
        <p>You Satisfaction is our Main Aim! We provide plenty of features that are meant to give you an enjoyable driving experience. Note that company users should register themselves by clicking on the company link on top, in order to access the vehicle renting service in bulk and also the acquire through hire purchase terms.
        </p>

        <div class="services-row">
            <div class="services-col">
                <h3>Exceptional Services</h3>
                <p>
                    We offer high quality services together with extra products such as
                    GPS, entertainment systems, portable wireless network and child safety seats.
                </p>
            </div>

            <div class="services-col">
                <h3>Variety of Vehicles</h3>
                <p>
                    We have a surplus of cars which are of different brands
                    for you to choose your preferred choice.
                </p>
            </div>

            <div class="services-col">
                <h3>Bulk Renting</h3>
                <p>
                    We offer company owners or managers the capability of renting the vehicle in bulk.
                    There is even a sweeter deal which is to acquire the vehicles on hire purchase terms.
                </p>
            </div>
        </div>
        <div class="note">
            <p><sup><i class="fas fa-star-of-life"></i></sup> Note that company users should register themselves by clicking on the company
                link on top, in order to access the vehicle renting service in bulk and also the acquire through hire purchase terms.
            </p>
        </div>


    </div>
</section>
<!------------- Location ------------>
<section class="location">
    <h1>Where We Are Located</h1>
    <p>Currently, we are located in three counties which are Nairobi, Mombasa and Nakuru but we are planning in the company expansion and luckily months later, you may find us close to you. In those counties mentioned, we have a diversity of branches in both town centers and known airports. Find more information in the contact us.
    </p>

    <div class="location-row">
        <div class="location-col">
            <div>
                <img src="images/nairobi.jpg">
                <div class="layer">
                    <h3>NAIROBI</h3>
                </div>
            </div>
        </div>

        <div class="location-col">
            <div>
                <img src="images/mombasa.jpg">
                <div class="layer">
                    <h3>MOMBASA</h3>
                </div>
            </div>
        </div>

        <div class="location-col">
            <div>
                <img src="images/nakuru.jpg">
                <div class="layer">
                    <h3>NAKURU</h3>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Our Brands Section -->
<section class="our-brands" id="brands">
    <div class="container">
        <div class="section-header">
            <div class="section-title">
                First Class Car Rental Services
            </div>
            <hr class="separator">
            <div class="section-tagline">
                We offer professional car rental services in our range of high-end vehicles
            </div>
        </div>
        <div class="car-brands">
            <div class="row">
                <?php

                $stmt = $con->prepare("Select * from car_brands");
                $stmt->execute();
                $car_brands = $stmt->fetchAll();

                foreach ($car_brands as $car_brand) {
                    $car_brand_img = "admin/Uploads/images/" . $car_brand['brand_image'];
                ?>
                    <div class="col-md-4">
                        <div class="car-brand" style="background-image: url(<?php echo $car_brand_img ?>);">
                            <div class="brand_name">
                                <h3>
                                    <?php echo $car_brand['brand_name']; ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                <?php
                }

                ?>
            </div>
        </div>
    </div>
</section>

<!-- CAR RESERVATION SECTION -->
<section class="reservation_section" style="padding:50px 0px" id="reserve">
    <div class="container">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <form method="POST" action="reserve.php" class="car-reservation-form" id="reservation_form" v-on:submit="checkForm">
                    <div class="text_header">
                        <span>
                            Find your car
                        </span>
                    </div>
                    <div>
                        <div class="form-group">
                            <label for="pickup_location">Pickup Location</label>
                            <input type="text" class="form-control" name="pickup_location" placeholder="Luthuli Avenue" v-model='pickup_location'>
                            <div class="invalid-feedback" style="display:block" v-if="pickup_location === null">
                                Pickup location is required
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="return_location">Return Location</label>
                            <input type="text" class="form-control" name="return_location" placeholder="Kenyatta Avenue" v-model='return_location'>
                            <div class="invalid-feedback" style="display:block" v-if="return_location === null">
                                Return location is required
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pickup_date">Pickup Date</label>
                            <input type="date" min="<?php echo date('Y-m-d', strtotime("+1 day")) ?>" name="pickup_date" class="form-control" v-model='pickup_date'>
                            <div class="invalid-feedback" style="display:block" v-if="pickup_date === null">
                                Pickup date is required
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="return_date">Return Date</label>
                            <input type="date" min="<?php echo date('Y-m-d', strtotime("+2 day")) ?>" name="return_date" class="form-control" v-model='return_date'>
                            <div class="invalid-feedback" style="display:block" v-if="return_date === null">
                                Return date is required
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <button type="submit" class="btn sbmt-bttn" name="reserve_car">Book Instantly</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT SECTION -->

<section class="contact-section" id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 sm-padding">
                <div class="contact-info">
                    <h2>
                        Get in touch with us &
                        <br>send us message today!
                    </h2>
                    <p>
                        Getting dressed up and traveling with good friends makes for a shared, unforgettable experience.
                    </p>
                    <h3>
                        NAIROBI, KENYA
                        <br>
                        TOM MBOYA STREET, WORLD BUSINESS CENTER
                    </h3>
                    <ul>
                        <li>
                            <span style="font-weight: bold">Email:</span>
                            contact@philipboen001@gmail.com
                        </li>
                        <li>
                            <span style="font-weight: bold">Phone:</span>
                            +254 722405073
                        </li>

                    </ul>
                </div>
            </div>

            <?php
            if (isset($_POST['contact_send']) && $_SERVER['REQUEST_METHOD'] === 'POST') {

                $client_name = $_POST['client_name'];
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];


                $con->beginTransaction();

                try {
                    //Inserting Client Details
                    $stmt_feedback = $con->prepare("insert into feedback(client_name,email,subject,message) 
									values(?,?,?,?)");
                    $stmt_feedback->execute(array($client_name, $email, $subject, $message));


                    echo "<div class = 'alert alert-success'>";
                    echo "Great! Your Feedback has been Sent!";
                    echo '<script>alert("Thank You..! Your Feedback is Valuable to Us"); location.replace(document.referrer);</script>';
                    echo "</div>";

                    $con->commit();
                } catch (Exception $e) {
                    $con->rollBack();
                    echo "<div class = 'alert alert-danger'>";
                    echo $e->getMessage();
                    echo "</div>";
                }
            }
            ?>

            <div class="col-lg-6 sm-padding">
                <div class="contact-form">
                    <div id="contact_ajax_form" class="contactForm">
                        <form method="POST" action="index.php" class="car-feedback-form" id="feedback_form" v-on:submit="checkForm">
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="client_name" name="client_name" class="form-control" placeholder="Name" v-model='client_name'>
                                    <div class="invalid-feedback" style="display:block" v-if="client_name === null">
                                        Name is required
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email (Optional)">

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject (Optional)">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message" v-model='message'></textarea>
                                    <div class="invalid-feedback" style="display:block" v-if="client_name === null">
                                        Message is required
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button id="contact_send" class="contact_send_btn" name="contact_send">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->
<section class="widget_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer_widget">
                    <a class="navbar-brand" href="">
                        <div class="logo-details">
                            <i class='bx bxl-c-plus-plus icon'></i>
                            <div class="logo_name">C.R.M.S</div>
                        </div>
                    </a>
                    <p>
                        Getting dressed up and traveling with good friends makes for a shared, unforgettable experience.
                    </p>
                    <ul class="widget_social">
                        <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="fab fa-twitter fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="LinkedIn"><i class="fab fa-linkedin fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Google+"><i class="fab fa-google-plus-g fa-2x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer_widget">
                    <h3>Contact Info</h3>
                    <ul class="contact_info">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>TOM MBOYA STREET, WORLD BUSINESS CENTER. NAIROBI
                        </li>
                        <li>
                            <i class="far fa-envelope"></i>contact@philipboen001@gmail.com
                        </li>
                        <li>
                            <i class="fas fa-mobile-alt"></i>+254 722405073
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer_widget">
                    <h3>Newsletter</h3>
                    <p style="margin-bottom:0px">Don't miss a thing! Sign up to receive daily deals</p>
                    <div class="subscribe_form">
                        <form action="#" class="subscribe_form" novalidate="true">
                            <input type="email" name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address...">
                            <button type="submit" class="submit">SUBSCRIBE</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BOTTOM FOOTER -->
<?php include "Includes/templates/footer.php"; ?>



<script>
    // reservation-form checkForm
    new Vue({
        el: "#reservation_form",
        data: {
            pickup_location: '',
            return_location: '',
            pickup_date: '',
            return_date: ''
        },
        methods: {
            checkForm: function(event) {
                if (this.pickup_location && this.return_location && this.pickup_date && this.return_date) {
                    return true;
                }

                if (!this.pickup_location) {
                    this.pickup_location = null;
                }

                if (!this.return_location) {
                    this.return_location = null;
                }

                if (!this.pickup_date) {
                    this.pickup_date = null;
                }

                if (!this.return_date) {
                    this.return_date = null;
                }

                event.preventDefault();
            },
        }
    })

    // feedback-form checkForm
    new Vue({
        el: "#feedback_form",
        data: {
            client_name: '',
            message: '',
        },
        methods: {
            checkForm: function(event) {
                if (this.client_name && this.message) {
                    return true;
                }

                if (!this.client_name) {
                    this.client_name = null;
                }

                if (!this.message) {
                    this.message = null;
                }

                event.preventDefault();
            },
        }
    })
</script>