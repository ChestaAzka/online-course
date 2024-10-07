<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   SatuRuang
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #FFFFFF;
            color: #000000;
        }
        .navbar {
            background-color: #FFFFFF;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .navbar .logo {
            display: flex;
            align-items: center;
        }
        .navbar .logo img {
            height: 40px;
            margin-right: 10px;
            border-radius: 50%;
        }
        .navbar .logo span {
            color: #0288D1;
            font-size: 20px;
            font-weight: 700;
        }
        .navbar .menu {
            display: flex;
            align-items: center;
        }
        .navbar .menu a {
            color: #000000;
            margin: 0 15px;
            text-decoration: none;
            font-weight: 600;
        }
        .navbar .menu .dropdown {
            position: relative;
        }
        .navbar .menu .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .navbar .menu .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .navbar .menu .dropdown:hover .dropdown-content {
            display: block;
        }
        .navbar .menu .icons {
            display: flex;
            align-items: center;
        }
        .navbar .menu .icons i {
            color: #000000;
            margin: 0 10px;
            font-size: 20px;
        }
        .navbar .menu .profile {
            display: flex;
            align-items: center;
        }
        .navbar .menu .profile img {
            height: 40px;
            border-radius: 50%;
            margin-left: 10px;
        }
        .header {
            padding: 40px 20px;
            text-align: center;
            background: #F5F5F5;
            color: #000000;
        }
        .header h1 {
            font-size: 36px;
            font-weight: 700;
            margin: 0;
        }
        .header p {
            font-size: 24px;
            font-weight: 600;
            margin: 10px 0 0;
        }
        .courses {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 20px;
        }
        .course-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 300px;
            margin: 20px;
            padding: 20px;
            text-align: left;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .course-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        .course-card img {
            width: 100%;
            border-radius: 10px;
        }
        .course-card h3 {
            font-size: 18px;
            font-weight: 700;
            color: #000000;
            margin: 10px 0;
        }
        .course-card p {
            font-size: 16px;
            color: #000000;
            margin: 5px 0;
        }
        .course-card .price {
            font-size: 16px;
            color: #000000;
            font-weight: 600;
        }
        .course-card .price .discount {
            text-decoration: line-through;
            color: red;
        }
        .course-card .rating {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        .course-card .rating i {
            color: #FFD700;
            margin-right: 5px;
        }
        .course-card .rating span {
            font-size: 14px;
            color: #000000;
        }
        .testimonials {
            background-color: #F5F5F5;
            color: #000000;
            padding: 40px 20px;
            text-align: center;
        }
        .testimonials h2 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .testimonials .testimonial-card {
            background-color: white;
            color: #000000;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 300px;
            margin: 20px auto;
            padding: 20px;
            text-align: left;
        }
        .testimonials .testimonial-card img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .testimonials .testimonial-card .name {
            font-size: 16px;
            font-weight: 700;
        }
        .testimonials .testimonial-card .text {
            font-size: 14px;
            margin-top: 10px;
        }
        .cta-section {
            background-color: #F5F5F5;
            color: #000000;
            padding: 40px 20px;
            text-align: center;
        }
        .cta-section h2 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .cta-section p {
            font-size: 16px;
            margin-bottom: 20px;
        }
        .cta-section .btn {
            background-color: #0288D1;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
        }
        .whatsapp-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
        }
        .footer {
            background-color: #FFFFFF;
            color: #000000;
            padding: 20px;
            text-align: center;
            box-shadow: 0 -2px 4px rgba(0,0,0,0.1);
        }
        .footer p {
            margin: 5px 0;
        }
        .footer .social-icons {
            margin-top: 10px;
        }
        .footer .social-icons i {
            color: #000000;
            margin: 0 10px;
            font-size: 20px;
            cursor: pointer;
        }
  </style>
 </head>
 <body>
  <div class="navbar">
   <div class="logo">
    <img alt="SatuRuang Logo" height="40" src="https://via.placeholder.com/40/0288D1/FFFFFF?text=SR" width="40"/>
    <span>
     SatuRuang
    </span>
   </div>
   <div class="menu">
    <a href="#">
     Flash Sale
    </a>
    <a href="#">
     Patungan
    </a>
    <div class="dropdown">
     <a href="#">
      Kelas <i class="fas fa-chevron-down"></i>
     </a>
     <div class="dropdown-content">
      <a href="#">
       Kelas 1
      </a>
      <a href="#">
       Kelas 2
      </a>
     </div>
    </div>
    <a href="#">
     Alur Belajar
    </a>
    <a href="#">
     Tips Terbaru
    </a>
    <div class="icons">
     <i class="fas fa-search">
     </i>
     <i class="fas fa-bell">
     </i>
    </div>
    <div class="profile">
     <span>
      Halo, Chesta
     </span>
     <img alt="Profile Picture" height="40" src="https://via.placeholder.com/40" width="40"/>
    </div>
   </div>
  </div>
  <div class="header">
   <h1>
    Our Recommended
   </h1>
   <p>
    Pelajari Skills Baru Sesuai Dengan Minatmu
   </p>
  </div>
  <div class="courses">
   <div class="course-card">
    <img alt="Course Image 1" height="200" src="https://via.placeholder.com/300x200" width="300"/>
    <h3>
     Learn Laravel 11: Bikin Website Booking Luxury Hotel
    </h3>
    <p>
     Rp 550,000
    </p>
    <div class="rating">
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <span>
      (237)
     </span>
    </div>
   </div>
   <div class="course-card">
    <img alt="Course Image 2" height="200" src="https://via.placeholder.com/300x200" width="300"/>
    <h3>
     Bangun Web Booking Kos Modern dengan Laravel 11 dan Filament
    </h3>
    <p class="price">
     <span class="discount">
      Rp 690,000
     </span>
     Rp 219,000
    </p>
    <div class="rating">
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <span>
      (16)
     </span>
    </div>
   </div>
   <div class="course-card">
    <img alt="Course Image 3" height="200" src="https://via.placeholder.com/300x200" width="300"/>
    <h3>
     Data Scientist for Beginners: Linear Regression Analysis
    </h3>
    <p>
     Rp 390,000
    </p>
    <div class="rating">
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <span>
      (163)
     </span>
    </div>
   </div>
   <div class="course-card">
    <img alt="Course Image 4" height="200" src="https://via.placeholder.com/300x200" width="300"/>
    <h3>
     Data Analysis: Analisa Laporan Penjualan with Spreadsheet
    </h3>
    <p>
     Rp 260,000
    </p>
    <div class="rating">
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <span>
      (38)
     </span>
    </div>
   </div>
  </div>
  <div class="testimonials">
   <h2>
    What Our Students Say
   </h2>
   <div class="testimonial-card">
    <div class="profile">
     <img alt="Student 1" src="https://via.placeholder.com/50"/>
     <span class="name">
      John Doe
     </span>
    </div>
    <p class="text">
     "The courses offered by SatuRuang are top-notch. The instructors are very knowledgeable and the content is very relevant to the industry."
    </p>
   </div>
   <div class="testimonial-card">
    <div class="profile">
     <img alt="Student 2" src="https://via.placeholder.com/50"/>
     <span class="name">
      Jane Smith
     </span>
    </div>
    <p class="text">
     "I have learned so much from the courses here. The practical approach and real-world examples make it easy to understand and apply the concepts."
    </p>
   </div>
  </div>
  <div class="cta-section">
   <h2>
    Ready to Upgrade Your Skills?
   </h2>
   <p>
    Join our community of learners and start your journey today!
   </p>
   <button class="btn">
    Get Started
   </button>
  </div>
  <button class="whatsapp-btn">
   Konsultasi Kelas
  </button>
  <div class="footer">
   <p>
    &copy; 2023 SatuRuang. All rights reserved.
   </p>
   <div class="social-icons">
    <i class="fab fa-facebook-f">
    </i>
    <i class="fab fa-twitter">
    </i>
    <i class="fab fa-instagram">
    </i>
    <i class="fab fa-linkedin-in">
    </i>
   </div>
  </div>
 </body>
</html>