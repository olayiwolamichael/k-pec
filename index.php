<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPEC Future Academy - Junior &amp; Secondary School</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/kpec-global-256.png" type="image/x-icon">
    <link rel="stylesheet" href="fontawesome-free-6.3.0-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Preloader Styles */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            z-index: 9999;
            transition: opacity 0.5s ease-out;
        }

        .preloader-content {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }

        .preloader-logo {
            width: 80px;
            height: 80px;
            margin-right: 20px;
            animation: pulse 2s ease-in-out infinite;
        }

        .preloader-text {
            font-size: 28px;
            font-weight: 700;
            color: #1a4b2a;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .loading-bar {
            width: 300px;
            height: 4px;
            background: #e0e0e0;
            border-radius: 2px;
            overflow: hidden;
            position: relative;
        }

        .loading-progress {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 0;
            background: linear-gradient(90deg, #1a4b2a, #2e8b57);
            animation: loading 5s cubic-bezier(0.65, 0, 0.35, 1) forwards;
        }

        @keyframes loading {
            0% {
                width: 0;
            }

            100% {
                width: 100%;
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Hide preloader when loaded */
        body.loaded #preloader {
            opacity: 0;
            pointer-events: none;
        }

        /* Prevent scrolling during loading */
        body.loading {
            overflow: hidden;
        }
    </style>
</head>

<body>
    <header>
        <!-- Preloader -->
        <div id="preloader">
            <div class="preloader-content">
                <img src="img/kpec-removebg-preview.png" alt="KPEC Logo" class="preloader-logo">
                <div class="preloader-text">KPEC Future Academy</div>
            </div>
            <div class="loading-bar">
                <div class="loading-progress"></div>
            </div>
        </div>

        <!--BEGINNING OF HEADER -->
        <div class="header-container">
            <div class="logo">
                <img src="img/kpec-removebg-preview.png" alt="Kpec Future Academy Logo">
                <div class="logo-text">
                    <h1>Kpec Future Academy</h1>
                    <p>Excellence in Education</p>
                </div>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="academics.php">Academics</a></li>
                    <li><a href="kpec.php">Apply</a></li>
                    <li><a href="newsevent.php">News &map; Events</a></li>
                    <li><a href="contactus.php">Contact</a></li>
                </ul>
            </nav>
            <div class="mobile-menu" id="mobileMenu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- ENDING OF HEADER -->

    <section class="hero">
        <div class="hero-content">
            <h1>Shaping Future Leaders Through Quality Education</h1>
            <p>At Kpec Future Academy, we provide a nurturing environment that fosters academic excellence, character development, and lifelong learning for junior and secondary school students.</p>
            <a href="#" class="btn">Explore Our Programs</a>
            <a href="kpec.php" class="btn btn-outline">Apply Now</a>
        </div>
    </section>

    <section class="about">
        <div class="section-title">
            <h2>About Our School</h2>
        </div>
        <div class="about-content">
            <div class="about-text">
                <h3>Welcome to Kpec Future Academy</h3>
                <p>Founded in 2008, Kpec Future Academy has established itself as a premier institution for junior and secondary education. Our mission is to provide a holistic education that develops the intellectual, physical, emotional, and social potential of each student.</p>
                <p>With state-of-the-art facilities, experienced educators, and a curriculum that balances academic rigor with extracurricular activities, we prepare students to excel in their future endeavors and become responsible global citizens.</p>
                <a href="#" class="btn">Learn More About Us</a>
            </div>
            <div class="about-image">
                <img src="img/photo-1588072432836-e10032774350.avif" alt="School Building">
            </div>
        </div>
    </section>

    <section class="features-section">
        <div class="section-title">
            <h2>Why Choose Us</h2>
        </div>
        <div class="features">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>Qualified Teachers</h3>
                <p>Our dedicated faculty members are highly qualified and committed to providing personalized attention to each student.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-flask"></i>
                </div>
                <h3>Modern Facilities</h3>
                <p>Well-equipped science labs, computer centers, and libraries provide students with the resources they need to excel.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-medal"></i>
                </div>
                <h3>Proven Excellence</h3>
                <p>Consistently high performance in national examinations and competitions showcases our academic standards.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h3>Holistic Development</h3>
                <p>We emphasize character building, leadership skills, and extracurricular activities alongside academic learning.</p>
            </div>
        </div>
    </section>

    <section class="academics">
        <div class="section-title">
            <h2>Our Academic Programs</h2>
        </div>
        <div class="programs">
            <div class="program-card">
                <div class="program-image">
                    <img src="img/photo-1523050854058-8df90110c9f1.avif" alt="Junior School">
                </div>
                <div class="program-content">
                    <h3>Junior School (Grades 1-6)</h3>
                    <p>Our junior program focuses on foundational skills in literacy, numeracy, and scientific thinking while nurturing curiosity and creativity.</p>
                    <a href="#" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="program-card">
                <div class="program-image">
                    <img src="img/photo-1588072432836-e10032774350.avif" alt="Middle School">
                </div>
                <div class="program-content">
                    <h3>Middle School (Grades 7-9)</h3>
                    <p>A transitional program that builds on foundational knowledge while introducing more specialized subjects and critical thinking skills.</p>
                    <a href="#" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="program-card">
                <div class="program-image">
                    <img src="img/photo-1588072432836-e10032774350.avif" alt="Senior School">
                </div>
                <div class="program-content">
                    <h3>Senior School (Grades 10-12)</h3>
                    <p>Our comprehensive senior program prepares students for university and beyond with advanced coursework and career guidance.</p>
                    <a href="#" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="section-title">
            <h2>Latest News &amp; Events</h2>
        </div>
        <div class="news-container">
            <div class="news-card">
                <div class="news-image">
                    <img src="img/photo2-1541178735493-479c1a27ed24.avif" alt="Science Fair">
                </div>
                <div class="news-content">
                    <div class="news-date">June 15, 2023</div>
                    <h3>Annual Science Fair Winners Announced</h3>
                    <p>Congratulations to our students for their innovative projects at this year's science fair showcasing creativity and scientific thinking.</p>
                    <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="news-card">
                <div class="news-image">
                    <img src="img/photo3-1540575467063-178a50c2df87.avif" alt="Sports Day">
                </div>
                <div class="news-content">
                    <div class="news-date">May 28, 2023</div>
                    <h3>Sports Day 2023: A Celebration of Team Spirit</h3>
                    <p>Our annual sports day brought together students, teachers, and parents for a day of friendly competition and physical activity.</p>
                    <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="news-card">
                <div class="news-image">
                    <img src="img/photo-1588072432836-e10032774350.avif" alt="Graduation">
                </div>
                <div class="news-content">
                    <div class="news-date">April 10, 2023</div>
                    <h3>Class of 2023 Graduation Ceremony</h3>
                    <p>We celebrated the achievements of our graduating class with an emotional ceremony attended by families and faculty.</p>
                    <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <h2>Ready to Join Our Community?</h2>
        <p>Discover how Bright Future Academy can help your child achieve their full potential. Schedule a visit or begin the application process today.</p>
        <a href="#" class="btn">Schedule a Visit</a>
        <a href="kpec.php" class="btn btn-outline">Contact Admissions</a>
    </section>

    <footer>
        <div class="footer-container">
            <div class="footer-col">
                <h3>Bright Future Academy</h3>
                <p>Providing quality education since 2005, we are committed to nurturing young minds and preparing them for the challenges of tomorrow.</p>
                <div class="social-links">
                    <a href="#">.<i class="fab fa-facebook-f"></i></a>
                    <a href="#">.<i class="fab fa-twitter"></i></a>
                    <a href="#">.<i class="fab fa-instagram"></i></a>
                    <a href="#">.<i class="fab fa-linkedin-in"></i></a>
                    <a href="#">.<i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Academics</a></li>
                    <li><a href="#">Admissions</a></li>
                    <li><a href="#">News &map; Events</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Contact Info</h3>
                <p><i class="fas fa-map-marker-alt"></i> 123 Education Avenue, Knowledge City</p>
                <p><i class="fas fa-phone"></i> +1 (234) 567-8900</p>
                <p><i class="fas fa-envelope"></i> info@Kpecschool.edu</p>
                <p><i class="fas fa-clock"></i> Mon-Fri: 8:00 AM - 4:00 PM</p>
            </div>
            <div class="footer-col">
                <h3>Newsletter</h3>
                <p>Subscribe to our newsletter to receive updates on school news and events.</p>
                <form>
                    <input type="email" placeholder="Your Email" required>
                    <button type="submit" class="btn">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2023 Kpec Future Academy. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenu = document.getElementById('mobileMenu');
        const nav = document.getElementById('nav');

        mobileMenu.addEventListener('click', () => {
            nav.classList.toggle('active');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Animation on scroll
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.feature-card, .program-card, .news-card');

            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.3;

                if (elementPosition < screenPosition) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        };

        // Set initial state for animated elements
        document.querySelectorAll('.feature-card, .program-card, .news-card').forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(20px)';
            element.style.transition = 'all 0.6s ease';
        });

        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);
    </script>
</body>

</html>
<script src="js/index.js"></script>