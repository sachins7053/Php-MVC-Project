<?php include 'header.php'; ?>

<style>
    
.carousel-control-next, .carousel-control-prev {
    position: absolute;
    top: 0;
    bottom: 0;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 15%;
    color: #fff;
    text-align: center;
    opacity: 0;
    transition: opacity .15s ease;
}
</style>



<div class="">
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="public/assets/img/hero/b1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="public/assets/img/hero/b2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="public/assets/img/hero/banner3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<style>
    .sc{
        color:white;
    }
</style>
  

     <!--==============================
    Service Area
    ==============================-->
    <section class=" space-top space-extra-bottom" data-bg-src="public/assets/img/bg/sr-bg-3-1.jpg">
        <div class="container   wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-md-8 col-lg-6 text-center text-lg-start">
                    <div class="title-area">
                        <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Our Featured Services</span>
                        <h2 class="sec-title3 h1">BEST PROFESSIONAL SOLUTIONS PROVIDER FOR BUSINESS</h2>
                    </div>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <div class="sec-btns2">
                        <a href="service.html" class="vs-btn">View All Services<i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2">
                <div class="col-xl-3">
                    <div class="service-style3">
                        <div class="service-front">
                            <div class="service-img">
                                <img src="public/assets/img/service/sr-3-1.jpg" alt="image" class="w-100">
                            </div>
                            <div class="service-content">
                                <div class="service-icon"><img src="public/assets/img/icon/sr-icon-3-1.png" alt="icon"></div>
                                <h3 class="service-title h6"><a href="service-details.html">ACCOUNTING</a></h3>
                            </div>
                        </div>
                        <div class="service-back">
                            <div class="service-content">
                                <div class="service-icon"><img src="public/assets/img/icon/sr-icon-3-1.png" alt="icon"></div>
                                <h3 class="service-title h6"><a class="text-inherit" href="service-details.html">ACCOUNTING</a></h3>
                                <p class="service-text sc" style="color:white;">The history of accounting goes back a 1000 years, but the relevance of it still stays strong...</p>
                                <a href="service-details.html" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="service-style3">
                        <div class="service-front">
                            <div class="service-img">
                                <img src="public/assets/img/service/sr-3-2.jpg" alt="image" class="w-100">
                            </div>
                            <div class="service-content">
                                <div class="service-icon"><img src="public/assets/img/icon/sr-icon-3-2.png" alt="icon"></div>
                                <h3 class="service-title h6"><a href="service-details.html">
AUDITING & ASSURANCE</a></h3>
                            </div>
                        </div>
                        <div class="service-back">
                            <div class="service-content">
                                <div class="service-icon"><img src="public/assets/img/icon/sr-icon-3-2.png" alt="icon"></div>
                                <h3 class="service-title h6"><a class="text-inherit" href="service-details.html">
AUDITING & ASSURANCE</a></h3>
                                <p class="service-text">With businesses seeking greater success on a global scale, it is becoming more and more...
