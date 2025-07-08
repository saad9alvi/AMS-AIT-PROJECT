<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AMS</title>
  <link rel="icon" type="image/svg" href="logo.svg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #c19a6b;
      --secondary: #1a1a1a;
      --light: #f8f9fa;
      --dark: #212529;
    }
    
    body {
      font-family: 'Montserrat', sans-serif;
      scroll-behavior: smooth;
      color: var(--dark);
    }
    
    h1, h2, h3, h4, h5, h6 {
      font-family: 'Playfair Display', serif;
    }
    
    .hero {
      height: 100vh;
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                  url('img.png')no-repeat center center/cover;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
      position: relative;
    }
    
    .hero-content {
      position: relative;
      z-index: 1;
    }
    
    .hero h1 {
      font-size: 4rem;
      margin-bottom: 1.5rem;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    
    .hero p {
      font-size: 1.5rem;
      max-width: 700px;
      margin: 0 auto 2rem;
    }
    
    .btn-primary {
      background-color: var(--primary);
      border-color: var(--primary);
      color: white;
    }
    
    .btn-primary:hover {
      background-color: #a5825a;
      border-color: #a5825a;
    }
    
    .btn-outline-primary {
      border-color: var(--primary);
      color: var(--primary);
    }
    
    .btn-outline-primary:hover {
      background-color: var(--primary);
      color: white;
    }
    
    .section-title {
      position: relative;
      margin-bottom: 3rem;
    }
    
    .section-title:after {
      content: "";
      position: absolute;
      bottom: -15px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 3px;
      background: var(--primary);
    }
    
    .feature-icon {
      font-size: 2.5rem;
      color: var(--primary);
      margin-bottom: 1rem;
    }
    
    .amenities-list {
      list-style-type: none;
      padding-left: 0;
      margin:0;
    }
    
    .amenities-list li {
      margin-bottom: 1.2rem;
      position: relative;
      padding-left: 30px;
    }
    
    .amenities-list li:before {
      content: "\f00c";
      font-family: "Font Awesome 6 Free";
      font-weight: 900;
      position: absolute;
      left: 0;
      color: var(--primary);
    }
    
    .testimonial-card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      padding: 2rem;
      height: 100%;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .testimonial-card:hover {
      transform: translateY(-10px) scale(1.03);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .gallery-item {
      position: relative;
      overflow: hidden;
      border-radius: 8px;
      margin-bottom: 20px;
      height: 250px;
    }
    
    .gallery-item img {
      transition: transform 0.5s ease;
      height: 100%;
      width: 100%;
      object-fit: cover;
    }
    
    .gallery-item:hover img {
      transform: scale(1.1);
    }
    
    .gallery-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    
    .gallery-item:hover .gallery-overlay {
      opacity: 1;
    }
    
    .contact-info i {
      color: var(--primary);
      margin-right: 10px;
    }
    
    footer {
      background: var(--secondary);
      color: white;
      padding: 3rem 0;
    }
    
    .footer-links a {
      color: #aaa;
      text-decoration: none;
      transition: color 0.3s;
    }
    
    .footer-links a:hover {
      color: var(--primary);
    }
    
    .social a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      color: white;
      margin-right: 10px;
      transition: all 0.3s;
    }
    
    .social a:hover {
      background: var(--primary);
      transform: translateY(-3px);
    }
    
.pricing-card {
  border: none;
  border-radius: 10px;
  transition: transform 0.3s, box-shadow 0.3s;
  height: 100%;
  min-height: 400px; /* Keep it a bit taller */
  display: flex;
  flex-direction: column;  /* Arrange children vertically */
  background: white; /* Optional: subtle background for premium look */
  box-shadow: 0 4px 10px rgba(0,0,0,0.05); /* Soft shadow */
}

.pricing-card .card-body {
  flex: 1 1 auto;  /* Make card body fill height */
  display: flex;
  flex-direction: column;
  justify-content: space-between;  /* Space out content vertically */
  padding: 1.5rem;  /* Increased padding for breathing room */
}

/* Premium typography for titles */
.pricing-card .card-title {
  font-weight: 700;
  text-transform: uppercase;
  color: #6c757d; /* muted gray */
  letter-spacing: 2px;
  font-size: 1.3rem;
  margin-bottom: 1rem;
  font-family: 'Playfair Display', serif; /* Elegant font */
}

/* Big, standout pricing */
.pricing-card .card-price {
  font-weight: 800;
  color: var(--primary);
  font-size: 2.75rem;
  letter-spacing: 1px;
  margin-bottom: 1.5rem;
  font-family: 'Playfair Display', serif;
}

/* Italic descriptive text for sophistication */
.pricing-card .card-text {
  font-style: italic;
  font-weight: 500;
  color: #555;
  max-width: 240px;
  margin: 0 auto 1.5rem auto;
  font-size: 1rem;
  font-family: 'Montserrat', sans-serif;
}

/* List styling with FontAwesome check icons */
.pricing-card ul {
  margin-bottom: 1.5rem;
  padding-left: 0;
  list-style: none;
  font-weight: 600;
  color: var(--dark);
  font-size: 1rem;
  letter-spacing: 0.5px;
  max-width: 280px;
  margin-left: auto;
  margin-right: auto;
  font-family: 'Montserrat', sans-serif;
}

.pricing-card ul li {
  margin-bottom: 0.8rem;
  position: relative;
  padding-left: 25px;
}

.pricing-card ul li:before {
  content: "\f00c";  /* FontAwesome check */
  font-family: "Font Awesome 6 Free";
  font-weight: 900;
  position: absolute;
  left: 0;
  color: var(--primary);
  font-size: 0.9rem;
  line-height: 1;
}

/* Popular card border */
.pricing-card.popular {
  border: 2px solid var(--primary);
  position: relative;
  box-shadow: 0 6px 20px rgba(193, 154, 107, 0.3);
}

/* Popular badge */
.popular-badge {
  position: absolute;
  top: -15px;
  right: 20px;
  background: var(--primary);
  color: white;
  padding: 5px 15px;
  border-radius: 20px;
  font-size: 0.8rem;
  font-weight: bold;
  letter-spacing: 1px;
  font-family: 'Montserrat', sans-serif;
}

    
    .navbar {
      transition: all 0.3s;
    }
    
    .navbar.scrolled {
      background-color: rgba(0, 0, 0, 0.9) !important;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .nav-link {
      position: relative;
      margin: 0 10px;
    }
    
    .nav-link:after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 2px;
      background: var(--primary);
      transition: width 0.3s;
    }
    
    .nav-link:hover:after {
      width: 100%;
    }
    
    .nav-link.active:after {
      width: 100%;
    }

    .card:hover {
      transform: translateY(-5px);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
  </style>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 fixed-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="logo.svg" alt="AMS Logo" style="height: 50px; width: auto;">
      <span class="ms-2 fw-bold text-light" style="font-family: 'Montserrat',sans-serif; font-size: 1.8rem; color: var(--primary);">AMS</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a href="#home" class="nav-link active">Home</a></li>
        <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
        <li class="nav-item"><a href="#amenities" class="nav-link">Amenities</a></li>
        <li class="nav-item"><a href="#gallery" class="nav-link">Gallery</a></li>
        <li class="nav-item"><a href="#pricing" class="nav-link">Pricing</a></li>
        <li class="nav-item"><a href="#testimonials" class="nav-link">Testimonials</a></li>
        <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
        <li class="nav-item"><a href="login.php" class="btn btn-outline-light btn-sm me-2">Login</a></li>
        <li class="nav-item"><a href="signupform.php" class="btn btn-primary btn-sm">Register</a></li>

      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section id="home" class="hero">
  <div class="hero-content container">
    <h1>Apartment Management System</h1>
    <p class="lead">Efficiently manage residents, maintenance, billing, and communication—all in one unified system.</p>
    <div class="d-flex gap-3 justify-content-center">
      <a href="#amenities" class="btn btn-primary btn-lg px-5">Explore Features</a>
      <a href="#pricing" class="btn btn-outline-light btn-lg px-5">Get Started</a>
    </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h2 class="section-title text-center text-lg-start">About AMS</h2>
        <p class="lead">Your Complete Apartment Management Solution</p>
        <p>Apartment Management System (AMS) simplifies daily operations for property managers, residents, and staff. Our platform streamlines rent collection, complaint tracking, maintenance scheduling, and communication—all under one roof.</p>
        <p>Whether managing a small residential block or a large apartment complex, AMS brings transparency, efficiency, and modern automation to apartment living.</p>

        <h4 class="mt-4">Our Team</h4>
        <ul>
          <li><strong>Owner:</strong> Areeb Alvi</li>
          <li><strong>Admin:</strong> Hassaan Asif</li>
          <li><strong>Manager:</strong> M.Abdullah Nadeem</li>
        </ul>

        <div class="row mt-4">
          <div class="col-6">
            <div class="d-flex align-items-center mb-3">
              <i class="fas fa-tools feature-icon me-3"></i>
              <div>
                <h5 class="mb-0">Maintenance Tracker</h5>
                <small>Log & resolve issues fast</small>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="d-flex align-items-center mb-3">
              <i class="fas fa-money-bill-wave feature-icon me-3"></i>
              <div>
                <h5 class="mb-0">Automated Billing</h5>
                <small>Track payments online</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <img src="house.jpg" alt="AMS dashboard" class="img-fluid rounded shadow">
      </div>
    </div>
  </div>
</section>

<!-- Features Section -->
<section id="amenities" class="py-5">
  <div class="container">
    <h2 class="section-title text-center">Core Features</h2>
    <p class="text-center mb-5">All-in-one solution for managing your apartment complex with ease and efficiency</p>

    <div class="row align-items-center">
      <!-- Left side: Features -->
      <div class="col-lg-6">
        <div class="row g-4">
          <div class="col-6">
            <div class="text-center p-3 h-100 border rounded shadow-sm bg-white">
              <div class="feature-icon">
                <i class="fas fa-user-shield"></i>
              </div>
              <h5>Role-Based Dashboards</h5>
              <p>Separate portals for admin, tenants, and owners to access relevant tools and information.</p>
            </div>
          </div>
          <div class="col-6">
            <div class="text-center p-3 h-100 border rounded shadow-sm bg-white">
              <div class="feature-icon">
                <i class="fas fa-calendar-check"></i>
              </div>
              <h5>Maintenance Requests</h5>
              <p>Tenants can log complaints, and managers can assign tasks and track their progress.</p>
            </div>
          </div>
          <div class="col-6">
            <div class="text-center p-3 h-100 border rounded shadow-sm bg-white">
              <div class="feature-icon">
                <i class="fas fa-file-invoice-dollar"></i>
              </div>
              <h5>Billing & Payments</h5>
              <p>Generate rent invoices and receive online payments with transaction records.</p>
            </div>
          </div>
          <div class="col-6">
            <div class="text-center p-3 h-100 border rounded shadow-sm bg-white">
              <div class="feature-icon">
                <i class="fas fa-bullhorn"></i>
              </div>
              <h5>Announcements</h5>
              <p>Admins and managers can broadcast important notices to all residents instantly.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right side: Image -->
      <div class="col-lg-6 mt-4 mt-lg-0 text-center">
        <img src="features.jpg" alt="Features Overview" class="img-fluid rounded shadow" style="max-height: 480px; object-fit: cover;">
      </div>
    </div>
  </div>
</section>



<!-- Gallery Section -->
<section id="gallery" class="py-5 bg-light">
  <div class="container">
    <h2 class="section-title text-center">Screenshots</h2>
    <p class="text-center mb-5">Visual overview of key modules and dashboards in the AMS system</p>
    <div class="row g-4">
      <div class="col-md-4">
        <img src="login.png" class="img-fluid rounded shadow" alt="Login Screen">
      </div>
      <div class="col-md-4">
        <img src="admindash.png" class="img-fluid rounded shadow" alt="Admin Dashboard">
      </div>
      <div class="col-md-4">
        <img src="complaints.png" class="img-fluid rounded shadow" alt="Complaint Submission">
      </div>
    </div>
  </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="py-5">
  <div class="container">
    <h2 class="section-title text-center">Plans</h2>
    <p class="text-center mb-5">Choose the AMS plan that fits your apartment's size and needs</p>
    <div class="row g-4">
      
      <!-- Basic Plan -->
      <div class="col-md-4">
        <div class="card border-0 shadow pricing-card">
          <div class="card-body text-center">
            <h5 class="card-title">Basic</h5>
            <h6 class="card-price">Free</h6>
            <p class="card-text">Ideal for testing or small buildings (up to 10 units).</p>
            <ul class="list-unstyled">
              <li>Dashboard Access</li>
              <li>Maintenance Requests</li>
              <li>Basic Billing</li>
            </ul>
            <a href="#contact" class="btn btn-outline-primary">Get Started</a>
          </div>
        </div>
      </div>
      
      <!-- Standard Plan -->
      <div class="col-md-4">
        <div class="card border-0 shadow pricing-card popular">
          <div class="popular-badge">Most Popular</div>
          <div class="card-body text-center">
            <h5 class="card-title">Standard</h5>
            <h6 class="card-price">PKR 1999/month</h6>
            <p class="card-text">For medium-sized apartment buildings.</p>
            <ul class="list-unstyled">
              <li>All Basic Features</li>
              <li>Email Notifications</li>
              <li>Tenant Portal</li>
              <li>Owner Reports</li>
            </ul>
            <a href="#contact" class="btn btn-primary">Subscribe</a>
          </div>
        </div>
      </div>
      
      <!-- Premium Plan -->
      <div class="col-md-4">
        <div class="card border-0 shadow pricing-card">
          <div class="card-body text-center">
            <h5 class="card-title">Premium</h5>
            <h6 class="card-price">PKR 3999/month</h6>
            <p class="card-text">Full features for large residential complexes.</p>
            <ul class="list-unstyled">
              <li>Everything in Standard</li>
              <li>SMS Alerts</li>
              <li>Advanced Analytics</li>
              <li>Custom Domain & Branding</li>
            </ul>
            <a href="#contact" class="btn btn-outline-primary">Subscribe</a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>


<!-- Testimonials Section -->
<section id="testimonials" class="py-5 bg-light">
  <div class="container">
    <h2 class="section-title text-center">What Clients Say</h2>
    <p class="text-center mb-5">Trusted by property managers and residents for a smoother living experience</p>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="testimonial-card">
          <p class="mb-2">"AMS has completely changed the way we manage our apartments. Everything is more organized and transparent now."</p>
          <h6 class="mb-0">— Zara N., Apartment Manager</h6>
        </div>
      </div>
      <div class="col-md-6">
        <div class="testimonial-card">
          <p class="mb-2">"Being able to log complaints and pay rent online has made life so much easier as a tenant."</p>
          <h6 class="mb-0">— Bilal A., Resident</h6>
        </div>
      </div>
       <div class="col-md-6">
        <div class="testimonial-card">
          <p class="mb-2">"The online complaint system helps me feel heard and valued as a tenant."</p>
          <h6 class="mb-0">— David K., Resident</h6>
        </div>
      </div>
       <div class="col-md-6">
        <div class="testimonial-card">
        <p class="mb-2">"Paying rent online is so convenient, no more worrying about checks or deadlines."</p>
        <h6 class="mb-0">— Emily R., Resident</h6>
        </div>
      </div>
       <div class="col-md-6">
        <div class="testimonial-card">
          <p class="mb-2">"I love how easy it is to book common areas through the online portal."</p>
          <h6 class="mb-0">— Jason M., Resident</h6>
        </div>
      </div>
       <div class="col-md-6">
        <div class="testimonial-card">
         <p class="mb-2">"The maintenance team is super responsive and always fixes issues quickly."</p>
         <h6 class="mb-0">— Sarah L., Resident</h6>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <h2 class="section-title">Contact Us</h2>
        <p class="mb-4">Reach out to us for any queries or support regarding the AMS platform</p>

        <form>
          <div class="row g-3">
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="name" placeholder="Your Name">
                <label for="name">Your Name</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="Your Email">
                <label for="email">Your Email</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="text" class="form-control" id="subject" placeholder="Subject">
                <label for="subject">Subject</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <textarea class="form-control" id="message" style="height: 150px" placeholder="Message"></textarea>
                <label for="message">Message</label>
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-6">
        <div class="bg-light p-4 h-100 rounded">
          <h4 class="mb-4">Get In Touch</h4>
          <div class="contact-info mb-4">            
            <p><i class="fas fa-phone"></i> +92 (300) 123-4567</p>
            <p><i class="fas fa-envelope"></i> contact@amsystem.pk</p>
            <p><i class="fab fa-linkedin-in"></i> linkedin.com/in/amsupport</p>
            <p><i class="fas fa-clock"></i> Support Hours: Mon–Sat 10AM–6PM</p>
          </div>

          <div class="map-container" style="height: 250px; background: #ddd; border-radius: 8px; overflow: hidden;">
            <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; background: #eee;">
              <img src="thnks.png" alt="AMS Support" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Newsletter Section -->
<section class="py-5 text-white" style="background-color: #a5825a;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h3 class="mb-0">Join Our Newsletter</h3>
        <p class="mb-0">Stay updated on special offers and community events</p>
      </div>
      <div class="col-lg-6">
        <form class="d-flex">
          <input type="email" class="form-control me-2" placeholder="Your email address">
          <button type="submit" class="btn btn-dark">Subscribe</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer>
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4">
        <h4 class="text-white mb-4">AMS</h4>
        <p>Modern software designed to streamline apartment living for residents, owners, and management staff alike.</p>
        <div class="social mt-4">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-md-6">
        <h4 class="text-white mb-4">Quick Links</h4>
        <div class="footer-links d-flex flex-column">
          <a href="#home" class="mb-2">Home</a>
          <a href="#about" class="mb-2">About</a>
          <a href="#amenities" class="mb-2">Amenities</a>
          <a href="#pricing" class="mb-2">Pricing</a>
          <a href="#contact">Contact</a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-4">Contact Info</h4>
        <p><i class="fas fa-phone me-2"></i> +92 (300) 123-4567</p>
        <p><i class="fas fa-envelope me-2"></i> contact@amsystem.pk</p>
        <p><i class="fab fa-linkedin-in me-2"></i> linkedin.com/in/amsupport</p>
      </div>

      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-4">Support Hours</h4>
        <p>Support available Mon–Sat 10AM–6PM</p>
        <p>Need urgent help? Drop us a message anytime.</p>
        <a href="#contact" class="btn btn-outline-light mt-2">Contact Support</a>
      </div>
    </div>

    <hr class="my-4 bg-secondary">

    <div class="row">
      <div class="col-md-6 text-center text-md-start">
        <p class="mb-0">&copy; 2025 Apartment Management System. All rights reserved.</p>
      </div>
      <div class="col-md-6 text-center text-md-end">
        <p class="mb-0">Crafted with <i class="fas fa-code text-info"></i> by Team AMS</p>
      </div>
    </div>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Navbar scroll effect
  window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });
  
  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;
      
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop - 70,
          behavior: 'smooth'
        });
      }
    });
  });
  
  // Active nav link highlighting
  const sections = document.querySelectorAll('section');
  const navLinks = document.querySelectorAll('.nav-link');
  
  window.addEventListener('scroll', function() {
    let current = '';
    
    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.clientHeight;
      
      if (pageYOffset >= sectionTop - 100) {
        current = section.getAttribute('id');
      }
    });
    
    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === `#${current}`) {
        link.classList.add('active');
      }
    });
  });
</script>
</body>
</html>