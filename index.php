<?php include "includes/header.php"; ?>

    <div class="copy-container columns small-12">
      <img class="profile-image" src="img/profile.png" alt="Andrew Gormley profile image">
      <p>
        Lead User Interface Designer <a href="https://www.crowdcube.com/" target="_blank">@Crowdcube</a>.
        Previously Designer <a href="http://www.prodirectsport.com/" target="_blank">@Pro:Direct Sport</a>.
        Collaborated with the likes of <a href="https://www.nike.com/" target="_blank">@Nike</a>,
        <a href="https://www.adidas.com/" target="_blank">@adidas</a>, <a href="http://uk.puma.com" target="_blank">@PUMA</a>
        and more. Always searching for exciting new projects to get involved with.
      </p>
      <p>
        <strong>What I'm up to:</strong> Currently building <a href="https://swtechjobs.com" target="_blank">South West Tech Jobs</a> on the side for fun <span>&#128640;</span></span>
      </p>
    </div>

    <div class="card-row">

      <div class="card-container columns small-12 large-4">
        <div id="cardLeft" class="card">
          <div class="cover"><img src="img/ldn19-cover.jpg" alt="LDN19 live store event"></div>
          <div class="card-copy">
            <div class="card-title">Case Study - LDN19</div>
            <p>Winner in the BT Retail Week Tech &amp; Ecomm Awards. Interactive features that display on 32" 4K touch screens. Featuring interaction design, and web development.</p>
            <a href="ldn19">
              <div class="button">Razzle Dazzle</div>
            </a>
          </div>
        </div>
      </div>

      <div class="card-container columns small-12 large-4">
        <div id="cardCentre" class="card">
          <div class="cover"><img src="img/dosport-cover.jpg" alt="do sport clothing"></div>
          <div class="card-copy">
            <div class="card-title">Case Study - DoSport</div>
            <p>Full e-commerce website and brand launch. Art directing photographers and retouching. Featuring UI design, web development and prototyping.</p>
            <a href="dosport">
              <div class="button">Be Set Free</div>
            </a>
          </div>
        </div>
      </div>

      <div class="card-container columns small-12 large-4 foot">
        <div id="cardRight" class="card">
          <div class="cover"><img src="img/crowdcube-cover.jpg" alt="Crowdcube London office"></div>
          <div class="card-copy">
            <div class="card-title">Case Study - Crowdcube</div>
            <p>Award winning FinTech startup. Website redesign, new product releases and style guide creation. Featuring UI design, web development and prototyping.</p>
            <a href="crowdcube">
              <div class="button">Dollar Dollar Bill</div>
            </a>
          </div>
        </div>
      </div>

      <div class="clear"></div>

    </div>

    <div class="copy-container columns small-12">
      <p>More of my work can be found on <a href="https://www.dribbble.com/AndrewGormley" target="_blank">@Dribbble</a>.</p>
      <a href="contact">
        <div class="button button-spacing">Hire me <span>&#128060;</span></div>
      </a>
    </div>

<?php include "includes/footer.php"; ?>

    <script>

      $(document).ready(function(){

        function animateDelay(id,delay,animation){
          setInterval(function(){
            $('#'+id).addClass('animated').addClass(animation);
          }, delay);
        }

        animateDelay('cardLeft', 150, 'fadeInUp');
        animateDelay('cardCentre', 250, 'fadeInUp');
        animateDelay('cardRight', 350, 'fadeInUp');

      });

    </script>

  </body>
</html>
