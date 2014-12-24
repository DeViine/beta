    <section id="howitworks">
        <h1>Let's save green.</h1>
        <h2>HOW IT WORKS</h2>
        <div class="sectionwrapper">
          <img class="lefticon" src="http://s7.postimg.org/ee4s7ph97/lrg_dispensary_icon.png">
          <h4 class="lefttitle disptitle">Find dispensaries</h4>
          <p class="leftpara">Find recreational cannabis dispensaries in your area. Explore up-to-date menus with prices for every dispensary listed on DeViine. Browse through user reviews, images, store locations, store hours and contact information to find the best dispensary for you.</p>
        </div>
        <div class="sectionwrapper">
          <img class="righticon" src="http://s7.postimg.org/ilzkggior/lrg_deal_icon.png">
          <h4 class="righttitle dealtitle">Discover deals</h4>
          <p class="rightpara">Discover the best deals in your area. We work directly with businesses within the recreational cannabis industry to provide the best deals possible. Find deals on strains, edibles, concentrates, glassware, rolling papers and other accessories from businesses in your area.</p>
        </div>
        <div class="sectionwrapper">
          <img class="lefticon" src="http://s7.postimg.org/rjkadtb4r/lrg_strain_icon.png">
          <h4 class="lefttitle strntitle">Explore strains</h4>
          <p class="leftpara">Explore through our ever-expanding strain database to find the perfect strain for you. All cannabis strains provide different highs, flavor profiles and effects. We work directly with licensed producers to provide the most comprehensive database possible.</p>
        </div>
        <div class="sectionwrapper">
          <img class="righticon" src="http://s7.postimg.org/pnxi2nmaj/lrg_news_icon.png">
          <h4 class="righttitle newstitle">Keep informed</h4>
          <p class="rightpara">Keep informed on what’s going on in the recreational cannabis industry with our news section. We have the most passionate cannabis journalists writing articles to provide the most relevant news from around the country.</p>
        </div>
    </section>



      <section id="slider">
         <ul class="slider" data-orbit>
            <li class="active">
              <img src="../img/slide1.png" alt="Find Recreational Cannabis Dispensaries In Your Area to Compare Menus and Prices!" />
            </li>
            <li>
              <img src="../img/slide2.png" alt="Discover Cannabis Deals Around You!" />
            </li>
            <li>
              <img src="../img/slide3.png" alt="Browse Through Our Strain Database To Find The Perfect Strain For You!" />
            </li>
            <li>
              <img src="../img/slide4.png" alt="Keep Informed With Our News and Blog Section!" />
            </li>
        </ul>
      </section>
<!-- end slide -->




<!--TAKE THIS SECTION AND USE PHP CODE TO DYNAMICALLY PULL IN CONTENT
         <div class="directorySlider"></div-->



<div id="page_wrapper">
<!--TAKE THIS SECTION AND USE PHP CODE TO DYNAMICALLY PULL IN CONTENT 
WILL NEED TO CALL IN AN HREF FOR EVERY DISPENSARY THAT IS ADDED
WILL NEED TO CALL IN THE IMAGE FOR SAID DISPENSARY
WILL NEED TO USE SPECIAL CODE FOR THE LOCATION INFORMATION AND CALL IN THE ADDRESS INTO CLASSES INSIDE OF H2
WILL NEED TO CALL IN THE RATING WITH SPECIAL CODE
WILL NEED TO CREATE AND POPULATE NEW LI's INSIDE OF CLASS="BUD"
WILL NEED TO CALL IN SPECIAL CODE FOR CLASS="RATINGTEXT"
WILL NEED TO CALL IN OUTPUTS FROM SPECIAL CODE FOR THE CLASS="DISTANCE" -->
      <section class="featureddispensaries">
        <h2 class="featdispbar">Featured Dispensaries</h2>
        <div class="featureddispensariesbody">

          <?php include ('../lib/dispensaries_script.php');?>
          
        </div>
      </section>
        







<!--WILL NEED TO CALL IN DEAL TITLE FROM TXT FILE
CALLING IN DEAL CONTENT FORM TXT FILE
CALLING IN BUSINESS NAME FROM TXT FILE
WILL NEED TO USE SPECIAL CODE FOR THE LOCATION INFORMATION - FOR 'MILES AWAY'
USING SPECIAL CODE TO COUNT DOWN ON TIME LEFT BEFORE DEAL EXPIRATION -->
     <section id="dailydeals">
          <a href="html/deals.html"><h2 class="dailydealsbar">Daily Deals</h2></a>
          <div class="dailydeals">          
			
			<?php include ('../lib/deals_script.php');?>
            
          </div>
        </section>



        <section id="sotw">
          <a href="html/deals.html"><h2 class="sotwbar">Strains of the Week</h2></a>
          <div class="sotwbody">
            
            <?php include ('../lib/strains_script.php');?>

          </div>
        </section>
</div><!--END WRAPPER-->





      <section id="voting">
        <h2 class="votingbar">Voting</h2>
        <div class="voting">
          <script src="http://assets-polarb-com.a.ssl.fastly.net/assets/polar-embedded.js" async data-publisher="DeVine" data-poll-set="3477"></script>
        </div>
      </section>


<!-- THIS SECTION REQUIRES NO PHP INTEGRATION BUT EVENTUALLY NEEDS TO BE REWRITTEN FOR COMMERCIAL PURPOSE (POST-BETA) -->
        
      <section id="wiyb">
            <h2 class="wiybbar">What's In Your Bowl?</h2>
            <div class="wiyb">
                <div id="disqus_thread"></div>
                  <script type="text/javascript">
                    
                      var disqus_shortname = 'devineco';

                      (function() {
                          var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                          dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                          (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                      })();
                  </script>
                  <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                  <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    

            </div>
      </section>


<!-- !!!!!!!!!!!!!!THIS SPONSOR SECTION ONLY GOES ON THE HOME PAGE!!!!!!!!!!!!!!!!! -->

      <section id="sponsor">
        <a href="html/advertise.html"><h2 class="sponsorbar">Sponsors</h2></a>
        <ul class="sponsorbackground">
          <li><a href="#"><img src="http://placehold.it/92x92"></a></li>
          <li><a href="#"><img src="http://placehold.it/92x92"></a></li>
          <li><a href="#"><img src="http://placehold.it/92x92"></a></li>
          <li><a href="#"><img src="http://placehold.it/92x92"></a></li>
          <li><a href="#"><img src="http://placehold.it/92x92"></a></li>
          <li><a href="#"><img src="http://placehold.it/92x92"></a></li>
          <li><a href="#"><img src="http://placehold.it/92x92"></a></li>
          <li><a href="#"><img src="http://placehold.it/92x92"></a></li>
        </ul>
      </section>