<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * Template Name: Index
 * @package everest-ads
 */

get_header();
?>

<!-- Banner Slider -->
<section class="banner-wrapper">
    <div class="container">
        <div class="row">
            <div class="banner">
                <h4>Home / Features</h4>
                <h1>Integrated Key Features for <br> Seamless Team Management</h1>
                <p>Boost productivity and manage your team more effectively. Each tool is built to address key
                    challenges in remote work, <br> ensuring efficiency and accountability every step of the way.</p>

                <button class="btn-green">Start Your Free Trial Today</button>
            </div>
        </div>
    </div>
</section>


<!-- Features -->
<section class="features">
    <div class="container">
        <div class="row">
            <!--  -->
            <div class="slick-features">
                <!--  -->
                <div class="feat-block move-down">
                    <div class="feat-block-img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/payroll.jpg" alt="">
                    </div>
                    <h2>Payroll Reporting</h2>
                    <p>Save time on payroll with streamlined reporting. Integrate easily, improve accuracy, and
                        focus on
                        growing your business.</p>
                </div>
                <!--  -->
                <div class="feat-block move-down">
                    <div class="feat-block-img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/attendance.jpg" alt="">
                    </div>
                    <h2>Attendance tracking</h2>
                    <p>Simplify your routine tasks and ensure accountability. Automate attendance management and
                        keep
                        your team on track.</p>
                </div>
                <!--  -->
                <div class="feat-block move-down">
                    <div class="feat-block-img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/offline.jpg" alt="">
                    </div>
                    <h2>Offline Mode</h2>
                    <p>Never miss a moment. Track time and manage tasks seamlessly, even without an internet
                        connection.
                    </p>
                </div>
                <!--  -->
                <div class="feat-block move-down">
                    <div class="feat-block-img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/offline.jpg" alt="">
                    </div>
                    <h2>Offline Mode</h2>
                    <p>Never miss a moment. Track time and manage tasks seamlessly, even without an internet
                        connection.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Supercharge Your Productivity -->
<section class="supercharge">
    <div class="container">
        <h2>Supercharge Your Productivity</h2>
        <p class="text">Take control of your team's time and unlock their full potential with smarter, faster, and more
            efficient
            tools designed for modern workflows.</p>
        <div class="grid-container">
            <div class="first-card">
                <div class="supercharge-btn">Intense Team</div>
                <h3>Where Accountability <span>Meets Efficiency</span></h3>
                <p>
                    Intense Team provides the tools you need to ensure work gets done efficiently, transparently, and
                    collaboratively
                </p>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/intense-team.png" alt="">

            </div>

            <div class="second-card">
                <h3>Real-Time <br> Monitoring</h3>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/real-time.png" alt="">
            </div>

            <div class="third-card">
                <h3>Appraise your team</h3>
                <p>Track productivity and performance with actionable insights.</p>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/team-img.jpg" alt="">
            </div>

            <div class="fourth-card">
                <h3>Inactivity Alerts</h3>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/inactivity-alerts.png" alt="">
                <img class="arrow" src="<?php bloginfo('template_url'); ?>/assets/img/arrow.png" alt="">
            </div>

            <div class="fifth-card">
                <h3>Customizable Dashboards:</h3>
                <p>Intense Team provides the tools you need and is customizable.</p>
                <div class="icon-container">
                    <div class="icon-box one">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icon-home.png" alt="Home Icon" />
                    </div>
                    <div class="icon-box two">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icon-calender.png" alt="Calendar Icon" />
                    </div>
                    <div class="icon-box three">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icon-time.png" alt="Clock Icon" />
                    </div>
                </div>
            </div>

            <div class="last-card">
                <h3>Performance Analytics:</h3>
                <p>Track productivity and performance with actionable insights</p>
                <!--  -->
                <div class="block-slider">
                    <!--  -->
                    <div class="block">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/active-time.jpg" alt="">
                        <div class="time">Active time</div>
                        <div class="hrs">6hrs.20mins</div>
                    </div>
                    <!--  -->
                    <div class="block">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/active-time.jpg" alt="">
                        <div class="time">Active time</div>
                        <div class="hrs">6hrs.20mins</div>
                    </div>
                    <!--  -->
                    <div class="block">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/active-time.jpg" alt="">
                        <div class="time">Active time</div>
                        <div class="hrs">6hrs.20mins</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Technology Section -->
