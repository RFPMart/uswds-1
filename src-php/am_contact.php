<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact | RFPMart City</title>

  <link rel="stylesheet" href="uswds/dist/css/uswds.min.css">

  <style>
    /* HERO */
    .contact-hero {
      background-image:
        linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)),
        url("images/hero-bg.png"); /* replace with your image */
      background-size: cover;
      background-position: center;
      padding: 5rem 0;
      color: white;
    }

    /* INFO CARDS */
    .info-card {
      border-radius: 0.75rem;
      text-align: center;
      padding: 2rem 1.5rem;
      transition: all 0.3s ease;
    }

    .info-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 10px 24px rgba(0,0,0,0.08);
    }

    /* MAP */
    .map-frame {
      width: 100%;
      min-height: 420px;
      border-radius: 0.75rem;
      border: none;
    }

    /* FORM CARD */
    .form-card {
      padding: 2rem;
      border-radius: 0.75rem;
      box-shadow: 0 10px 24px rgba(0,0,0,0.05);
      background: #fff;
    }

    /* FOOTER */
    .footer-main {
      background: #1a4480;
      color: white;
      padding: 2rem 0;
    }
  </style>
</head>

<body>

<!-- US GOV BANNER -->
<section class="usa-banner">
  <div class="usa-banner__header">
    <div class="grid-container">
      <p class="usa-banner__header-text">
        An official website of the United States government
      </p>
    </div>
  </div>
</section>

<!-- HEADER -->
<header class="usa-header usa-header--extended">
  <div class="usa-navbar">
    <div class="usa-logo">
      <em class="usa-logo__text">
        <a href="index.html">RFPMart City</a>
      </em>
    </div>
  </div>

  <nav class="usa-nav">
    <div class="usa-nav__inner">
      <ul class="usa-nav__primary usa-accordion">
        <li class="usa-nav__primary-item">
          <a href="#">Templates Home</a>
        </li>
        <li class="usa-nav__primary-item">
          <a href="#">Pages</a>
        </li>
        <li class="usa-nav__primary-item">
          <a href="#">Departments</a>
        </li>
        <li class="usa-nav__primary-item">
          <a href="#">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<main>

<!-- HERO -->
<section class="contact-hero">
  <div class="grid-container">
    <h1 class="font-heading-2xl margin-bottom-2">
      Contact the City of RFPMart
    </h1>
    <p class="usa-intro maxw-tablet">
      We’re here to help. Please use the form below to get in touch with the appropriate department.
    </p>
  </div>
</section>

<!-- INFO CARDS -->
<section class="usa-section bg-base-lightest">
  <div class="grid-container">
    <div class="grid-row grid-gap-lg">

      <div class="tablet:grid-col-4">
        <div class="usa-card info-card">
          <h3>Address</h3>
          <p>123 Civic Center Plaza<br>RFPMart, USA</p>
        </div>
      </div>

      <div class="tablet:grid-col-4">
        <div class="usa-card info-card">
          <h3>Email</h3>
          <p><a href="mailto:info@rfpmart.gov">info@rfpmart.gov</a></p>
        </div>
      </div>

      <div class="tablet:grid-col-4">
        <div class="usa-card info-card">
          <h3>Office Hours</h3>
          <p>Monday – Friday<br>9:00 AM – 5:00 PM</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- MAP + FORM -->
<section class="usa-section">
  <div class="grid-container">
    <div class="grid-row grid-gap-lg">

      <!-- MAP -->
      <div class="tablet:grid-col-6">
        <div class="usa-card padding-2">
          <h3>Find Us</h3>
          <iframe
            class="map-frame"
            src="https://www.google.com/maps?q=New+York+City+Hall&output=embed"
            loading="lazy">
          </iframe>
        </div>
      </div>

      <!-- FORM -->
      <div class="tablet:grid-col-6">
        <div class="form-card">
          <h3 class="margin-bottom-3">Contact Form</h3>

          <form class="usa-form">

            <label class="usa-label" for="name">Full name</label>
            <input class="usa-input" id="name" type="text" required>

            <label class="usa-label margin-top-2" for="email">Email address</label>
            <input class="usa-input" id="email" type="email" required>

            <label class="usa-label margin-top-2" for="department">Department</label>
            <select class="usa-select" id="department">
              <option>Select a department</option>
              <option>Public Works</option>
              <option>Administration</option>
              <option>Parks & Recreation</option>
            </select>

            <label class="usa-label margin-top-2" for="message">Message</label>
            <textarea class="usa-textarea" id="message" rows="5"></textarea>

            <button class="usa-button margin-top-3">
              Submit Message
            </button>

          </form>
        </div>
      </div>

    </div>
  </div>
</section>

</main>

<!-- FOOTER -->
<footer class="footer-main">
  <div class="grid-container">
    <div class="grid-row grid-gap">

      <div class="tablet:grid-col-6">
        <p class="margin-0"><strong>RFPMart LLC Contact Center</strong></p>
        <p class="margin-0">(315) 627-3333</p>
        <p class="margin-0">no-reply@rfpmartllc.com</p>
      </div>

      <div class="tablet:grid-col-6 text-right">
        <p class="margin-0">© 2026 RFPMart LLC. All rights reserved.</p>
      </div>

    </div>
  </div>
</footer>

<script src="uswds/dist/js/uswds.min.js"></script>

</body>
</html>
