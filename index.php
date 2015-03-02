<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">

		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});

            $(function(){
                $('#menu1').slicknav({
                    prependTo:'#navigation-menu1'
                });
            });
            $(function(){
                $('#menu2').slicknav({
                    prependTo:'#navigation-menu2'
                });
            });
            $(function(){
                $('#menu3').slicknav({
                    prependTo:'#navigation-menu3'
                });
            });
            $(function(){
                $('#menu4').slicknav({
                    prependTo:'#navigation-menu4'
                });
            });
            $(function(){
                $('#menu5').slicknav({
                    prependTo:'#navigation-menu5'
                });
            });
            $(function(){
                $('#menu6').slicknav({
                    prependTo:'#navigation-menu6'
                });
            });

			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-seo').slicknav({
					prependTo:'#navigation-menu-seo'
				});
			});
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		   
			
			
    	</script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
			
			
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><img src="img/logo.png" alt="LOGO"></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
            <h1>Powered by <a href="http://www.mobilegrows.com" rel="external">MOBILEGROWS</a><a href="http://www.m.progressivephysicalmedicine.com/" rel="external"> | Classic Site</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/01.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/02.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/03.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
                            <img src="img/slider-images/04.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn ui-icon-phone ui-btn-icon-left buttons-radius" href="tel:<?php echo $telephone ?>">Call US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0) {

									console.log("Blakberu je prosao ")
									var prostordugme=document.getElementById('findUS');
									var dugme= document.createElement('a');
									dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
									dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									dugme.innerHTML="Find US";
									prostordugme.appendChild(dugme);
									}		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
						
						

					</div>	   
				</fieldset>


				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#meet" data-transition="<?php echo $transitionefect ?>">Meet Us</a>
					</div>
				</div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#conditions" data-transition="<?php echo $transitionefect ?>">Conditions we treat</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#therapies" data-transition="<?php echo $transitionefect ?>">Theraapies we offer</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#what" data-transition="<?php echo $transitionefect ?>">What to expect</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="faqs" data-transition="<?php echo $transitionefect ?>">Faqs</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-mail ui-btn-icon-left buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></div>
				</div>				   
		  </div>
		  
		 
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page 2 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

	<div data-role="page" id="page2" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu">
						<ul id="menu" class="ime">

							<li><a href="#meet" data-transition="<?php echo $transitionefect ?>">Meet Us</a></li>
							<li><a href="#conditions" data-transition="<?php echo $transitionefect ?>">Conditions we treat</a></li>
                            <li><a href="#therapies" data-transition="<?php echo $transitionefect ?>">Theraapies we offer</a></li>
                            <li><a href="#what" data-transition="<?php echo $transitionefect ?>">What to expect</a></li>
                            <li><a href="#faqs" data-transition="<?php echo $transitionefect ?>">Faqs</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
						</ul>
					</section>
					<img src="img/web-design/web-design01.jpg" alt="SLider" class="images-mobile">	   
					

				</div>

			</div>	
				
				
		</div>
		
		<!-- meet ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="meet" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu1" >
                        <ul id="menu1" class="ime">

                            <li><a href="#meet" data-transition="<?php echo $transitionefect ?>">Meet Us</a></li>
                            <li><a href="#conditions" data-transition="<?php echo $transitionefect ?>">Conditions we treat</a></li>
                            <li><a href="#therapies" data-transition="<?php echo $transitionefect ?>">Theraapies we offer</a></li>
                            <li><a href="#what" data-transition="<?php echo $transitionefect ?>">What to expect</a></li>
                            <li><a href="#faqs" data-transition="<?php echo $transitionefect ?>">Faqs</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <h2>Meet Us</h2>
                    <p>Our highly qualified Physicians and Clinical Staff provide care to a wide range of patients for a variety of musculoskeletal conditions in our 5,500 square-feet of welcoming office space. Our Physicians undergo rigorous training in manual therapy and rehabilitative techniques that is above and beyond the standard professional requirement, using the most up-to-date research and treatment approaches available.</p>


                </div>

            </div>


        </div>
        <!--conditions ///-->

        <div data-role="page" id="conditions" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu2">
                        <ul id="menu2" class="ime">

                            <li><a href="#meet" data-transition="<?php echo $transitionefect ?>">Meet Us</a></li>
                            <li><a href="#conditions" data-transition="<?php echo $transitionefect ?>">Conditions we treat</a></li>
                            <li><a href="#therapies" data-transition="<?php echo $transitionefect ?>">Theraapies we offer</a></li>
                            <li><a href="#what" data-transition="<?php echo $transitionefect ?>">What to expect</a></li>
                            <li><a href="#faqs" data-transition="<?php echo $transitionefect ?>">Faqs</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <img src="img/web-design/web-design01.jpg" alt="SLider" class="images-mobile">


                </div>

            </div>


        </div>
        <!-- therapies ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="therapies" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu3">
                        <ul id="menu3" class="ime">

                            <li><a href="#meet" data-transition="<?php echo $transitionefect ?>">Meet Us</a></li>
                            <li><a href="#conditions" data-transition="<?php echo $transitionefect ?>">Conditions we treat</a></li>
                            <li><a href="#therapies" data-transition="<?php echo $transitionefect ?>">Theraapies we offer</a></li>
                            <li><a href="#what" data-transition="<?php echo $transitionefect ?>">What to expect</a></li>
                            <li><a href="#faqs" data-transition="<?php echo $transitionefect ?>">Faqs</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <img src="img/web-design/web-design01.jpg" alt="SLider" class="images-mobile">


                </div>

            </div>


        </div>
        <!-- what ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="what" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu4">
                        <ul id="menu4" class="ime">

                            <li><a href="#meet" data-transition="<?php echo $transitionefect ?>">Meet Us</a></li>
                            <li><a href="#conditions" data-transition="<?php echo $transitionefect ?>">Conditions we treat</a></li>
                            <li><a href="#therapies" data-transition="<?php echo $transitionefect ?>">Theraapies we offer</a></li>
                            <li><a href="#what" data-transition="<?php echo $transitionefect ?>">What to expect</a></li>
                            <li><a href="#faqs" data-transition="<?php echo $transitionefect ?>">Faqs</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <img src="img/web-design/web-design01.jpg" alt="SLider" class="images-mobile">


                </div>

            </div>


        </div>
        <!-- faqs ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="faqs" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu5">
                        <ul id="menu5" class="ime">

                            <li><a href="#meet" data-transition="<?php echo $transitionefect ?>">Meet Us</a></li>
                            <li><a href="#conditions" data-transition="<?php echo $transitionefect ?>">Conditions we treat</a></li>
                            <li><a href="#therapies" data-transition="<?php echo $transitionefect ?>">Theraapies we offer</a></li>
                            <li><a href="#what" data-transition="<?php echo $transitionefect ?>">What to expect</a></li>
                            <li><a href="#faqs" data-transition="<?php echo $transitionefect ?>">Faqs</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <img src="img/web-design/web-design01.jpg" alt="SLider" class="images-mobile">


                </div>

            </div>


        </div>
		<!-- contact us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu6" >
							<ul id="menu6" class="ime">

                                <li><a href="#meet" data-transition="<?php echo $transitionefect ?>">Meet Us</a></li>
                                <li><a href="#conditions" data-transition="<?php echo $transitionefect ?>">Conditions we treat</a></li>
                                <li><a href="#therapies" data-transition="<?php echo $transitionefect ?>">Theraapies we offer</a></li>
                                <li><a href="#what" data-transition="<?php echo $transitionefect ?>">What to expect</a></li>
                                <li><a href="#faqs" data-transition="<?php echo $transitionefect ?>">Faqs</a></li>
                                <li><a href="#contcatform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
							</ul>
					</section>
					<div>	
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
							Message:<br>
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
							<input type="submit" value="Send" name="submit" class="btn" id="input-dugme">
						</form>
					</div>
				</div>
			</div>
		
		</div>
<!--contact us///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- page seo ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="seopage" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-seo">
							<ul id="menu-seo">

                                <li><a href="#meet" data-transition="<?php echo $transitionefect ?>">Meet Us</a></li>
                                <li><a href="#conditions" data-transition="<?php echo $transitionefect ?>">Conditions we treat</a></li>
                                <li><a href="#therapies" data-transition="<?php echo $transitionefect ?>">Theraapies we offer</a></li>
                                <li><a href="#what" data-transition="<?php echo $transitionefect ?>">What to expect</a></li>
                                <li><a href="#faqs" data-transition="<?php echo $transitionefect ?>">Faqs</a></li>
                                <li><a href="#contcatform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
							</ul>
					</section>
					
				</div>
			</div>
		
		</div>
<!--page seo///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
			</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////
	<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->
	</body>
</html>
