<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Partnership</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .service-container {
            perspective: 1000px;
        }
        .service-card {
            width: 100%;
            height: 250px;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.6s;
            cursor: pointer;
        }
        .service-container:hover .service-card {
            transform: rotateY(180deg);
        }
        .service-front, .service-back {
            width: 100%;
            height: 100%;
            position: absolute;
            backface-visibility: hidden;
            background: white;
            border-radius: 10px;
            border: 2px solid #0d6efd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            padding: 20px;
        }
        .service-front {
            z-index: 2;
        }
        .service-back {
            transform: rotateY(180deg);
            background-color: #070b3b;
            color: white;
        }
        .service-logo {
            width: 160px;
            height: 120px;
            object-fit: contain;
            margin-bottom: 15px;
        }
        .footer {
            background: #070b3b;
            color: #ffffff;
            text-align: center;
            padding: 15px;
            margin-top: 30px;
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
                                        <a href="contact.php" class="default-btn btn-bg-two border-radius-50">Get A Quote <i class='bx bx-chevron-right'></i></a>
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
                    <h3>Partnership</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevrons-right'></i>
                        </li>
                        <li> Partnership</li>
                    </ul>
                </div>
            </div>
            <div class="inner-shape">
                <img src="assets/images/shape/inner-shape.png" alt="Images">
            </div>
        </div>
        <!-- Inner Banner End -->

    <div class="container my-5">
        <!--<h2 class="text-center mb-4">Our Partnership</h2>-->
        <div class="row g-4">
            <!-- Example Service Box -->
            <div class="col-md-4 col-sm-6">
                <div class="service-container">
                    <div class="service-card">
                        <div class="service-front">
                            <img src="assets/images/shape/gibra.png" alt="Gibraltar Technologies Dubai" class="service-logo">
                            <p class="service-title"></p>
                        </div>
                        <div class="service-back">
                            <p style="color:white;"><!--back side content--></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-container">
                    <div class="service-card">
                        <div class="service-front">
                            <img src="assets/images/shape/siraj.png" alt="Gibraltar Technologies Dubai" class="service-logo">
                            <p class="service-title"></p>
                        </div>
                        <div class="service-back">
                            <p style="color:white;"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-container">
                    <div class="service-card">
                        <div class="service-front">
                            <img src="assets/images/shape/code.png" alt="Gibraltar Technologies Dubai" class="service-logo">
                            <p class="service-title"></p>
                        </div>
                        <div class="service-back">
                            <p style="color:white;"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-container">
                    <div class="service-card">
                        <div class="service-front">
                            <img src="assets/images/shape/pear.png" alt="Gibraltar Technologies Dubai" class="service-logo">
                            <p class="service-title"></p>
                        </div>
                        <div class="service-back">
                            <p style="color:white;"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-container">
                    <div class="service-card">
                        <div class="service-front">
                            <img src="assets/images/shape/info.png" alt="Gibraltar Technologies Dubai" class="service-logo">
                            <p class="service-title"></p>
                        </div>
                        <div class="service-back">
                            <p style="color:white;"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-container">
                    <div class="service-card">
                        <div class="service-front">
                            <img src="assets/images/shape/novac_gt.png" alt="Gibraltar Technologies Dubai" class="service-logo">
                            <p class="service-title"></p>
                        </div>
                        <div class="service-back">
                            <p style="color:white;"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-container">
                    <div class="service-card">
                        <div class="service-front">
                            <img src="assets/images/shape/cres.png" alt="Gibraltar Technologies Dubai" class="service-logo">
                            <p class="service-title"></p>
                        </div>
                        <div class="service-back">
                            <p style="color:white;"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-container">
                    <div class="service-card">
                        <div class="service-front">
                            <img src="assets/images/shape/global.png" alt="Gibraltar Technologies Dubai" class="service-logo">
                            <p class="service-title"></p>
                        </div>
                        <div class="service-back">
                            <p style="color:white;"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-container">
                    <div class="service-card">
                        <div class="service-front">
                            <img src="assets/images/shape/fabc.png" alt="Gibraltar Technologies Dubai" class="service-logo">
                            <p class="service-title"></p>
                        </div>
                        <div class="service-back">
                            <p style="color:white;"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-container">
                    <div class="service-card">
                        <div class="service-front">
                            <img src="assets/images/shape/codiod.png" alt="Gibraltar Technologies Dubai" class="service-logo">
                            <p class="service-title"></p>
                        </div>
                        <div class="service-back">
                            <p style="color:white;"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-container">
                    <div class="service-card">
                        <div class="service-front">
                            <img src="assets/images/shape/comnet.png" alt="Gibraltar Technologies Dubai" class="service-logo">
                            <p class="service-title"></p>
                        </div>
                        <div class="service-back">
                            <p style="color:white;"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-container">
                    <div class="service-card">
                        <div class="service-front">
                            <img src="assets/images/shape/vana.png" alt="Gibraltar Technologies Dubai" class="service-logo">
                            <p class="service-title"></p>
                        </div>
                        <div class="service-back">
                            <p style="color:white;"></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat for other services with appropriate details -->
        </div>
    </div>  
    <?php include 'footer.php'; ?>