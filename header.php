<!DOCTYPE html>
<html>
<head>
    <title>Basic Real Estate Portal</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <style>
    /* Target the header element */
    .site-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.site-navigation ul {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}

header img {
  height: 50px;
}

.site-navigation li {
  margin-right: 1rem;
}

.site-navigation a {
  color: #333;
  text-decoration: none;
  padding: 0.5rem;
  border-radius: 4px;
}

.site-navigation a:hover {
  background-color: #333;
  color: #fff;
}

footer {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
}

footer a {
  color: #fff;
}

footer a:hover {
  color: #ccc;
}

body {
  background-image: url(img/background.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}

section {
  padding: 50px;
}
#home h1 {
  font-size: 3rem;
  margin-top: 0;
  margin-bottom: 20px;
}

#about-us {
  background-image: url('path/to/background-image.jpg');
  background-size: cover;
  background-position: center;
  color: #fff;
  padding: 100px 0;
  text-align: center;
  margin-top: 50px;
}

#about-us h2 {
  font-size: 2.5rem;
  margin-top: 0;
}
.about-us-section {
  margin-top: 50px; 
}
nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
  text-align: center;
}
nav a {
  display: block;
  color: #333;
  font-weight: bold;
  text-decoration: none;
  padding: 5px;
}


    </style>
 
</head>
<body>
    <!-- Header container -->
    <header> 
        <div class="logo">
    <img src="img/logo.png" alt="Logo">
  </div>
  
   <nav class="site-navigation">
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#about-us">About Us</a></li>
      <li><a href="/contact">Contact</a></li>
      <li><a href="admin_login.php">Admin Login</a></li>
      <li><a href="add_broker.php">Add Broker</a></li>
      <li><a href="add_property.php">Add Property</a></li>
      <li><a href="view_brokers.php">View All Brokers</a></li>
      <li><a href="view_properties.php">View All Properties</a></li>
      <li><a href="broker_login.php">Broker Login</a></li>
    </ul>
  </nav>
    </header>

    
<main>
  <section id="home">
    <h1>Welcome to our Real Estate Portal</h1> 
    </section>
    
    <section id="about-us" class="about-us-section">
    <h2>About Us</h2>
    <p>Our team is dedicated to providing you with the most comprehensive and up-to-date listings in the market. With years of experience in the industry, we understand that buying, selling or renting a property can be a daunting task. Our goal is to make the process as smooth and stress-free as possible.

Our platform offers a wide range of properties to suit your needs and budget. Whether you're looking for a cozy apartment, a spacious house or a commercial property, we've got you covered. We work closely with trusted real estate agents to ensure that all our listings are accurate and reliable.

At our portal, we believe in transparency and integrity. We strive to provide you with all the information you need to make an informed decision. Our team is always available to answer any questions you may have and guide you through the process.

Thank you for choosing us as your trusted partner in the real estate market. We look forward to helping you find your dream property.</p>
  </section>
    


  
</main>

    <footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h3>Follow Us</h3>
        <ul class="social-media">
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
      <div class="col-sm-6">
        <h3>Contact Us</h3>
        <ul class="contact-info">
          <li><i class="fas fa-map-marker-alt"></i> 123 Main Street, Anytown, USA</li>
          <li><i class="fas fa-phone"></i> (555) 555-5555</li>
          <li><i class="fas fa-envelope"></i> info@example.com</li>
        </ul>
      </div>
    </div>
  </div>
</footer>


   
</body>
</html>
