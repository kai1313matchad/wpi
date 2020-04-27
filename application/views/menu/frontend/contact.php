 <!--====================  breadcrumb area ====================-->
    <div class="page-breadcrumb bg-img space__bottom--r120" data-bg="<?php echo base_url() ?>assets/img/backgrounds/bc-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-breadcrumb-content text-center">
                        <h1>Kontak Kami</h1>
                        <!-- <ul class="page-breadcrumb-links">
                            <li><a href="<?=base_url()?>">Home</a></li>
                            <li>Contact</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of breadcrumb area  ====================-->
    <!--====================  contact area ====================-->
    <div class="conact-section space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col space__bottom--40">
                    <div class="contact-map">
                        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.3900465890656!2d112.72947782916577!3d-7.29077566940912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb9252c1b2c7%3A0xc90b76159728f361!2sJl.+Lesti+No.42%2C+Darmo%2C+Wonokromo%2C+Kota+SBY%2C+Jawa+Timur+60241%2C+Indonesia!5e0!3m2!1sen!2s!4v1481705088372">
						</iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="contact-information">
                        <h4 class="space__bottom--30">Kontak informasi</h4>
                        <ul>
                            <li>
                                <span class="icon"><i class="fa fa-map-marker"></i></span>
                                <span class="text"><span>Jl. Lesti No. 42 Surabaya 60241 Jawa Timur - Indonesia</span></span>
                            </li>
                            <li>
                                <span class="icon"><i class="fa fa-phone"></i></span>
                                <span class="text"><a href="#">(62-31)5678 346</a><a href="#">(62-31)568 0646</a></span>
                            </li>
                            <li>
                                <span class="icon"><i class="fa fa-envelope-open"></i></span>
                                <span class="text"><a href="#">admin@wiperindonesia.com</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="contact-form">
                        <h4 class="space__bottom--30">Hubungi kami</h4>
                        <form id="contact-form" action="<?php base_url() ?>C_dashboard/send_email" method="post">
                            <div class="row row-10">
                                <div class="col-md-6 col-12 space__bottom--20"><input name="name" type="text" placeholder="Your Name"></div>
                                <div class="col-md-6 col-12 space__bottom--20"><input name="sender" type="email" placeholder="Your Email"></div>
                                <div class="col-md-12 col-12 space__bottom--20"><input name="phone" type="text" placeholder="Your Address"></div>
                                <div class="col-md-6 col-12 space__bottom--20"><input name="company" type="text" placeholder="Company Name"></div>
                                <div class="col-md-6 col-12 space__bottom--20"><input name="phone" type="phone" placeholder="Your Phone"></div>
                                
                                <div class="col-12"><textarea name="msg" placeholder="Your Message"></textarea></div>
                                <div class="col-12"><button type="submit">Send Message</button></div>
                            </div>
                        </form>
                        <p class="form-message"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of contact area  ====================-->