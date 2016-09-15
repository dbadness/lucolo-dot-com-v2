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
                        <p class="text-muted">If you have an existing product that needs a new feature or optimization, we'd be happy to help. We'll take a look at your existing infrastructure, technology, and methodologies and come up with a plan to build something new on top of your existing product.</p>
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

        <!-- What We Do Section -->
        <section id="tech" class="container content-section text-center">
            <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Our Technologies</h2>
                        <h3 class="section-subheading text-muted">From services, to frameworks, to libraries, to languages, our talented team has your project requirements covered.</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
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
            <div class="col-md-3">
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
            <div class="col-md-3">
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
                    <p class="lead">Apache / Nginx</p>
                </p>
            </div>
            <div class="col-md-3">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary">
                    </i>
                    <i class="fa fa-comment fa-stack-1x fa-inverse">
                    </i>
                </span>
                <h4 class="service-heading">
                    Languages
                </h4>
                <hr>
                    <p class="lead">PHP</p>
                    <p class="lead">Java</p>
                    <p class="lead">C&#43;&#43;</p>
                    <p class="lead">C&#35;</p>
                    <p class="lead">Python</p>
                    <p class="lead">HTML(5)</p>
                    <p class="lead">CSS(3)</p>
                    <p class="lead">UNIX</p>
                    <p class="lead">jQuery</p>
                    <p class="lead">Javascript</p>
                </p>
            </div>
            <div class="col-lg-12 text-center" style='margin:50px 0 -150px 0;'>
                <h4 class="section-heading">Don't see what you're looking for?</h4>
                <h3 class="section-subheading text-muted" style='line-height:25px;'>While the above is what our team specializes in, if you have technology requirement that you don't see listed above, <a href='#contact'>reach out to us</a> with the request and we'd be happy to see if there's something we can do.</h3>
            </div>
        </section>

        <!-- Process Section -->
        <section id="process" class="bg-light-gray">
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

        <!-- Portfolio Grid Section -->
        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Featured Project</h2>
                        <h3 class="section-subheading text-muted">Take a look at how Lucolo turned ideas into great software.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-6 portfolio-item">
                        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/mailsy.png" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4><a class='blackUnderline' href='https://www.mailsy.co'>Mailsy.co</a></h4>
                            <p class="text-muted">Bringing an idea from paper to people.</p>
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
                        <h2 class="section-heading">Meet Dave, Lucolo's Founder</h2>
                        <h3 class="section-subheading text-muted">"While great software is important, having a caring team that you can work with to bring your ideas to life is Lucolo's sole mission."</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="team-member">
                            <img src="img/team/dave.png" class="img-responsive img-circle" alt="">
                            <h4>Dave Baines</h4>
                            <p class="text-muted">Founder, Lead Developer, Client Obssesovist</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="https://www.twitter.com/imdavebaines" target='_blank'><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="http://www.medium.com/lucoloinc" target='_blank'><i class="fa fa-medium"></i></a>
                                </li>
                                <li><a href="https://www.linkedin.com/in/davidabaines" target='_blank'><i class="fa fa-linkedin"></i></a>
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
        <!--
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
        -->

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
                                    <h2>Mailsy.co</h2>
                                    <p class="item-intro text-muted">An email automation tool built specifically for sales teams. </p>
                                    <img class="img-responsive img-centered" src="img/portfolio/mailsy-full.png" alt="mailsy" style='border:solid 5px black;'>
                                    <p>In late 2015, Lucolo founder Dave Baines wanted to work on a project to help sales folks engage their audiences in a more human and effective way via email. Instead of having sales reps send out individual emails to prospects and customers over and over again, why not automate that process so sales reps have more time to call, meet with, and engage customers to drive more revenue to their teams and businesses? With that question in mind, Mailsy was born.</p>

                                    <p>Mailsy is a full-featured web product that enables users to create emails and send them out to a large list of contacts in seconds. Each email Mailsy sends is customized for each recipient and each email comes from the user's email address so recipients are very likely to respond to the message. The Lucolo team leaned heavily on its product management, marketing, and software engineering talents to bring Mailsy to market and we could do the same for you and your product idea.</p>

                                    <p class='lead' style='text-align:left;'>Project Type: <strong>Product Development</strong></p>
                                    <p class='lead' style='text-align:left;'>Technologies Used</p>
                                    <ul style='text-align:left;'>
                                        <li><a class='blackUnderline' target='_blank' href='http://www.laravel.com'>Laravel</a> (PHP Framework)</li>
                                        <li><a class='blackUnderline' target='_blank' href='http://www.getbootstrap.com'>Bootstrap</a> (CSS Elements)</li>
                                        <li><a class='blackUnderline' target='_blank' href='http://www.jquery.com'>jQuery</a></li>
                                        <li>HTML5/CSS3</li>
                                        <li><a class='blackUnderline' target='_blank' href='http://www.stripe.com'>Stripe</a> (Payment Processing)</li>
                                        <li><a class='blackUnderline' target='_blank' href='https://developers.google.com/apis-explorer/#p/'>Google APIs</a> (Gmail)</li>
                                        <li><a class='blackUnderline' target='_blank' href='http://www.sendinblue.com'>Sendinblue</a> (Email Marketing)</li>
                                    </ul>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection