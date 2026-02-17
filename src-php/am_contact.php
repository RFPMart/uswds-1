<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RFPMart City - Contact</title>
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <!-- Google Fonts for better typography -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: #f8fafc;
      color: #1e293b;
      line-height: 1.5;
    }

    .container {
      max-width: 1400px;
      margin: 0 auto;
      padding: 0 24px;
    }

    /* Header Styles */
    .header {
      background: white;
      border-bottom: 1px solid #e2e8f0;
      padding: 1rem 0;
      position: sticky;
      top: 0;
      z-index: 100;
      box-shadow: 0 2px 4px rgba(0,0,0,0.02);
    }

    .header-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-size: 1.5rem;
      font-weight: 700;
      color: #0f172a;
      text-decoration: none;
    }

    .nav-menu {
      display: flex;
      gap: 2rem;
      list-style: none;
    }

    .nav-menu a {
      text-decoration: none;
      color: #475569;
      font-weight: 500;
      transition: color 0.2s;
    }

    .nav-menu a:hover,
    .nav-menu a.active {
      color: #2563eb;
    }

    .menu-toggle {
      display: none;
      background: none;
      border: none;
      font-size: 1.5rem;
      color: #475569;
      cursor: pointer;
    }

    /* Hero Section */
    .hero {
      background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
      color: white;
      padding: 4rem 0;
      margin-bottom: 3rem;
    }

    .hero-content {
      max-width: 800px;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 1rem;
      line-height: 1.2;
    }

    .hero p {
      font-size: 1.25rem;
      opacity: 0.9;
      margin-bottom: 0;
    }

    /* Contact Info Cards - 3 cards in a row */
    .info-cards {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.5rem;
      margin-bottom: 2rem;
    }

    .info-card {
      background: white;
      padding: 1.5rem;
      border-radius: 1rem;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
      border: 1px solid #e2e8f0;
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .info-card:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }

    .info-card i {
      font-size: 1.5rem;
      color: #2563eb;
      margin-bottom: 1rem;
    }

    .info-card h3 {
      font-size: 1.125rem;
      font-weight: 600;
      margin-bottom: 0.75rem;
      color: #0f172a;
    }

    .info-card p {
      color: #475569;
      margin-bottom: 0.5rem;
      font-size: 0.95rem;
    }

    .info-card a {
      color: #2563eb;
      text-decoration: none;
      font-weight: 500;
    }

    .info-card a:hover {
      text-decoration: underline;
    }

    /* Map and Form Layout */
    .map-form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 2rem;
      margin-bottom: 3rem;
    }

    /* Map Container */
    .map-container {
      background: white;
      border-radius: 1rem;
      overflow: hidden;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
      border: 1px solid #e2e8f0;
      height:auto;
    }

    .map-placeholder {
      background: #f1f5f9;
      height: 300px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #64748b;
      font-size: 1.125rem;
      border-bottom: 1px solid #e2e8f0;
    }

    .map-controls {
      padding: 1.5rem;
    }

    .map-controls h4 {
      font-size: 1rem;
      font-weight: 600;
      margin-bottom: 1rem;
      color: #0f172a;
    }

    .view-larger {
      display: inline-block;
      color: #2563eb;
      text-decoration: none;
      font-weight: 500;
      margin-bottom: 1.5rem;
    }

    .view-larger i {
      font-size: 0.875rem;
      margin-left: 0.25rem;
    }

    .nearby-cities {
      display: flex;
      flex-wrap: wrap;
      gap: 0.75rem;
      margin-bottom: 1.5rem;
    }

    .city-tag {
      background: #f1f5f9;
      padding: 0.375rem 1rem;
      border-radius: 2rem;
      font-size: 0.875rem;
      color: #475569;
      transition: all 0.2s;
      cursor: default;
    }

    .city-tag:hover {
      background: #e2e8f0;
    }

    /* Contact Form */
    .form-container {
      background: white;
      border-radius: 1rem;
      padding: 2rem;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
      border: 1px solid #e2e8f0;
    }

    .form-container h2 {
      font-size: 1.5rem;
      font-weight: 600;
      color: #0f172a;
      margin-bottom: 0.5rem;
    }

    .form-container > p {
      color: #64748b;
      margin-bottom: 2rem;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-label {
      display: block;
      font-weight: 500;
      margin-bottom: 0.5rem;
      color: #1e293b;
    }

    .form-label i {
      color: #2563eb;
      margin-right: 0.5rem;
    }

    .form-control {
      width: 100%;
      padding: 0.75rem 1rem;
      border: 1px solid #e2e8f0;
      border-radius: 0.75rem;
      font-size: 1rem;
      transition: all 0.2s;
      font-family: 'Inter', sans-serif;
    }

    .form-control:focus {
      outline: none;
      border-color: #2563eb;
      box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }

    textarea.form-control {
      resize: vertical;
      min-height: 120px;
    }

    .submit-btn {
      background: #2563eb;
      color: white;
      border: none;
      padding: 1rem 2rem;
      border-radius: 2rem;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.2s;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
    }

    .submit-btn:hover {
      background: #1d4ed8;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
    }

    /* Routes List */
    .routes-section {
      background: white;
      border-radius: 1rem;
      padding: 1.5rem;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
      border: 1px solid #e2e8f0;
      margin-top: 2rem;
    }

    .routes-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1.5rem;
      flex-wrap: wrap;
      gap: 1rem;
    }

    .routes-header h2 {
      font-size: 1.25rem;
      font-weight: 600;
      color: #0f172a;
    }

    .route-search {
      padding: 0.5rem 1rem;
      border: 1px solid #e2e8f0;
      border-radius: 2rem;
      font-size: 0.875rem;
      width: 250px;
      outline: none;
      transition: border-color 0.2s;
    }

    .route-search:focus {
      border-color: #2563eb;
    }

    .routes-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
      gap: 0.5rem;
      max-height: 400px;
      overflow-y: auto;
      padding-right: 0.5rem;
    }

    .route-item {
      padding: 0.5rem;
      background: #f8fafc;
      border-radius: 0.5rem;
      font-size: 0.875rem;
      color: #475569;
      transition: all 0.2s;
      text-align: center;
      border: 1px solid transparent;
    }

    .route-item:hover {
      background: #f1f5f9;
      border-color: #e2e8f0;
      transform: translateX(2px);
    }

    /* Footer */
    .footer {
      background: white;
      border-top: 1px solid #e2e8f0;
      padding: 2rem 0;
      margin-top: 4rem;
    }

    .footer-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 1rem;
    }

    .footer-links {
      display: flex;
      gap: 2rem;
    }

    .footer-links a {
      color: #64748b;
      text-decoration: none;
      font-size: 0.875rem;
    }

    .footer-links a:hover {
      color: #2563eb;
    }

    .copyright {
      color: #94a3b8;
      font-size: 0.875rem;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
      .info-cards {
        grid-template-columns: repeat(2, 1fr);
      }
      
      .map-form-grid {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 768px) {
      .menu-toggle {
        display: block;
      }

      .nav-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: white;
        flex-direction: column;
        padding: 1rem;
        gap: 1rem;
        border-top: 1px solid #e2e8f0;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
      }

      .nav-menu.show {
        display: flex;
      }

      .hero h1 {
        font-size: 2rem;
      }

      .hero p {
        font-size: 1rem;
      }

      .info-cards {
        grid-template-columns: 1fr;
      }

      .routes-header {
        flex-direction: column;
        align-items: stretch;
      }

      .route-search {
        width: 100%;
      }

      .footer-content {
        flex-direction: column;
        text-align: center;
      }

      .footer-links {
        justify-content: center;
      }
    }

    @media (max-width: 480px) {
      .container {
        padding: 0 16px;
      }

      .routes-grid {
        grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
      }

      .nearby-cities {
        gap: 0.5rem;
      }

      .city-tag {
        padding: 0.25rem 0.75rem;
        font-size: 0.75rem;
      }
    }

    /* Scrollbar Styling */
    .routes-grid::-webkit-scrollbar {
      width: 6px;
    }

    .routes-grid::-webkit-scrollbar-track {
      background: #f1f5f9;
      border-radius: 3px;
    }

    .routes-grid::-webkit-scrollbar-thumb {
      background: #94a3b8;
      border-radius: 3px;
    }

    .routes-grid::-webkit-scrollbar-thumb:hover {
      background: #64748b;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header class="header">
    <div class="container">
      <div class="header-content">
        <a href="#" class="logo">
          <i class="fas fa-city" style="margin-right: 0.5rem; color: #2563eb;"></i>
          RFPMart City
        </a>
        
        <button class="menu-toggle" id="menuToggle">
          <i class="fas fa-bars"></i>
        </button>

        <ul class="nav-menu" id="navMenu">
          <li><a href="#" class="active">Home</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Departments</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <h1>Contact the City of RFPMart</h1>
        <p>We're here to help. Please use the form below to get in touch with the appropriate department.</p>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <main class="container">
    <!-- Three Info Cards -->
    <div class="info-cards">
      <!-- Address Card -->
      <div class="info-card">
        <i class="fas fa-map-marker-alt"></i>
        <h3>Address</h3>
        <p>123 Civic Center Plaza<br>RFPMart, USA</p>
        <a href="mailto:info@rfpmart.gov">
          info@rfpmart.gov <i class="fas fa-arrow-right" style="font-size: 0.75rem;"></i>
        </a>
      </div>

      <!-- Phone Card (New) -->
      <div class="info-card">
        <i class="fas fa-phone-alt"></i>
        <h3>Phone</h3>
        <p>Main: (555) 123-4567</p>
        <p>TTY: (555) 123-4568</p>
        <a href="tel:+15551234567" style="font-size: 0.875rem;">
          <i class="fas fa-phone" style="font-size: 0.75rem;"></i> Call us
        </a>
      </div>

      <!-- Hours Card -->
      <div class="info-card">
        <i class="fas fa-clock"></i>
        <h3>Office Hours</h3>
        <p>Monday – Friday<br>9:00 AM – 5:00 PM</p>
        <p style="color: #64748b; font-size: 0.875rem;">Closed weekends & holidays</p>
      </div>
    </div>

    <!-- Map and Form Grid -->
    <div class="map-form-grid">
      <!-- Left Column - Map -->
      <div class="map-container">
        <div class="map-placeholder">
          <i class="fas fa-map" style="margin-right: 0.5rem;"></i>
          Interactive Map View
        </div>
        <div class="map-controls">
          <h4>Find Us</h4>
          <a href="#" class="view-larger">
            View larger map <i class="fas fa-external-link-alt"></i>
          </a>
          
          <div class="nearby-cities">
            <span class="city-tag">Paterson</span>
            <span class="city-tag">Clifton</span>
            <span class="city-tag">Montclair</span>
            <span class="city-tag">East Orange</span>
            <span class="city-tag">Newark</span>
            <span class="city-tag">Elizabeth</span>
            <span class="city-tag">Linden</span>
            <span class="city-tag">Way</span>
            <span class="city-tag">Bayonne</span>
            <span class="city-tag">Long Island</span>
          </div>
        </div>
      </div>

      <!-- Right Column - Contact Form -->
      <div class="form-container">
        <h2>Send us a Message</h2>
        <p>We'll get back to you within 24 hours.</p>
        
        <form id="contactForm" onsubmit="handleSubmit(event)">
          <div class="form-group">
            <label class="form-label" for="name">
              <i class="fas fa-user"></i>
              Full Name
            </label>
            <input type="text" class="form-control" id="name" required placeholder="Enter the name">
          </div>

          <div class="form-group">
            <label class="form-label" for="email">
              <i class="fas fa-envelope"></i>
              Email Address
            </label>
            <input type="email" class="form-control" id="email" required placeholder="Enter the email">
          </div>

          <div class="form-group">
            <label class="form-label" for="phone">
              <i class="fas fa-phone"></i>
              Phone Number
            </label>
            <input type="tel" class="form-control" id="phone" placeholder="(555) 123-2344">
          </div>

          <div class="form-group">
            <label class="form-label" for="department">
              <i class="fas fa-building"></i>
              Department
            </label>
            <select class="form-control" id="department" required>
              <option value="">Select a department</option>
              <option value="public-works">Public Works</option>
              <option value="parks-rec">Parks & Recreation</option>
              <option value="police">Police Department</option>
              <option value="fire">Fire Department</option>
              <option value="planning">City Planning</option>
              <option value="other">Other</option>
            </select>
          </div>

          <div class="form-group">
            <label class="form-label" for="message">
              <i class="fas fa-comment"></i>
              Message
            </label>
            <textarea class="form-control" id="message" required placeholder="How can we help you?"></textarea>
          </div>

          <button type="submit" class="submit-btn">
            <i class="fas fa-paper-plane"></i>
            Send Message
          </button>
        </form>
      </div>
    </div>

    <!-- Routes List Section -->
  
  </main>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="copyright">
          &copy; 2026 RFPMart City. All rights reserved.
        </div>
        <div class="footer-links">
          <a href="#">Privacy Policy</a>
          <a href="#">Terms of Use</a>
          <a href="#">Accessibility</a>
          <a href="#">Sitemap</a>
        </div>
      </div>
    </div>
  </footer>

  <script>
    // Generate routes from 1 to 600
    function generateRoutes() {
      const routesGrid = document.getElementById('routesGrid');
      const searchInput = document.getElementById('routeSearch');
      
      // Create array of route numbers
      const routes = Array.from({ length: 600 }, (_, i) => i + 1);
      
      // Function to render routes
      function renderRoutes(filterText = '') {
        const filteredRoutes = routes.filter(route => 
          route.toString().includes(filterText)
        );
        
        routesGrid.innerHTML = filteredRoutes.map(route => 
          `<div class="route-item">Route ${route}</div>`
        ).join('');
      }
      
      // Initial render
      renderRoutes();
      
      // Search functionality
      searchInput.addEventListener('input', (e) => {
        renderRoutes(e.target.value);
      });
    }
    
    // Mobile menu toggle
    document.getElementById('menuToggle').addEventListener('click', () => {
      document.getElementById('navMenu').classList.toggle('show');
    });
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
      const menu = document.getElementById('navMenu');
      const toggle = document.getElementById('menuToggle');
      
      if (!menu.contains(e.target) && !toggle.contains(e.target)) {
        menu.classList.remove('show');
      }
    });

    // Form submission handler
    function handleSubmit(event) {
      event.preventDefault();
      alert('Thank you for your message! We will get back to you soon.');
      document.getElementById('contactForm').reset();
    }
    
    // Initialize routes
    generateRoutes();
  </script>
</body>
</html>
