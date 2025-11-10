<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Will Botti - AI Engineer & Consultant</title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Roboto', sans-serif;
      line-height: 1.6;
      color: #2c3e50;
      background-color: #f8f9fa;
    }

    h1, h2, h3 {
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
    }

    /* Header */
    header {
      background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
      color: white;
      padding: 80px 5%;
      text-align: center;
    }

    header h1 {
      font-size: 3rem;
      margin-bottom: 10px;
    }

    header p {
      font-size: 1.3rem;
      opacity: 0.9;
    }

    .credential-badge {
      background: rgba(52, 152, 219, 0.2);
      border: 2px solid #3498db;
      display: inline-block;
      padding: 10px 20px;
      margin-top: 20px;
      border-radius: 8px;
      font-weight: 700;
      font-size: 1.1rem;
    }

    /* Container */
    .container {
      max-width: 1000px;
      margin: 60px auto;
      padding: 0 5%;
    }

    .section {
      background: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.08);
      margin-bottom: 40px;
    }

    .section h2 {
      color: #2c3e50;
      margin-bottom: 20px;
      font-size: 2rem;
      border-bottom: 3px solid #3498db;
      padding-bottom: 10px;
    }

    .section p {
      font-size: 1.1rem;
      line-height: 1.8;
      margin-bottom: 15px;
    }

    /* About Section with Photo */
    .about-content {
      display: grid;
      grid-template-columns: 200px 1fr;
      gap: 40px;
      align-items: start;
    }

    .about-photo {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      object-fit: cover;
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
      border: 4px solid #3498db;
    }

    .about-text {
      flex: 1;
    }

    .highlight {
      background: #3498db;
      color: white;
      padding: 3px 8px;
      border-radius: 4px;
      font-weight: 700;
    }

    .mit-badge {
      background: linear-gradient(135deg, #8B0000 0%, #A52A2A 100%);
      color: white;
      padding: 8px 16px;
      border-radius: 6px;
      font-weight: 700;
      display: inline-block;
      margin: 10px 0;
      font-size: 0.95rem;
    }

    /* CTA Button */
    .cta-btn {
      display: inline-block;
      background: #3498db;
      color: white;
      padding: 15px 35px;
      font-size: 1.1rem;
      font-weight: 700;
      text-decoration: none;
      border-radius: 8px;
      transition: all 0.3s ease;
      margin-top: 20px;
    }

    .cta-btn:hover {
      background: #2980b9;
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(52,152,219,0.4);
    }

    /* Services Grid */
    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      margin-top: 30px;
    }

    .service-card {
      background: #f8f9fa;
      padding: 30px;
      border-radius: 8px;
      border-left: 4px solid #3498db;
    }

    .service-card h3 {
      color: #2c3e50;
      margin-bottom: 15px;
    }

    .service-card p {
      font-size: 1rem;
      color: #666;
    }

    /* Simulator Integration Styles */
    .simulator-container {
        padding: 0; /* Remove padding for full iframe width */
        overflow: hidden; /* Hide iframe scrollbars if they appear */
    }

    .simulator-iframe {
        width: 100%;
        height: 600px; /* Set a fixed height for the 3D view */
        border: 4px solid #2c3e50;
        border-radius: 8px;
        box-shadow: 0 8px 30px rgba(0,0,0,0.25);
    }

    /* Footer */
    footer {
      background: #2c3e50;
      color: white;
      text-align: center;
      padding: 30px 5%;
      margin-top: 60px;
    }

    footer a {
      color: #3498db;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      header h1 {
        font-size: 2rem;
      }

      header p {
        font-size: 1.1rem;
      }

      .section {
        padding: 25px;
      }

      .about-content {
        grid-template-columns: 1fr;
        text-align: center;
      }

      .about-photo {
        margin: 0 auto 20px;
      }
      
      .simulator-iframe {
        height: 400px; /* Shorter height on mobile */
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>Will Botti</h1>
    <p>AI Engineer & Consultant</p>
    <div class="credential-badge">
      🎓 30+ Years Experience | Studied Under Marvin Minsky at MIT
    </div>
  </header>

  <div class="container">
    
    <div class="section">
      <h2>About</h2>
      <div class="about-content">
        <img src="https://levelblest.com/assets/img/headshot-mit.jpg" alt="Will Botti" class="about-photo">
        
        <div class="about-text">
          <div class="mit-badge">🏛️ MIT Alumnus</div>
          
          <p>I'm <strong>Will Botti</strong>, a highly skilled AI engineer with extensive technical and people skills.</p>
          
          <p>I completed my undergraduate thesis <em>"Computer-Aided Improvisation"</em> under <span class="highlight">Marvin Minsky</span>, one of the founding fathers of AI and co-founder of MIT's AI Lab.</p>
          
          <p>Today, I help small businesses and individuals leverage AI to streamline operations, automate customer support, and unlock new possibilities. My approach combines deep technical expertise with practical, real-world solutions.</p>
        </div>
      </div>
    </div>

   

    <div class="section">
      <h2>Services</h2>
      
      <div class="services-grid">
        <div class="service-card">
          <h3>💬 ChatBotti</h3>
          <p>Custom AI chatbots for small businesses. Streamline customer support with intelligent, branded assistants.</p>
        </div>

        <div class="service-card">
          <h3>🎓 AI Training</h3>
          <p>XtremeValue 3-hour sessions: Learn to build and maintain your own chatbot. Only $81!</p>
          <a href="https://buy.stripe.com/fZu28s4Xo0subav1NJ00000" class="cta-btn" target="_blank" style="margin-top: 15px; display: inline-block; font-size: 0.95rem; padding: 10px 20px;">Book Now - $81</a>
        </div>

        <div class="service-card">
          <h3>🔧 Custom Solutions</h3>
          <p>Tailored AI implementations for your unique business needs. Consulting and development services.</p>
        </div>
      </div>

      <a href="https://buy.stripe.com/fZu28s4Xo0subav1NJ00000" class="cta-btn" target="_blank">Book XtremeValue Session - $81</a>
    </div>

    <div class="section">
      <h2>ChatBotti Demo</h2>
      <p>Experience ChatBotti in action. See how AI can transform your customer interactions.</p>
      <a href="https://levelblest.com/chatbotti" class="cta-btn">Try ChatBotti Demo</a>
    </div>

 <!-- NEW SECTION FOR MINSKY SIMULATOR INTEGRATION -->
    <div class="section simulator-container">
      <h2>
        Demonstration: Society of Mind
      </h2>
      <p>
        Marvin Minsky's ideas were foundational. 
        Here is a 3D visualization showing how independent Agents connect via "K-lines" (connections) to solve complex problems.
      </p>

      <!-- The key to integration: using an Iframe -->
      <iframe 
        id="minsky-simulator"
        class="simulator-iframe"
        src="som_sim.html" 
        title="Minsky Society of Mind 3D Simulator"
        allowfullscreen
      ></iframe>
    </div>
    <!-- END NEW SECTION -->

    <div class="section">
      <h2>Other Projects</h2>
      <p>I'm also the founder of <strong>Level Blest</strong>, where I create products that solve real-world problems—from children's books to family fitness tools.</p>
      <a href="https://levelblest.com" class="cta-btn" style="background: #27ae60;">Visit Level Blest</a>
    </div>

  </div>

  <footer>
    <p><strong>Contact:</strong> hello@levelblest.com</p>
    <p>&copy; 2025 Will Botti. All rights reserved.</p>
    <p><a href="https://levelblest.com">Level Blest</a> | <a href="https://levelblest.com/games">Games</a></p>
  </footer>

</body>
</html>