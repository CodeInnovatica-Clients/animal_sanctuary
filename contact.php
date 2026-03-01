<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST["subject"]));
    $message = trim($_POST["message"]);

    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please complete the form and try again.";
    } else {
        $recipient = "info@onesanctuaryghana.org";
        $email_subject = "New Contact: $subject";
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Message:\n$message\n";

        $email_headers = "From: $name <$email>";

        if (mail($recipient, $email_subject, $email_content, $email_headers)) {
            $success = "Thank you! Your message has been sent.";
        } else {
            $error = "Oops! Something went wrong and we couldn't send your message.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Ghana Animal Sanctuary - A Haven of Hope</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="NGO, Animal Sanctuary, Ghana, Rescue, Dog Rescue, Cat Rescue" name="keywords" />
    <meta content="Creating a Ghana where every companion animal is treated with compassion. Rescue, Rehabilitate, Rehome." name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div
        class="spinner-border text-primary"
        style="width: 3rem; height: 3rem"
        role="status"
      >
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
      <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
          <div class="h-100 d-inline-flex align-items-center py-3 me-4"> -->
            <!-- <small class="fa fa-map-marker-alt text-primary me-2"></small> -->
            <!-- <small>Kasoa / Odupong Kpehe 583, Ghana (CG-0583-4201)</small> -->
          <!-- </div> -->
          <!-- <div class="h-100 d-inline-flex align-items-center py-3">
            <small class="far fa-clock text-primary me-2"></small>
            <small>Rescue Hotline: 24/7</small>
          </div> -->
        <!-- </div>
        <div class="col-lg-5 px-5 text-end">
          <div class="h-100 d-inline-flex align-items-center py-3 me-4"> -->
            <!-- <small class="fa fa-phone-alt text-primary me-2"></small> -->
            <!-- <small>+233 53 193 0465</small> -->
          <!-- </div>
        </div>
      </div>
    </div> -->

    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <a href="index.html" class="navbar-brand p-0">
        <img class="img-fluid me-3" src="img/logo.png" alt="Icon" />
        <h5 class="m-0 text-primary">The One&Only Animal <br > Sanctuary in Ghana</h5>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
          <a href="index.html" class="nav-item nav-link">Home</a>
          <a href="animal.html" class="nav-item nav-link">Rescue</a>
          <a href="blog.html" class="nav-item nav-link">Blog</a>
          <a href="contact.php" class="nav-item nav-link active">Contact</a>
        </div>
        <a href="index.html#donate" class="btn btn-primary"
          >Donate Now<i class="fa fa-heart ms-3"></i
        ></a>
      </div>
    </nav>

    <!-- Page Header Start -->
    <div
      class="container-fluid header-bg py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-4 text-white mb-3 animated slideInDown">
          Contact Us
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Pages</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
              Contact Us
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-4 mb-5">
          <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="h-100 bg-light d-flex align-items-center p-5">
              <div class="btn-lg-square bg-white flex-shrink-0">
                <i class="fa fa-map-marker-alt text-primary"></i>
              </div>
              <div class="ms-4">
                <p class="mb-2">
                  <span class="text-primary me-2">#</span>Address
                </p>
                <h5 class="mb-0">Kasoa / Odupong Kpehe 583, Ghana</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="h-100 bg-light d-flex align-items-center p-5">
              <div class="btn-lg-square bg-white flex-shrink-0">
                <i class="fa fa-phone-alt text-primary"></i>
              </div>
              <div class="ms-4">
                <p class="mb-2">
                  <span class="text-primary me-2">#</span>Call Now
                </p>
                <h5 class="mb-0">+233 53 193 0465</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
            <div class="h-100 bg-light d-flex align-items-center p-5">
              <div class="btn-lg-square bg-white flex-shrink-0">
                <i class="fa fa-envelope-open text-primary"></i>
              </div>
              <div class="ms-4">
                <p class="mb-2">
                  <span class="text-primary me-2">#</span>Mail Now
                </p>
                <h5 class="mb-0">info@onesanctuaryghana.org</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <p><span class="text-primary me-2">#</span>Contact Us</p>
            <h1 class="display-5 mb-4">Have Any Query? Please Contact Us!</h1>
            <?php if (isset($success)): ?>
                <div class="alert alert-success"><?php echo $success; ?></div>
            <?php endif; ?>
            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>
            <p class="mb-4">
              We'd love to hear from you! Whether you're interested in volunteering, sponsoring a resident, or just want to learn more about our mission, please reach out.
            </p>
            <form action="contact.php" method="POST">
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      name="name"
                      class="form-control bg-light border-0"
                      id="name"
                      placeholder="Your Name"
                      required
                    />
                    <label for="name">Your Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="email"
                      name="email"
                      class="form-control bg-light border-0"
                      id="email"
                      placeholder="Your Email"
                      required
                    />
                    <label for="email">Your Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input
                      type="text"
                      name="subject"
                      class="form-control bg-light border-0"
                      id="subject"
                      placeholder="Subject"
                      required
                    />
                    <label for="subject">Subject</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea
                      name="message"
                      class="form-control bg-light border-0"
                      placeholder="Leave a message here"
                      id="message"
                      style="height: 100px"
                      required
                    ></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary w-100 py-3" type="submit">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="h-100" style="min-height: 400px">
              <div class="bg-light h-100 d-flex flex-column justify-content-center text-center p-5">
                <i class="fa fa-map-marker-alt fa-3x text-primary mb-4"></i>
                <h4 class="mb-3">Our Location</h4>
                <p class="mb-4">Kasoa / Odupong Kpehe 583, Ghana<br>(CG-0583-4201)</p>
                <p class="mb-0">We are located in the Central Region, providing a safe haven for animals in need across the community.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <div
      class="container-fluid footer bg-dark text-light footer mt-5 pt-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Contact</h5>
            <p class="mb-2">
              <i class="fa fa-envelope me-3"></i>info@onesanctuaryghana.org
            </p>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Follow Us</h5>
            <div class="d-flex pt-2">
              <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/ghanacatsanctuary"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/catsanctuaryghana"><i class="fab fa-instagram"></i></a>
              <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/abarescuedcats"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-md-end">
            <h5 class="text-light mb-4">Popular Links</h5>
            <a class="btn btn-link" href="index.html#about">Our Story</a>
            <a class="btn btn-link" href="blog.html">Blog</a>
            <a class="btn btn-link" href="contact.php">Contact Us</a>
            <a class="btn btn-link" href="index.html#donate">Donate</a>
          </div>
          <!-- <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Newsletter</h5>
            <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
            <div class="position-relative mx-auto" style="max-width: 400px">
              <input
                class="form-control border-0 w-100 py-3 ps-4 pe-5"
                type="text"
                placeholder="Your email"
              />
              <button
                type="button"
                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
              >
                SignUp
              </button>
            </div>
          </div> -->
        </div>
      </div>
      <div class="container">
        <div class="copyright">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a class="border-bottom" href="#">Ghana Animal Sanctuary</a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
              Designed By
              <a class="border-bottom" href="https://htmlcodex.com"
                >HTML Codex</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
