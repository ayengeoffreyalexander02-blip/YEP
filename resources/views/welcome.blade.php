<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YEP - Youth Empowerment Platform</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-green: #2ecc71;
            --primary-blue: #3498db;
            --dark-blue: #1a3a52;
            --light-bg: #f8f9fa;
            --text-dark: #2c3e50;
            --border-color: #ecf0f1;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-dark);
            line-height: 1.6;
        }

        /* Navbar */
        .navbar {
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--dark-blue) !important;
        }

        .navbar-brand span {
            color: var(--primary-green);
        }

        .nav-link {
            color: var(--text-dark) !important;
            font-weight: 500;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary-green) !important;
        }

        .btn-signup {
            background: linear-gradient(135deg, var(--primary-green), var(--primary-blue));
            color: white !important;
            border: none;
            padding: 0.5rem 1.5rem;
            border-radius: 25px;
            font-weight: 600;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-signup:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(46, 204, 113, 0.4);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--dark-blue) 0%, var(--primary-blue) 100%);
            color: white;
            padding: 6rem 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            animation: slideDown 0.8s ease;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.95;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-primary-cta {
            background: var(--primary-green);
            color: white;
            padding: 0.8rem 2.5rem;
            border: none;
            border-radius: 30px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .btn-primary-cta:hover {
            background: #27ae60;
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(46, 204, 113, 0.3);
        }

        .btn-secondary-cta {
            background: transparent;
            border: 2px solid white;
            color: white;
            padding: 0.8rem 2.5rem;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-secondary-cta:hover {
            background: white;
            color: var(--dark-blue);
        }

        /* Animations */
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Sections */
        .section {
            padding: 4rem 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 1rem;
            color: var(--dark-blue);
        }

        .section-subtitle {
            text-align: center;
            color: #7f8c8d;
            font-size: 1.1rem;
            margin-bottom: 3rem;
        }

        /* Cards */
        .feature-card {
            background: white;
            border: 1px solid var(--border-color);
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            border-color: var(--primary-green);
        }

        .feature-card i {
            font-size: 3rem;
            color: var(--primary-green);
            margin-bottom: 1rem;
        }

        .feature-card h3 {
            color: var(--dark-blue);
            margin-bottom: 1rem;
            font-weight: 600;
        }

        /* Opportunity Card */
        .opportunity-card {
            background: white;
            border-left: 4px solid var(--primary-green);
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            transition: all 0.3s ease;
        }

        .opportunity-card:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .opportunity-card .card-title {
            color: var(--dark-blue);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .opportunity-card .company {
            color: var(--primary-blue);
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .opportunity-card .deadline {
            color: #e74c3c;
            font-size: 0.9rem;
        }

        /* Course Card */
        .course-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        .course-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .course-image {
            height: 200px;
            background: linear-gradient(135deg, var(--primary-green), var(--primary-blue));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
        }

        .course-body {
            padding: 1.5rem;
        }

        .course-body h3 {
            color: var(--dark-blue);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .course-info {
            display: flex;
            justify-content: space-between;
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid var(--border-color);
        }

        .course-info span {
            color: #7f8c8d;
            font-size: 0.9rem;
        }

        /* Mission Section */
        .mission {
            background: linear-gradient(135deg, rgba(46, 204, 113, 0.1), rgba(52, 152, 219, 0.1));
            border-radius: 15px;
            padding: 3rem;
            text-align: center;
            margin-bottom: 2rem;
        }

        .mission h2 {
            color: var(--dark-blue);
            margin-bottom: 1rem;
        }

        .mission p {
            font-size: 1.1rem;
            color: #555;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Event Card */
        .event-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .event-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .event-date {
            background: linear-gradient(135deg, var(--primary-green), var(--primary-blue));
            color: white;
            padding: 1rem;
            text-align: center;
        }

        .event-date-day {
            font-size: 2rem;
            font-weight: 700;
        }

        .event-date-month {
            font-size: 0.9rem;
        }

        .event-body {
            padding: 1.5rem;
        }

        .event-body h3 {
            color: var(--dark-blue);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        /* Footer */
        footer {
            background: var(--dark-blue);
            color: white;
            padding: 3rem 0 1rem;
        }

        footer h5 {
            color: var(--primary-green);
            margin-bottom: 1.5rem;
            font-weight: 600;
        }

        footer ul {
            list-style: none;
        }

        footer ul li {
            margin-bottom: 0.5rem;
        }

        footer a {
            color: #bdc3c7;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: var(--primary-green);
        }

        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            margin-right: 0.5rem;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--primary-green);
            transform: translateY(-3px);
        }

        /* Statistics */
        .stats-item {
            text-align: center;
            padding: 2rem;
        }

        .stats-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-green);
        }

        .stats-label {
            color: #7f8c8d;
            margin-top: 0.5rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .section-title {
                font-size: 1.8rem;
            }

            .hero-buttons {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-rocket"></i> YE<span>P</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#opportunities">Opportunities</a></li>
                    <li class="nav-item"><a class="nav-link" href="#courses">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="#mentorship">Mentorship</a></li>
                    <li class="nav-item"><a class="nav-link" href="#events">Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="btn btn-signup" href="#signup">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <h1>Empower Your Future Today</h1>
            <p>Connect with mentors, land your dream job, and unlock unlimited opportunities for growth</p>
            <div class="hero-buttons">
                <button class="btn-primary-cta">Get Started</button>
                <button class="btn-secondary-cta">Learn More</button>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="section">
        <div class="container">
            <div class="mission">
                <h2>Our Mission</h2>
                <p>
                    YEP is dedicated to empowering young people through skills development, mentorship, and career opportunities.
                    We believe every youth deserves access to quality education, industry mentors, and pathways to success.
                </p>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section" style="background: var(--light-bg);">
        <div class="container">
            <h2 class="section-title">Why Choose YEP?</h2>
            <p class="section-subtitle">Transform your potential into reality with our comprehensive platform</p>
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="feature-card">
                        <i class="fas fa-book"></i>
                        <h3>Quality Courses</h3>
                        <p>Learn from industry experts through carefully curated courses designed for career advancement.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="feature-card">
                        <i class="fas fa-handshake"></i>
                        <h3>Expert Mentors</h3>
                        <p>Get guidance from experienced professionals who've succeeded in their fields.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="feature-card">
                        <i class="fas fa-briefcase"></i>
                        <h3>Job Opportunities</h3>
                        <p>Access exclusive job listings from top companies actively hiring young talents.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="feature-card">
                        <i class="fas fa-network-wired"></i>
                        <h3>Network & Connect</h3>
                        <p>Build meaningful connections with peers, mentors, and industry leaders.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics -->
    <section class="section" style="background: linear-gradient(135deg, var(--dark-blue), var(--primary-blue));">
        <div class="container text-white">
            <div class="row">
                <div class="col-md-3 stats-item">
                    <div class="stats-number">50K+</div>
                    <div class="stats-label">Active Users</div>
                </div>
                <div class="col-md-3 stats-item">
                    <div class="stats-number">500+</div>
                    <div class="stats-label">Job Opportunities</div>
                </div>
                <div class="col-md-3 stats-item">
                    <div class="stats-number">200+</div>
                    <div class="stats-label">Expert Mentors</div>
                </div>
                <div class="col-md-3 stats-item">
                    <div class="stats-number">1000+</div>
                    <div class="stats-label">Success Stories</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Opportunities Section -->
    <section class="section" id="opportunities">
        <div class="container">
            <h2 class="section-title">Featured Opportunities</h2>
            <p class="section-subtitle">Discover amazing career paths waiting for you</p>
            <div class="row">
                <div class="col-lg-6">
                    <div class="opportunity-card">
                        <h5 class="card-title">Frontend Developer</h5>
                        <p class="company"><i class="fas fa-building"></i> Tech Innovations Inc.</p>
                        <p>Join our dynamic team building next-generation web applications. Remote position with competitive salary.</p>
                        <small class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: July 31, 2024</small>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="opportunity-card">
                        <h5 class="card-title">Marketing Intern</h5>
                        <p class="company"><i class="fas fa-building"></i> Digital Marketing Solutions</p>
                        <p>Gain real-world experience in digital marketing, social media, and brand strategy. On-site position.</p>
                        <small class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: July 15, 2024</small>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="opportunity-card">
                        <h5 class="card-title">Data Analyst</h5>
                        <p class="company"><i class="fas fa-building"></i> Analytics Pro</p>
                        <p>Work with cutting-edge data analytics tools. Help companies make data-driven decisions.</p>
                        <small class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: August 5, 2024</small>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="opportunity-card">
                        <h5 class="card-title">Design Scholarship</h5>
                        <p class="company"><i class="fas fa-building"></i> Creative Arts Foundation</p>
                        <p>Full scholarship for passionate designers. Includes mentorship and internship opportunities.</p>
                        <small class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: August 20, 2024</small>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn-primary-cta">View All Opportunities</a>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section class="section" id="courses" style="background: var(--light-bg);">
        <div class="container">
            <h2 class="section-title">Popular Courses</h2>
            <p class="section-subtitle">Upskill yourself with industry-relevant training</p>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="course-card">
                        <div class="course-image"><i class="fas fa-laptop-code"></i></div>
                        <div class="course-body">
                            <h3>Web Development Mastery</h3>
                            <p>Learn HTML, CSS, JavaScript, and React from scratch to advanced level.</p>
                            <div class="course-info">
                                <span><i class="fas fa-clock"></i> 40 hours</span>
                                <span><i class="fas fa-star"></i> 4.8/5</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="course-card">
                        <div class="course-image"><i class="fas fa-chart-line"></i></div>
                        <div class="course-body">
                            <h3>Digital Marketing 101</h3>
                            <p>Master SEO, social media marketing, and email marketing strategies.</p>
                            <div class="course-info">
                                <span><i class="fas fa-clock"></i> 30 hours</span>
                                <span><i class="fas fa-star"></i> 4.7/5</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="course-card">
                        <div class="course-image"><i class="fas fa-database"></i></div>
                        <div class="course-body">
                            <h3>Data Science Fundamentals</h3>
                            <p>Python, data analysis, machine learning, and visualization techniques.</p>
                            <div class="course-info">
                                <span><i class="fas fa-clock"></i> 50 hours</span>
                                <span><i class="fas fa-star"></i> 4.9/5</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn-primary-cta">Browse All Courses</a>
            </div>
        </div>
    </section>

    <!-- Mentorship Section -->
    <section class="section" id="mentorship">
        <div class="container">
            <h2 class="section-title">Connect with Mentors</h2>
            <p class="section-subtitle">Get personalized guidance from industry experts</p>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div style="background: linear-gradient(135deg, var(--primary-green), var(--primary-blue)); border-radius: 15px; padding: 3rem; color: white; text-align: center;">
                        <i class="fas fa-users" style="font-size: 3rem; margin-bottom: 1rem;"></i>
                        <h3>One-on-One Mentorship</h3>
                        <p>Get personalized guidance tailored to your career goals and learning pace.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div style="background: white; border-radius: 12px; padding: 1.5rem; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                                <i class="fas fa-calendar" style="font-size: 2rem; color: var(--primary-green); margin-bottom: 1rem;"></i>
                                <h4>Flexible Scheduling</h4>
                                <p>Schedule sessions that fit your busy life</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div style="background: white; border-radius: 12px; padding: 1.5rem; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                                <i class="fas fa-award" style="font-size: 2rem; color: var(--primary-green); margin-bottom: 1rem;"></i>
                                <h4>Expert Guidance</h4>
                                <p>Learn from proven industry professionals</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div style="background: white; border-radius: 12px; padding: 1.5rem; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                                <i class="fas fa-rocket" style="font-size: 2rem; color: var(--primary-green); margin-bottom: 1rem;"></i>
                                <h4>Career Growth</h4>
                                <p>Accelerate your professional development</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div style="background: white; border-radius: 12px; padding: 1.5rem; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                                <i class="fas fa-comments" style="font-size: 2rem; color: var(--primary-green); margin-bottom: 1rem;"></i>
                                <h4>Community</h4>
                                <p>Connect with like-minded young professionals</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn-primary-cta">Find Your Mentor</a>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section class="section" id="events" style="background: var(--light-bg);">
        <div class="container">
            <h2 class="section-title">Upcoming Events</h2>
            <p class="section-subtitle">Attend workshops, webinars, and networking events</p>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="event-card">
                        <div class="event-date">
                            <div class="event-date-day">15</div>
                            <div class="event-date-month">July 2024</div>
                        </div>
                        <div class="event-body">
                            <h3>Web Development Workshop</h3>
                            <p><i class="fas fa-map-marker-alt"></i> Virtual</p>
                            <p>Learn the latest web development trends with expert speakers.</p>
                            <a href="#" style="color: var(--primary-green); text-decoration: none; font-weight: 600;">Register Now →</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="event-card">
                        <div class="event-date">
                            <div class="event-date-day">22</div>
                            <div class="event-date-month">July 2024</div>
                        </div>
                        <div class="event-body">
                            <h3>Career Networking Mixer</h3>
                            <p><i class="fas fa-map-marker-alt"></i> Conference Hall</p>
                            <p>Network with recruiters and industry professionals in person.</p>
                            <a href="#" style="color: var(--primary-green); text-decoration: none; font-weight: 600;">Register Now →</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="event-card">
                        <div class="event-date">
                            <div class="event-date-day">29</div>
                            <div class="event-date-month">July 2024</div>
                        </div>
                        <div class="event-body">
                            <h3>Leadership Seminar</h3>
                            <p><i class="fas fa-map-marker-alt"></i> Virtual</p>
                            <p>Develop essential leadership skills for your career advancement.</p>
                            <a href="#" style="color: var(--primary-green); text-decoration: none; font-weight: 600;">Register Now →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section" style="background: linear-gradient(135deg, var(--primary-green), var(--primary-blue)); color: white; text-align: center;">
        <div class="container">
            <h2 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 1rem;">Ready to Transform Your Future?</h2>
            <p style="font-size: 1.2rem; margin-bottom: 2rem; opacity: 0.95;">Join thousands of young professionals already achieving their dreams</p>
            <button class="btn-secondary-cta">Start Your Journey Today</button>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section" id="contact">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div style="text-align: center;">
                        <i class="fas fa-envelope" style="font-size: 2.5rem; color: var(--primary-green); margin-bottom: 1rem;"></i>
                        <h4>Email</h4>
                        <p><a href="mailto:info@yep.com" style="color: var(--primary-blue); text-decoration: none;">info@yep.com</a></p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div style="text-align: center;">
                        <i class="fas fa-phone" style="font-size: 2.5rem; color: var(--primary-green); margin-bottom: 1rem;"></i>
                        <h4>Phone</h4>
                        <p><a href="tel:+1234567890" style="color: var(--primary-blue); text-decoration: none;">+1 (234) 567-890</a></p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div style="text-align: center;">
                        <i class="fas fa-map-marker-alt" style="font-size: 2.5rem; color: var(--primary-green); margin-bottom: 1rem;"></i>
                        <h4>Address</h4>
                        <p>123 Youth Street, Tech City, TC 12345</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-3 mb-4">
                    <h5>About YEP</h5>
                    <p>Empowering the next generation of leaders and professionals through education and mentorship.</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Resources</h5>
                    <ul>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Follow Us</h5>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <hr style="border-color: rgba(255,255,255,0.1);">
            <div class="text-center py-3">
                <p>&copy; 2024 Youth Empowerment Platform. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>