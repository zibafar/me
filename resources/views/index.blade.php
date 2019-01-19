@extends('layout')


@section('css')


@endsection

@section('content')
    <div class="container-wrap">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
        <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
            <div class="text-center">
                <div class="author-img" style="background-image: url(images/about1.jpg);"></div>
                <h1 id="colorlib-logo"><a href="index.html">Sadjad Zibafar</a></h1>
                <span class="position"><a href="#">Backend Developer</a> in Iran</span>
            </div>
            <nav id="colorlib-main-menu" role="navigation" class="navbar">
                <div id="navbar" class="collapse">
                    <ul>
                        <li class="active"><a href="#" data-nav-section="home">Home</a></li>
                        <li><a href="#" data-nav-section="about">About</a></li>
                        <li><a href="#" data-nav-section="services">Services</a></li>
                        <li><a href="#" data-nav-section="skills">Skills</a></li>
                        <li><a href="#" data-nav-section="education">Education</a></li>
                        <li><a href="#" data-nav-section="experience">Experience</a></li>
                        <li><a href="#" data-nav-section="work">Work</a></li>
                        <li><a href="#" data-nav-section="blog">Blog</a></li>
                        <li><a href="#" data-nav-section="contact">Contact</a></li>
                    </ul>
                </div>
            </nav>

            <div class="colorlib-footer">

                <ul>
                    <li><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li><a href="#"><i class="icon-twitter2"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>
                    <li><a href="https://ir.linkedin.com/in/sadjad-zibafar-3b679b36"><i class="icon-linkedin2"></i></a></li>
                </ul>
            </div>

        </aside>

        <div id="colorlib-main">
            <section id="colorlib-hero" class="js-fullheight" data-section="home">
                <div class="flexslider js-fullheight">
                    <ul class="slides">
                        <li style="background-image: url(images/img_bg_1_zibafar.jpg);">
                            <div class="overlay"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                        <div class="slider-text-inner js-fullheight">
                                            <div class="desc" >

                                                <h1 style="color:white">Hi! <br>I'm Sajad Zibafar</h1>
                                                <h2 style="color:white">Full Stack developer at <a href="https://Gilace.com/" target="_blank"> Gilace</a></h2>

                                                <p style="color:white"><a href="/resume/resume.mp4" class="btn btn-primary btn-learn" style="border-color:white; color:white">Download CV <i class="icon-download4"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li style="background-image: url(images/img_bg_2.jpg);">
                            <div class="overlay"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                        <div class="slider-text-inner">
                                            <div class="desc">
                                                <h1>I am <br>a web Developer</h1>
                                                <h2>laravel developer at <a href="https://gilace.com/" target="_blank"> gilace.com</a></h2>
                                                <p><a class="btn btn-primary btn-learn">View Portfolio <i class="icon-briefcase3"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="colorlib-about" data-section="about">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                                <div class="col-md-12">
                                    <div class="about-desc">
                                        <span class="heading-meta">About Us</span>
                                        <h2 class="colorlib-heading">Who Am I?</h2>
                                        <p><strong>Hi I'm Sadjad Zibafar</strong> I was born in Tehran, Iran in 1989. I studied Software Engineering at the University of Kharazmi in Tehran, Iran. I got my B.Sc degree in 2012 and at the same year I was accepted to follow my masters’ study at Guilan University. my main research area is about Software Defined -Networking and Digital Forensics. I am also interested in Computer and network security, computer logic, cloud computing, pervasive computing . I have some experienc on e-Learning at MehrAlborz University. I am a lecturer at Chamran University and teach Computer at Valiasr school.
                                            I've always been drawn to the overlap between design and development. My skills are broad: from ux to design, front end to back end development. I enjoy each aspect, and love building sites from start to finish, for clients all over the world.
                                            I have experienc in development of advanced web technologies, secure implementation of software systems and testing major network/software infrastructures.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                                    <div class="services color-1">
                                        <span class="icon2"><i class="icon-bulb"></i></span>
                                        <h3>Content Designer</h3>
                                    </div>
                                </div>
                                <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                                    <div class="services color-2">
                                        <span class="icon2"><i class="icon-globe-outline"></i></span>
                                        <h3>Web Developer</h3>
                                    </div>
                                </div>
                                <div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
                                    <div class="services color-3">
                                        <span class="icon2"><i class="icon-data"></i></span>
                                        <h3>Graph database</h3>
                                    </div>
                                </div>
                                <div class="col-md-3 animate-box" data-animate-effect="fadeInBottom">
                                    <div class="services color-4">
                                        <span class="icon2"><i class="icon-phone3"></i></span>
                                        <h3>Web Service(API)</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                    <div class="hire">
                                        <h2>I am happy to know you <br>that 300+ projects done  sucessfully about Content Designer and web!</h2>
                                        <a href="#" class="btn-hire">Hire me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section class="colorlib-services" data-section="services">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">What I do?</span>
                            <h2 class="colorlib-heading">Here are some of my expertise</h2>
                        </div>
                    </div>
                    <div class="row row-pt-md">
                        <div class="col-md-4 text-center animate-box">
                            <div class="services color-1">
								<span class="icon">
									<i class="icon-bulb"></i>
								</span>
                                <div class="desc">
                                    <h3>Content Design</h3>
                                    <p>in online marketing, and usually focus on animated graphics, texts, videos, and sound depending on the message and the target audience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center animate-box">
                            <div class="services color-2">
								<span class="icon">
									<i class="icon-data"></i>
								</span>
                                <div class="desc">
                                    <h3>real-time applications </h3>
                                    <p>AdonisJs is a beautifully crafted MVC framework for Node.js.
                                        the app can pushe realtime messages to all connected clients using Pusher.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center animate-box">
                            <div class="services color-3">
								<span class="icon">
									<i class="icon-book"></i>
								</span>
                                <div class="desc">
                                    <h3>E-learning</h3>
                                    <p>All the services needed by the virtual university such as: Online Courses, Training, Tutorials, Videos and LMS: Learning Management System and TTS</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center animate-box">
                            <div class="services color-4">
								<span class="icon">
									<i class="icon-database"></i>
								</span>
                                <div class="desc">
                                    <h3>Web Service</h3>
                                    <p>OAuth 2.0 allows a user to authorize your app to work with specific tools in their HubSpot account, designated by the authorization scopes you set.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center animate-box">
                            <div class="services color-5">
								<span class="icon">
									<i class="icon-layers2"></i>
								</span>
                                <div class="desc">
                                    <h3>Web Developer</h3>
                                    <p>PHP skills and frameworks such as Laravel, Codeigniter. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center animate-box">
                            <div class="services color-6">
								<span class="icon">
									<i class="icon-phone3"></i>
								</span>
                                <div class="desc">
                                    <h3>Cloud Forensic</h3>
                                    <p> my main research area is about Software Defined -Networking and Digital Forensics. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/cover_bg_1.jpg);" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="colorlib-narrow-content">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-md-3 text-center animate-box">
                            <span class="colorlib-counter js-counter" data-from="0" data-to="309" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="colorlib-counter-label">Cups of coffee</span>
                        </div>
                        <div class="col-md-3 text-center animate-box">
                            <span class="colorlib-counter js-counter" data-from="0" data-to="356" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="colorlib-counter-label">Projects</span>
                        </div>
                        <div class="col-md-3 text-center animate-box">
                            <span class="colorlib-counter js-counter" data-from="0" data-to="30" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="colorlib-counter-label">Clients</span>
                        </div>
                        <div class="col-md-3 text-center animate-box">
                            <span class="colorlib-counter js-counter" data-from="0" data-to="10" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="colorlib-counter-label">Partners</span>
                        </div>
                    </div>
                </div>
            </div>

            <section class="colorlib-skills" data-section="skills">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">My Specialty</span>
                            <h2 class="colorlib-heading animate-box">My Skills</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                            <p>

                                I am an award winning Full Stack Web Developer and UI/UX Javascript specialist.
                                I have some experiance in <b>content designer </b>b at MehrAlborz University

                                Feel free to take a look at my latest projects on the web portfolio page.Based in Rasht, Iran. Enquires at me@zibafar.me
                            </p>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="progress-wrap">
                                <h3>Content-provider</h3>
                                <div class="progress">
                                    <div class="progress-bar color-1" role="progressbar" aria-valuenow="85"
                                         aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                        <span>85%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="progress-wrap">
                                <h3>Source Control [GIT]</h3>
                                <div class="progress">
                                    <div class="progress-bar color-3" role="progressbar" aria-valuenow="75"
                                         aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                        <span>75%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                            <div class="progress-wrap">
                                <h3>jQuery</h3>
                                <div class="progress">
                                    <div class="progress-bar color-2" role="progressbar" aria-valuenow="60"
                                         aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                        <span>60%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                            <div class="progress-wrap">
                                <h3>Caching [Redis/Memcached]</h3>
                                <div class="progress">
                                    <div class="progress-bar color-5" role="progressbar" aria-valuenow="80"
                                         aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                        <span>80%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="progress-wrap">
                                <h3>AngularJs</h3>
                                <div class="progress">
                                    <div class="progress-bar color-3" role="progressbar" aria-valuenow="85"
                                         aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                        <span>85%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                            <div class="progress-wrap">
                                <h3>laravel</h3>
                                <div class="progress">
                                    <div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
                                         aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                        <span>90%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="progress-wrap">
                                <h3>WordPress</h3>
                                <div class="progress">
                                    <div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                        <span>70%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                            <div class="progress-wrap">
                                <h3>E-learning</h3>
                                <div class="progress">
                                    <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                                         aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                        <span>80%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="colorlib-education" data-section="education">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">Education</span>
                            <h2 class="colorlib-heading animate-box">Education</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                            <div class="fancy-collapse-panel">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Master Degree Network Computer
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p>Far far away, in Rasht, north of Iran, Guilan university, there live the blind texts. </p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>I graduated at Guilan university as a privileged student</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Bachelor Degree of Software Engineering
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <p> I got my B.Sc degree in 2012 at <strong>Kharazmi</strong> university.</p>
                                                <ul>
                                                    <li>+3 years experience as Software Developer.</li>
                                                    <li>certified expert in C#, php, JavaScript and Microsoft.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Diploma in Mathematics
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <p>High School:  <strong>Modaresh</strong>, In Tehran, </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="colorlib-experience" data-section="experience">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">Experience</span>
                            <h2 class="colorlib-heading animate-box">Work Experience</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="timeline-centered">
                                <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                    <div class="timeline-entry-inner">

                                        <div class="timeline-icon color-1">
                                            <i class="icon-pen2"></i>
                                        </div>

                                        <div class="timeline-label">
                                            <h2><a href="#">Full Stack Developer</a> <span>2017-<script>document.write(new Date().getFullYear());</script></span></h2>
                                            <p>at <a href="http://Gilace.com">Gilace company</a></p>
                                        </div>
                                    </div>
                                </article>


                                <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
                                    <div class="timeline-entry-inner">
                                        <div class="timeline-icon color-2">
                                            <i class="icon-pen2"></i>
                                        </div>
                                        <div class="timeline-label">
                                            <h2><a href="#">Lecturer at Chamran University</a> <span>2012-2016</span></h2>
                                            <p></p>
                                        </div>
                                    </div>
                                </article>

                                <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                    <div class="timeline-entry-inner">
                                        <div class="timeline-icon color-3">
                                            <i class="icon-pen2"></i>
                                        </div>
                                        <div class="timeline-label">
                                            <h2><a href="#">CEO at Sepidar Company</a> <span>2013-2016</span></h2>
                                            <p>Sepidar mission are E-learning services, such as Online tutorials video, LMS (Learning Management System), Educational ERP</p>
                                        </div>
                                    </div>
                                </article>

                                <article class="timeline-entry animate-box" data-animate-effect="fadeInTop">
                                    <div class="timeline-entry-inner">
                                        <div class="timeline-icon color-4">
                                            <i class="icon-pen2"></i>
                                        </div>
                                        <div class="timeline-label">
                                            <h2><a href="#">E-learning </a> <span>2009-<script>document.write(new Date().getFullYear());</script></span></h2>
                                            <p>
                                                Head of  E-Content provider
                                                <a href="http://mehralborz.ac.ir">at Mehralborz University </a>.
                                                it is the first virtual university in Iran. I began my work with the establishment of MehrAlborz</p>
                                        </div>
                                    </div>
                                </article>

                                <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                    <div class="timeline-entry-inner">
                                        <div class="timeline-icon color-5">
                                            <i class="icon-pen2"></i>
                                        </div>
                                        <div class="timeline-label">
                                            <h2><a href="#">Computer Teacher</a> <span>2012-<script>document.write(new Date().getFullYear());</script></span>
                                            </h2>
                                            <p>at Valiasr High School in Guilan, Rasht.<br>
                                                I am Developing fundamental life skills and a love for learning in  teenage</p>
                                        </div>
                                    </div>
                                </article>

                                <article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
                                    <div class="timeline-entry-inner">
                                        <div class="timeline-icon color-none">
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="colorlib-work" data-section="work">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">My Work</span>
                            <h2 class="colorlib-heading animate-box">Recent Work</h2>
                        </div>
                    </div>
                    <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                        <div class="col-md-12">
                            <p class="work-menu"><span><a href="http://Mehralborz.ac.ir" class="active">E-learning</a></span> <span><a href="http://Gilace.com">Web Developer</a></span> <span><a href="#">Web Service(API)</a></span> <span><a href="#">E-Commerce</a></span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="project" style="background-image: url(images/img-1.jpg);">
                                <div class="desc">
                                    <div class="con">
                                        <h3><a href="work.html">Work 01</a></h3>
                                        <span>Website</span>
                                        <p class="icon">
                                            <span><a href="#"><i class="icon-share3"></i></a></span>
                                            <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                            <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                            <div class="project" style="background-image: url(images/img-2.jpg);">
                                <div class="desc">
                                    <div class="con">
                                        <h3><a href="work.html">Work 02</a></h3>
                                        <span>Animation</span>
                                        <p class="icon">
                                            <span><a href="#"><i class="icon-share3"></i></a></span>
                                            <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                            <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInTop">
                            <div class="project" style="background-image: url(images/img-3.jpg);">
                                <div class="desc">
                                    <div class="con">
                                        <h3><a href="work.html">Work 03</a></h3>
                                        <span>Illustration</span>
                                        <p class="icon">
                                            <span><a href="#"><i class="icon-share3"></i></a></span>
                                            <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                            <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInBottom">
                            <div class="project" style="background-image: url(images/img-4.jpg);">
                                <div class="desc">
                                    <div class="con">
                                        <h3><a href="work.html">Work 04</a></h3>
                                        <span>Application</span>
                                        <p class="icon">
                                            <span><a href="#"><i class="icon-share3"></i></a></span>
                                            <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                            <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="project" style="background-image: url(images/img-5.jpg);">
                                <div class="desc">
                                    <div class="con">
                                        <h3><a href="work.html">Work 05</a></h3>
                                        <span>Graphic, Logo</span>
                                        <p class="icon">
                                            <span><a href="#"><i class="icon-share3"></i></a></span>
                                            <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                            <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                            <div class="project" style="background-image: url(images/img-6.jpg);">
                                <div class="desc">
                                    <div class="con">
                                        <h3><a href="work.html">Work 06</a></h3>
                                        <span>Web Design</span>
                                        <p class="icon">
                                            <span><a href="#"><i class="icon-share3"></i></a></span>
                                            <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                            <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 animate-box">
                            <p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="colorlib-blog" data-section="blog">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">Read</span>
                            <h2 class="colorlib-heading">Recent Blog</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="blog-entry">
                                <a href="blog.html" class="blog-img"><img src="images/blog-1.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                <div class="desc">
                                    <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                                    <h3><a href="blog.html">Renovating National Gallery</a></h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInRight">
                            <div class="blog-entry">
                                <a href="blog.html" class="blog-img"><img src="images/blog-2.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                <div class="desc">
                                    <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                                    <h3><a href="blog.html">Wordpress for a Beginner</a></h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="blog-entry">
                                <a href="blog.html" class="blog-img"><img src="images/blog-3.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                <div class="desc">
                                    <span><small>April 14, 2018 </small> | <small> Inspiration </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                                    <h3><a href="blog.html">Make website from scratch</a></h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 animate-box">
                            <p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="colorlib-contact" data-section="contact">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">Get in Touch</span>
                            <h2 class="colorlib-heading">Contact</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="icon-globe-outline"></i>
                                </div>
                                <div class="colorlib-text">
                                    <p><a href="#">me@zibafar.me</a></p>
                                </div>
                            </div>

                            <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="icon-map"></i>
                                </div>
                                <div class="colorlib-text">
                                    <p>Gilan- Rasht- Moalem St.</p>
                                </div>
                            </div>

                            <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="icon-phone"></i>
                                </div>
                                <div class="colorlib-text">
                                    <p><a href="tel://">+98 912 649 53 96</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-md-push-1">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
                                    <form action="">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Subject">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div><!-- end:colorlib-main -->
    </div>

@endsection

@section('js')


@endsection


