<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Frontend Developer - Islam Elzneny</title>

        <meta property="title" content="Frontend Developer - Islam Elzneny">
        <meta property="image" content="{{ asset('assets/images/eslam.jpg') }}">
        <meta property="keywords" content="frontend ,Frontend Deeveloper, Angular, HTML, CSS, Js, Laravel, PHP, فرونت اند, eslam elzneny, اسلام الزنيني">
        <meta property="description" content="I specialize in building robust and scalable e-commerce solutions that drive sales and enhance customer satisfaction. Utilizing frameworks like Angular. I create visually appealing and user-friendly interfaces that keep customers engaged. I optimize web applications to handle high traffic and provide analytics to monitor performance and sales.">
        <meta property="og:title" content="Frontend Developer - Islam Elzneny">
        <meta property="og:type" content="website">
        <meta property="og:description" content="I specialize in building robust and scalable e-commerce solutions that drive sales and enhance customer satisfaction. Utilizing frameworks like Angular. I create visually appealing and user-friendly interfaces that keep customers engaged. I optimize web applications to handle high traffic and provide analytics to monitor performance and sales.">
        <meta property="og:keywords"  content="frontend ,Frontend Deeveloper, Angular, HTML, CSS, Js, Laravel, PHP, فرونت اند, eslam elzneny, اسلام الزنيني">
        <meta property="og:image" content="{{ asset('assets/images/eslam.jpg') }}">
        <meta name="twitter:title" content="Frontend Developer - Islam Elzneny">
        <meta property="twitter:description" content="I specialize in building robust and scalable e-commerce solutions that drive sales and enhance customer satisfaction. Utilizing frameworks like Angular. I create visually appealing and user-friendly interfaces that keep customers engaged. I optimize web applications to handle high traffic and provide analytics to monitor performance and sales.">
        <meta property="twitter:keywords"  content="frontend ,Frontend Deeveloper, Angular, HTML, CSS, Js, Laravel, PHP, فرونت اند, eslam elzneny, اسلام الزنيني">
        <meta name="twitter:image" content="{{ asset('assets/images/eslam.jpg') }}">

        <!-- Favicon-->
	    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" dafer>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet" />


    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">
                    <span>Islam Elzneny</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        {{-- <li class="nav-item"><a class="nav-link" href="#team">Team</a></li> --}}
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading animate__animated animate__backInDown">Welcome To My Zone!</div>
                <div class="masthead-heading text-uppercase animate__animated animate__backInLeft">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase animate__animated animate__jello" href="#services">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Here, I'm Provide Three Services</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4 animatedSection">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">I specialize in building robust and scalable e-commerce solutions that drive sales and enhance customer satisfaction. Utilizing frameworks like Angular. I create visually appealing and user-friendly interfaces that keep customers engaged. I optimize web applications to handle high traffic and provide analytics to monitor performance and sales.</p>
                    </div>
                    <div class="col-md-4 animatedSection">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">My designs adapt to the user’s device, providing an intuitive and engaging experience, reducing bounce rates, and improving user retention. I focus on speed and usability, ensuring your site is both beautiful and functional.</p>
                    </div>
                    <div class="col-md-4 animatedSection">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">I implement best practices and the latest technologies to protect your web applications from vulnerabilities and threats. I ensure that your applications comply with industry standards and regulations, providing peace of mind and protecting your business and customers from potential cyber-attacks.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">All My Projects I worked On Creatify Network</h3>
                </div>
                <div class="row">
                    @foreach ($portfolio_arr as $portfolio)
                        <div class="col-lg-4 col-sm-6 mb-4 animatedSection">
                            <!-- Portfolio item 1-->
                            <div class="portfolio-item">
                                <a class="portfolio-link" onclick="getPortfolioModal('{{$portfolio['id']}}')" data-bs-toggle="modal" href="#portfolioModal">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="{{ asset($portfolio['image']) }}" alt="..." />
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">{{ $portfolio['project_name'] }}</div>
                                    <div class="portfolio-caption-subheading text-muted">{{ $portfolio['sub_title'] }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Education & Experience</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('assets/images/about/hti.webp') }}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2019-2023</h4>
                                <h4 class="subheading">Higher Technological Institute</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Bachelor of Computer Science | Higher Technological Institute | GPA:3.88</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('assets/images/about/creatify_network_logo.jpeg') }}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2021 – 10</h4>
                                <h4 class="subheading">Creatify Network</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Front End Developer (Angular) | Creatify Network | Dokki, Giza</p></div>
                        </div>
                    </li>
                </ul>
                <div class="text-center download-cv"><a class="btn btn-primary btn-xl text-uppercase" href="{{ asset('assets/pdf/CV.pdf') }}" target="_blank" download>Download CV</a></div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted" style="color:#fff !important">tel:01270565461 , Email:eslamelzeniny421@gmail.com</h3>
                </div>
                <form id="contactForm">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" type="text" required placeholder="Your Name *" name="name" />
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" name="email" required type="email" placeholder="Your Email *"/>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" name="phone" required type="tel" placeholder="Your Phone *"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" name="message" required placeholder="Your Message *"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    {{-- <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div> --}}
                    <div class="col-lg-12 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://x.com/eslam_elzneny" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/eslam.elzneny" aria-label="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/eslam-elzneny-aa58a1211" aria-label="LinkedIn" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    {{-- <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div> --}}
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/images/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body" id="modal_portfolio">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
        <script>

            const baseUrl = "{{ url('/') }}";
            const token = "{{ csrf_token() }}";
            function getPortfolioModal(portfolioId){

                $("#modal_portfolio").html('');
                var url = baseUrl + '/getPortfolioModal';
                $.ajax({
                    url:url,
                    data:{
                        "_token":token,
                        "portfolioId":portfolioId
                    },
                    type:'get',
                    success: function(data){
                        $("#modal_portfolio").html(data)
                    }
                });
            }

            document.querySelector('#contactForm').addEventListener('submit', (e) => {
                e.preventDefault()
                toastr.options.timeOut = 2000;
                let data = Object.fromEntries(new FormData(e.target).entries());
                data['_token'] = token;
                var url = baseUrl + '/contact-us';
                $.ajax({
                    url:url,
                    data:data,
                    type:'post',
                    success: function(data){
                        toastr.success(data.message);
                        $('#contactForm').find("input, textarea").each(function() {
                            $(this).val('');
                        });
                    },
                    error: function(error){
                        const errors = error.responseJSON.error;
                        let errors_keys = Object.keys(errors);
                        toastr.warning(errors[errors_keys[0]][0]);
                    }
                });

            });

            // function contactUs(){
            //     var formData = new FormData(document.querySelector('#contactForm'))
            //     console.log(formData);
            // }

            window.addEventListener('scroll', () => {
                const sections = document.querySelectorAll('.animatedSection');

                const windowHeight = window.innerHeight;
                sections.forEach(e => {
                    const sectionPosition = e.getBoundingClientRect().top;
                    if (sectionPosition < windowHeight * 0.75) {
                        e.classList.add('animate__animated', 'animate__fadeInUp');
                    }

                });


            });
        </script>
    </body>
</html>
