<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karya Space</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <script src="scripts/script.js" defer></script>
</head>
<body>


<!-- Navigation -->
<header class="navbar">
  <div class="logo"><img src="resources/images/logo.svg" width="50" height="50"/><span class="title-name">Karya Space</span></div>
  <nav class="nav-links">
    <a class="menu-btn" href="#">Home</a>
    <a class="menu-btn" href="#">What is Karya Space</a>
    <a class="menu-btn" href="#">Plans</a>
    <a class="menu-btn" href="#">Why Karya</a>
    <a class="menu-btn" href="#">Reviews</a>
    <a class="menu-btn" href="#">Contact Us</a>
  </nav>
  <div></div>
  <button class="mobile-menu-toggle">☰</button>
</header>

<!-- Hero Section -->
<section class="hero">
  <div class="hero-content">
    <h1>Find Your Space to Thrive.</h1>
    <p>Beautiful, flexible workspaces designed for your best work. Across India.</p>

    <div class="hero-cta">
      <select>
        <option selected disabled>Choose your city...</option>
        <option>Bangalore</option>
        <option>Mumbai</option>
      </select>
      <button>Find Workspace</button>
    </div>
  </div>
</section>
<section class="rating-section">
  <p>
    <strong>One of India's most reviewed and loved coworking spaces</strong><br>
    <span class="stars">⭐⭐⭐⭐⭐</span>
    <span class="score">4.9/5.0</span> on Google Reviews across all our locations.
  </p>
</section>
<section class="features-section">
  <div class="features-heading">
    <h2>More Than Just an Office</h2>
    <p>
      At Karya Space, we provide more than just four walls. We offer a community,
      a network, and an environment engineered for productivity and growth.
    </p>
  </div>

  <div class="features-grid">
    <div class="feature">
      <!-- <div class="icon green">⚡</div> -->
      <div class="icon green"><svg class="w-8 h-8 text-dark-gray" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg></div>
      <h3>Blazing-Fast Internet</h3>
      <p>Uninterrupted, enterprise-grade Wi-Fi to keep you connected.</p>
    </div>

    <div class="feature">
      <!-- <div class="icon blue">👥</div> -->
      <div class="icon blue"><svg class="w-8 h-8 text-dark-gray" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg></div>
      <h3>Vibrant Community</h3>
      <p>Networking events, workshops, and a collaborative atmosphere.</p>
    </div>

    <div class="feature">
      <!-- <div class="icon orange">📧</div> -->
      <div class="icon orange"><svg class="w-8 h-8 text-dark-gray" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg></div>
      <h3>Flexible Memberships</h3>
      <p>From a single desk to a whole floor, we scale with your business.</p>
    </div>

    <div class="feature">
      <!-- <div class="icon yellow">🕒</div> -->
      <div class="icon yellow"><svg class="w-8 h-8 text-dark-gray" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
      <h3>24/7 Access</h3>
      <p>Work on your schedule, not ours. Secure access around the clock.</p>
    </div>
  </div>
</section>
<section class="plans-section">
  <h2>Plans Designed for You</h2>
  <p>
    Whether you're a solopreneur, a growing startup, or an established enterprise,
    we have a plan that fits your needs.
  </p>

  <div class="plans-grid">
    <!-- Plan 1 -->
    <div class="plan-card">
      <h3 class="hot">Hot Desk</h3>
      <p>Access to any open seat in our common areas. Grab a coffee, pick a spot, and get to work.</p>
      <ul>
        <li> 24/7 Building Access</li>
        <li> Access to Common Areas</li>
        <li> Community Events</li>
      </ul>
      <button>Explore Hot Desks</button>
    </div>

    <!-- Plan 2 -->
    <div class="plan-card highlighted">
      <span class="tag">MOST POPULAR</span>
      <h3 class="dedicated">Dedicated Desk</h3>
      <p>Your own personal desk in a shared office. The perfect mix of personal space and community.</p>
      <ul>
        <li> Your Own Desk & Chair</li>
        <li> Lockable Storage</li>
        <li> Meeting Room Credits</li>
      </ul>
      <button>Get Dedicated Desk</button>
    </div>

    <!-- Plan 3 -->
    <div class="plan-card">
      <h3 class="private">Private Office</h3>
      <p>A fully-enclosed, move-in ready office for teams of all sizes. Customize it to fit your brand.</p>
      <ul>
        <li> For Teams of 2 - 100+</li>
        <li> Company Signage</li>
        <li> Privacy and Security</li>
      </ul>
      <button>Get a Custom Quote</button>
    </div>
  </div>
