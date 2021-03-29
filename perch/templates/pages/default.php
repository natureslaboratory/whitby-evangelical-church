<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'] . '/perch/runtime.php'); ?>

<?php

perch_layout('global.header');

?>

<body>
    <div id="content" style="position: relative;">
        <div>
            <?php

            perch_content_create("Header", [
                "template" => "header.html"
            ]);

            perch_content("Header");
            ?>
        </div>
        <div id="main-bg" style="background-image: url(/perch/resources/wavey2.svg)">
            <!-- <img src="/perch/resources/wavey2.svg" alt="background" /> -->
        </div>
        <div class="c-content">
            <?php

            perch_content_create("Main Content", [
                "template" => "home_content.html"
            ]);
            perch_content("Main Content");
            
            ?>
            <!-- <div id="main-wrapper-new" className="page-content">
                        <div id="main-bg">
                            <img src="/perch/resources/wavey2.svg" alt="background" />
                        </div>
                        <div id="bg-color"></div>
                        <div id="main-content">
                            <div id="home-card-intro" class="show">
                                <div id="home-intro-content">
                                    <h4 className="home-card-grid-item" id="home-intro-card-title">Who we are</h4>
                                    <p id="p1" className="home-card-grid-item">
                                        Whitby Evangelical Church is based on Whitby's busy Skinner Street,
                                        in the heart of the town. We're a family friendly church offering two
                                        Sunday services as well as a mid week Bible study meeting.
                                    </p>
                                    <div id="church-img-wrapper">
                                        <div id="church-img"
                                            style="background-image:url(/perch/resources/img20200301121422-edited-new.jpg);">
                                        </div>
                                    </div>
                                    <p id="p2" className="home-card-grid-item">
                                        Please have a look around our website. We're still adding content so
                                        please check back regularly. Sunday sermons are available to listen to
                                        online in our Audio Library and our meeting information and special events
                                        on our Calendar.
                                    </p>
                                    <p id="p3" className="home-card-grid-item">
                                        If you'd like to contact us please use the details or email form
                                        on the Contact page.
                                    </p>
                                    <div id="home-button-intro-div" className="home-card-grid-item">
                                        <a href="./about.html"><button>Find out more</button></a>
                                    </div>
                                </div>
                            </div>
                            <div id="home-body-content">
                                <div id="whats-on-card" class="home-card right show">
                                    <div class="home-card-text">
                                        <h4>What's On</h4>
                                        <p>
                                            Whitby Evangelical Church is based on Whitby's
                                            busy Skinner Street, in the heart of the town.
                                            We're a family friendly church offering two Sunday
                                            services as well as a mid week Bible study meeting.
                                        </p>
                                        <a href="./whats-on.html"><button>Find out more</button></a>
                                    </div>
                                    <img src="/perch/resources/whats-on.jpg" alt="People listening to talk" id="what-img"
                                        className="outer-img" />
                                </div>
                                <div class="home-card left show" id="listen-card">
                                    <div class="home-card-text">
                                        <h4>Listen Online</h4>
                                        <p>
                                            Whitby Evangelical Church is based on Whitby's
                                            busy Skinner Street, in the heart of the town.
                                            We're a family friendly church offering two Sunday
                                            services as well as a mid week Bible study meeting.
                                        </p>
                                        <a href="./audio-library.html"><button>Find out more</button></a>
                                    </div>
                                    <img src="/perch/resources/listen.jpg" alt="Headphones" id="listen-img"
                                        className="outer-img" />
                                </div>
                                <div id="contact-card" class="home-card right show">
                                    <div class="home-card-text">
                                        <h4>Get in touch</h4>
                                        <p>
                                            Whitby Evangelical Church is based on Whitby's
                                            busy Skinner Street, in the heart of the town.
                                            We're a family friendly church offering two Sunday
                                            services as well as a mid week Bible study meeting.
                                        </p>
                                        <a href="./contact.html"><button>Find out more</button></a>
                                    </div>
                                    <img src="/perch/resources/contact.jpg" alt="Person sending email" id="contact-img"
                                        className="outer-img" />
                                </div>
                            </div>
                        </div>
                    </div> -->
        </div>
        <div id="footer">
            <div class="inner-wrapper">
                <section>
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="./home.html">Home</a></li>
                        <li><a href="./about.html">About Us</a></li>
                        <li><a href="./audio-library.html">Listen Online</a></li>
                        <li><a href="./whats-on.html">What's On</a></li>
                        <li><a href="./calendar.html">Calendar</a></li>
                        <li><a href="./news.html">News</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                    </ul>
                </section>
                <section>
                    <h4>Contact</h4>
                    <ul>
                        <li>
                            01947 820772
                        </li>
                        <li>
                            12 Skinner Street, <br />
                            Whitby, <br />
                            North Yorkshire, <br />
                            YO21 3AJ
                        </li>
                    </ul>
                </section>
                <section id="footer-map">
                    <iframe title="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2317.6272178820377!2d-0.6196864835783704!3d54.487158796347494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487f177000e11b7d%3A0xe007f5506cde65a6!2sWhitby%20Evangelical%20Church!5e0!3m2!1sen!2suk!4v1584984881539!5m2!1sen!2suk"></iframe>
                </section>
            </div>
            <div class="inner-wrapper" id="bottom-bar">
                <p>&copy; Whitby Evangelical Church 2020</p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        if (window.innerWidth < 681) {
            footer.classList.add("mobile")
        }
        const toggleHamburger = () => {
            const ham = document.getElementById("hamburger-menu");
            const hamButton = document.getElementById("hamburger");
            const body = document.getElementsByTagName("body")[0];
            const html = document.getElementsByTagName("HTML")[0];
            if (body.style.transform) {
                body.style.position = "";
                body.style.top = ``;
                body.style.transform = ``;
            } else {
                const hamBox = ham.getBoundingClientRect();
                const hamWidth = hamBox.right - hamBox.left;
                body.style.transform = `translateX(${-hamWidth}px)`;
                body.style.position = "fixed";
                body.style.top = `-${window.scrollY}px`;
            }
        }

        // window.addEventListener("resize", () => {
        //     const footer = document.getElementById("footer")
        //     if (window.innerWidth < 681) {
        //         if (!(footer.classList.contains("mobile"))) {
        //             footer.classList.add("mobile")
        //         }
        //     } else if (footer.classList.contains("mobile")) {
        //         footer.classList.remove("mobile")
        //     }
        // })
    </script>
</body>

</html>