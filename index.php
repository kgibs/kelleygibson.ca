<?php
  if($_SERVER["HTTPS"] !== "on" && $_SERVER["HTTP_HOST"] === "kelleygibson.ca") {
    $redirect= "https://kelleygibson.ca".$_SERVER["REQUEST_URI"];
    header("Location:$redirect");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta name="description" content="Kelley Gibson is a front end developer available for hire based in Toronto, Canada, specializing in HTML, CSS, WordPress and jQuery among other things." />

  <title>Kelley Gibson | Toronto based front end developer specializing in WordPress development</title>

  <link rel="shortcut icon" href="favicon.png" />

  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|PT+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header id="top">
    <nav>
      <div class="container">
        <h1 class="logo">
          <img src="images/logo_inverse.png" alt="Kelley Gibson - Front End Developer" />
        </h1>
        <div class="mobile-menu">
          <div class="hamburger"></div>
        </div>
        <ul>
          <li><a href="top" class="scroll-link">Home</a></li>
          <li><a href="bio" class="scroll-link">About</a></li>
          <li><a href="portfolio" class="scroll-link">Portfolio</a></li>
          <li><a href="contact" class="scroll-link">Contact</a></li>
        </ul>        
      </div>
    </nav>
    <div class="icons-container"></div>
    <div class="container">
    <div class="headshot-container"></div>
      <div class="main-container">
        <h1 class="logo">
          <img src="images/logo.png" alt="Kelley Gibson - Front End Developer" />
        </h1>      
        <a class="btn btn-primary" target="_blank" href="files/resume-kelley-gibson.pdf">View My Resume</a>
        <a class="scroll-link btn btn-primary" href="contact">Hire Me</a>
      </div>

      <div class="continue">
        <p>Get to know me</p>
        <a href="bio" class="scroll-link next">Bio</a>
      </div>
    </div>
  </header>

  <main>
    <section id="bio" class="bio">
      <div class="container">
        <div class="title-container">
          <h2>Hi, I'm Kelley</h2>
          <h3>Toronto-based Front End Developer and self-proclaimed ice cream aficionado</h3>          
        </div>

        <p>Nearly a decade ago, I serendipitously fell into a career in web development, and I haven’t looked back since. With a brain equally stimulated by math and the arts, I find coding to be the perfect balance. I love turning designs into <a class="scroll-link" href="portfolio">functioning websites</a> and specialize in building sites with content management systems (<a href="http://wordpress.org" title="WordPress" target="_blank">WordPress</a> is my jam) to give clients full and easy control over their site content.</p>

        <p>When not hard at work on client projects, I love experiencing life through the eyes of my two daughters,  running (one full and six half marathons so far), endless games of fetch with my Nova Scotia Duck Tolling Retriever <a href="http://www.huffingtonpost.ca/entry/adorable-dog-sleeps-plays-and-chews_n_5207998" target="_blank">Phoenix</a>, all things music related, traveling and Canadian summers.</p>

        <div class="blocks">
          <div class="single-block">
            <img src="images/kelley.png" alt="Hire Kelley Gibson" width="135" height="135" />
            <h4>Why Work With Me?</h4>
            <p>I’m professional, personable, dependable and efficient. I take budgets and deadlines seriously. I have the tech chops to get the work done and the customer service skills to ensure client satisfaction.</p>
            <a class="btn btn-primary" target="_blank" href="files/resume-kelley-gibson.pdf">View My Resume</a>          
          </div>
          <div class="single-block">
            <img src="images/icon_hand.png" alt="Waving hand icon" width="135" height="135" />
            <h4>Like What You See?</h4>
            <p>Want to discuss your upcoming project, grab a coffee to talk shop, or hear my thoughts on why <a href="http://graeters.com" title="Graeter's Ice Cream" target="_blank">Graeter’s Ice Cream</a> is the best?</p>
            <a class="scroll-link btn btn-primary" href="contact">Let's Chat</a>
          </div>
        </div>
      </div>
    </section>

    <section class="testimonials">
      <div class="container">
        <div class="title-container">
          <h2>But don't just take my word for it. Have a look at what my clients have to say.</h2>        
        </div>

        <div class="testimonial-container">
          <div class="single-testimonial">
            <p>Kelley isn’t just an incredible developer who stays proactive to make sure she’s never blocked, she excels at building deep relationships with her teammates and clients, and is an incredibly effective communicator who can translate complex options to stakeholders. Kelley consistently goes over and above what her team and clients expect of her, coming up with creative solutions to problems and not letting technical constraints limit her. While Kelley has deep WordPress and front-end development experience, she has pushed the boundaries of her work with using different tools, frameworks, and technologies to get the job done.</p>
            <p class="attribution"><img src="images/headshot_jamescosta.png" alt="James Costa of Phuse" />James Costa, Phuse</p>
          </div>
          <div class="single-testimonial">
            <p>"Kelley is meticulous, organized and on top of her game, always. She is talented, eager to learn, and tackles everything we throw at her with vigor. Her enthusiasm is contagious, and she does the seemingly impossible on a regular basis. Most importantly she is trustworthy warm and always upbeat. Highly recommended."</p>
            <p class="attribution"><img src="images/headshot_jenniferchua.jpg" alt="Jennifer Chua of Hip Mommies" />Jennifer Chua, Hip Mommies</p>
          </div>
          <div class="single-testimonial">
            <p>"Kelley has impressed me with her skills on dozens of web development projects since autumn 2012. She is always my first choice for any web development needs and I consistently rely on her for projects ranging from custom WordPress theme builds, to adding custom functionality to existing sites. I am always impressed by her dedication to projects, her ability to find and implement solutions to meet client requests, and her ability to communicate directly with my non-web-savvy clients effectively. She is always a pleasure to work with and my clients have commented on how great she is to have on our team."</p>
            <p class="attribution">
              <img src="images/headshot_andreakrones.jpg" alt="Andrea Krones of Inkling Design" />
              Andrea Krones, Inkling Design                
            </p>
          </div>
        </div>        
      </div>
    </section>

    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="title-container">
          <h2>My Work</h2>        
        </div>
      </div>

      <div class="portfolio-grid">
        <div class="portfolio-item">
          <a href="http://bangertv.com" target="_blank" class="portfolio-item" style="background-color: #000;">
            <img src="images/logo_bangertv.png" alt="Banger TV" />
          </a>
        </div>
        <div class="portfolio-item">
          <a href="http://quasimodomodern.com" target="_blank" class="portfolio-item" style="background-color: #f7d3c4;">
            <img src="images/logo_quasimodo.png" alt="Quasi Modo Modern" />
          </a>
        </div>
        <div class="portfolio-item">
          <a href="http://needfinding.secondmuse.com" target="_blank" class="portfolio-item" style="background-color:#7fa653;">
            <img src="images/logo_needfinding.png" alt="Internet Freedom Needfinding amework" />
          </a>
        </div>
        <div class="portfolio-item">
          <a href="http://prepaid2cash.com" target="_blank" class="portfolio-item" style="background-color:#66af55">
            <img src="images/logo_prepaid2cash.png" alt="Prepaid2Cash" />
          </a>
        </div>
        <div class="portfolio-item">
          <a href="http://conavi.com" target="_blank" class="portfolio-item" style="background-color:#f6f6f6">
            <img src="images/logo_conavi.png" alt="Conavi Medical" />
          </a>
        </div>
        <div class="portfolio-item">
          <a href="http://inklingdesign.ca" target="_blank" class="portfolio-item" style="background-color:#f3ccd2">
            <img src="images/logo_inkling.png" alt="Ink'ling Design" />
          </a>
        </div>
      </div>
    </section>

    <section id="contact" class="contact">
      <div class="container">
        <div class="title-container">
          <h2>Want To Work Together?</h2>        
        </div>
        <p>Looking to redesign your website? Need some WordPress help? Looking for an extra developer to assist on a team project? Tell me a bit about your project, and I’ll get back to you usually within two business days.</p>

        <div class="form-wrapper">
          <div id="wufoo-m13z8ftn0dvk2d9"></div>
            <script type="text/javascript">var m13z8ftn0dvk2d9;(function(d, t) {
            var s = d.createElement(t), options = {
            'userName':'kelleygibson',
            'formHash':'m13z8ftn0dvk2d9',
            'autoResize':true,
            'height':'617',
            'async':true,
            'host':'wufoo.com',
            'header':'show',
            'ssl':true};
            s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
            s.onload = s.onreadystatechange = function() {
            var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
            try { m13z8ftn0dvk2d9 = new WufooForm();m13z8ftn0dvk2d9.initialize(options);m13z8ftn0dvk2d9.display(); } catch (e) {}};
            var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
            })(document, 'script');</script>
          </div>          
        </div>

    </section>
  </main>

  <footer>
    <div class="container">
      <p>&copy; <?php echo date('Y'); ?> Kelley Gibson</p>
      <ul class="socials">
        <li><a class="linkedin" title="Find me on LinkedIn" target="_blank" href="https://www.linkedin.com/in/kelley-gibson-5315941/">LinkedIn</a></li>
        <li><a class="github" title="View my Github Profile" target="_blank" href="http://github.com/kgibs">GitHub</a></li>
      </ul>
    </div>    
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="js/vendor/flickity.pkgd.min.js"></script>
  <script src="js/app.js"></script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-6377083-36', 'auto');
    ga('send', 'pageview');

  </script>
  
</body>
</html>