</p>
                                <a href="service-details.html" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="service-style3">
                        <div class="service-front">
                            <div class="service-img">
                                <img src="public/assets/img/service/sr-3-3.jpg" alt="image" class="w-100">
                            </div>
                            <div class="service-content">
                                <div class="service-icon"><img src="public/assets/img/icon/sr-icon-3-4.png" alt="icon"></div>
                                <h3 class="service-title h6"><a href="service-details.html">INCOME TAX</a></h3>
                            </div>
                        </div>
                        <div class="service-back">
                            <div class="service-content">
                                <div class="service-icon"><img src="public/assets/img/icon/sr-icon-3-4.png" alt="icon"></div>
                                <h3 class="service-title h6"><a class="text-inherit" href="service-details.html">INCOME TAX</a></h3>
                                <p class="service-text">The tax landscapes have changed a great deal over the years, and the complexity of change...</p>
                                <a href="service-details.html" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="service-style3">
                        <div class="service-front">
                            <div class="service-img">
                                <img src="public/assets/img/service/sr-3-4.jpg" alt="image" class="w-100">
                            </div>
                            <div class="service-content">
                                <div class="service-icon"><img src="public/assets/img/icon/sr-icon-3-5.png" alt="icon"></div>
                                <h3 class="service-title h6"><a href="service-details.html">GOODS & SERVICES TAX (GST)</a></h3>
                            </div>
                        </div>
                        <div class="service-back">
                            <div class="service-content">
                                <div class="service-icon"><img src="public/assets/img/icon/sr-icon-3-5.png" alt="icon"></div>
                                <h3 class="service-title h6"><a class="text-inherit" href="service-details.html">GOODS & SERVICES TAX (GST)</a></h3>
                                <p class="service-text">The GST journey in India began in the year 2000, and since then, has come a long way in shaping...</p>
                                <a href="service-details.html" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="service-style3">
                        <div class="service-front">
                            <div class="service-img">
                                <img src="public/assets/img/service/sr-3-5.jpg" alt="image" class="w-100">
                            </div>
                            <div class="service-content">
                                <div class="service-icon"><img src="public/assets/img/icon/sr-icon-3-3.png" alt="icon"></div>
                                <h3 class="service-title h6"><a href="service-details.html">COMPANY LAW MATTERS CONSULTANCY</a></h3>
                            </div>
                        </div>
                        <div class="service-back">
                            <div class="service-content">
                                <div class="service-icon"><img src="public/assets/img/icon/sr-icon-3-3.png" alt="icon"></div>
                                <h3 class="service-title h6"><a class="text-inherit" href="service-details.html">COMPANY LAW MATTERS CONSULTANCY</a></h3>
                                <p class="service-text">Whether it is the formation of Indian or offshore organizations, clients require thorough...</p>
                                <a href="service-details.html" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    <div class="counter-wrap1 space">
        <div class="container">
            <div class="row justify-content-between gy-4">
                <div class="col-6 col-lg-auto   wow fadeInUp" data-wow-delay="0.2s">
                    <div class="counter-media">
                        <div class="counter-media__icon"><img src="public/assets/img/icon/count-1-1.png" alt="icon"></div>
                        <div class="media-body">
                            <span class="counter-media__number h1">850+</span>
                            <p class="counter-media__title">Happy Customer</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-auto   wow fadeInUp" data-wow-delay="0.3s">
                    <div class="counter-media">
                        <div class="counter-media__icon"><img src="public/assets/img/icon/count-1-2.png" alt="icon"></div>
                        <div class="media-body">
                            <span class="counter-media__number h1">650 +</span>
                            <p class="counter-media__title">Star Work Reviews</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-auto   wow fadeInUp" data-wow-delay="0.4s">
                    <div class="counter-media">
                        <div class="counter-media__icon"><img src="public/assets/img/icon/count-1-3.png" alt="icon"></div>
                        <div class="media-body">
                            <span class="counter-media__number h1">567</span>
                            <p class="counter-media__title">Project Complate</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-auto   wow fadeInUp" data-wow-delay="0.5s">
                    <div class="counter-media">
                        <div class="counter-media__icon"><img src="public/assets/img/icon/count-1-4.png" alt="icon"></div>
                        <div class="media-body">
                            <span class="counter-media__number h1">10+</span>
                            <p class="counter-media__title">Win Of Awards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    About Us
    ==============================-->
    <section class=" space-top space-extra-bottom">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-6 mb-30 pb-10 pb-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="img-box5">
                        <div class="img-1"><img src="public/assets/img/about/ab-4-1.jpg" alt="image"></div>
                        <div class="img-bottom">
                            <div class="img-2"><img src="public/assets/img/about/ab-4-2.jpg" alt="image"></div>
                            <div class="img-3"><img src="public/assets/img/about/ab-4-3.jpg" alt="image"></div>
                        </div>
                        <div class="shape1"></div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30 minimize" >
                    <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>ABOUT OUR COMPANY</span>
                    <h6 class="sec-title3 " id="sec-title3  ">Welcome to S krishna & company</h6>
                    <div class="exp-media aling-justify">
                        <div class="exp-media__total">12</div>
                        <div class="media-body">
                            <h3 class="exp-media__title">Years Experience</h3>
                            <p class="exp-media__text">M/s S Krishna & Company, a Chartered Accountants Firm has been established in the year 2013 and has experience of more than 9 years. Our team comprises a group of dedicated professionals with expertise in their fields, enabling us to establish long-lasting relationships with our valued clients.</p>
                        </div>
                    </div>
                    <div class="list-style1">
                        <ul>
                            <li><i class="far fa-check-circle"></i>All In One Solution Firm</li>
                            <li><i class="far fa-check-circle"></i>Amazing Expert Professional Team</li>
                            <li><i class="far fa-check-circle"></i>Quality Solution For all tpye of Business Organization</li>
                            <li><i class="far fa-check-circle"></i>24/7 Quick Supports services</li>
                        </ul>
                    </div>
                    <a href="about.php" class="vs-btn">Learn More<i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    CTA Area
    ==============================-->
    <section class="z-index-common space" data-bg-src="public/assets/img/bg/h.png">
        <div class="container">
            <div class="row text-center text-lg-start align-items-center justify-content-between">
                <div class="col-lg-auto">
                    <span class="sec-subtitle text-white">We are here to answer your questions 24/7</span>
                    <h2 class="h1 sec-title cta-title1">Need A Professional Consultation?</h2>
                </div>
                <div class="col-lg-auto">
                    <a href="contact.php" class="vs-btn">Get A Quote<i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Service Area
    ==============================-->
            <div class="tab-content space-top" id="nav-tabserviceContent">
                <div class="tab-pane fade show active" id="nav-digitalmarketing" role="tabpanel" aria-labelledby="nav-digitalmarketing-tab">
                    <div class="row gx-60 gy-30">
                        <div class="col-lg-6">
                            <div class="img-box7">
                                <img src="public/assets/img/about/ab-6-1.jpg" alt="About" class="w-100">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-box1">
                                <h2 class="about-title h3">WHY WE ARE THE BEST CHARTERED ACCOUNTANT FIRM IN INDIA</h2>
                                <span class="about-subtitle"></span>
                                <p class="about-text">Energistically brand efficient paradigms vis resource maximizing process improvements. Dramatically repurpose stand-alone bandwidth after centric strategic theme areas. Intrinsicly build synergistic...</p>
                                <div class="list-style2">
                                    <ul>
                                        <li><i class="fas fa-check-circle"></i>Fast Growing Sells</li>
                                        <li><i class="fas fa-check-circle"></i>24/7 Quality Services</li>
                                        <li><i class="fas fa-check-circle"></i>Skilled Team Members</li>
                                        <li><i class="fas fa-check-circle"></i>Best Quality Services</li>
                                    </ul>
                                </div>
                                <a href="service-details.html" class="vs-btn">Learn More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-webdevelopment" role="tabpanel" aria-labelledby="nav-webdevelopment-tab">
                    <div class="row gx-60 gy-30">
                        <div class="col-xl-6">
                            <div class="img-box7">
                                <img src="public/assets/img/about/ab-6-2.jpg" alt="About" class="w-100">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="about-box1">
                                <h2 class="about-title h3">Web Development</h2>
                                <span class="about-subtitle">156 Jobs Done</span>
                                <p class="about-text">Energistically brand efficient paradigms vis resource maximizing process improvements. Dramatically repurpose stand-alone bandwidth after centric strategic theme areas. Intrinsicly build synergistic...</p>
                                <div class="list-style2">
                                    <ul>
                                        <li><i class="fas fa-check-circle"></i>Fast Growing Sells</li>
                                        <li><i class="fas fa-check-circle"></i>24/7 Quality Services</li>
                                        <li><i class="fas fa-check-circle"></i>Skilled Team Members</li>
                                        <li><i class="fas fa-check-circle"></i>Best Quality Services</li>
                                    </ul>
                                </div>
                                <a href="service-details.html" class="vs-btn">Learn More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-machinelearning" role="tabpanel" aria-labelledby="nav-machinelearning-tab">
                    <div class="row gx-60 gy-30">
                        <div class="col-xl-6">
                            <div class="img-box7">
                                <img src="public/assets/img/about/ab-6-3.jpg" alt="About" class="w-100">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="about-box1">
                                <h2 class="about-title h3">Machine Learning</h2>
                                <span class="about-subtitle">592 Jobs Done</span>
                                <p class="about-text">Energistically brand efficient paradigms vis resource maximizing process improvements. Dramatically repurpose stand-alone bandwidth after centric strategic theme areas. Intrinsicly build synergistic...</p>
                                <div class="list-style2">
                                    <ul>
                                        <li><i class="fas fa-check-circle"></i>Fast Growing Sells</li>
                                        <li><i class="fas fa-check-circle"></i>24/7 Quality Services</li>
                                        <li><i class="fas fa-check-circle"></i>Skilled Team Members</li>
                                        <li><i class="fas fa-check-circle"></i>Best Quality Services</li>
                                    </ul>
                                </div>
                                <a href="service-details.html" class="vs-btn">Learn More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-softwareservices" role="tabpanel" aria-labelledby="nav-softwareservices-tab">
                    <div class="row gx-60 gy-30">
                        <div class="col-xl-6">
                            <div class="img-box7">
                                <img src="public/assets/img/about/ab-6-4.jpg" alt="About" class="w-100">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="about-box1">
                                <h2 class="about-title h3">Software Services</h2>
                                <span class="about-subtitle">1259 Jobs Done</span>
                                <p class="about-text">Energistically brand efficient paradigms vis resource maximizing process improvements. Dramatically repurpose stand-alone bandwidth after centric strategic theme areas. Intrinsicly build synergistic...</p>
                                <div class="list-style2">
                                    <ul>
                                        <li><i class="fas fa-check-circle"></i>Fast Growing Sells</li>
                                        <li><i class="fas fa-check-circle"></i>24/7 Quality Services</li>
                                        <li><i class="fas fa-check-circle"></i>Skilled Team Members</li>
                                        <li><i class="fas fa-check-circle"></i>Best Quality Services</li>
                                    </ul>
                                </div>
                                <a href="service-details.html" class="vs-btn">Learn More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!--==============================
    Projects Wrapper
    ==============================-->
    
    <!--==============================
    Work Process
    ==============================-->
    <section class=" space-top space-extra-bottom" data-bg-src="public/assets/img/bg/process-bg-2-1.jpg">
        <div class="container   wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area">
                        <span class="sec-subtitle">GREAT JOURNEY FOR PROFESSIONAL ACCOUNTANT</span>
                        <h2>SPECIALIZES IN COMPANY'S LAWS SERVICES</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-4 col-xl-auto process-style2">
                    <div class="process-arrow"><img src="public/assets/img/icon/process-arrow-2-1.png" alt="arrow"></div>
                    <div class="process-icon">
                        <img src="public/assets/img/icon/process-1-1.png" alt="icon">
                        <span class="process-number">01</span>
                    </div>
                    <h3 class="process-title h5">Professional Solutions</h3>
                    <p class="process-text">We provide a range of professional services related to accounting, auditing, taxation, and financial advisory.</p>
                </div>
                <div class="col-md-4 col-xl-auto process-style2">
                    <div class="process-arrow"><img src="public/assets/img/icon/process-arrow-2-1.png" alt="arrow"></div>
                    <div class="process-icon">
                        <img src="public/assets/img/icon/process-1-2.png" alt="icon">
                        <span class="process-number">02</span>
                    </div>
                    <h3 class="process-title h5">Experience Team</h3>
                    <p class="process-text">S KRISHNA & COMPANY are committed to the firm and clients. At the core, each partner has a wide base of knowledge which enables to provide the best possible service to our clients.

</p>
                </div>
                <div class="col-md-4 col-xl-auto process-style2">
                    <div class="process-arrow"><img src="public/assets/img/icon/process-arrow-2-1.png" alt="arrow"></div>
                    <div class="process-icon">
                        <img src="public/assets/img/icon/process-1-3.png" alt="icon">
                        <span class="process-number">03</span>
                    </div>
                    <h3 class="process-title h5">Best Laws Solutions</h3>
                    <p class="process-text">The Firm as a business organization has become popular over the years. With the growth in size of these corporates, governance has become all the more important.</p>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Testimonial Area
    ==============================-->
    <section class=" space-top space-extra-bottom" data-bg-src="public/assets/img/bg/testi-bg-2-1.jpg">
        <div class="container position-relative wow fadeInUp" data-wow-delay="0.2s">
            <div class="testimonial-arrow d-none d-xxl-block">
                <button class="icon-btn style5" data-slick-prev=".testi-author-slide"><i class="far fa-arrow-left"></i></button>
                <button class="icon-btn style5" data-slick-next=".testi-author-slide"><i class="far fa-arrow-right"></i></button>
            </div>
            <div class="row gx-60">
                <div class="col-lg-5 col-xl-6">
                    <div class="img-box6 vs-carousel" data-slide-show="1" data-fade="true" data-asnavfor=".testi-text-slide, .testi-author-slide">
                        <div>
                            <img src="public/assets/img/about/ab-5-1.jpg" alt="about image" class="w-100">
                        </div>
                        <div>
                            <img src="public/assets/img/about/ab-5-2.jpg" alt="about image" class="w-100">
                        </div>
                        <div>
                            <img src="public/assets/img/about/ab-5-3.jpg" alt="about image" class="w-100">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-6 aling-jistify">
                    <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Customer Feedbacks</span>
                    <h2 class="sec-title3 h1">What They’re Saying</h2>
                    <div class="testi-text-slide vs-carousel" data-slide-show="1" data-fade="true" data-asnavfor=".img-box6, .testi-author-slide">
                        <div>
                            <p class="testi-text">“I'm taking service with this CA Firm since 3 years and I want to genuinely say that owner as well as whole staff of this firm supports and helps u in every financial work u ask from them to do so.”</p>
                        </div>
                        <div>
                            <p class="testi-text">“Fast movers in the field of chartered accountants.”</p>
                        </div>
                        <div>
                            <p class="testi-text">“Good company for accounting & Auting”</p>
                        </div>
                    </div>
                    <div class="testi-author-slide row vs-carousel" data-focuson-select="true" data-slide-show="2" data-md-slide-show="2" data-asnavfor=".testi-text-slide, .img-box6">
                        <div class="col">
                            <div class="author-style1">
                                <div class="author-img"></div>
                                <div class="media-body">
                                  
                                    <span class="author-degi">Deepak Automotive Private Limited</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="author-style1">
                                <div class="author-img"></div>
                                <div class="media-body">
                                 
                                    <span class="author-degi">Shri Ramdev Motors Private Limitedd.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="author-style1">
                                <div class="author-img"></div>
                                <div class="media-body">
                               
                                    <span class="author-degi">Devbhakar Surgical Private Limited</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Brand Section
    ==============================-->
    <section class="" data-bg-src="public/assets/img/bg/brand-bg-2-2.jpg">
        <div class="container">
            <div class="sec-line-wrap">
                <div class="sec-line"></div>
                <h2 class="sec-title2">Our Trusted Clients</h2>
                <div class="sec-line"></div>
            </div>
            <div class="row vs-carousel text-center" data-slide-show="5" data-md-slide-show="3" data-sm-slide-show="2" data-xs-slide-show="2">
                <div class="col-auto"><img src="public/assets/img/brand/c-logo-1.png" alt="Brand"></div>
                <div class="col-auto"><img src="public/assets/img/brand/c-logo-2.webp" alt="Brand"></div>
                <div class="col-auto"><img src="public/assets/img/brand/c-logo-3.png" alt="Brand"></div>
                <div class="col-auto"><img src="public/assets/img/brand/c-logo-4.png" alt="Brand">
            <p>ascentbpo</p></div>
                <div class="col-auto"><img src="public/assets/img/brand/c-logo-5.jpg" alt="Brand"></div>
                <div class="col-auto"><img src="public/assets/img/brand/c-logo-6.png" alt="Brand"></div>
            </div>
        </div>
    </section>
    <!--==============================
    Blog Area
    ==============================-->
    <section class="vs-blog-wrapper space-top " data-bg-src="public/assets/img/bg/blog-bg-2-1.jpg">
        <div class="container   wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area">
                        <span class="sec-subtitle">What We Do For You</span>
                        <h2 class="sec-title3 h1">Weekly Latest Updates</h2>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
                <div class="col-xl-4">
                    <div class="vs-blog blog-style2">
                        <div class="blog-img">
                            <img src="public/assets/img/blog/blog-1-1.jpg" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-calendar"></i>24 Feb, 2022</a>
                                    <a href="blog.html"><i class="fal fa-user"></i>by admin</a>
                                </div>
                                <h3 class="blog-title h6"><a href="blog-details.html">Contrary to popular belief ipsum is not simply </a></h3>
                                <p class="blog-text">Whereas client centric expertise without high-quality methodologies. Completely negotiate extensible supply...</p>
                                <a href="blog-details.html" class="vs-btn style3">Read Details<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style2">
                        <div class="blog-img">
                            <img src="public/assets/img/blog/blog-1-4.jpg" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-calendar"></i>30 Mar, 2022</a>
                                    <a href="blog.html"><i class="fal fa-user"></i>by admin</a>
                                </div>
                                <h3 class="blog-title h6"><a href="blog-details.html">Lorem ipsum placeholder text commonly used</a></h3>
                                <p class="blog-text">Whereas client centric expertise without high-quality methodologies. Completely negotiate extensible supply...</p>
                                <a href="blog-details.html" class="vs-btn style3">Read Details<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style2">
                        <div class="blog-img">
                            <img src="public/assets/img/blog/blog-1-2.jpg" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-calendar"></i>31 Jul, 2022</a>
                                    <a href="blog.html"><i class="fal fa-user"></i>by admin</a>
                                </div>
                                <h3 class="blog-title h6"><a href="blog-details.html">From its medieval to the digital learn everything</a></h3>
                                <p class="blog-text">Whereas client centric expertise without high-quality methodologies. Completely negotiate extensible supply...</p>
                                <a href="blog-details.html" class="vs-btn style3">Read Details<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style2">
                        <div class="blog-img">
                            <img src="public/assets/img/blog/blog-1-3.jpg" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-calendar"></i>26 Aug, 2022</a>
                                    <a href="blog.html"><i class="fal fa-user"></i>by admin</a>
                                </div>
                                <h3 class="blog-title h6"><a href="blog-details.html">Global Business Goal Make Life Easy From Tech</a></h3>
                                <p class="blog-text">Whereas client centric expertise without high-quality methodologies. Completely negotiate extensible supply...</p>
                                <a href="blog-details.html" class="vs-btn style3">Read Details<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 







<?php include 'footer.php'; ?>
