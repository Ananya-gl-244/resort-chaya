<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resort-chaya Website</title>
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Irish+Grover&family=Rye&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<style>
  body {
    font-family: Arial, sans-serif;
    background-color:#fff8f0;
    color: #333;
}




/* Header styling */
.header {
    background-color: #fff; /* Dark background for the header */
    color: black;
    padding: 15px 0;
    position: fixed;
    width:100%;
    top:0;
    z-index: 1000;
    border-radius:30px;
}

/* Logo and title styling */
.logo {
    display: flex;
    align-items: center;
    
}

.logo img {
    margin-right: 10px;
    width:80px;
}

.title {
    font-size: 1rem;
    font-weight: 200;
    color: #0b0b0b;
    margin:0;
    font-family:"Rye", serif;
}

/* Navigation styling */
nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

nav ul li {
    display: inline-block;
}

nav ul li a {
    text-decoration: none;
    color:black;
    font-size: 16px;
    padding: 5px 10px;
    transition: background-color 0.3s, color 0.3s;
}

.header nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
    height: 25px;
}

.header nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}
.header .logo img {
    width: 60px;
    height: 60px;
}

.header ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
}

.header ul li {
    margin-right: 20px;
    display: flex; 
    align-items: center; 
}

nav ul li a:hover {
  border:none;
    background-color: black;
    color:white;
    padding: 8px;
    border-radius: 10px;
    transition: 0.3s ease;
}

/* Responsive design for smaller screens */
@media (max-width: 768px) {
    .header {
        flex-direction: column;
        align-items: flex-start;
    }

    nav ul {
        flex-direction: column;
        gap: 10px;
    }

    nav ul li {
        display: block;
    }
}

.image-section {
    position: relative;
    text-align: center;
    color: white;
}

.image-section img {
    width: 100%;
    height:auto;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
}

.overlay .inner {
    text-align: center;
}

.overlay h1 {
    font-size: 3em;
    margin-bottom: 10px;
    color: #fff;
}

.overlay p {
    font-size: 1.5em;
    margin-bottom: 20px;
}

.overlay button {
    background-color: #ff5733;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 10px;
    font-size: 16px;
}

.overlay button:hover {
    background-color:#c70039;
    transition: background-color 0.3s ease-in-out;
}

.container, .container1 {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px;
}

.container .part1, .container .part2, .container .part3, .container .part4,
.container1 .part1, .container1 .part2, .container1 .part3, .container1 .part4 {
  width: 22%;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  margin: 10px 0;
  padding: 15px;
  text-align: center;
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.container .part1:hover, .container .part2:hover, .container .part3:hover, .container .part4:hover,
.container1 .part1:hover, .container1 .part2:hover, .container1 .part3:hover, .container1 .part4:hover {
  transform: scale(1.05);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

.container img, .container1 img {
  width: 100%;
  height: auto;
  border-radius: 8px;
}

h4 {
  margin: 10px 0;
  font-size: 18px;
  color: #333;
}

button {
  background-color: #007BFF;
  color: white;
  border: none;
  padding: 10px 20px;
  margin-top: 10px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #0056b3;
}

.rooms {
  background-color:white; 
  color: black; 
  padding: 20px;
  text-align: center;
  font-size: 34px;
  font-weight: bold;
}

.about-us {
    padding: 50px 20px;
    background-color: #fff8f0;
}

.about-us-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    gap: 40px;
}

.about-us-image img {
    max-width: 100%;
    height: 750px;
    border-radius: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.about-us-description {
    flex: 1;
}

.about-us-description h1 {
    font-size: 8rem;
    color: #333;
    margin-bottom: 20px;
}

.about-us-description p {
    font-size: 1.1rem;
    color: #555;
    line-height: 1.6;
    margin-bottom: 20px;
}


.video-sectio {
  position: relative;
  width: 100%;
  height: 100vh;
  overflow: hidden;
}

#video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover; 
  z-index: -1; 
}


.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); 
  display: flex;
  justify-content: center;
  align-items: center;
  color: grey;
  z-index: 1; 
}


