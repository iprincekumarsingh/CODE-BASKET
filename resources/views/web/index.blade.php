
@extends('layouts.main')

@section('main-section')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <div class="lightbar"></div>
          <div class="toplayer"></div>
          {{-- <h1>Let us join hands and grow together</h1> --}}
          <h1>{{"Experience the world of code !"}}</h1>
          {{-- <h2>Providing you with a platform of all in one place!</h2> --}}
          <h2>Learn, Explore, Create and Achieve</h2>
          <div><a href="{{url('/explore')}}" class="btn-get-started scrollto">Explore</a></div>
        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <img src="{{url('frontend/assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
            <img src="{{url('frontend/assets/img/about.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>What we do and what makes us different!</h3>
            <p class="fst-italic">
              Want to find all you want in one place? We the team of <strong>Code Basket</strong> provide you with:
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>All opportunities of different level of students in one place.</li>
              <li><i class="bi bi-check-circle"></i>Opportunites for women!</li>
              <li><i class="bi bi-check-circle"></i>Resources in one place for different domains.</li>
              <li><i class="bi bi-check-circle"></i>A corner to find games helping to learn people of all age about
                logical coding</li>
              {{-- <li><i class="bi bi-check-circle"></i>A corner to find student aids in one place!</li> --}}
            </ul>
            <a href="#services" class="read-more">Read More <i class="bi bi-long-arrow-right"></i></a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section  style="align-content: center ; display:flex; justify-content:space-between" id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-4 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1432" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Contributions</p>
          </div>

          <div class="col-lg-3 col-4 text-center">
            <span data-purecounter-start="0" data-purecounter-end="125" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Active</p>
          </div>

          <div class="col-lg-2 col-4 text-center">
            <span data-purecounter-start="0" data-purecounter-end="34" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Contributors</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Find everything in one place! </p>
        </div>

        <div class="row gy-4">
          {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <img src="{{url('frontend/assets/img/oppors.webp')}}" alt="">

              <div></div>
              <h4><a href="explore.html">OPPORTUNITIES</a></h4>
              <p>Explore opportunites for different level of schools.</p>
            </div>
          </div> --}}

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-orange ">
              <img src="{{url('frontend/assets/img/oppors.webp')}}" alt="">
              <h4><a href="explore.html">OPPORTUNITIES</a></h4>
              <p>Explore opportunites for different level of schools.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <img src="{{url('frontend/assets/img/res.png')}}" alt="">
              <h4><a href="explore.html">RESOURCES</a></h4>
              <p>From useful chrome extensions to technology resources , find everything here.</p>
            </div>
          </div>

          {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <img src="{{url('frontend/assets/img/finance.jpg')}}" alt="">
              <h4><a href="explore.html">FINANCIAL AIDS</a></h4>
              <p>Find fellowship and scholarships and various financial aids here!</p>
            </div>
          </div> --}}

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <img src="{{url('frontend/assets/img/games.jpg')}}" alt="">
              <h4><a href="explore.html">PLAY AND CODE</a></h4>
              <p>Do you like practical works more than theories! Learn to think logically and code by playing games!/p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <img src="{{url('frontend/assets/img/projects.jpg')}}" alt="">
              <h4><a href="explore.html">PROJECTS</a></h4>
              <p>Want to create Projects using the tech stacks you know? Find various projects from beginner to advanced
                level!</p>
            </div>
          </div>
          <!-- ======= Features Section ======= -->
          <section id="features" class="features">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Features</h2>
                <p>We don't limit our resources to our teams and registered members!</p>
              </div>

              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-lg-center">
                  <div class="feabox mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-receipt"></i>
                    <h4>NEWSLETTER</h4>
                    <p>People often miss application deadlines. Sign up to our newsletter to stay updated!</p>
                  </div>
                  <div class="feabox mt-5" data-aos="fade-up" data-aos-delay="200">
                    <i class="bx bx-cube-alt"></i>
                    <h4>CHILL AND LEARN</h4>
                    <p>We keep our resources very wide. Not everyone loves learning theories. We have provided games of
                      different organisations to have fun and learn!</p>
                  </div>
                  <div class="feabox mt-5" data-aos="fade-up" data-aos-delay="300">
                    <i class="bx bx-images"></i>
                    <h4>BE A CONTRIBUTOR</h4>
                    <p>You think you have resources which we have left out in out platform? Share your resources to us
                      and we will update them in our platform!</p>
                  </div>

                </div>
                <div class="image col-lg-6 order-1 order-lg-2 " data-aos="zoom-in" data-aos-delay="100">
                  <img src="{{url('frontend/assets/img/features.svg')}}" alt="" class="img-fluid">
                </div>
              </div>

            </div>
          </section><!-- End Features Section -->





          <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Frequently Asked Questions</h2>

              </div>

              <div class="faq-list">
                <ul>
                  <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                      data-bs-target="#faq-list-1"> Can we be a contributor if we don't sign up the NewsLetter? <i
                        class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                      <p>
                        Well, anyone can be a contributor. Make sure your resources are valid and we will approve them
                        once you upload!
                      </p>
                    </div>
                  </li>

                  <li data-aos="fade-up" data-aos-delay="200">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                      data-bs-target="#faq-list-2" class="collapsed">Is it free of cost?<i
                        class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        Yes it is! We provide links and resources of different organisations and therefore is free.
                      </p>
                    </div>
                  </li>

                  <li data-aos="fade-up" data-aos-delay="300">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                      data-bs-target="#faq-list-3" class="collapsed">How can I get updated about new opportunities?<i
                        class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        Sign up to our Newsletter and you will always be updated with recent trends!
                      </p>
                    </div>
                  </li>





                </ul>
              </div>

            </div>
          </section><!-- End Frequently Asked Questions Section -->

          <!-- ======= Contact Section ======= -->
          <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Contact</h2>
                <p>Feel free to contact us to make suggestion about resources and updations!</p>
              </div>

              <div class="row">
                <div class="col-lg-6">
                  <div class="info-box mb-4">
                    <i class="bx bx-map"></i>
                    <h3>Our Address</h3>
                    <p>Jagamara , Khandagiri , Bhubaneshwar</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="info-box  mb-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p>codebasket@gmail.com</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="info-box  mb-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p>+91 9864355567</p>
                  </div>
                </div>

              </div>

              <div class="row">
                <div class="col-lg-6">
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                          required>
                      </div>
                    </div>
                    <div class="form-group mt-3">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                        required>
                    </div>
                    <div class="form-group mt-3">
                      <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                  </form>
                </div>

              </div>

            </div>
          </section><!-- End Contact Section -->

  </main><!-- End #main -->
  @endsection

 