</section>
<section class="workspace-benefits">
  <div class="container">
    <div class="image-column">
      <img src="resources/images/side1.jpg" alt="Workspace Image" />
    </div>
    <div class="text-column">
      <h2>Workspace When You Need It, Where You Need It.</h2>
      <p>
        With a growing network of spaces in prime locations across India, Karya Space offers a consistent, premium experience wherever your work takes you.
      </p>
      <ul class="benefit-list">
        <li>
          ✅ <strong>Pan-India Network</strong><br>
          A single membership gives you access to our expanding portfolio of locations.
        </li>
        <li>
          ✅ <strong>Hassle-Free Experience</strong><br>
          All-inclusive pricing covers everything from utilities to cleaning. No hidden fees.
        </li>
        <li>
          ✅ <strong>Built for Business</strong><br>
          Professional meeting rooms, private phone booths, and premium business amenities.
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="testimonials">
  <div class="container">
    <h2>What Our Community Says</h2>
    <div class="testimonial-cards">

      <!-- Card 1 -->
      <div class="card">
        <div class="user-info">
          <div class="avatar" style="background-color: #FFD1C3;">PS</div>
          <div>
            <strong>Priya S.</strong><br>
            <span>Founder of TechNova</span>
          </div>
        </div>
        <div class="stars">★★★★★</div>
        <p>"The best coworking space in Bangalore! The community managers are incredibly helpful, and the ambiance is perfect for focused work. A game-changer for our startup."</p>
      </div>

      <!-- Card 2 -->
      <div class="card">
        <div class="user-info">
          <div class="avatar" style="background-color: #C9EBF6;">AM</div>
          <div>
            <strong>Arjun M.</strong><br>
            <span>Head of Operations, FinSolutions</span>
          </div>
        </div>
        <div class="stars">★★★★★</div>
        <p>"We chose Karya Space in Chennai for its prime location and flexible terms. The amenities are top-notch, and the networking opportunities have been invaluable."</p>
      </div>

      <!-- Card 3 -->
      <div class="card">
        <div class="user-info">
          <div class="avatar" style="background-color: #D6F5D6;">RK</div>
          <div>
            <strong>Rohan K.</strong><br>
            <span>Freelance Designer</span>
          </div>
        </div>
        <div class="stars">★★★★★</div>
        <p>"As a freelancer, the Hot Desk plan is perfect. The internet is reliable, the coffee is great, and I've met some amazing people. Highly recommend their Hyderabad space."</p>
      </div>

    </div>
  </div>
</section>
<section class="media-mentions">
  <div class="container">
    <h4>As Featured In</h4>
    <div class="media-logos">
      <div class="media-logo"><img class="et" src="resources/images/et.png"></div>
      <div class="media-logo"><img class="ys" src="resources/images/ys.svg"></div>
      <div class="media-logo"><img class="lm" src="resources/images/lm.svg"></div>
      <div class="media-logo"><img class="bl" src="resources/images/bl.svg"></div>
    </div>
  </div>
</section>
<section class="partner-section">
    <!-- Left Content -->
     <div class="partner-heading">
        <div class="partner-content">
            <h2>Become a Karya Location Partner</h2>
            <p>Do you have underutilized real estate in India? Partner with us to transform your property
                into a thriving, revenue-generating workspace. We handle the operations, you enjoy the returns.</p>
        </div>    
     </div>
    <div class="partner-left">
      <h4>Why Partner with Karya Space?</h4>
      <ul>
        <li><strong>Maximize Your Revenue</strong> <br/> Turn empty spaces into a consistent income stream with our proven business model.</li>
        <li><strong>Hassle-Free Operations</strong> <br/> We manage everything from marketing and sales to day-to-day operations and community management.</li>
        <li><strong>Join a Trusted Brand</strong> <br/> Leverage our brand recognition and Pan-India network to attract and retain members.</li>
      </ul>

      <h4>We're looking for properties like:</h4>
      <ul>
        <li>Extra space/seats in your office</li>
        <li>Furnished & unfurnished office spaces</li>
        <li>Open floors or entire buildings</li>
        <li>Cafés or restaurants with unused space</li>
      </ul>
    </div>

    <!-- Right Form -->
    <div class="partner-form-box">
      <h3>Let's Get in Touch</h3>
      <p>Fill out the form and our partnership team will contact you.</p>
      <form>
        <input type="text" placeholder="Full Name" required>
        <input type="email" placeholder="Email Address" required>
        <input type="tel" placeholder="Phone Number" required>
        <textarea placeholder="Tell us about your property..." required></textarea>
        <button type="submit" class="submit-btn">Submit Inquiry</button>
      </form>
    </div>
  </section>
<footer class="footer">
  <div class="footer-container">
    <!-- Logo Column -->
    <div class="footer-logo">
        <div class="flogo">
            <img src="resources/images/logo.svg" alt="Karya Space Logo" width="25" height="25"/>
            <span>Karya Space</span>
      </div>
      <p>Work. Community. Growth.</p>
    </div>

    <!-- Solutions -->
    <div>
      <h3>Solutions</h3>
      <ul>
        <li><a href="#">Private Offices</a></li>
        <li><a href="#">Dedicated Desks</a></li>
        <li><a href="#">Hot Desks</a></li>
        <li><a href="#">Meeting Rooms</a></li>
      </ul>
    </div>

    <!-- Company -->
    <div>
      <h3>Company</h3>
      <ul>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Partnerships</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>

    <!-- Locations -->
    <div>
      <h3>Locations</h3>
      <ul>
        <li><a href="#">Chennai</a></li>
        <li><a href="#">Bangalore</a></li>
        <li><a href="#">Hyderabad</a></li>
        <li><a href="#">New Delhi / NCR</a></li>
        <li><a href="#">View All</a></li>
      </ul>
    </div>
  </div>

  <div class="footer-bottom">
    © 2025 Karya Space. All Rights Reserved.
  </div>
</footer>
</body>
</html>
