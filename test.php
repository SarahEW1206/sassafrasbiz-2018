<?php
require('./sarahwaldie/wp-blog-header.php');
get_header(); 
?>

<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta title="Sassafras Business Services">
    <meta property="og:title" content="Web design and web development for small businesses and entrepreneurs. Affordable, reliable and friendly service. Contact me to learn more!" />
    <meta property="og:description" content="Sassafras Business Services" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://sassafrasbiz.com" />
    <meta property="og:image" content="http://sassafrasbiz.com/Images/fb-preview.jpg" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="1196" />
    <meta property="og:image:height" content="802" />
    <meta property="og:image:alt" content="Sassafras Business Services Website" />

    <title>Sassafras Business Services, LLC | Web Design and Development</title>

    <meta name="description" content="Web design and web development for small businesses and entrepreneurs. WordPress sites, Squarespace sites, and sites 'from scratch.' Affordable, reliable and friendly service.">

    <!--favicon-->
    <link rel="icon" href="Images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="/css/style.css">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Passion+One:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:600,700,800" rel="stylesheet">

</head>

<body>


    <div class="container">

        <div class="logo flex-div">
            <img class="logo-image" src="/Images/SBS_LOGO_NEW.jpg">
        </div>

        <div class="sticky-nav">


            <div>
                <a href="#services-anchor-ref">\\ Services</a>
            </div>
            <div>
                <a href="#clients-anchor-ref">\\ Clients</a>
            </div>
            <div>
                <a href="#contact-anchor-ref">\\ Contact</a>
            </div>
            <div>
                <a href="https://sassafrasbiz.com/sarahwaldie" target="_blank">\\ Blog</a>
            </div>
            <div>
                <a href="">
                    <i class="fas fa-chevron-up"></i>
                </a>
            </div>
        </div>


        <div class="menu flex-div">
            <div>
                <a href="#services-anchor-ref">// Services</a>
            </div>
            <div>
                <a href="#clients-anchor-ref">// Clients</a>
            </div>
            <div>
                <a href="#contact-anchor-ref">// Contact</a>
            </div>
            <div>
                <a href="https://sassafrasbiz.com/sarahwaldie" target="_blank">// Blog</a>
            </div>
        </div>

        <div class="social-icons-bar flex-div">
            <a href="https://www.facebook.com/sassafrasbiz/" target="_blank">
                <img src="/Images/facebook.png">
            </a>
            <a href="https://www.linkedin.com/in/sarahwaldie/" target="_blank">
                <img src="/Images/linkedin.png">
            </a>
            <a href="https://twitter.com/Sassontherun" target="_blank">
                <img src="/Images/twitter.png">
            </a>
            <a href="https://github.com/SarahEW1206" target="_blank">
                <img src="/Images/Octocat.png">
            </a>

        </div>

        <div class="marquee-1">
            <div>
                <p id="headline-text"></p>
            </div>
        </div>

        <div class="welcome-heading content-1 flex-div">
            <!-- <h1>Hi there! Welcome to Sassafras Business Services.</h1> -->

        </div>
        <div id="news" class="content-2 flex-div">
            <div>
                <img class="round-headshot" src="/Images/sarah-waldie.jpg">
                <h1>Hi there! Welcome to Sassafras Business Services.</h1>

                <p>I'm
                    <a href="#about-me">Sarah Waldie.</a> I'm a frontend web developer with a background in marketing
                    and
                    advertising. My passion is using
                    my experience to help people create a piece of the internet that they are proud to show off to the
                    world.
                    I especially enjoy working with fellow female entrepreneurs and moms!
                </p>
                <p>I offer a 10% Military Discount to our veterans and active military members.</p>

                <h1>What's New?</h1>

<div style="width: 60%; margin: 0 auto; background: #fff; padding: 30px;">
<?php
$posts = get_posts('numberposts=10&order=ASC&orderby=post_title');

foreach ($posts as $post) : setup_postdata( $post ); ?>


<div>
<h1><?php the_title(); ?> </h1>  
</div>