.inner {
  text-align: center;
  font-size: 36px; 
  font-weight: bold;
  text-transform: uppercase;
}
.gallery {
    padding: 50px 20px;
    text-align: center;
    background-color: #fff8f0;
}

.gallery h1 {
    font-size: 3rem;
    color: #333;
    margin-bottom: 30px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.gallery-item {
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.gallery-item:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    border-radius: 10px;
}
.testimonials {
    padding: 50px 20px;
    text-align: center;
    background-color: #fff8f0;
}

.testimonials h2 {
    font-size: 2.5rem;
    color: #333;
    margin-bottom: 40px;
}

.testimonials-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
}

.testimonial {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 300px;
    text-align: left;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.testimonial:hover {
    transform: translateY(-10px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

.testimonial-content p {
    font-size: 1rem;
    color: #555;
    line-height: 1.6;
    margin-bottom: 20px;
}

.testimonial-author {
    display: flex;
    align-items: center;
    gap: 10px;
}

.testimonial-author img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
}

.testimonial-author h4 {
    font-size: 1.1rem;
    color: #333;
    margin: 0;
}
.location {
    padding: 50px 20px;
    background-color: #fff8f0;
}

.location-container {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 40px;
    max-width: 1200px;
    margin: 0 auto;
}

.address {
    flex: 1;
    min-width: 300px;
}

.address h1 {
    font-size: 4rem;
    color: #333;
    margin-bottom: 20px;
}

.address p {
    font-size: 1.1rem;
    color: #555;
    line-height: 1.6;
    margin-bottom: 20px;
}

address {
    font-style: normal;
    font-size: 1rem;
    color: #555;
    line-height: 1.6;
}

address strong {
    color: #333;
    font-size: 1.2rem;
}

.map {
    flex: 1;
    min-width: 300px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
.footer {
    background-color: #2c3e50; /* Dark background */
    color: #fff; /* White text */
    padding: 40px 20px;
    font-family: Arial, sans-serif;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    gap: 20px;
}

.footer-section {
    flex: 1;
    min-width: 200px;
    margin-bottom: 20px;
}

.footer-section h3 {
    font-size: 1.5rem;
    margin-bottom: 15px;
    color: #e67e22; /* Accent color */
}

.footer-section ul {
    list-style: none;
    padding: 0;
}

.footer-section ul li {
    margin-bottom: 10px;
}

.footer-section ul li a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-section ul li a:hover {
    color: #e67e22; /* Accent color on hover */
}

.footer-section .social-links {
    display: flex;
    gap: 10px;
}

.footer-section .social-links a {
    color: #fff;
    font-size: 1.5rem;
    transition: color 0.3s ease;
}

.footer-section .social-links a:hover {
    color: #e67e22; /* Accent color on hover */
}

.footer-section form {
    display: flex;
    gap: 10px;
}

.footer-section input[type="email"] {
    padding: 10px;
    border: none;
    border-radius: 5px;
    width: 70%;
}

.footer-section button {
    padding: 10px 20px;
    background-color: #e67e22; /* Accent color */
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.footer-section button:hover {
    background-color: #d35400; /* Darker accent color on hover */
}

.footer-bottom {
    text-align: center;
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid #444;
}

.footer-bottom p {
    margin: 0;
    font-size: 0.9rem;
}
  </style>
</head>
<body>
<div class="header">
    <nav>
        <div class="logo">
            <a href="index.php"><img src="chaya.png" alt="" width="80px" height="80px"></a>
            <span class="title" >Chaya Resorts</span>
        </div>

        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#section2">About</a></li>
        <li><a href="rooms.php">Rooms</a></li>
        <li> <a href="#">Bookings</a></li>
        <li> <a href="#">Contact</a></li>
        <li><a href="signup.php">Login</a></li>
      </ul>
    </nav>
</div> 
<section class="image-section">
  <img src="nav.jpg" alt="">
<div class="overlay">
  <div class="inner">
    <p style="font-size:3.7rem; font-weight:bold; color:white; font-family:'Rye', serif;">Chaya Resorts</p>
    <p style="color:white;  font-size:1.7rem">10% Discount on all Rooms Available</p>
    <a><button  onclick="window.location.href='rooms.php'">View More</button></a>
  </div>
</div>
</section>

<section >
<div class="rooms">
    Rooms Available
</div>
<div class="container" data-aos="fade-up">
  
  <div class="part1">
    <img src="a.jpg">
    <h4>Standard rooms<br> ₹5,000 per night</h4>
    <button type="submit">view More</button>
  </div>
  <div class="part2">
    <img src="b.jpg">
    <h4>luxury rooms<br> ₹8,000 per night</h4>
    <button type="submit">view More</button>
  </div>
  <div class="part3">
    <img src="c.jpg">
    <h4>luxury rooms<br>₹8,800 per night</h4>
    <button type="submit">view More</button>
  </div>
  <div class="part4">
    <img src="LU2.jpg">
    <h4>luxury rooms<br> ₹10,000 per night</h4>
    <button type="submit">view More</button>
  </div>
</div>
<div class="container1">
  <div class="part1">
    <img src="e.jpg">
    <h4>Standard rooms <br>₹4,090 per night</h4>
    <button type="submit">view More</button>
  </div>
  <div class="part2">
    <img src="f.jpg">
    <h4>luxury rooms<br>₹7,900 per night </h4>
    <button type="submit">view More</button>
  </div>
  <div class="part3">
    <img src="g.jpg">
    <h4> Standard rooms<br> ₹5,000 per night</h4>
    <button type="submit">view More</button>
  </div>
  <div class="part4">
    <img src="BV2.jpg">
    <h4>Beach View rooms<br> ₹13,500 per night</h4>
    <button type="submit">view More</button>
  </div>
</div>
</section>
<section class="about-us" id="aboutus">
      <div class="about-us-container">
          <div class="about-us-image" data-aos="fade-right">
              <img src="tree.jpg" alt="Delicious Cake">
          </div>
          <div class="about-us-description" data-aos="fade-left">
              <h1 >About Us</h1>
              <p>
              Chaya Resort Hotel popularly known as McCarthy Beach is located in the University town of Abraka in Delta State. 
                <br>
                It is famous for its Natural white sandy Beach and serene environment.
                <br>
                Set out in large expanse of land of over 65 hectares the resort boasts of over 90 exquisitely appointed and tastefully furnished Rooms/Suites. The expansive gardens are breathtaking and the sereneness of the complex is without doubt, alluring.
                The beach nestling on the banks of the fast flowing, crystal clear River Ethiope is inviting and relaxing.
                <br>
                The Resort situates along the Abraka/Benin Highway and is easily accessible by road and by air. The Osubi Airport near Warri is only 30minutes drive to the Resort. 
              <p>
              Several Bars are available and serve assorted alcoholic and non-alcoholic beverages.
                <br>
                The Restaurant offers assorted National and Continental cuisines and also mouth watering snacks.
                <br>

                It is a highly recommended get-away and popular picnic/ tourist destination. It also hosts conferences, seminars and other training activities.
              </p>
          </div>
      </div>
  </section>  
<section class="gallery">
    <h1>Gallery</h1>
    <div class="gallery-grid" data-aos="fade-up">
        <div class="gallery-item">
            <img src="res1.jpg" alt="Cake 1">
        </div>
        <div class="gallery-item">
            <img src="res2.jpg" alt="Cake 2">
        </div>
        <div class="gallery-item">
            <img src="res3.jpg" alt="Cake 3">
        </div>
        <div class="gallery-item">
            <img src="res4.jpg" alt="Cake 4">
        </div>
        <div class="gallery-item">
            <img src="res5.jpg" alt="Cake 5">
        </div>
        <div class="gallery-item">
            <img src="res6.jpg" alt="Cake 6">
        </div>
        <div class="gallery-item">
          <img src="res7.jpg" alt="Cake 6">
      </div>
      <div class="gallery-item">
        <img src="res8.jpg" alt="Cake 6">
      </div>
    </div>
</section>
<section class="testimonials" >
  <h2>What Our Customers Say</h2>
  <div class="testimonials-container" data-aos="fade-up">
    
      <div class="testimonial">
          <div class="testimonial-content">
              <p>
              "I’ve traveled to many resorts, but Chaya Resorts stands out for its exceptional service and attention to detail. The rooms are beautifully designed, and the private beach was the highlight of our trip.<br> The staff was friendly and always ready to help. Truly a 5-star experience!" 
              </p>
          </div>
          <div class="testimonial-author">
              <img src="test1.jpg" alt="Customer 1">
              <h4>Rohit Khandelwal<br>Bhopal</h4>
          </div>
      </div>

      
      <div class="testimonial">
          <div class="testimonial-content">
              <p>
              "Chaya Resorts is a hidden gem! The peaceful atmosphere and beautiful surroundings made our vacation unforgettable. The pool area was perfect for relaxing, and the staff went above and beyond to make sure we had everything we needed. Highly recommended for evryone"
              </p>
          </div>
          <div class="testimonial-author">
              <img src="test2.jpg" alt="Customer 2">
              <h4>Jeevan Kumar<br>Bengaluru</h4>
          </div>
      </div>

    
      <div class="testimonial">
          <div class="testimonial-content">
              <p>
              "Our stay at Chaya Resorts was absolutely magical! From the moment we arrived, the staff made us feel like royalty.<br> The rooms were spacious, clean, and had a stunning view of the mountains. The food was delicious, and the spa services were top-notch. We can't wait to come back!"
              </p>
          </div>
          <div class="testimonial-author">
              <img src="test3.jpg" alt="Customer 3">
              <h4>Shanaya Kapoor<br>tiruvananthapuram</h4>
          </div>
      </div>

  </div>
</section>
   <section class="video-sectio">
    <video autoplay muted id="video">
      <source src="c.mp4" type="video/mp4">
</video>
  <div class="overlay">
    <div class="inner">
      <h1>chaya resorts pub</h1>
    </section>
    <script>
        AOS.init({
            duration: 1000, 
            once: true, 
        });
    </script>
  <section class="location">
  <div class="location-container">
      <div class="address" data-aos="fade-right">
          <h1>Our Location</h1>
          <p>
              Visit us at our resort to have an exclusive experience of beach side and sunset view!
          </p>
          <address>
              <strong>Chaya resorts</strong><br>
              Shantanu Layout<br>
              1st Cross, Janta Nagar 8th Phase<br>
              Murudeshwar, Karnataka<br>
              560108
          </address>
      </div>
      <div class="map" data-aos="fade-left">
          <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4058.5363452362876!2d73.07051727550807!3d18.95110898222785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7dd51323c57bf%3A0xebc4130b0aeb7784!2sCHAYA%20Resorts!5e1!3m2!1sen!2sin!4v1741273473580!5m2!1sen!2sin"
              width="100%"
              height="400"
              style="border:0;"
              allowfullscreen=""
              loading="lazy">
          </iframe>
      </div>
  </div>
</section>
  <footer class="footer">
    <div class="footer-container">
        <!-- Social Media Links -->
        <div class="footer-section">
            <h3>Follow Us</h3>
            <div class="social-links">
                <a href="https://facebook.com" target="_blank"><i class="bx bxl-facebook"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="bx bxl-twitter"></i></a>
                <a href="https://instagram.com" target="_blank"><i class="bx bxl-instagram"></i></a>
                
            </div>
        </div>

        <!-- Quick Links -->
        <div class="footer-section">
            <h3>Quick Links</h3>
            <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#section2">About</a></li>
            <li><a href="#">Amenities</a></li>
            <li> <a href="#">Bookings</a></li>
            <li> <a href="#">Contact</a></li>
          </ul>
        </div>

        <!-- Contact Information -->
        <div class="footer-section">
            <h3>Contact Us</h3>
            <ul>
                <li><i class="bx bx-map"></i> Shantanu Layout<br>
              1st Cross, Janta Nagar 8th Phase<br>
              Murudeshwar, Karnataka<br>
              560108</li>
                <li><i class="bx bx-phone"></i> +91-9702062655</li>
                <li><i class="bx bx-envelope"></i> chayares740@gmail.com</li>
            </ul>
        </div>

       
        
    </div>

    <!-- Copyright Notice -->
    <div class="footer-bottom">
        <p>&copy; 2025 Chaya Resorts. All Rights Reserved.</p>
    </div>
</footer>
</body>
</html>

