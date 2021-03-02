<?php
// SEO Variables
$pageTitle     =  'Jeremy James Portfolio - Web Design, Development, SEO';
$pageDescr     =  'Website for digital marketer Jeremy';
$pageCanonical =  'https://dev.jeremyjl.com';

// Include header file
include "header.php";
?>


<main>
        <!-- Introduction -->
        <section class="section intro" id="intro">

            <div class="row mt-3">

                <h2 class="heading heading--secondary">Hi!</h2>
                <p class="paragraph paragraph--limited">Thanks for popping by. If you're an employer and here to check out my resume, click <a href="/assets/resume-2021.pdf" class="alink" target="_blank">here</a>. Otherwise, hang tight. This is where I plan to write about some digital topics that I am into, but it's a work in progress!</p>
                <p class="paragraph paragraph--limited">This is my professional website. I'm in the process of creating a personal website <a href="https://jeremyjl.com" class="alink">here</a>, where I will be talking about digital minimalism and independence (remember when the internet wasn't just 5 websites, well this is my contribution). Email me <a href="mailto:jeremy@jeremyjl.com" class="alink">here</a> if you fancy a chat. 
                </p>
                <p class="paragraph paragraph--limited">
                Cheers and bless. (P.S this website is still under construction! It's build using simple HTML5, SASS, PHP and couple of lines of JS).
                </p>
            </div>

        </section>
        <!-- / end introduction -->

        <!-- Resume -->
        <section class="section" id="resume">

            <div class="row">

                <h2 class="heading heading--secondary">Resume</h2>
                <p class="paragraph paragraph--limited mb-5">I've had a varied career that has spanned a bunch of disciplines and technologies, but here are some: technical SEO, Wordpress, Bootstrap, SASS, Javascript, JQuery, Google Ads, Google Analytics, Link Building & Strategy, Content Marketing, Shopify.</p>
                <p class="paragraph mb-5">
                    <a href="/assets/resume-2021.pdf" class="btn" target="_blank"><i class="btn__icon las la-download mr-1"></i>Download Resume</a>
                </p>
              

                <div class="resume-list mb-5">

                    <h3 class="resume-list__title">Education</h3>

                    <div class="resume-list__section">
                        <h4 class="resume-list__section-title">University Of New South Wales</h4>  
                        <p class="resume-list__section-date">2008 - 2012</p>
                        <p class="paragraph">Bachelor of Media in Communication & Journalism (With Distinction)</p>   
                    </div>

                    <div class="resume-list__section">
                        <h4 class="resume-list__section-title">Sydney Boys High School</h4>   
                        <p class="resume-list__section-date">2002 - 2007</p>
                        <p class="paragraph">HSC</p>   
                    </div>

                </div>

                <div class="resume-list">
                    
                    <h3 class="resume-list__title">About me</h3>

                    <div class="resume-list__section">
                        <h4 class="resume-list__section-title">LogmyCare.co.uk</h4>   
                        <p class="resume-list__section-date">MAY 2020 - PRESENT</p>
                        <p class="paragraph paragraph--limited"><span class="resume-list__section-position">Senior Digital Exec</span><br/>Execution of digital strategy & campaigns for SaaS startup in social healthcare. Management and development of flagship website.
                    </div>

                    <div class="resume-list__section">
                        <h4 class="resume-list__section-title">Resonics</h4>   
                        <p class="resume-list__section-date">2014 - 2019</p>
                        <p class="paragraph paragraph--limited"><span class="resume-list__section-position">Digital Marketing Manager</span><br/>Responsible for management of marketing department at interior design firm - executing SMM, SEO & PPC campaigns in highly competitive London market. 500% increase in link profile; 200% increase year-on year conversion rate; 35-point increase in DR during tenure. </p>   
                    </div>

                    <div class="resume-list__section">
                        <h4 class="resume-list__section-title">SR7 / KPMG</h4>   
                        <p class="resume-list__section-date">2012 - 2014</p>
                        <p class="paragraph paragraph--limited"><span class="resume-list__section-position">Digital Media Analyst / Account Manager</span><br/>Social media analyst for Sydney-based media intelligence firm SR7, now part of KPMG. Analytical research and reporting into risk associated with companies' social media assets.</p>   
                    </div>

                    <div class="resume-list__section">
                        <h4 class="resume-list__section-title">News.com.au</h4>   
                        <p class="resume-list__section-date">2008 - 2009</p>
                        <p class="paragraph paragraph--limited"><span class="resume-list__section-position">Website Manager & Journalist</span><br/>Intership at Australian online news outlet. Proofing, editing and publishing of journalist-submitted content.</p>   
                    </div>
                    

                </div>
               
            </div>

        </section>
        <!-- / end resume -->

        <!-- Work -->
        <!--
        <section class="section bb-none" id="projects">

            <div class="row">

                <h2 class="heading heading--secondary">Portfolio</h2>

                    <div class="project">

                        <img src='images/rezistor.jpg' alt='' class="project__img">

                        <div class="project__info">

                            <h3 class="project__title">Rezistorstudios.com</h3>
                            <p class="paragraph">Custom Wordpress theme development for LA-based production company. Emphasis on displaying video content to audience, with custom video player controls.</p>

                            <ul class="project-stack">
                                <li class="project-stack__item">Wordpress</li>
                                <li class="project-stack__item">Javascript</li>
                                <li class="project-stack__item">PHP</li>
                            </ul>

                            <a href="http://rezistorstudios.com" class="project__link">Visit Site <i class="las la-arrow-right"></i></a>

                        </div>
                   
                    </div>

                    <div class="project">

                        <img src='images/resonics.jpg' alt='' class="project__img">
                        
                        <div class="project__info">
                            <h3 class="project__title">Resonics.co.uk</h3>
                            <p class="paragraph">Themed development of flagship website for London-based interior design company.</p>

                            <ul class="project-stack">
                                <li class="project-stack__item">Wordpress</li>
                            </ul>

                            <a href="https://resonics.co.uk" class="project__link">Visit Site <i class="las la-arrow-right"></i></a>

                        </div>
                   
                    </div>

                    <div class="project">

                        <img src='images/fabric-wall.jpg' alt='' class="project__img">
                        
                        <div class="project__info">

                            <h3 class="project__title">Fabric-wall.co.uk</h3>
                            <p class="paragraph">Themed development of flagship website for interior acoustic product manufacturer Fabric-wall.</p>

                            <ul class="project-stack">
                                <li class="project-stack__item">Wordpress</li>
                            </ul>

                            <a href="https://fabric-wall.co.uk" class="project__link">Visit Site <i class="las la-arrow-right"></i></a>

                        </div>
                   
                    </div>


            </div>

        </section>
        /work -->
        
</main>

<?php 
include "footer.php";
?>