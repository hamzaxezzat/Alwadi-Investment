<?php include 'includes/header.php' ?>


                <section class="page_title ds s-overlay s-py-90 s-py-xl-150">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1 class="emptytext"><?php echo $lang["t-contact"]?></h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="./"><?php echo $lang["t-home"]?></a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#"><?php echo $lang["t-pages"]?></a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                    <?php echo $lang["t-contact-us"]?>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Contact Form -->
                <section class="ls ms s-py-90 s-py-xl-150 <?php  echo $lang["language"]?>">
                    <div class="container">
                        <div class="row">
                            <div
                                class="col-lg-6 col-xl-7 animate"
                                data-animation="scaleAppear"
                            >
                                <div class="hero-bg p-30 p-xl-60">
                                    <h5 for="name"><?php echo $lang["contact-form"]?></h5>

                                    <form
                                        action="https://formsubmit.co/hamza2007ezzat@gmail.com"
                                        action="https://google.com"
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
                                            placeholder="<?php echo $lang["name"]?>"
                                            required
                                        />

                                        <input
                                            type="email"
                                            name="email"
                                            placeholder="<?php echo $lang["email"]?>"
                                            required
                                        />
                                        <label for="message"
                                            ><?php echo $lang["your-message"]?> </label
                                        >

                                        <textarea
                                            name="message"
                                            cols="20"
                                            rows="6"
                                            placeholder=" <?php echo $lang["your-message"]?>"
                                        ></textarea>
                                        <button
                                            type="submit"
                                            class="button btn btn-maincolor btn-block"
                                        >
                                        <?php echo $lang["send"]?>
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
                                    <h5><?php echo $lang["contact-info"]?></h5>

                                    <div class="d-flex media mb-20">
                                        <div class="icon-styled fs-40">
                                            <i class="ico-home-big"></i>
                                        </div>

                                        <div class="media-body">
                                            <h6><?php echo $lang["t-address"]?></h6>
                                            <p class="color-darkgrey">
                                            <?php echo $lang["h-address"]?>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="d-flex media mb-20">
                                        <div class="icon-styled fs-40">
                                            <i class="ico-phone-big"></i>
                                        </div>

                                        <div class="media-body">
                                            <h6><?php echo $lang["t-phone"]?>:</h6>
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
                                            <h6><?php echo $lang["t-email"]?>:</h6>
                                            <p>
                                                <a
                                                    href="mailto:info@alwadi-invest.com"
                                                    >info@alwadi-invest.com</a
                                                >
                                            </p>
                                        </div>
                                    </div>

                                    <h5 class="mt-3"><?php echo $lang["t-social-links"]?></h5>

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
                <!-- Contact Form End -->
                <?php include 'includes/footer.php' ?>