<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>404 - RFPMart + USWDS</title>
    <meta name="description" content="404 - page not found" />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">
        <a class="usa-skipnav" href="#main-content">Skip to main content</a>
  
  <div class="usa-overlay"></div>
  <header class="usa-header usa-header--basic">
    <div class="usa-nav-container">
      <div class="usa-navbar">
        <div class="usa-logo">
          <em class="usa-logo__text"
            ><a href="/" title="<Project title>">404</a></em
          >
        </div>
      </div>
    </div>
  </header>
  <div class="usa-section">
    <div class="grid-container">
      <div class="grid-row grid-gap">
        <main class="" id="main-content">
          <div class="usa-prose">
            <h1>Page not found</h1>
            <p class="usa-intro">
              We’re sorry, we can’t find the page you're looking for. The site
              administrator may have removed it, changed its location, or made
              it otherwise unavailable.
            </p>
            <p>
              If you typed the URL directly, check your spelling and
              capitalization. Our URLs look like this:
              <strong>&lt;agency.gov/example-one&gt;</strong>.
            </p>
            <p>
              Visit our homepage for helpful tools and resources, or contact us
              and we’ll point you in the right direction.
            </p>
            <div class="margin-y-5">
              <ul class="usa-button-group">
                <li class="usa-button-group__item">
                  <a href="javascript:void();" class="usa-button"
                    >Visit homepage</a
                  >
                </li>
                <li class="usa-button-group__item">
                  <button class="usa-button usa-button--outline" type="button">
                    Contact Us
                  </button>
                </li>
              </ul>
            </div>
            <p>For immediate assistance:</p>
            <ul>
              <li>
                <a href="javascript:void();" class="usa-link"
                  >Start a live chat with us</a
                >
              </li>
              <li>
                Call
                <a href="javascript:void();" class="usa-link">(555) 555-GOVT</a>
              </li>
            </ul>
            <p class="text-base"><strong>Error code:</strong> 404</p>
          </div>
        </main>
      </div>
    </div>
  </div>
  
  <div class="usa-identifier">
    
    
    <section
      class="usa-identifier__section usa-identifier__section--usagov"
      aria-label="U.S. government information and services"
    >
      <div class="usa-identifier__container">
        <div class="usa-identifier__usagov-description">
          Looking for U.S. government information and services?
        </div>
        <a href="https://www.usa.gov/" class="usa-link">Visit USA.gov</a>
      </div>
    </section>
  </div>
    </main>

    <?php require_once 'utility-popular-services.php'; ?>

    <?php require_once '9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>