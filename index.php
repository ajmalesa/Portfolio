<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ajmal Esa's web projects. Peruse and contact me if you like what you see.">
    <title>Ajmal Esa</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>

    <link rel="stylesheet" href="css/style.css" />
</head>
<body>

    <nav class="uk-background-secondary uk-light uk-navbar" uk-sticky>
        <!-- Name display on the left -->
        <div class="uk-navbar-left uk-margin-large-left">
            <a href="#navbar" class="uk-navbar-item uk-logo uk-margin-small-right">Ajmal Esa</a>
        </div>
        <!-- /Name display on the left -->
    
        <!-- Navigation Menu For Screens With A Width Larger Than 960px -->
        <div class="uk-navbar-right uk-visible@m uk-margin-large-right">
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="#about" uk-scroll id="about-button">About</a></li>
                <li><a href="#projects" uk-scroll id="projects-button">Projects</a></li>
                <li><a href="#skills" uk-scroll id="skills-button">Skills</a></li>
                <li class=""><a href="/games" target="_blank">Games</a></li>
                <li><a href="https://www.github.com/ajmalesa" rel="noreferrer" target="_blank" uk-icon="github"></a></li>
                <li><a href="#" uk-icon="mail" uk-toggle="target: #contact-modal"></a></li>
            </ul>
        </div>
        <!-- /Navigation Menu For Screens With A Width Larger Than 960px -->

        <!-- Mobile Navigation Menu On The Right -->
        <div class="uk-hidden@m uk-navbar-right uk-margin-large-right">
            <a class="uk-navbar-toggle" uk-toggle="target: #offcanvas-nav-primary" uk-navbar-toggle-icon href="#"></a>
        </div>

        <div class="uk-hidden@m" id="offcanvas-nav-primary" uk-offcanvas="flip: true; overlay: true">
            <div class="uk-offcanvas-bar uk-flex uk-flex-column">
                <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
                    <li class="uk-active"><a href="#about" id="about-button-mobile">About</a></li>
                    <li><a href="#projects" id="projects-button-mobile">Projects</a></li>
                    <li><a href="#skills" id="skills-button-mobile">Skills</a></li>
                    <li><a href="/games" target="_blank">Games</a></li>
                    <li class="uk-nav-divider"></li>
                    <li><a href="https://www.github.com/ajmalesa" rel="noreferrer" target="_blank" uk-icon="github"></a></li>
                    <li><a href="#" uk-icon="mail" uk-toggle="target: #contact-modal"></a></li>
                </ul>
            </div>
        </div>
        <!-- /Mobile Navigation Menu On The Right -->
    </nav>

    <div class="uk-margin-large-left uk-margin-large-right uk-margin-large-top uk-margin-large-bottom" >
        <div class="uk-margin-medium-top uk-margin-medium-bottom" uk-filter="target: .js-filter">

            <div uk-scrollspy="cls: uk-animation-slide-top-small; repeat: true">
                <h2 id="about" class="anchor-links">About</h2>
            </div>
            <div class="uk-grid">
                <div class="uk-width-1-2@l">
                    <p>
                        <span class="fade-first-sentence">I am a web developer with a passion for all things tech.</span> 
                        <span class="fade-second-sentence">It started with writing scripts to impress friends & family in high school.</span>
                        <span class="fade-third-sentence">Now it has evolved into my livelihood.</span> 
                        <span class="fade-fourth-sentence">That passion has remained evermore.</span>
                    </p>
                </div>
                <div id="commit-section" class="uk-width-1-2@l">
                    <div uk-scrollspy="cls: uk-animation-scale-up uk-transform-origin-top-right; repeat: true">
                        <span id="latest-commit-display"></span>
                        <a href="#" target="_blank" id="latest-commit-link">    
                            <div id="latest-commit-project" class="uk-text-capitalize"></div>
                            <div id="latest-commit-message"></div>
                            <div id="latest-commit-time"></div>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <hr class="darker-hr">

        <div class="uk-margin-medium-top uk-margin-large-bottom" uk-filter="target: .js-filter">

            <div class="uk-margin-small-bottom" uk-scrollspy="cls: uk-animation-slide-left-medium; repeat: true">
                <h2 id="projects" class="anchor-links">Projects</h2>
            </div>
            
            <!-- Filter and sort selection -->
            <div class="uk-grid-small uk-flex-middle uk-visible@s" uk-grid uk-scrollspy="cls: uk-animation-slide-left-medium; repeat: true">
                <div class="uk-width-expand">
        
                    <div class="uk-grid-small uk-grid-divider uk-child-width-auto" uk-grid>
                        <div>
                            <ul class="uk-subnav uk-subnav-pill" uk-margin>
                                <li class="uk-active" uk-filter-control><a href="#" class="uk-text-emphasis rounded-border">All</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="uk-subnav uk-subnav-pill" uk-margin>
                                <li uk-filter-control="filter: [project-type='work']; group: project-type"><a href="#" class="uk-text-emphasis rounded-border">Work</a></li>
                                <li uk-filter-control="filter: [project-type='personal']; group: project-type"><a href="#" class="uk-text-emphasis rounded-border">Personal</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="uk-subnav uk-subnav-pill" uk-margin>
                                <li uk-filter-control="filter: [primary-language*='JavaScript']; group: primary-language"><a href="#" class="uk-text-emphasis rounded-border">JavaScript</a></li>
                                <li uk-filter-control="filter: [primary-language*='PHP']; group: primary-language"><a href="#" class="uk-text-emphasis rounded-border">PHP</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="uk-subnav uk-subnav-pill" uk-margin>
                                <li uk-filter-control="filter: [platform*='mobile']; group: platform"><a href="#" class="uk-text-emphasis rounded-border">Mobile</a></li>
                                <li uk-filter-control="filter: [platform*='desktop']; group: platform"><a href="#" class="uk-text-emphasis rounded-border">Desktop</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="uk-subnav uk-subnav-pill" uk-margin>
                                <li ><a href="/games" class="uk-text-emphasis" target="_blank">GAMES</a></li>
                            </ul>
                        </div>
                    </div>
        
                </div>
                <div class="uk-width-auto uk-text-nowrap">
                    <span class="uk-active" uk-filter-control="sort: data-name"><a class="uk-icon-link" href="#" uk-icon="icon: arrow-down"></a></span>
                    <span uk-filter-control="sort: data-name; order: desc"><a class="uk-icon-link" href="#" uk-icon="icon: arrow-up"></a></span>
                </div>
            </div>
            <!-- /Filter and sort selection -->
        
            <!-- Masonry grid of all projects -->
            <ul class="js-filter uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-text-center" uk-grid="masonry: true" uk-scrollspy="cls: uk-animation-slide-right-medium; repeat: true">

                <!-- Individual project -->
                <li project-type="personal" primary-language="PHP" platform="desktop" data-name="Tracker">
                    <div class="uk-text-center">
                        <div class="uk-inline-clip rounded-border uk-transition-toggle" tabindex="0">
                            <img src="img/tracker-website.png" alt="Screenshot of tracker program">
                            <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                <div>
                                    <div class="uk-card">
                                        <div class="uk-card-header">
                                            <h4 class="uk-card-title">Tracker</h4>
                                        </div>
                                        <div class="uk-card-footer">
                                            <a href="https://bugcatcher.000webhostapp.com/" class="uk-button uk-button-text project-links" target="_blank" rel="noreferrer">DEMO</a> |
                                            <a href="https://github.com/ajmalesa/Tracker" class="uk-button uk-button-text project-links" target="_blank" rel="noreferrer">CODE</a> |
                                            <a href="#" class="uk-button uk-button-text project-links" uk-toggle="target: #tracker-details" >DETAILS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>        
                    </div>  
                    <!-- Details modal -->
                    <div id="tracker-details" uk-modal>
                        <div class="uk-modal-dialog rounded-border">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <div class="uk-modal-header rounded-border">
                                <h2 class="uk-modal-title">Tracker</h2>    
                            </div>
                            <div class="uk-modal-body">
                                <p>Tracker program with full CRUD functionality.</p>
                            </div>
                            <div class="uk-modal-footer rounded-border">
                                <span class="uk-badge">PHP</span>
                                <span class="uk-badge">JavaScript</span>
                                <span class="uk-badge">CSS</span>
                                <span class="uk-badge">HTML</span>
                            </div>
                        </div>
                    </div>
                    <!-- /Details modal -->               
                </li>
                <!-- /Individual project -->

                <!-- Individual project -->
                <li project-type="work" primary-language="PHP JavaScript" data-name="Shop" platform="mobile desktop">
                    <div class="uk-text-center">
                        <div class="uk-inline-clip rounded-border uk-transition-toggle" tabindex="0">
                            <img src="img/shop-marketapts.png" alt="Screenshot of tracker program">
                            <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                <div>
                                    <div class="uk-card">
                                        <div class="uk-card-header">
                                            <h4 class="uk-card-title">Shop MarketApts</h4>
                                        </div>
                                        <div class="uk-card-footer">
                                            <a href="https://shop.marketapts.com/" class="uk-button uk-button-text project-links" target="_blank" rel="noreferrer">DEMO</a> |
                                            <a href="#" class="uk-button uk-button-text project-links" uk-toggle="target: #shop-details">DETAILS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>        
                    </div>  
                    <!-- Details modal -->
                    <div id="shop-details" uk-modal>
                        <div class="uk-modal-dialog rounded-border">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <div class="uk-modal-header rounded-border">
                                <h2 class="uk-modal-title">Shop MarketApts</h2>    
                            </div>
                            <div class="uk-modal-body">
                                <p>Shop for downloadable digital content. OpenCart base with PayPal, Google Signin & other integrations.</p>
                            </div>
                            <div class="uk-modal-footer rounded-border">
                                <span class="uk-badge">E-COMMERCE</span>
                                <span class="uk-badge">OPENCART</span>
                                <span class="uk-badge">PHP</span>
                                <span class="uk-badge">TWIG</span>
                                <span class="uk-badge">CSS</span>
                                <span class="uk-badge">HTML</span>
                            </div>
                        </div>
                    </div>
                    <!-- /Details modal -->               
                </li>
                <!-- /Individual project -->

                <!-- Individual project -->
                <li project-type="personal" primary-language="PHP JavaScript" data-name="Shop" platform="mobile desktop">
                    <div class="uk-text-center">
                        <div class="uk-inline-clip rounded-border uk-transition-toggle" tabindex="0">
                            <img src="img/seddit.PNG" alt="Screenshot of Seddit">
                            <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                <div>
                                    <div class="uk-card">
                                        <div class="uk-card-header">
                                            <h4 class="uk-card-title">Seddit</h4>
                                        </div>
                                        <div class="uk-card-footer">
                                            <a href="https://seddit.ajmalesa.com/" class="uk-button uk-button-text project-links" target="_blank" rel="noreferrer">DEMO</a> |
                                            <a href="https://github.com/ajmalesa/seddit" class="uk-button uk-button-text project-links" target="_blank" rel="noreferrer">CODE</a> |
                                            <a href="#" class="uk-button uk-button-text project-links" uk-toggle="target: #seddit-details">DETAILS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>        
                    </div>  
                    <!-- Details modal -->
                    <div id="seddit-details" uk-modal>
                        <div class="uk-modal-dialog rounded-border">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <div class="uk-modal-header rounded-border">
                                <h2 class="uk-modal-title">Seddit</h2>    
                            </div>
                            <div class="uk-modal-body">
                                <p>Reddit clone that I made to familiarize myself with Laravel and MVC.</p>
                            </div>
                            <div class="uk-modal-footer rounded-border">
                                <span class="uk-badge">Laravel</span>
                                <span class="uk-badge">PHP</span>
                                <span class="uk-badge">MySQL</span>
                                <span class="uk-badge">JavaScript</span>
                                <span class="uk-badge">JQuery</span>
                                <span class="uk-badge">HTML</span>
                            </div>
                        </div>
                    </div>
                    <!-- /Details modal -->               
                </li>
                <!-- /Individual project -->
            </ul>
            <!-- /Masonry grid of all projects -->
        </div>

        <hr class="darker-hr">

        <!-- Skills section -->
        <div class="uk-margin-medium-top" uk-grid>
            <div uk-scrollspy="cls: uk-animation-slide-left-medium; repeat: true">
                <h2 id="skills">Skills</h2> 
    
                <ul class="uk-subnav uk-subnav-pill" uk-margin="">
                    <li class="uk-active" ><a id="show-all-button" href="#" class="uk-text-emphasis rounded-border">Show All</a></li>
                    <li class="uk-active" ><a id="hide-all-button" href="#" class="uk-text-emphasis rounded-border">Hide All</a></li>
                </ul>
            </div>
        </div>

        <div class="uk-margin-large-bottom" uk-grid uk-scrollspy="cls: uk-animation-slide-right-medium; repeat: true">
            <div class="uk-width-1-4@m uk-width-1-3@s">
                <ul class="accordion" uk-accordion="multiple: true">
                    <li>
                        <a class="uk-accordion-title" href="#">Backend</a>
                        <div class="uk-accordion-content">
                            <ul class="accordion" uk-accordion="multiple: true">
                                <li>
                                    <a class="uk-accordion-title second-level-accordion" href="#">Language</a>
                                        <div class="uk-accordion-content second-level-content">
                                            <span class="uk-badge">PHP</span>
                                            <span class="uk-badge">Python</span>
                                            <span class="uk-badge">Java</span>
                                            <span class="uk-badge">ASP.NET</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <ul class="accordion" uk-accordion="multiple: true">
                                <li>
                                    <a class="uk-accordion-title second-level-accordion" href="#">Database</a>
                                        <div class="uk-accordion-content second-level-content">
                                            <span class="uk-badge">RDBMS</span>
                                            <span class="uk-badge">MySQL</span>
                                            <span class="uk-badge">MSSQL</span>
                                            <span class="uk-badge">Eloquent</span>
                                            <span class="uk-badge">Migrating</span>
                                            <span class="uk-badge">Installation</span>
                                            <span class="uk-badge">Maintenance</span>
                                            <span class="uk-badge">Joins</span>
                                            <span class="uk-badge">Normalization</span>
                                            <span class="uk-badge">Keys</span>
                                            <span class="uk-badge">Encryption</span>
                                            <span class="uk-badge">Stored Procedures</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="uk-width-1-4@m uk-width-1-3@s">
                <ul class="accordion" uk-accordion="multiple: true">
                    <li>
                        <a class="uk-accordion-title" href="#">Frontend</a>
                        <div class="uk-accordion-content">
                            <ul class="accordion" uk-accordion="multiple: true">
                                <li>
                                    <a class="uk-accordion-title second-level-accordion" href="#">Language</a>
                                        <div class="uk-accordion-content second-level-content">
                                            <span class="uk-badge">HTML5</span>
                                            <span class="uk-badge">CSS3</span>
                                            <span class="uk-badge">JavaScript</span>
                                            <span class="uk-badge">JQuery</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <ul class="accordion" uk-accordion="multiple: true">
                                <li>
                                    <a class="uk-accordion-title second-level-accordion" href="#">Design</a>
                                        <div class="uk-accordion-content second-level-content">
                                            <span class="uk-badge">PSD to HTML</span>
                                            <span class="uk-badge">GIMP</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <ul class="accordion" uk-accordion="multiple: true">
                                <li>
                                    <a class="uk-accordion-title second-level-accordion" href="#">CSS Frameworks</a>
                                        <div class="uk-accordion-content second-level-content">
                                            <span class="uk-badge">Bootstrap</span>
                                            <span class="uk-badge">UIkit</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="uk-width-1-4@m uk-width-1-3@s">
                <ul class="accordion" uk-accordion="multiple: true">
                    <li>
                        <a class="uk-accordion-title" href="#">Application</a>
                        <div class="uk-accordion-content">
                            <ul class="accordion" uk-accordion="multiple: true">
                                <li>
                                    <a class="uk-accordion-title second-level-accordion" href="#">Desktop</a>
                                        <div class="uk-accordion-content second-level-content">
                                            <span class="uk-badge">C#</span>
                                            <span class="uk-badge">Java</span>
                                            <span class="uk-badge">C++</span>
                                            <span class="uk-badge">Python</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <ul class="accordion" uk-accordion="multiple: true">
                                <li>
                                    <a class="uk-accordion-title second-level-accordion" href="#">Mobile</a>
                                        <div class="uk-accordion-content second-level-content">
                                            <span class="uk-badge">Kotlin</span>
                                            <span class="uk-badge">Java</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="uk-width-1-4@m uk-width-1-3@s">
                <ul class="accordion" uk-accordion="multiple: true">
                    <li>
                        <a class="uk-accordion-title" href="#">Miscellaneous</a>
                        <div class="uk-accordion-content">
                            <ul class="accordion" uk-accordion="multiple: true">
                                <li>
                                    <a class="uk-accordion-title second-level-accordion" href="#">Script</a>
                                        <div class="uk-accordion-content second-level-content">
                                            <span class="uk-badge">Bash</span>
                                            <span class="uk-badge">Batch</span>
                                            <span class="uk-badge">PowerShell</span>
                                            <span class="uk-badge">AutoHotKey</span>
                                            <span class="uk-badge">Desktop Automation</span>
                                            <span class="uk-badge">CLI Automation</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <ul class="accordion" uk-accordion="multiple: true">
                                <li>
                                    <a class="uk-accordion-title second-level-accordion" href="#">Framework</a>
                                        <div class="uk-accordion-content second-level-content">
                                            <span class="uk-badge">Laravel</span>
                                            <span class="uk-badge">Django</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /Skills section -->

        <hr class="darker-hr">
        
        <!-- Contact section -->
        <div class="uk-margin-medium-top" uk-scrollspy="cls: uk-animation-slide-bottom-small; repeat: true">
            <h4>Like what you see? <a href="#" uk-toggle="target: #contact-modal">Send me a happy, electronic missive.</a></h4>
        </div>
        <!-- /Contact section -->

        <!-- Contact form modal -->
        <div id="contact-modal" uk-modal>
            <div class="uk-modal-dialog rounded-border">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <div class="uk-modal-header rounded-border">
                    <h2 class="uk-modal-title">Contact</h2>    
                </div>
                <div class="uk-modal-body">
                    <form id="contact-form" class="uk-grid-small" uk-grid method="POST" action="functions/contact-request.php">
                        <div class="uk-width-1-1">
                            <div class="uk-inline uk-width-1-1">
                                <input name="contact-email" id="contact-email"  oninput="validateContactForm()" class="uk-input" placeholder="Your email*">
                            </div>
                        </div>

                        <div class="uk-width-1-1">
                            <div class="uk-inline uk-width-1-1">
                                <textarea rows="6" name="contact-message" id="contact-message" oninput="validateContactForm()" class="uk-textarea" placeholder="Your message*"></textarea>
                            </div>
                        </div>

                        <div class="uk-margin" uk-margin>
                            <button type="button" id="send-message-button" class="uk-button uk-button-default" disabled>Send message</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
        <!-- /Contact form modal -->

    </div>

    <script src="js/script.js"></script>
</body>
</html>