<div>
<?php the_post_thumbnail(); ?> 
</div>

<div>
<?php the_date(); ?>
</div>

<div>
<?php the_excerpt(); ?> 
</div>

<?php
endforeach;
?>
</div>



                <h1>Shout Outs</h1>
                <p>Ladies, if you are an entrepreneur of any sort, please join me in the Facebook group, <a href="https://www.facebook.com/groups/676828012693128/"
                        target="_blank">Laborers of Love</a>, created and led by the wonderful Cassandra. It's a
                    supportive, welcoming community for those of us who hustle every day to be able to make a living
                    doing what we love!</p>
                <p></p>
                <p style="font-size: 14px; line-height: 16px;">&#128247; <strong>Photo Credits:</strong>
                    <br>Main image courtesy of <a href="https://www.instagram.com/jmboesphoto/">@JMBOESPHOTO</a>
                    <br>Services background image from @reneefisherandco on <a href="https://unsplash.com">Unsplash.com</a>
                    <br>Clients background image from @cbarbalis on <a href="https://unsplash.com">Unsplash.com</a>

            </div>
        </div>

        <div id="services-anchor-ref" class="marquee-2 flex-div">
            <!-- <div class="animation-element1 slide-left">
                <h2>SERVICES</h2>
            </div> -->
            <h1 class="overlay overlay1">SERVICES</h1>

        </div>

        <div class="service-1">
            <h1>WordPress and SquareSpace Websites</h1>
            <p>
                <b>PERFECT FOR:</b> Anyone looking to set up a website with a blog or store, and/or someone who wants
                to be
                able to manage their site's content via a content management system (CMS) after it is built.</p>

            <p>If you need help with a new or existing Wordpress site or SquareSpace setup, or if you are simply
                wondering whether
                one of these platforms is right for you, <a href="#contact-anchor-ref">contact me</a> to find out how I
                can help!</p>

        </div>
        <div class="service-2">
            <h1>Websites from Scratch</h1>
            <p>
                <b>PERFECT FOR:</b> Anyone who wants a unique site and doesn't necessarily want to use a template or
                theme.</p>
            <p>Custom needs vary greatly, so <a href="#contact-anchor-ref">let's talk</a> about what you need for your
                business and how I can create something
                special just for you.</p>
        </div>
        <div class="service-3">
            <h1>Collaboration</h1>
            <p>Are you a designer who needs someone to bring your web design to life? Or perhaps a fellow developer who
                wants to collaborate on a project? Let's work together to do something great!</p>
            <p><a href="#contact-anchor-ref">Reach out</a> to find out how I can help you tackle your next project.</p>

        </div>


        <div id="clients-anchor-ref" class="marquee-3 flex-div">
            <!-- <div class="animation-element2 slide-left">
                <h2>CLIENTS</h2>
            </div> -->

            <h1 class="overlay overlay2">CLIENTS</h1>
        </div>

        <div class="clients">
            <p>Select a logo to learn more about the work done for each client.</p>
            <div class="to-center-logos">
                <div class="client-logos">
                    <div>
                        <a href="#sample1-anchor-ref">
                            <img src="/Images/rwp-logo.png">
                        </a>
                    </div>
                    <div>
                        <a href="#sample2-anchor-ref">
                            <img src="/Images/alter-logo.png">
                        </a>
                    </div>

                    <div>
                        <a href="#sample3-anchor-ref">
                            <img src="/Images/rjag-logo.png">
                        </a>
                    </div>
                    <div>
                        <a href="#sample4-anchor-ref">
                            <img src="/Images/FPILogo.svg">
                        </a>
                    </div>
                    <div>
                        <a href="#sample5-anchor-ref">
                            <img src="/Images/berkboys-logo.png">
                        </a>
                    </div>
                    <div>
                        <a href="#sample6-anchor-ref">
                            <img src="Images/empower-logo.png">
                        </a>
                    </div>
                    <div>
                        <a href="#sample7-anchor-ref">
                            <img src="Images/redeploy-logo.png">
                        </a>
                    </div>
                    <!-- <div>
                        <a href="#sample8-anchor-ref">
                            <img src="Images/patriotfirearms-logo.png">
                        </a>
                    </div>
                    <div>
                        <a href="#sample8-anchor-ref">
                            <img src="Images/bumi-logo.png">
                        </a>
                    </div> -->
                </div>
            </div>
        </div>

        <div id="sample1-anchor-ref" class="work-sample sample-1">
            <div class="work-sample-internal">
                <h3>Red, White &amp; Pink Wine Events</h3>
                <a href="http://redwhitepinkevents.com" target="_blank">
                    <img class="web-sample-image" src="/Images/redwhitepink_sample.png" alt="Red, White and Pink Wine Events Sample">
                </a>
                <p>Red, White &amp; Pink Events is a New York-based wine events business that needed a website to show
                    off their
                    services. After consulting with the client to get a sense of her design preferences and the content
                    requirements
                    of the site, I opted to develop on WordPress so that the client can easily add a blog in the future
                    if
                    need be.
                </p>
                <p>
                    <b>Services:</b> WordPress website design and development
                </p>

                <a href="http://redwhitepinkevents.com" target="_blank">// redwhitepinkevents.com</a>
                <div class="navigation-arrows">
                    <h5>Click or scroll!</h5>
                    <a href="#sample2-anchor-ref">
                        <img src="/Images/move-down.png" alt="arrow down">
                    </a>
                    <a href="#clients-anchor-ref">
                        <img src="/Images/move-up.png" alt="arrow up">
                    </a>
                </div>
            </div>

        </div>
        <div id="sample2-anchor-ref" class="work-sample sample-2">
            <div class="work-sample-internal">
                <h3>Alter Surety Group, Inc.</h3>
                <a href="http://altersurety.com" target="_blank">
                    <img class="web-sample-image" src="/Images/Alter_sample.png" alt="Alter Surety Sample">
                </a>
                <p>Alter Surety Group came to me with a WordPress site that had some broken plugins and design elements
                    that
                    they weren't happy with. They wanted a site that worked properly, looked professional and was
                    secure.
                    I rebuilt the site using a new theme, customized to meet their needs, and implemented some security
                    tools
                    to help keep their site safe and sound. </p>
                <p>
                    <b>Services:</b> WordPress website design and development
                </p>
                <a href="http://altersurety.com" target="_blank">// altersuretygroup.com</a>
                <div class="navigation-arrows">
                    <h5>Click or scroll!</h5>
                    <a href="#sample3-anchor-ref">
                        <img src="/Images/move-down.png" alt="arrow down">
                    </a>
                    <a href="#sample1-anchor-ref">
                        <img src="/Images/move-up.png" alt="arrow up">
                    </a>
                </div>
            </div>
        </div>
        <div id="sample3-anchor-ref" class="work-sample sample-3">
            <div class="work-sample-internal">
                <h3>R&amp;J Advisory Group</h3>
                <a href="http://randjadvisorygroup.com" target="_blank">
                    <img class="web-sample-image" src="/Images/randj_sample.png" alt="RandJ Sample">
                </a>
                <p>This site was built from scratch and highlights R&J Advisory Group's strategic business coaching
                    services.
                    The focus was on building Jennifer's credibility as a coach by sharing her own journey to success.</p>
                <p>
                    <b>Services:</b> Custom website design and development
                </p>
                <a href="http://randjadvisorygroup.com" target="_blank">// randjadvisorygroup.com</a>

                <p class="testimonial">
                    "For almost ten years now, Sarah has been my go-to for all things marketing, from graphic design
                    and copywriting to strategic
                    consultation. When it came time to build a website for my coaching services, I knew I could trust
                    Sarah
                    to knock it out of the park. One of my biggest challenges was telling my story and organizing a
                    great
                    deal of content related to my coaching services, but Sarah came up with a way to lay it out in a
                    site
                    that works perfectly and looks fantastic. Most importantly, it's custom-made so it's unique to me
                    and
                    my business. I look forward to many more years of working with Sarah and Sassafras Business
                    Services."
                    <br>
                    <br>
                    <strong>Jennifer Walzer Berkowitz, President, R &amp; J Advisory Group.</strong>
                </p>

                <div class="navigation-arrows">
                    <h5>Click or scroll!</h5>
                    <a href="#sample4-anchor-ref">
                        <img src="/Images/move-down.png" alt="arrow down">
                    </a>
                    <a href="#sample2-anchor-ref">
                        <img src="/Images/move-up.png" alt="arrow up">
                    </a>
                </div>
            </div>
        </div>
        <div id="sample4-anchor-ref" class="work-sample sample-4">
            <div class="work-sample-internal">
                <h3>ForcePro, Inc.</h3>
                <a href="https://forceproinc.net" target="_blank">
                    <img class="web-sample-image" src="/Images/forcepro_sample.png" alt="forcepro inc work sample"></a>
                <p>ForcePro, Inc. provides tactical training services to first reponders and law enforcement
                    organizations.
                    They needed a site that would clearly and concisely display information about their core services
                    and
                    specific classes, while also establishing credibility up front. </p>
                <p>
                    <b>Services:</b> Custom website design and development
                </p>


                <a href="https://forceproinc.net" target="_blank">// forceproinc.net</a>

                <p class="testimonial">
                    "Working with Sarah was a seamless experience. I gave her my business intent, and she provided me
                    with easy options to choose
                    from. She continues to be reliable and provide follow-on service. A pleasure to work with."
                    <br>
                    <br>
                    <strong>Frank Rivas, ForcePro, Inc.</strong>
                </p>

                <div class="navigation-arrows">
                    <h5>Click or scroll!</h5>
                    <a href="#sample5-anchor-ref">
                        <img src="/Images/move-down.png" alt="arrow down">
                    </a>
                    <a href="#sample3-anchor-ref">
                        <img src="/Images/move-up.png" alt="arrow up">
                    </a>
                </div>
            </div>
        </div>

        <div id="sample5-anchor-ref" class="work-sample sample-5">
            <div class="work-sample-internal">
                <h3>Berk Boys Homemade Ice Cream</h3>
                <a href="http://berkboys.com" target="_blank"><img class="web-sample-image" src="/Images/berkboys_sample.png"></a>
                <p>Berk Boys Homemade Ice Cream was a hobby that turned into a business venture for Ryan and his mom.
                    They started
                    selling so much ice cream that they needed a site to share their story, flavors and ingredients. I
                    designed
                    the site with a fun homemade feel and created matching labels and sales collateral as well.</p>
                <p>
                    <b>Services:</b> Custom website design and development
                </p>
                <a href="http://berkboys.com" target="_blank">// berkboys.com</a>
                <div class="navigation-arrows">
                    <h5>Click or scroll!</h5>
                    <a href="#sample6-anchor-ref">
                        <img src="/Images/move-down.png" alt="arrow down">
                    </a>
                    <a href="#sample4-anchor-ref">
                        <img src="/Images/move-up.png" alt="arrow up">
                    </a>
                </div>
            </div>
        </div>
        <div id="sample6-anchor-ref" class="work-sample sample-6">
            <div class="work-sample-internal">
                <h3>Empower B2B</h3>
                <a href="http://empowerb2b.com" target="_blank"><img class="web-sample-image" src="/Images/empower_sample.png"></a>
                <p>Empower B2B needed a site for their tech conference that would allow them to easily add additional
                    speakers, schedule details and more, as they planned the conference. I built the site with a
                    forward-thinking approach that would make it easy for the client to make these updates on their own
                    without breaking anything :) I also provided documentation to help them along the way.</p>
                <p>
                    <b>Services:</b> WordPress website design and development. Client User Guide development.
                </p>
                <a href="http://empowerb2b.com" target="_blank">// empowerb2b.com</a>
                <div class="navigation-arrows">
                    <h5>Click or scroll!</h5>
                    <a href="#sample7-anchor-ref">
                        <img src="/Images/move-down.png" alt="arrow down">
                    </a>
                    <a href="#sample5-anchor-ref">
                        <img src="/Images/move-up.png" alt="arrow up">
                    </a>
                </div>
            </div>
        </div>

        <div id="sample7-anchor-ref" class="work-sample sample-7">
            <div class="work-sample-internal">
                <h3>REdeploy Conference</h3>
                <a href="http://red-deploy.io" target="_blank"><img class="web-sample-image" src="/Images/redeploy_sample.png"></a>
                <p>The folks at REdeploy contacted me to help launch their 2018 conference site under a tight deadline
                    when they found themselves in need of a developer. I happily jumped in and got to work. This
                    project was really a collaborative effort, and
                    one that is continually evolving. I handle the HTML layout and CSS design of the pages, and the
                    REdeploy team adds some PHP to dynamically generate the actual content to fill in the templates.</p>
                <p>
                    <b>Services:</b> Custom website design and development. Collaboration via GitHub.
                </p>
                <a href="http://red-deploy.io" target="_blank">// re-deploy.io</a>
                <div class="navigation-arrows">
                    <h5>Click or scroll!</h5>
                    <!-- <a href="#sample5-anchor-ref">
                        <img src="/Images/move-down.png" alt="arrow down">
                    </a> -->
                    <a href="#sample6-anchor-ref">
                        <img src="/Images/move-up.png" alt="arrow up">
                    </a>
                </div>
            </div>
        </div>




        <div id="about-me" class="footer-left flex-div">
            <div>
                <h2>A bit more about me...</h2>
                <p>
                    <span class="white-text-on-pic">I'm a mostly self-taught front-end web developer who has
                        decided to
                        make a go of it as an entrepreneur
                        while being mom to the coolest little boy in the world. I studied marketing and spent
                        six
                        years
                        taking
                        care of clients at an ad agency in Tampa, FL before returning to the greatest city in
                        the
                        world,
                        NYC. I code because I like to build things. I code for clients because I like to build
                        relationships.
                        I hope you'll be in touch!
                    </span>
                </p>
            </div>
        </div>
        <div id="contact-anchor-ref" class="footer-middle flex-div">
            <form method="POST" name="contactform" action="contact-form-handler.php">

                <h2>Send me a message!</h2>
                <p class="inputText">
                    <label for="name">Your Name:</label>
                    <br>
                    <input type="text" name="name">
                </p>
                <p class="inputText">
                    <label for='email'>Email Address:</label>
                    <br>
                    <input type="text" name="email">
                    <br>
                </p>
                <p class="inputText">
                    <label for='message'>Message:</label>
                    <br>
                    <textarea name="message"></textarea>
                </p>
                <input id="submit" type="submit" value="Submit">
                <br>
                <p>PRIVACY POLICY: Any information submitted via this form will be delivered to Sarah Waldie by
                    email
                    and will be used for the sole purpose of replying to your message. Your information will
                    not be
                    sold or used for any other solicitations by Sassafras Business Services, LLC.</p>
            </form>

        </div>
        <div class="footer-right flex-div">
            <div>
                <h2>These are a few of my favorite things:</h2>
                <p>Here are some of my the resources I've found handy, helpful and/or lifesaving as a
                    freelancer
                    and
                    web developer.</p>
                <ul class="footer-resources-list">
                    <li>
                        <a href="https://www.and.co/">And.Co</a> is awesome FREE business software for
                        invoicing,
                        expense tracking, time tracking and more. &#128176; </li>
                    <li>
                        <a href="https://unsplash.com/">Unsplash.com</a> is a source for gorgeous free stock
                        photos.
                        &#128247;
                    </li>
                    <li>
                        <a href="https://www.facebook.com/groups/freelancingfems/">Freelancing Females</a> is a
                        Facebook group that keeps me sane. &#9875; </li>
                    <!-- <li>
                        <a href="">Resource 4</a>
                    </li> -->
                </ul>
            </div>
        </div>
        <div class="copyright">&copy; 2018 Sassafras Business Services</div>
    </div>



    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>

    <script src="/Scripts/animations.js"></script>

</body>

</html>