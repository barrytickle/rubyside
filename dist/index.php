<?php include 'includes/header.php' ?>
<header>
  <a href="#top"><img src="/images/icons/ruby-light.svg" alt="Ruby Logo" title="Ruby Logo"></a>
  <nav class="main-navigation">
    <a href="#events">Upcoming Events</a>
    <a href="#what-is-ruby">What is Ruby?</a>
    <a href="#meet-the-team">Meet the team</a>
  </nav>
</header>
<main>
  <!-- First section of the project, defines the two main blocks that stand out when the user first visits the page. -->
  <article class="flex--group" id="top">

    <section class="section--full_height flex--split_column section--block_half flex--center ruby-logo--container">
      <div class="logo--group">
        <img src="/images/logo.svg" alt="Rubyside main logo" title="Rubyside main logo">
        <span>An interest group for ruby on rails enthusiasts.</span>
      </div>

      <div id="hamburger">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
      </div>

      <div class="mouse-scroll">
        <img src="/images/mouse.svg" alt="Scroll down for more content" title="Scroll down for more content.">
      </div>
    </section>
    <section class="section--full_height  section--block_half  section--block_primary flex--center">

      <div class="uvp--block">
        <h1>Welcome to Rubyside</h1>
        <p>Rubyside is an interest group for Ruby and Ruby on Rails Enthusiasts in Liverpool, Merseyside and the surrounding areas. We aim to use ruby as a tool to bring a community together, while learning one of the most powerful languages used within the web industry today. Come check out our upcoming events to see what will interest you. </p>
        <a href="#events" class="btn btn--ghost">See our latest events.</a>
      </div>
    </section>
  </article>
  <article id="events">
    <section class="block--banner">
      <div class="site-container flex--space_between">
        <div class="event-block flex--center">
          <img src="/images/icons/ruby-light.svg">
          <div class="event-stats">
            <h3>Our latest event</h3>
            <p>
              Rubyside #9<br>
              Wednesday 19th April 2017<br>
              6pm - 8pm
            </p>
          </div>
        </div>
        <div class="event-content">
          <p>Come and share your knowlege and learn from others at Rubyside's first ever lightning talk session! Venue to be confirmed!</p>
          <a class="btn btn-block" href="https://www.eventbrite.co.uk/e/rubyside-9-tickets-32402678283" target="_blank">Sign up for our event!</a>
        </div>
      </div>
    </section>
    <section class="background-block" id="what-is-ruby">
      <div class="site-container">
        <div class="content-block">
          <h2>What is Ruby?</h2>
          <p>Ruby is a dynamic, open source programming language which purely focuses on simplicity and productivity. The programming language itself is similar to the fundamentals of Phython, which requires indentation rather than brackets to compile code fragments. </p>
          <!-- <h3>References</h3> -->
          <!-- <i>https://www.ruby-lang.org/en/</i><br> -->
          <!-- <i>http://whatis.techtarget.com/definition/Ruby</i> -->
          <img src="/images/ruby-code.png" alt="Ruby code sample" title="Ruby code sample">
          <h2>Last Time Out: Defining The Future Of Content On Rails</h2>
           <p>Over the past 10 years, the way content is delivered on the web has changed drastically. In the next 10 years, it will change even more. We're not just pushing content to web pages but phones, TVs and more. On Wednesday 22nd February, we invite you to join a discussion on how you think content will be delivered and structured in the future to help shape and build a new open source project for the future on content on Rails.</p>
        </div>
      </div>
    </section>
    <section class="colour-block" id="meet-the-team">
      <div class="site-container">
        <h2>Meet the Rubyside team</h2>
        <p>Meet the team behind Rubyside, being the lead team at Cleversteam, you will be working close with professionals who use this software on a daily basis. </p>
        <div class="team-block">
          <div class="tiles">
              <a href="http://cleversteam.com" class="tile">
                <img src="/images/team/daniel.jpg" alt="Daniel Nicolson Headshot" title="Daniel Nicolson Headshot">
                  <div class="details">
                      <span class="title">Daniel Nicolson</span>
                      <span class="info">Daniel uses his entrepreneurial spirit to lead Cleversteam into the future and director at Cleversteam</span>
                  </div>
              </a>
              <a href="http://cleversteam.com" class="tile">
                <img src="/images/team/mike.jpg" alt="Mike Hart Headshot" title="Mike Hart Headshot">
                  <div class="details">
                      <span class="title">Mike Hart</span>
                      <span class="info">Overseeing our tech infrastructure and Ruby on Rails projects and a technical director at cleversteam</span>
                  </div>
              </a>
              <a href="http://cleversteam.com" class="tile">
                <img src="/images/team/tom.jpg" alt="Tom Dracz Headshot" title="Tom Dracz Headshot">
                  <div class="details">
                      <span class="title">Tom Dracz</span>
                      <span class="info">Tom is a staunch Rubyist from Poland with a penchant for band t-shirts and a developer at Cleversteam</span>
                  </div>
              </a>
          </div>
        </div><!-- end of team block -->
      </div> <!-- End of site-container -->
    </section>
    <section class="block--banner">
      <div class="site-container">
        <div class="flex--center flex--split_column details--group">
          <h2>Rubyside is hosted by</h2>
          <a href="http://cleversteam.com"><img src="/images/cleversteam.svg" alt="Cleversteam company logo" title="Cleversteam company logo"></a>
          <div class="location--group flex--center">
            <p><a href="https://www.google.co.uk/maps/search/Suite+4,+1+Church+House,+Hanover+Street,+Liverpool,+L1+3DN/@53.4027805,-2.986788,18z/data=!3m1!4b1" target="_blank">Suite 4, 1 Church House, Hanover Street, Liverpool, L1 3DN</a></p>
            <img src="/images/icons/location-marker.svg">
          </div>
        </div>
      </div>
    </section>
  </article>
</main>
<?php include 'includes/footer.php' ?>
