<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us | City of RFPMart</title>
    <meta name="description" content="Contact the City of RFPMart for questions, feedback, or service requests." />
    <?php require_once __DIR__ . '/1_head.php'; ?>
    <style>
    

.contact-hero {
  background-image:
    linear-gradient(
      rgba(0, 0, 0, 0.55),
      rgba(0, 0, 0, 0.55)
    ),
    url("images/webp/bg-contact-us.webp");
  background-size: cover;
  background-position: center;
}


/* =====================================================
   Contact Info Cards – Dribbble Inspired + USWDS
   ===================================================== */
.contact-info-card {
  min-height: 200px;
  display: flex;
  align-items: center;
  border-radius: 0.5rem;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.contact-info-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
  border-color: #005ea2; /* USWDS primary blue */
}

/* Inner card container */
.contact-info-card .usa-card__container {
  width: 100%;
  min-height: 200px;
  text-align: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
}


/* =====================================================
   Icon Alignment (CENTER FIX)
   ===================================================== */
.contact-info-card .card-icon {
  font-size: 2rem;
  color: #005ea2;
  margin-bottom: 0.5rem;

  /* Center icon perfectly */
  display: flex;
  align-items: center;
  justify-content: center;
}


/* =====================================================
   Map Embed
   ===================================================== */
.map-embed {
  width: 100%;
  height: 560px;
  border: none;
}




        </style>

</head>

<body>
    <?php require_once __DIR__ . '/2_nav.php'; ?>

    <main id="main-content">

    <!-- ================= Page Header ================= -->
   <section class="usa-section text-white contact-hero">
  <div class="grid-container">
    <div class="maxw-tablet">
      <h1 class="font-heading-2xl margin-bottom-1">
        Contact the City of RFPMart
      </h1>
      <p class="usa-intro">
        We’re here to help. Please use the form below to get in touch
        with the appropriate department.
      </p>
    </div>
  </div>
</section>


    
  <!-- ================= City Info Cards (Single Row) ================= -->
<section class="usa-section">
  <div class="grid-container">
    <div class="grid-row grid-gap-lg">

      <!-- Address -->
      <div class="tablet:grid-col-4">
        <div class="usa-card contact-info-card">
          <div class="usa-card__container display-flex flex-column align-center text-center">

            <svg class="usa-icon usa-icon--size-4 margin-bottom-1 text-primary margin-x-auto"
                 aria-hidden="true">
              <use href="uswds/dist/img/sprite.svg#location_on"></use>
            </svg>

            <h3 class="font-heading-md margin-bottom-02">Address</h3>
            <p class="margin-0">
              123 Civic Center Plaza<br />
              RFPMart, USA
            </p>

          </div>
        </div>
      </div>



      <!-- Email -->
      <div class="tablet:grid-col-4">
        <div class="usa-card contact-info-card">
          <div class="usa-card__container display-flex flex-column align-center text-center">

            <svg class="usa-icon usa-icon--size-4 margin-bottom-1 text-primary margin-x-auto
"
                 aria-hidden="true">
              <use href="uswds/dist/img/sprite.svg#mail"></use>
            </svg>

            <h3 class="font-heading-md margin-bottom-02">Email</h3>
            <p class="margin-0">
              <a href="mailto:info@rfpmart.gov" class="usa-link">
                info@rfpmart.gov
              </a>
            </p>

          </div>
        </div>
      </div>

      <!-- Office Hours -->
      <div class="tablet:grid-col-4">
        <div class="usa-card contact-info-card">
          <div class="usa-card__container display-flex flex-column align-center text-center">

            <svg class="usa-icon usa-icon--size-4 margin-bottom-1 text-primary margin-x-auto
"
                 aria-hidden="true">
              <use href="uswds/dist/img/sprite.svg#schedule"></use>
            </svg>

            <h3 class="font-heading-md margin-bottom-02">Office Hours</h3>
            <p class="margin-0">
              Monday – Friday<br />
              9:00 AM – 5:00 PM
            </p>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>



    <!-- ================= Map + Form (6 / 6) ================= -->
    <section class="usa-section">
        <div class="grid-container">
            <div class="grid-row grid-gap-lg">

                <!-- ===== Map (Left 6) ===== -->
                <div class="tablet:grid-col-6">
                    <div class="usa-card">
                        <div class="usa-card__container">
                            <div class="usa-card__header">
                                <h2 class="usa-card__heading font-heading-lg">
                                    Find Us
                                </h2>
                            </div>

                            <div class="usa-card__body padding-0">
                                <iframe
                                    class="map-embed"
                                    src="https://www.google.com/maps?q=New+York+City+Hall&output=embed"
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ===== Contact Form (Right 6) ===== -->
                <div class="tablet:grid-col-6">
                    <div class="usa-card">
                        <div class="usa-card__container">
                            <div class="usa-card__header">
                                <h2 id="contact-form-heading"
                                    class="usa-card__heading font-heading-lg">
                                    Contact Form
                                </h2>
                            </div>

                            <div class="usa-card__body">
                                <form class="usa-form usa-form--large"
                                      aria-labelledby="contact-form-heading">

                                    <fieldset class="usa-fieldset">

                                        <label class="usa-label" for="full-name">
                                            Full name
                                        </label>
                                        <input class="usa-input" id="full-name"
                                               name="full-name" type="text" required />

                                        <label class="usa-label" for="email">
                                            Email address
                                        </label>
                                        <input class="usa-input" id="email"
                                               name="email" type="email" required />

                                        <label class="usa-label" for="department">
                                            Department
                                        </label>
                                        <select class="usa-select"
                                                id="department" name="department">
                                            <option value="">Select a department</option>
                                            <option value="mayor">Mayor’s Office</option>
                                            <option value="council">City Council</option>
                                            <option value="police">Police Department</option>
                                            <option value="public-works">Public Works</option>
                                        </select>

                                        <label class="usa-label" for="message">
                                            Message
                                        </label>
                                        <textarea class="usa-textarea"
                                                  id="message" name="message"
                                                  rows="5" required></textarea>

                                        <button class="usa-button margin-top-4"
                                                type="submit">
                                            Submit Message
                                        </button>

                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>


    <?php require_once __DIR__ . '/9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>
</html>
