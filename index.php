

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Evolution Web Studio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css" />
        <link rel="stylesheet" href="css/foundation.css" />
        <link rel="stylesheet" href="css/main.css" />
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="row">
        	<div class="large-3 columns relative">
                <nav class="main-menu">
                    <ul>
                        <li class="logo"><a href="#home"><h1>Evolution Web Studio</h1></a></li>
                        <li class="about <?php echo ($activeClass == 'about')? "active" : "" ?>"><a href="#about">About</a></li>
                        <li class="portfolio <?php echo ($activeClass == 'portfolio')? "active" : "" ?>"><a href="#portfolio">Portfolio</a></li>
                        <li class="hire <?php echo ($activeClass == 'hire')? "active" : "" ?>"><a href="#hire">Hire us</a></li>
                        <li class="contact <?php echo ($activeClass == 'contact')? "active" : "" ?>"><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
        	</div>
            <div class="large-9 columns">
                <section class="page home">
                    <a class="" name="home" href=""></a>
                    <header class="main-header">
                        <h2>MI NE PRAVIMO WEB SAJTOVE</h2>
                        <p>
                            Mi kreiramo vaše prisustvo na internetu korištenjem najnovijih tehnologija.

                        </p>
                        <ul class="small-block-grid-3">
                            <li><a href="#">sdf</a></li>
                            <li><a href="#">sdf</a></li>
                            <li><a href="#">sdf</a></li>
                        </ul>
                    </header>

                </section>
                <section class="page about">
                    <a class="" name="about" href=""></a>
                    <article>
                        <h2>Team behind Evolution Web Studio</h2>
                        <article>
                            <p>Evolution Web Studio je nastao u martu 2012. godine, kao potreba dvojice studenata
                            da svoj višegodišnji rad i iskustvo predstave kroz jedan brend.</p>
                        </article>
<!--                        <div class="team-members">-->
<!--                            <div class="row">-->
<!--                                <div class="small-4 columns"><img src="img/ilija-tesic.jpg" alt=""/></div>-->
<!--                                <div class="small-8 columns">-->
<!--                                    <h3>Ilija Tesic</h3>-->
<!--                                    <p>bla bla bla</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="row">-->
<!--                                <div class="small-4 columns"><img src="img/igor-golub.jpg" alt=""/></div>-->
<!--                                <div class="small-8 columns">-->
<!--                                    <h3>Igor Golub</h3>-->
<!--                                    <p>bla bla bla</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->

                        <ul class="small-block-grid-2 team-members">
                            <li>
                                <div class="team-member round-item">
                                    <img src="img/team/ilija-tesic.jpg" alt="Ilija Tešić"/>
                                    <div class="team-member-info item-hover">
                                        <h3>Ilija Tešić</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eligendi ex
                                            nam nulla odit totam. Deserunt dignissimos distinctio ducimus.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="team-member round-item">
                                    <img src="img/team/igor-golub.jpg" alt="Igor Golub"/>
                                    <div class="team-member-info item-hover">
                                        <h3>Igor Golub</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eligendi ex
                                            nam nulla odit totam. Deserunt dignissimos distinctio ducimus.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </article>
                </section>
                <section class="page portfolio">
                    <a class="" name="portfolio" href=""></a>
                    <h2>Some of our works</h2>
                    <ul class="small-block-grid-2 portfolio-items">
                        <li>
                            <div class="portfolio-item round-item">
                                <img src="img/projects/apartmani-kosuta-jahorina.png" alt="Apartmani Košuta na Jahorini"/>
                                <div class="portfolio-item-info item-hover">
                                    <h3>Apartmani Košuta na Jahorini </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eligendi ex
                                        nam nulla odit totam. Deserunt dignissimos distinctio ducimus.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item round-item">
                                <img src="img/projects/apartmani-kosuta-jahorina.png" alt="Apartmani Košuta na Jahorini"/>
                                <div class="portfolio-item-info item-hover">
                                    <h3>Apartmani Košuta</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eligendi ex
                                        nam nulla odit totam. Deserunt dignissimos distinctio ducimus.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </section>
                <section class="page hire">
                    <a class="" name="hire" href=""></a>
                    <h2>If you need professionals, hire us.</h2>

                </section>
                <section class="page contact">
                    <a class="" name="contact" href=""></a>

                    <h2>Contact us</h2>
                    <div class="row">
                        <div class="large-8 columns">
                            <form action="#">
                                <input type="text" name="name" placeholder="Name"/>
                                <input type="text" name="email" placeholder="Email"/>
                                <textarea name="message" id="" cols="30" rows="10" placeholder="Write your message">

                                </textarea>
                            </form>
                        </div>
                        <div class="large-4 columns">

                        </div>
                    </div>
                </section>
                <footer class="main-footer">
                    <p class="copyright">Evolution Web Studio &copy; 2014</p>
                    <p class="credits">icons by <a href="#">icon8</a></p>
                </footer>
            </div>
        </div>

        <script src="js/jquery.js"></script>
    	<script src="js/foundation.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

  		<!--
  		<script src="js/foundation/foundation.js"></script>
  		<script src="js/foundation/foundation.alerts.js"></script>
  		<script src="js/foundation/foundation.clearing.js"></script>
  		<script src="js/foundation/foundation.cookie.js"></script>
  		<script src="js/foundation/foundation.dropdown.js"></script>
  		<script src="js/foundation/foundation.forms.js"></script>
  		<script src="js/foundation/foundation.joyride.js"></script>
  		<script src="js/foundation/foundation.magellan.js"></script>
  		<script src="js/foundation/foundation.orbit.js"></script>
  		<script src="js/foundation/foundation.reveal.js"></script>
  		<script src="js/foundation/foundation.section.js"></script>
  		<script src="js/foundation/foundation.tooltips.js"></script>
  		<script src="js/foundation/foundation.topbar.js"></script>
  		<script src="js/foundation/foundation.interchange.js"></script>
  		<script src="js/foundation/foundation.placeholder.js"></script>
  		<script src="js/foundation/foundation.abide.js"></script>
  		-->
  
		<script>
			$(document).foundation();
		</script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->
    </body>
</html>