<section class="technology ">
    <div class="container">
        <div class="row">
            <h2>Technology that proves the work</h2>
            <p class="text">Take control of your team's time and unlock their full potential with smarter, faster, and
                more efficient
                tools designed for modern workflows.</p>
            <!-- Block -->
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="technology-block">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icon-screenshot.jpg" alt="">
                    <h3>Screenshot Tracking</h3>
                    <p>Capture periodic screenshots to validate work progress and maintain transparency.</p>
                </div>
            </div>

            <!-- Block -->
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="technology-block">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icon-timesheet.jpg" alt="">
                    <h3>Timesheet Management</h3>
                    <p>Track daily, weekly, or monthly work hours with detailed and editable timesheets.</p>
                </div>
            </div>

            <!-- Block -->
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="technology-block">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icon-manual.jpg" alt="">
                    <h3>Manual Time Logging</h3>
                    <p>Track daily, weekly, or monthly work hours with detailed and editable timesheets.</p>
                </div>
            </div>

            <!-- Block -->
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="technology-block">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icon-screenshot.jpg" alt="">
                    <h3>Performance Tracking</h3>
                    <p>Track daily, weekly, or monthly work hours with detailed and editable timesheets.</p>
                </div>
            </div>

            <!-- Block -->
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="technology-block">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icon-timesheet.jpg" alt="">
                    <h3>Timeline Overview</h3>
                    <p>Track daily, weekly, or monthly work hours with detailed and editable timesheets.</p>
                </div>
            </div>

            <!-- Block -->
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="technology-block">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icon-manual.jpg" alt="">
                    <h3>Reports</h3>
                    <p>Track daily, weekly, or monthly work hours with detailed and editable timesheets.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FAQ -->
<section class="faq">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Questions about <span>Our Features</span></h2>
                <p>Explore our FAQs to learn more about how Intense Team can streamline your workflow and boost
                    productivity.</p>
                <div class="text-center">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/faq-image.jpg" alt="">
                </div>

            </div>
            <div class="col-lg-6">
                <!-- Accordion -->
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                1. What is Intense Team and how does it work?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Intense Team enhances productivity by providing real-time
                                monitoring, task management, and performance analytics all in one platform. By tracking
                                live activities, work hours, and engagement levels, teams can identify bottlenecks and
                                improve workflows. With tools like customizable dashboards and inactivity alerts, you
                                can ensure that your team stays focused, organized, and on track to meet deadlines.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                2. How do I get started with Intense Team?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Intense Team enhances productivity by providing real-time
                                monitoring, task management, and performance analytics all in one platform. By tracking
                                live activities, work hours, and engagement levels, teams can identify bottlenecks and
                                improve workflows. With tools like customizable dashboards and inactivity alerts, you
                                can ensure that your team stays focused, organized, and on track to meet deadlines.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                3. What kind of customer support is available?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Intense Team enhances productivity by providing real-time
                                monitoring, task management, and performance analytics all in one platform. By tracking
                                live activities, work hours, and engagement levels, teams can identify bottlenecks and
                                improve workflows. With tools like customizable dashboards and inactivity alerts, you
                                can ensure that your team stays focused, organized, and on track to meet deadlines.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                4. How does Intense Team help improve team productivity?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Intense Team enhances productivity by providing real-time
                                monitoring, task management, and performance analytics all in one platform. By tracking
                                live activities, work hours, and engagement levels, teams can identify bottlenecks and
                                improve workflows. With tools like customizable dashboards and inactivity alerts, you
                                can ensure that your team stays focused, organized, and on track to meet deadlines.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Request A Demo -->
<section class="demo-request">
    <div class="container">
        <div class="row">
            <h2>Ready to Unlock Your Team’s <span>True Potential?</span></h2>
            <p>Take the first step towards smarter team management and enhanced productivity.<br>
                Join Intense Team today and experience the difference.</p>
            <div class="inline-block">
                <button class="btn-green ">Request a Demo <svg class="inline-block" width="9" height="14"
                        viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.875 12.3835L7.125 7.13354L1.875 1.88354" stroke="#154B2C" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

        </div>
    </div>
</section>
<!-- <?php the_content() ?> -->


<?php
get_footer();
