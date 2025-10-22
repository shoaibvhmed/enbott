<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title  style="background-color:DodgerBlue;">Our Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #002366;
        }
        .service-section {
            background: white;
            padding: 30px;
            border-radius: 10px;
            border-left: 5px solid #002366;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .service-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .service-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #002366;
        }
        .service-content {
            font-size: 1.1rem;
            color: #333;
        }
        .service-img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .footer {
            background: #070b3b;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 30px;
        }
        .footer a {
            color: #ffc107;
            text-decoration: none;
            font-weight: bold;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="side-nav-responsive">
                <div class="container-max">
                    <div class="dot-menu">
                        <div class="circle-inner">
                            <div class="in-circle circle-one"></div>
                            <div class="in-circle circle-two"></div>
                            <div class="in-circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="side-nav-inner">
                            <div class="side-nav justify-content-center align-items-center">
                                <div class="side-nav-item nav-side">
                                    <div class="search-box">
                                        <i class='bx bx-search'></i>
                                    </div>
                                    <div class="get-btn">
                                        <a href="contact.html" class="default-btn btn-bg-two border-radius-50">Get A Quote <i class='bx bx-chevron-right'></i></a>
                                    </div>	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Search Overlay -->
        <div class="search-overlay">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="search-layer"></div>
                    <div class="search-layer"></div>
                    <div class="search-layer"></div>
                    
                    <div class="search-close">
                        <span class="search-close-line"></span>
                        <span class="search-close-line"></span>
                    </div>

                    <div class="search-form">
                        <form>
                            <input type="text" class="input-search" placeholder="Search here...">
                            <button type="submit"><i class='bx bx-search'></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Overlay -->

        <!-- Inner Banner -->
        <div class="inner-banner">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Our Services</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevrons-right'></i>
                        </li>
                        <li> Services</li>
                    </ul>
                </div>
            </div>
            <div class="inner-shape">
                <img src="assets/images/shape/inner-shape.png" alt="Images">
            </div>
        </div>
        <!-- Inner Banner End -->

    <div class="container my-5">
       
        
        <!-- Service Sections with Image on Left and Content on Right -->
        <div class="row service-section mb-4">
            <div class="col-md-4">
                <img src="assets/images/services/training1.jpg" alt="Training Program" class="service-img">
            </div>
            <div class="col-md-8">
                <h3 class="service-title">Technical Competency Training Program</h3>
                <p class="service-content">Industry-driven training to enhance technical skills and domain expertise.</p>
                <ul class="service-content">
                    <li><b>Competitive Programming</b>  Structured programming courses from foundation to advanced levels.</li>
                    <li><b>BFSI Essentials and FinTech</b>  Specialized training in banking, finance, and financial technology.</li>
                </ul>
            </div>
        </div>

        <div class="row service-section mb-4">
            <div class="col-md-4">
                <img src="assets/images/services/p1.jpg" alt="Center of Excellence" class="service-img">
            </div>
            <div class="col-md-8">
                <h3 class="service-title">Center of Excellence Program</h3>
                <p class="service-content">Establishing dedicated hubs for skill development in emerging technologies.</p>
                <ul class="service-content">
                    <li><b>Cyber Security Center</b> Ethical hacking and cybersecurity training.</li>
                    <li><b>Gen AI Center</b>  Advanced AI research and training.</li>
                    <li><b>Blockchain Center</b>  Blockchain applications training.</li>
                </ul>
            </div>
        </div>

        <div class="row service-section mb-4">
            <div class="col-md-4">
                <img src="assets/images/services/p2.jpg" alt="Placement Program" class="service-img">
            </div>
            <div class="col-md-8">
                <h3 class="service-title">Placement Readiness Program</h3>
                <p class="service-content">Equipping students with skills to succeed in corporate hiring processes.</p>
                <ul class="service-content">
                    <li><b>Business Communication Training</b> Professional communication skills.</li>
                    <li><b>Analytical Skills Development</b> Critical thinking and problem-solving.</li>
                </ul>
            </div>
        </div>

        <div class="row service-section mb-4">
            <div class="col-md-4">
                <img src="assets/images/services/intel.jpg" alt="Internship Program" class="service-img">
            </div>
            <div class="col-md-8">
                <h3 class="service-title">Internship Program</h3>
                <p class="service-content">Hands-on industry exposure in AI/ML, Data Science, and IoT.</p>
            </div>
        </div>
    

        <div class="row service-section mb-4">
            <div class="col-md-4">
                <img src="assets/images/services/p4.jpg" alt="Global Immersion Program" class="service-img">
            </div>
            <div class="col-md-8">
                <h3 class="service-title">Global Immersion Program</h3>
                <p class="service-content">International learning opportunities through student exchange programs in UAE, Singapore, and Malaysia.</p>
            </div>
        </div>
    

        <div class="row service-section mb-4">
            <div class="col-md-4">
                <img src="assets/images/services/p5.jpg" alt="Placement Support Services" class="service-img">
            </div>
            <div class="col-md-8">
                <h3 class="service-title">Placement Support Services</h3>
                <p class="service-content">Organizing HR conclaves, expert seminars, and improving institutional placement strategies.</p>
            </div>
        </div>
    

        <div class="row service-section mb-4">
            <div class="col-md-4">
                <img src="assets/images/services/p6.jpg" alt="Faculty Development Program" class="service-img">
            </div>
            <div class="col-md-8">
                <h3 class="service-title">Faculty Development Program</h3>
                <p class="service-content">Upskilling faculty members in niche technologies with guidance from industry experts and ACM forums.</p>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>