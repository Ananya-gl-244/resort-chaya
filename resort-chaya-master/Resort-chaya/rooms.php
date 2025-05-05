<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Rooms - Chaya Resorts</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Irish+Grover&family=Rye&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
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

.rooms-section {
    padding: 20px;
    text-align: center;
    padding-top:50px;
}



.room-category {
    margin-bottom: 40px;
}

.room-category h2 {
    font-size: 28px;
    margin-bottom: 20px;
    color: #333;
}

.room-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 20px;
}

.room-card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 300px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.room-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.room-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.room-card h3 {
    font-size: 20px;
    margin: 15px 0 10px;
    color: black;
}

.room-card .rate {
    font-size: 18px;
    color: #555;
    margin: 10px 0;
}

.room-card .view-details {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    margin-bottom: 20px;
    transition: background-color 0.3s ease;
}

.room-card .view-details:hover {
    background-color: #0056b3;
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
        <li><a href="index.php#section2">About</a></li>
        <li> <a href="#">Bookings</a></li>
        <li> <a href="#">Contact</a></li>
      </ul>
    </nav>
</div>
    <div class="rooms-section">
        

        <!-- Category 1: Standard Rooms -->
        <div class="room-category">
            <h2 style="font-family:'Rye', serif; font-size:2.2rem">Standard Rooms</h2>
            <div class="room-container">
                <div class="room-card">
                    <img src="SD1.jpg" alt="Standard Room 1">
                    <h3>Standard Rooms</h3>
                    <p class="rate">₹5,000 per night</p>
                    <button class="view-details" onclick="window.location.href='resort-room1.html'">View Details</button>
                </div>
                <div class="room-card">
                    <img src="SD2.jpg" alt="Standard Room 2">
                    <h3>Standard Rooms</h3>
                    <p class="rate">₹5,500 per night</p>
                    <button class="view-details" onclick="window.location.href='resort-room.html'">View Details</button>
                </div>
                <div class="room-card">
                    <img src="SD3.jpeg" alt="Standard Room 3">
                    <h3>Standard Rooms</h3>
                    <p class="rate">₹6,000 per night</p>
                    <button class="view-details" onclick="window.location.href='resort-room.html'">View Details</button>
                </div>
                <div class="room-card">
                    <img src="SD4.jpg" alt="Standard Room 4">
                    <h3>Standard Rooms</h3>
                    <p class="rate">₹6,500 per night</p>
                    <button class="view-details" onclick="window.location.href='resort-room.html'">View Details</button>
                </div>
            </div>
        </div>

        <!-- Category 2: Deluxe Rooms -->
        <div class="room-category">
            <h2 style="font-family:'Rye', serif; font-size:2.2rem">Deluxe Rooms</h2>
            <div class="room-container">
                <div class="room-card">
                    <img src="LU1.jpg" alt="Deluxe Room 1">
                    <h3>Deluxe Rooms</h3>
                    <p class="rate">₹8,000 per night</p>
                    <button class="view-details" onclick="window.location.href='resort-room.html'">View Details</button>
                </div>
                <div class="room-card">
                    <img src="LU2.jpg" alt="Deluxe Room 2">
                    <h3>Deluxe Rooms</h3>
                    <p class="rate">₹8,500 per night</p>
                    <button class="view-details" onclick="window.location.href='resort-room.html'">View Details</button>
                </div>
                <div class="room-card">
                    <img src="LU3.jpg" alt="Deluxe Room 3">
                    <h3>Deluxe Rooms</h3>
                    <p class="rate">₹9,000 per night</p>
                    <button class="view-details" onclick="window.location.href='resort-room.html'">View Details</button>
                </div>
                <div class="room-card">
                    <img src="LU4.jpg" alt="Deluxe Room 4">
                    <h3>Deluxe Rooms</h3>
                    <p class="rate">₹9,500 per night</p>
                    <button class="view-details" onclick="window.location.href='resort-room.html'">View Details</button>
                </div>
            </div>
        </div>

         <!-- Category 3: Beach view Rooms -->
         <div class="room-category">
            <h2 style="font-family:'Rye', serif; font-size:2.2rem">Beach View Rooms</h2>
            <div class="room-container">
                <div class="room-card">
                    <img src="BV1.jpg" alt="Standard Room 1">
                    <h3>Beach view Rooms</h3>
                    <p class="rate">₹5,000 per night</p>
                    <button class="view-details" onclick="window.location.href='resort-room.html'">View Details</button>
                </div>
                <div class="room-card">
                    <img src="BV2.jpg" alt="Standard Room 2">
                    <h3>Beach view Rooms</h3>
                    <p class="rate">₹5,500 per night</p>
                    <button class="view-details" onclick="window.location.href='resort-room.html'">View Details</button>
                </div>
                <div class="room-card">
                    <img src="BV3.jpg" alt="Standard Room 3">
                    <h3>Beach view Rooms</h3>
                    <p class="rate">₹6,000 per night</p>
                    <button class="view-details" onclick="window.location.href='resort-room.html'">View Details</button>
                </div>
                <div class="room-card">
                    <img src="BV4.jpg" alt="Standard Room 4">
                    <h3>Beach view Rooms</h3>
                    <p class="rate">₹6,500 per night</p>
                    <button class="view-details" onclick="window.location.href='resort-room.html'">View Details</button>
                </div>
            </div>
        </div>

    </div>
</body>
</html>