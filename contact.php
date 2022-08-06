<?php include 'includes/header.php' ?>


                <section class="page_title ds s-overlay s-py-90 s-py-xl-150">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1 class="emptytext">Contact Us</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="./">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Contact Us
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Content Start -->
                <section class="ls ms s-py-90 s-py-xl-150">
                    <div class="container">
                        <div class="row">
                            <div
                                class="col-lg-6 col-xl-7 animate"
                                data-animation="scaleAppear"
                            >
                                <div class="hero-bg p-30 p-xl-60">
                                    <h5 for="name">Contact Form</h5>

                                    <form
                                        action="https://formsubmit.co/hamza2007ezzat@gmail.com"
                                        method="POST"
                                    >
                                        <input
                                            type="hidden"
                                            name="_next"
                                            value="https://alwadi-invest.com/thanks.html"
                                        />

                                        <input
                                            type="hidden"
                                            name="_captcha"
                                            value="false"
                                        />

                                        <input
                                            type="text"
                                            name="name"
                                            placeholder="Name"
                                            required
                                        />

                                        <input
                                            type="email"
                                            name="email"
                                            placeholder="Email"
                                            required
                                        />
                                        <label for="message"
                                            >Your Message</label
                                        >

                                        <textarea
                                            name="message"
                                            cols="20"
                                            rows="6"
                                            placeholder="Your message"
                                        ></textarea>
                                        <button
                                            type="submit"
                                            class="button btn btn-maincolor btn-block"
                                        >
                                            Send
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!--.col-* -->

                            <div
                                class="col-lg-6 col-xl-5 animate"
                                data-animation="scaleAppear"
                            >
                                <div class="hero-bg p-30 p-xl-60">
                                    <h5>Contact Info</h5>

                                    <div class="d-flex media mb-20">
                                        <div class="icon-styled fs-40">
                                            <i class="ico-home-big"></i>
                                        </div>

                                        <div class="media-body">
                                            <h6>Address:</h6>
                                            <p class="color-darkgrey">
                                                Munyonyo - Kampala - Uganda
                                            </p>
                                        </div>
                                    </div>

                                    <div class="d-flex media mb-20">
                                        <div class="icon-styled fs-40">
                                            <i class="ico-phone-big"></i>
                                        </div>

                                        <div class="media-body">
                                            <h6>Phone:</h6>
                                            <p>
                                                <a href="tel:+256779081082"
                                                    >+256 779 081 082</a
                                                >
                                            </p>
                                        </div>
                                    </div>

                                    <div class="d-flex media mb-20">
                                        <div class="icon-styled fs-40">
                                            <i class="ico-email-big"></i>
                                        </div>

                                        <div class="media-body">
                                            <h6>Email:</h6>
                                            <p>
                                                <a
                                                    href="mailto:info@alwadi-invest.com"
                                                    >info@alwadi-invest.com</a
                                                >
                                            </p>
                                        </div>
                                    </div>

                                    <h5 class="mt-3">Social Links</h5>

                                    <div class="social-icons">
                                        <a
                                            href="https://www.facebook.com/AlwadiInvest/"
                                            class="fa fa-facebook border-icon rounded-icon"
                                            title="facebook"
                                        ></a>
                                        <a
                                            href="#"
                                            class="fa fa-twitter border-icon rounded-icon"
                                            title="twitter"
                                        ></a>
                                        <a
                                            href="#"
                                            class="fa fa-instagram border-icon rounded-icon"
                                            title="instagram"
                                        ></a>
                                        <a
                                            href="#"
                                            class="fa fa-google border-icon rounded-icon"
                                            title="google"
                                        ></a>
                                    </div>
                                </div>
                            </div>
                            <!--.col-* -->
                        </div>
                    </div>
                </section>
                <?php include 'includes/footer.php' ?>