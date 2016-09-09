 @extends('layouts.master')

 @section('content')
    <!-- Header -->
        <header>
            <div class="container">
                <div class="intro-text">
                    <div class="intro-lead-in">Where Great Ideas Meet Great Software Development</div>
                    <div class="intro-heading">We Bring ideas to life</div>
                    <a href="#services" class="page-scroll btn btn-xl">Learn More</a>
                </div>
            </div>
        </header>

        <!-- Services Section -->
        <section id="services" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Services</h2>
                        <h3 class="section-subheading text-muted" style='width:60%;margin:50px auto;line-height:25px;'>Whether you need a prototype built, a full product overhaul, a feature created, something optimized, or just need help getting a difficult project completed on time, we can help.</h3>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-gears fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Product Development</h4>
                        <p class="text-muted">Using extensive experience in Product Management, we can help take your new idea from paper to people. From testable prototypes to fully featured platforms, the Lucolo team can build something meaningful for your company and its audience.</p>
                    </div>
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-gear fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Feature Development</h4>
                        <p class="text-muted">If you have an existing product that needs a new feature or optimization, we'd be happy to help. We'll take a look at your existing infrastructure, technology, and methodologies and come up with a plan to build something new on top of something old.</p>
                    </div>
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Websites</h4>
                        <p class="text-muted">We can help you estblish a fully customized and unique web presence for your business, product, or organization. Using the latest in web-based technology and design, we can create a website that not only looks great but also serves any business fuctions that you require.</p>
                    </div>
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-user-plus fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Talent Augmentation</h4>
                        <p class="text-muted">Sometimes you just need an extra pair of hands to get the project done on time. You can borrow our amazing team to get that project done on time and under budget. With our vast experience in technologies, languages, and methodoligies, we can hop right onto your team to get the job done.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section id="process">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">The Process</h2>
                        <h3 class="section-subheading text-muted">Our passion is creating beautiful, powerful, and scalable software to make our clients happy. Here's what you can expect.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="img/about/telephone.png" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>Step 1</h4>
                                        <h4 class="subheading">Get In Touch</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Reach out to us about your project or idea either by filling out the form below or emailing us a <a href='mailto:contact@lucolo.com'>contact@lucolo.com</a>.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="img/about/meeting.png" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>Step 2</h4>
                                        <h4 class="subheading">Let's Talk About It</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">If your project is a good fit for us, we'll get together either in person or on the phone to fully understand your vision, requirements, timelines, and constraints so we can put together a plan to get everything accomplished on time.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="img/about/code.png" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>Step 3</h4>
                                        <h4 class="subheading">We Go To Work</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">We the project scoped, milestones and checkins defined, and a price agreed upon, we go to work to deliver amazing results for you. Our passion comes from making our clients happy by building great software products and projects for them.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <a href='#contact'>
                                    <div class="timeline-image">
                                        <h4>reach out
                                            <br>to us
                                            <br>here!</h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- What We Do Section -->
        <section id="tech" class="container content-section text-center">
            <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Our Technologies</h2>
                        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary">
                    </i>
                    <i class="fa fa-desktop fa-stack-1x fa-inverse">
                    </i>
                </span>
                <h4 class="service-heading">
                    Front End
                </h4>
                <hr>
                    <p class="lead">Angular<br><small class='gray'>(Javascript Framework)</small></p>
                    <p class="lead">HTML5/CSS3</p>
                    <p class="lead">React<br><small class='gray'>(Javascript Framework)</small></p>
                    <p class="lead">jQuery</p>
                    <p class="lead">Bootstrap<br><small class='gray'>(CSS Framework)</small></p>
                    <p class="lead">Bootswatch<br><small class='gray'>(CSS Templates)</small></p>
                    <p class="lead">Adobe Illustrator/Pixelmator<br><small class='gray'>(Image Processing)</small></p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary">
                    </i>
                    <i class="fa fa-sitemap fa-stack-1x fa-inverse">
                    </i>
                </span>
                <h4 class="service-heading">
                    Full Stack and Integrations
                </h4>
                <hr>
                    <p class="lead">Laravel<br><small class='gray'>(PHP Framework)</small></p>
                    <p class="lead">Meteor<br><small class='gray'>(Javascript Framework)</small></p>
                    <p class="lead">Ruby on Rails</p>
                    <p class="lead">Stripe<br><small class='gray'>(Payment Processing)</small></p>
                    <p class="lead">Twilio<br><small class='gray'>(SMS/Voice Integration)</small></p>
                    <p class="lead">Sendgrid/SendinBlue<br><small class='gray'>(Email Marketing Integration)</small></p>
                    <p class="lead">Google APIs</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary">
                    </i>
                    <i class="fa fa-database fa-stack-1x fa-inverse">
                    </i>
                </span>
                <h4 class="service-heading">
                    Back End
                </h4>
                <hr>
                    <p class="lead">Postgresql</p>
                    <p class="lead">MySQL</p>
                    <p class="lead">MSSQL</p>
                    <p class="lead">MongoDB<br><small class='gray'>(noSQL Architecture)</small></p>
                    <p class="lead">Amazon Web Services<br><small class='gray'>(Cloud Sys Admin Services)</small></p>
                    <p class="lead">Galaxy</p>
                    <p class="lead">Heroku</p>
                    <p class="lead">Node.js</p>
                    <p class="lead">UNIX</p>
                </p>
            </div>
            </div>
            <div class="col-lg-12 text-center" style='margin:50px 0 0 0;'>
                <h4 class="section-heading">Don't see what you're looking for?</h4>
                <h3 class="section-subheading text-muted" style='line-height:25px;'>While the above is what our team specializes in, if you have technology requirement that you don't see listed above, <a href='#contact'>reach out to us</a> with the reqeust and we'd be happy to see if there's something we can do.</h3>
            </div>
        </section>

        <!-- Portfolio Grid Section -->
        <section id="portfolio" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Portfolio</h2>
                        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/golden.png" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Golden</h4>
                            <p class="text-muted">Website Design</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/escape.png" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Escape</h4>
                            <p class="text-muted">Website Design</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/dreams.png" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Dreams</h4>
                            <p class="text-muted">Website Design</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section id="team" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Our Amazing Team</h2>
                        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/team/1.jpg" class="img-responsive img-circle" alt="">
                            <h4>Kay Garland</h4>
                            <p class="text-muted">Lead Designer</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/team/2.jpg" class="img-responsive img-circle" alt="">
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/team/3.jpg" class="img-responsive img-circle" alt="">
                            <h4>Diana Pertersen</h4>
                            <p class="text-muted">Lead Developer</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Clients Aside -->
        <aside class="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Contact Section -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Contact Us</h2>
                        <h3 class="section-subheading text-muted">Reach out about your project or idea and we'll get back to you in no time!</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form name="/sentMessage" id="contactForm" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl">Send Message</button>
                                </div>
                                {!! csrf_field() !!}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <span class="copyright">All rights reserved, 2015 - {!! date('Y') !!} Lucolo, Inc</span>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline quicklinks">
                            <li><a href="#">Privacy Policy</a>
                            </li>
                            <li><a href="#">Terms of Use</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Portfolio Modals -->
        <!-- Use the modals below to showcase details about your portfolio projects! -->

        <!-- Portfolio Modal 1 -->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2>Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <p>
                                        <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                                    <ul class="list-inline">
                                        <li>Date: July 2014</li>
                                        <li>Client: Round Icons</li>
                                        <li>Category: Graphic Design</li>
                                    </ul>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 2 -->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2>Project Heading</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
                                    <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                                    <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 3 -->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2>Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                                    <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                                    <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>

        <!-- Theme JavaScript -->
        <script src="js/agency.min.js"></script>
@endsection