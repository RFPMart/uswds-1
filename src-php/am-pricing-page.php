<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pricing | City of RFPMart</title>

  <?php require_once __DIR__ . '/1_head.php'; ?>

  <style>
    /* Pricing Section Enhancements */
    .pricing-hero {
      background: linear-gradient(135deg, rgba(0, 94, 162, 0.85) 0%, rgba(0, 73, 144, 0.9) 100%),
                  url("images/webp/bg-pricing.webp");
      background-size: cover;
      background-position: center;
      color: #fff;
      padding-top: 4rem;
      padding-bottom: 4rem;
    }

    .pricing-section {
      padding-top: 3rem;
      padding-bottom: 4rem;
    }

    .pricing-card {
      border-radius: 0.5rem;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .pricing-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
    }

    .pricing-card--featured {
      /* border: 2px solid #005ea2; */
      position: relative;
      overflow: hidden;
    }

    .pricing-card--featured::before {
      content: "Most Popular";
      position: absolute;
      top: 0;
      right: 0;
      background: #005ea2;
      color: white;
      padding: 0.5rem 1.5rem;
      font-size: 0.875rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .pricing-card__container {
      padding: 10px 0.75rem;
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .pricing-price {
      font-size: 3rem;
      font-weight: 700;
      color: #005ea2;
      line-height: 1;
      margin: 1rem 0;
    }

    .pricing-price span {
      font-size: 1rem;
      font-weight: 400;
      color: #5c5c5c;
    }

    .pricing-icon {
        margin-top: 1rem;
      width: 4rem;
      height: 4rem;
      background: #e6f2ff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.5rem;
    }

    .pricing-icon svg {
      width: 2rem;
      height: 2rem;
    }

    .pricing-features {
      margin: 2rem 0;
      flex-grow: 1;
    }

    .pricing-features li {
      padding: 0.75rem 0;
      border-bottom: 1px solid #f0f0f0;
      display: flex;
      align-items: center;
    }

    .pricing-features li:last-child {
      border-bottom: none;
    }

    .pricing-features li::before {
      content: "✓";
      color: #00a91c;
      font-weight: bold;
      margin-right: 0.75rem;
      font-size: 1.125rem;
    }

    .pricing-cta {
      margin-top: auto;
    }

    /* Comparison table */
    .pricing-comparison {
      background: #f8f9fa;
      padding: 3rem 0;
    }

    .comparison-table .usa-table {
      background: white;
    }

    .feature-check {
      color: #00a91c;
      font-weight: bold;
    }

    /* FAQ Section */
    .faq-section {
      padding: 3rem 0;
    }

    .faq-item {
      border-bottom: 1px solid #dfe1e2;
      padding: 1.5rem 0;
    }

    .faq-item:first-child {
      border-top: 1px solid #dfe1e2;
    }

    @media (max-width: 40em) {
      .pricing-card--featured::before {
        font-size: 0.75rem;
        padding: 0.375rem 1rem;
      }
      
      .pricing-price {
        font-size: 2.5rem;
      }
    }
    .faq-item {
  border: 1px solid #dfe1e2;
  border-radius: 0.5rem;
  padding: 1rem 1.25rem;
  background: #ffffff;
}

.faq-question {
  cursor: pointer;
  list-style: none;
  position: relative;
  padding-right: 1.5rem;
}

.faq-question::after {
  content: "+";
  position: absolute;
  right: 0;
  font-size: 1.25rem;
}

details[open] .faq-question::after {
  content: "−";
}

.faq-answer {
  margin-top: 0.75rem;
  color: #3d4551;
}

  </style>
</head>

<body>
<?php require_once __DIR__ . '/2_nav.php'; ?>

<main id="main-content">

  <!-- HERO -->
  <section class="usa-section pricing-hero">
    <div class="grid-container">
      <div class="grid-row">
        <div class="tablet:grid-col-10 tablet:grid-offset-1">
          <div class="text-center">
            <h1 class="font-heading-2xl margin-bottom-1"> Pricing Page </h1>
            <p class="usa-intro font-sans-lg margin-top-1">
              Simple, fair pricing designed for communities, businesses, and government partners.
            </p>
            <p class="text-white margin-top-2">
              Choose the plan that fits your needs. No hidden fees, no surprises.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRICING CARDS -->
  <section class="usa-section pricing-section">
    <div class="grid-container">
      <div class="text-center margin-bottom-4">
        <h2 class="font-heading-xl">Select Your Plan</h2>
        <p class="usa-intro maxw-tablet margin-x-auto">
          All plans include access to our core platform features
        </p>
      </div>

      <div class="grid-row grid-gap-4">
        <!-- BASIC -->
        <div class="tablet:grid-col-4">
          <div class="usa-card pricing-card">
            <div class="usa-card__container pricing-card__container">
              <div class="pricing-icon">
                <svg class="usa-icon text-primary" aria-hidden="true" focusable="false">
                  <use href="uswds/dist/img/sprite.svg#account_balance"></use>
                </svg>
              </div>

              <header class="usa-card__header">
                <h2 class="usa-card__heading font-heading-lg">Basic</h2>
                <p class="text-base margin-top-05">For residents & public access</p>
              </header>

              <div class="usa-card__body">
                <div class="pricing-price">$0<span class="display-block font-sans-xs text-base">Free forever</span></div>
                
                <ul class="usa-list usa-list--unstyled pricing-features">
                  <li>Public services access</li>
                  <li>News & alerts subscription</li>
                  <li>Community event listings</li>
                  <li>Document library access</li>
                  <li>Basic search functionality</li>
                </ul>
              </div>

              <div class="usa-card__footer pricing-cta">
                <a class="usa-button usa-button--outline width-full" href="#">
                  Get Started
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- STANDARD (FEATURED) -->
        <div class="tablet:grid-col-4">
          <div class="usa-card pricing-card pricing-card--featured">
            <div class="usa-card__container pricing-card__container">
              <div class="pricing-icon">
                <svg class="usa-icon text-primary" aria-hidden="true" focusable="false">
                  <use href="uswds/dist/img/sprite.svg#star"></use>
                </svg>
              </div>

              <header class="usa-card__header">
                <h2 class="usa-card__heading font-heading-lg">Standard</h2>
                <p class="text-base margin-top-05">Best for small organizations</p>
              </header>

              <div class="usa-card__body">
                <div class="pricing-price">$49<span class="display-block font-sans-xs text-base">per month</span></div>
                
                <ul class="usa-list usa-list--unstyled pricing-features">
                  <li>All Basic features included</li>
                  <li>Department dashboards</li>
                  <li>Email support (48hr response)</li>
                  <li>Advanced search filters</li>
                  <li>Basic analytics reports</li>
                  <li>Up to 5 user accounts</li>
                </ul>
              </div>

              <div class="usa-card__footer pricing-cta">
                <a class="usa-button usa-button--secondary width-full" href="#">
                  Start Free Trial
                </a>
                <p class="text-base margin-top-1">30-day free trial included</p>
              </div>
            </div>
          </div>
        </div>

        <!-- ENTERPRISE -->
        <div class="tablet:grid-col-4">
          <div class="usa-card pricing-card">
            <div class="usa-card__container pricing-card__container">
              <div class="pricing-icon">
                <svg class="usa-icon text-primary" aria-hidden="true" focusable="false">
                  <use href="uswds/dist/img/sprite.svg#business"></use>
                </svg>
              </div>

              <header class="usa-card__header">
                <h2 class="usa-card__heading font-heading-lg">Enterprise</h2>
                <p class="text-base margin-top-05">For cities & large agencies</p>
              </header>

              <div class="usa-card__body">
                <div class="pricing-price">Custom<span class="display-block font-sans-xs text-base">Volume pricing</span></div>
                
                <ul class="usa-list usa-list--unstyled pricing-features">
                  <li>All Standard features included</li>
                  <li>Dedicated account manager</li>
                  <li>Priority phone & email support</li>
                  <li>Custom integrations & API access</li>
                  <li>Advanced analytics dashboard</li>
                  <li>Unlimited user accounts</li>
                  <li>Training & onboarding</li>
                </ul>
              </div>

              <div class="usa-card__footer pricing-cta">
                <a class="usa-button width-full" href="Am_contact.php">
                  Contact Sales
                </a>
                <p class="text-base margin-top-1">Schedule a custom demo</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- FAQ -->
  <section class="usa-section faq-section bg-base-lightest">
  <div class="grid-container">
    
    <!-- Section Header -->
    <div class="text-center margin-bottom-5">
      <h2 class="font-heading-xl">Frequently Asked Questions</h2>
      <p class="font-sans-md text-base-dark margin-top-1">
        Everything you need to know before getting started
      </p>
    </div>

    <!-- FAQ Accordion -->
    <div class="maxw-tablet margin-x-auto">

      <details class="faq-item margin-bottom-2">
        <summary class="faq-question font-heading-md">
          Can I switch plans at any time?
        </summary>
        <p class="faq-answer">
          Yes, you can upgrade or downgrade your plan at any time. Changes take
          effect at the start of your next billing cycle.
        </p>
      </details>

      <details class="faq-item margin-bottom-2">
        <summary class="faq-question font-heading-md">
          Is there a free trial?
        </summary>
        <p class="faq-answer">
          The Standard plan includes a 30-day free trial. The Basic plan is free
          forever. Enterprise plans include a custom demo and pilot period.
        </p>
      </details>

      <details class="faq-item margin-bottom-2">
        <summary class="faq-question font-heading-md">
          What payment methods do you accept?
        </summary>
        <p class="faq-answer">
          We accept all major credit cards, ACH transfers, and purchase orders
          for Enterprise plans.
        </p>
      </details>

      <details class="faq-item">
        <summary class="faq-question font-heading-md">
          Do you offer discounts for non-profits?
        </summary>
        <p class="faq-answer">
          Yes, we offer special pricing for registered non-profit organizations
          and educational institutions.
          <a href="Am_contact.php" class="usa-link">Contact us</a> for details.
        </p>
      </details>

    </div>

  </div>
</section>


</main>

<?php require_once __DIR__ . '/9_footer.php'; ?>
<script src="uswds/dist/js/uswds.min.js"></script>
</body>
</html>