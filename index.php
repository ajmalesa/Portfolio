<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajmal Esa</title>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>

    <link rel="stylesheet" href="css/style.css" />
</head>
<body>

    <nav class="uk-background-secondary uk-light uk-navbar">
        <!-- Name display on the left -->
        <div class="uk-navbar-left uk-margin-large-left">
            <a href="" class="uk-navbar-item uk-logo uk-margin-small-right">Ajmal Esa</a>
        </div>
        <!-- /Name display on the left -->
    
        <!-- /Navigation Menu For Screens With A Width Larger Than 960px -->
        <div class="uk-navbar-right uk-visible@m uk-margin-large-right">
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="/">Projects</a></li>
                <li class=""><a href="/games">Games</a></li>
                <!-- <li class=""><a href="#">Contact</a></li> -->
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
                    <li class="uk-active"><a href="/">Projects</a></li>
                    <li class=""><a href="/games">Games</a></li>
                    <!-- <li class=""><a href="#">Contact</a></li> -->
                </ul>
            </div>
        </div>
        <!-- /Mobile Navigation Menu On The Right -->
    </nav>

    <div class="uk-margin-large-left uk-margin-large-right uk-margin-large-top uk-margin-large-bottom" >
        <div uk-filter="target: .js-filter">

            <!-- Filter and sort selection -->
            <div class="uk-grid-small uk-flex-middle" uk-grid uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                <div class="uk-width-expand">
        
                    <div class="uk-grid-small uk-grid-divider uk-child-width-auto" uk-grid>
                        <div>
                            <ul class="uk-subnav uk-subnav-pill" uk-margin>
                                <li class="uk-active" uk-filter-control><a href="#" class="uk-text-emphasis">All</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="uk-subnav uk-subnav-pill" uk-margin>
                                <li uk-filter-control="filter: [project-type='work']; group: project-type"><a href="#" class="uk-text-emphasis">Work</a></li>
                                <li uk-filter-control="filter: [project-type='personal']; group: project-type"><a href="#" class="uk-text-emphasis">Personal</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="uk-subnav uk-subnav-pill" uk-margin>
                                <li uk-filter-control="filter: [primary-language='JavaScript']; group: primary-language"><a href="#" class="uk-text-emphasis">JavaScript</a></li>
                                <!-- <li uk-filter-control="filter: [primary-language='Java']; group: primary-language"><a href="#" class="uk-text-emphasis">Java</a></li> -->
                                <li uk-filter-control="filter: [primary-language='PHP']; group: primary-language"><a href="#" class="uk-text-emphasis">PHP</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="uk-subnav uk-subnav-pill" uk-margin>
                                <li uk-filter-control="filter: [platform*='mobile']; group: platform"><a href="#" class="uk-text-emphasis">Mobile</a></li>
                                <li uk-filter-control="filter: [platform*='desktop']; group: platform"><a href="#" class="uk-text-emphasis">Desktop</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="uk-subnav uk-subnav-pill" uk-margin>
                                <li ><a href="/games" class="uk-text-emphasis">GAMES</a></li>
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
            <ul class="js-filter uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-text-center" uk-grid="masonry: true" uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                <!-- Individual project -->
                <li project-type="personal" primary-language="JavaScript" platform="desktop" data-name="Clicker Web Game" >
                    <div class="uk-text-center">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <img src="img/clicker-website.png" uk-blend-hue alt="">
                            <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle" >
                                <div>
                                    <div class="uk-card">
                                        <div class="uk-card-header">
                                            <h4 class="uk-card-title" >Clicker Website</h4>
                                        </div>
                                        <div class="uk-card-footer">
                                            <a href="https://ajmalesa.github.io/Clicker-Website/" class="uk-button uk-button-text project-links" target="_blank" >DEMO</a> |
                                            <a href="https://github.com/ajmalesa/Clicker-Website" class="uk-button uk-button-text project-links" target="_blank" >CODE</a> |
                                            <a href="#" class="uk-button uk-button-text project-links" uk-toggle="target: #clicker-website-details" >DETAILS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                 
                    </div>
                    <!-- Details modal -->
                    <div id="clicker-website-details" uk-modal>
                        <div class="uk-modal-dialog">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <div class="uk-modal-header">
                                <h2 class="uk-modal-title">Clicker Website</h2>    
                            </div>
                            <div class="uk-modal-body">
                                <p>Casual clicker game made for the web.</p>
                            </div>
                            <div class="uk-modal-footer">
                                <span class="uk-badge">JavaScript</span>
                                <span class="uk-badge">HTML</span>
                                <span class="uk-badge">CSS</span>
                            </div>
                        </div>
                    </div>
                    <!-- /Details modal -->
                </li>
                <!-- /Individual project -->
                <!-- Individual project -->
                <li project-type="personal" primary-language="Java" platform="mobile" data-name="Clicker Android Game">
                    <div class="uk-text-center">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <img src="img/clicker-app.png" alt="">
                            <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                <div>
                                    <div class="uk-card">
                                        <div class="uk-card-header">
                                            <h4 class="uk-card-title">Clicker App</h4>
                                        </div>
                                        <div class="uk-card-footer">
                                            <a href="https://github.com/ajmalesa/Clicker-Android-App/releases/tag/V1.1.0" class="uk-button uk-button-text project-links" target="_blank">APK</a> |
                                            <a href="https://github.com/ajmalesa/Clicker-Android-App" class="uk-button uk-button-text project-links" target="_blank">CODE</a> | 
                                            <a href="#" class="uk-button uk-button-text project-links" uk-toggle="target: #clicker-app-details" >DETAILS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>        
                    </div>  
                    <!-- Details modal -->
                    <div id="clicker-app-details" uk-modal>
                        <div class="uk-modal-dialog">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <div class="uk-modal-header">
                                <h2 class="uk-modal-title">Clicker App</h2>    
                            </div>
                            <div class="uk-modal-body">
                                <p>More advanced version of web clicker game. Includes graphics, animations and sound effects.</p>
                            </div>
                            <div class="uk-modal-footer">
                                <span class="uk-badge">Java</span>
                                <span class="uk-badge">XML</span>
                                <span class="uk-badge">Android Studio</span>
                            </div>
                        </div>
                    </div>
                    <!-- /Details modal -->              
                </li>
                <!-- /Individual project -->
                <!-- Individual project -->
                <li project-type="personal" primary-language="PHP" platform="desktop" data-name="Tracker">
                    <div class="uk-text-center">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <img src="img/tracker-website.png" alt="Screenshot of tracker program">
                            <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                <div>
                                    <div class="uk-card">
                                        <div class="uk-card-header">
                                            <h4 class="uk-card-title">Tracker</h4>
                                        </div>
                                        <div class="uk-card-footer">
                                            <a href="https://bugcatcher.000webhostapp.com/" class="uk-button uk-button-text project-links" target="_blank">DEMO</a> |
                                            <a href="https://github.com/ajmalesa/Tracker" class="uk-button uk-button-text project-links" target="_blank">CODE</a> |
                                            <a href="#" class="uk-button uk-button-text project-links" uk-toggle="target: #tracker-details" >DETAILS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>        
                    </div>  
                    <!-- Details modal -->
                    <div id="tracker-details" uk-modal>
                        <div class="uk-modal-dialog">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <div class="uk-modal-header">
                                <h2 class="uk-modal-title">Tracker</h2>    
                            </div>
                            <div class="uk-modal-body">
                                <p>Tracker program with full CRUD functionality.</p>
                            </div>
                            <div class="uk-modal-footer">
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
                <li project-type="work" primary-language="PHP" data-name="Shop" platform="mobile desktop">
                    <div class="uk-text-center">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <img src="img/shop-marketapts.png" alt="Screenshot of tracker program">
                            <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                <div>
                                    <div class="uk-card">
                                        <div class="uk-card-header">
                                            <h4 class="uk-card-title">Shop MarketApts</h4>
                                        </div>
                                        <div class="uk-card-footer">
                                            <a href="https://shop.marketapts.com/" class="uk-button uk-button-text project-links" target="_blank">DEMO</a> |
                                            <a href="#" class="uk-button uk-button-text project-links" uk-toggle="target: #shop-details">DETAILS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>        
                    </div>  
                    <!-- Details modal -->
                    <div id="shop-details" uk-modal>
                        <div class="uk-modal-dialog">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <div class="uk-modal-header">
                                <h2 class="uk-modal-title">Shop MarketApts</h2>    
                            </div>
                            <div class="uk-modal-body">
                                <p>Shop for downloadable digital content. OpenCart base with PayPal, Google Signin & other integrations.</p>
                            </div>
                            <div class="uk-modal-footer">
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
            </ul>
            <!-- /Masonry grid of all projects -->
        </div>
    </div>
    
</body>
</html>