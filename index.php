<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Test Task</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;1,100;1,200;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/styles.css">

</head>

<body>



    <!-- Header  -->
    <header>
        <nav class="navbar navbar-expand-sm bg-theme">

            <a href="#" class="navbar-brand">
                Brand
            </a>

            <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav"
                aria-label="Toggle navigation">
                <span><i class="fas fa-bars"></i></span>


            </button>
            <div class="collapse navbar-collapse justify-content-between" id="nav">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link nav-text item-active  text-uppercase" href="#">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link nav-text text-uppercase" href="#">Solution</a> </li>
                    <li class="nav-item"><a class="nav-link nav-text text-uppercase" href="#">About</a> </li>
                    <li class="nav-item"><a class="nav-link nav-text text-uppercase" href="#">Resources</a> </li>
                    <li class="nav-item"><a class="nav-link nav-text text-uppercase" href="#">Contact</a> </li>


                </ul>
            </div>
        </nav>
    </header>
    <!-- Header Ends -->

    <!-- banner section -->
    <section class="banner  pt-sm-0  ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-sm-8 pb-1 pt-5 banner-container">
                    <h3 class="my-4 banner-heading">Introducing PollSmart!</h3>

                    <p class="banner-subtitle"> Company, a leading provider of people driven insights, is excited to
                        announce
                        an innovative new
                        research solution,
                        PollSmart! We’ve partnered with <span class="text-theme">polling experts, Targoz Market
                            Research </span>to power the sample on a
                        groundbreaking model
                        for political polling.</p>

                </div>
                <div class="col-md-6 banner-sm">


                </div>
            </div>
        </div>


    </section>



    <!-- banner section ends -->

    <!-- Vote Section -->
    <section class="p-4 ">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6 mt-4">
                    <img src="./assets/images/vote.png" class="img-fluid vote-image" />
                </div>
                <div class="col-md-6 mt-4 text-md-left text-center p-theme-right">

                    <div class="vote-contents">
                        <h3 class="mb-4 vote-heading"> Providing a deep glimpse into key groups of voters this election
                            season. </h3>

                        <p class=" vote-subtitle">PollSmart was cleverly devised to provide a fast,
                            informative, and
                            cost-effective deliverable
                            that employs innovative methodologies to provide an accurate read on today’s voters.</p>

                    </div>

                </div>
            </div>

        </div>

    </section>
    <!-- Vote section ends -->


    <!-- People Section -->
    <section class="p-2 ">
        <div class="container-fluid">

            <div class="row people d-flex d-sm-column">

                <div class="col-md-6 mt-4 text-md-left text-center ">

                    <div class="people-content">
                        <h3 class="mb-4 people-heading"> Explore the issues that are top-of-mind among voters today.
                        </h3>

                        <p class="people-subtitle">In addition to providing current insights on preferred candidates
                            among
                            relevant groups of voters, PollSmart explores
                            the most important issues among voters. PollSmart also allows for custom questions to be
                            incorporated into these
                            surveys.</p>

                        <p class="people-subtitle"> PollSmart is launching value-oriented polls for a wide range of
                            elections around the country
                            beginning this fall!</p>

                    </div>

                </div>

                <div class="col-md-6 mt-4 people-image">
                    <img src="./assets/images/crowd.png" class="img-fluid" />
                </div>
            </div>

        </div>

    </section>
    <!-- People section ends -->

    <!-- Contact form Section -->

    <section class="p-sm-4" style="position: relative; height: 300px; ">

        <div class="contact-form">




            <div class="contact-container ">

                <div class="success">
                    <img src="./assets/images/thumbs-up.png" class="img-fluid" />

                    <h3 class="display-4">SUCCESS!</h3>

                </div>


                <div class="form-content">


                    <h4 class="text-center contact-heading">Intrigued to Learn More?</h4>


                    <form method="POST" class="contact-info " id="contact-info"
                        style="padding-left: 3rem; padding-right: 3rem; height: 563px;">

                        <div class="row">
                            <div class="col-md-12 form-group">


                                <label for="">Name*</label>
                                <input type="text" class="form-control w-100 name" name="name">
                                <div id="name_response"></div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">

                                <label for="">Title*</label>
                                <input type="text" class="form-control w-100 title" name="title">
                                <div id="title_response"></div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">

                                <label for="">Company*</label>
                                <input type="text" class="form-control w-100 company" name="company">
                                <div id="company_response"></div>


                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-12 form-group">

                                <label for="">Email*</label>
                                <input type="text" class="form-control w-100 email" name="email">
                                <div id="email_response"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <div class="text-center ">
                                    <button class="btn btn-lg bg-theme text-white mt-2" name="submit" type=" submit"
                                        id="submit_form">Learn
                                        More

                                    </button>
                                </div>
                            </div>
                        </div>






                </div>
                </form>



            </div>
        </div>
        </div>



    </section>

    <!-- Contact form Section Ends -->

    <section class="bg-theme contact-section"></section>
    <footer class="bg-theme p-general-left">
        <div class="container-fluid">
            <div class="row py-4">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-4 col-sm-12">
                            <p class="footer-heading text-uppercase">our solutions</p>
                            <ul class="list-unstyled footer-lists">

                                <li class="footer-link">Survey Solutions</li>
                                <li class="footer-link"> Custom Survey Programming</li>
                                <li class="footer-link">On-Demand Panel Access</li>
                                <li class="footer-link">Data Quality</li>
                                <li class="footer-link">Geofencing</li>

                            </ul>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <p class="footer-heading text-uppercase">About</p>
                            <ul class="list-unstyled footer-lists">

                                <li class="footer-link">Our Story</li>
                                <li class="footer-link">Meet the Team</li>
                                <li class="footer-link">Affiliations & Awards</li>
                                <li class="footer-link">Careers</li>
                            </ul>

                        </div>
                        <div class="col-lg-4 col-sm-12">

                            <p class="footer-heading text-uppercase">Resources</p>
                            <ul class="list-unstyled footer-lists">

                                <li class="footer-link">Panel Book</li>
                                <li class="footer-link">Esomar</li>
                                <li class="footer-link">Blog</li>
                                <li class="footer-link">News</li>
                                <li class="footer-link">Events</li>
                            </ul>



                        </div>
                    </div>

                </div>

                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <ul class="list-unstyled">
                                <li class="footer-link terms">| Terms of Use | Privacy Policy</li>
                            </ul>
                        </div>
                        <div class="col-md-5 col-sm-12 social-link">
                            <div class="social-link-item">
                                <p class="mr-4"><img src="./assets/images/icon-linkedin.png" /></p>
                                <p><img src="./assets/images/icon-twitter.png" /></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </footer>








    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    $(function() {


        $("form").on("submit", function(event) {
            event.preventDefault();
            var errors = [];
            var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,20}$/;
            var nameInput = $('.name').val();
            var titleInput = $('.title').val();
            var companyInput = $('.company').val();
            var emailInput = $('.email').val();

            if (nameInput == '') {
                errors.length = 1;
                $('#name_response').html('<p class="text-danger small">Name Field Cannot be Empty</p>');

            } else if (nameInput.length < 3) {
                errors.length = 1;
                $('#name_response').html(
                    '<p class="text-danger small">Name Field Characters cannot be less than 3</p>')
            }
            if (titleInput == '') {
                errors.length = 1;
                $('#title_response').html(
                    '<p class="text-danger small">Title Field Cannot be Empty</p>')
            } else if (titleInput.length < 3) {
                errors.length = 1;
                $('#title_response').html(
                    '<p class="text-danger small">Title Field Characters cannot be less than 3</p>')
            }
            if (companyInput == '') {
                errors.length = 1;
                $('#company_response').html(
                    '<p class="text-danger small">Company Field Cannot be Empty</p>')
            } else if (companyInput.length < 3) {
                errors.length = 1;
                $('#company_response').html(
                    '<p class="text-danger small">Company Field Characters cannot be less than 3</p>'
                )
            }
            if (emailInput == '') {
                errors.length = 1;
                $('#email_response').html(
                    '<p class="text-danger small">Email Field Cannot be Empty</p>')
            } else if (pattern.test(emailInput) != true) {
                errors.length = 1;
                $('#email_response').html(
                    '<p class="text-danger small">Please Enter valid Email!</p>')
            }


            if (errors.length < 1) {
                var formValues = $(this).serialize();

                $.post("send_email.php", formValues, function(data) {
                    // Display the returned data in browser
                    if (data == 'success') {


                        $('.success').css('display', 'block').fadeIn();
                        $('.form-content').css('display', 'none')
                        $(form).reset();
                    }


                });


            }




        });
    });
    </script>

</body>

</html>