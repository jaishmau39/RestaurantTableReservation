<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Restaurant Website</title>
     <?php 
  	   include('css_files.php'); 
  	 ?>  
 </head>
 
 
 <body>
     <div class="loader"><img src="images/loading.gif" alt="" /></div>
        <section>
        <div class="banner">
            <img class="img-responsive logo" src="images/logo.png"/>
            <div id="carousel-bnr" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="First slide" style="visibility: hidden;" src="images/banner_1.jpg" />
                        <center><img class=" col-xs-8 sliderimg wow zoomIn img-responsive" data-wow-duration="2s" data-wow-delay="0s" src="images/imgonline-com-ua-Transparent-background-RWeFB6TWIQ4PXejK.png" /></center>
                    </div>
                    <div class="item">
                        <img alt="First slide" style="visibility: hidden;" src="images/banner_1.jpg" />
                        <center><img class=" col-xs-8 sliderimg wow zoomIn img-responsive" data-wow-duration="2s" data-wow-delay="0s" src="images/imgonline-com-ua-Transparent-background-7UnC0Aw5OjXYXVI.png" /></center>
                    </div>
                    <div class="item">
                        <img alt="First slide" style="visibility: hidden;" src="images/banner_1.jpg" />
                        <center><img class=" col-xs-8 sliderimg wow zoomIn img-responsive" data-wow-duration="2s" data-wow-delay="0s" src="images/imgonline-com-ua-Transparent-background-zZHSqH6s9azRjrUf.png" /></center>
                    </div>
                </div>
            </div>
        </div>
  <?php 
  	include('nav_bar.php'); 
  ?>   
</section>
<div class="clearfix"></div> 
<section class="about-section" id="#sec2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="section-title">
                    <div class="main_h3">ABOUT <span class="color" style="color:#0CF;">US</span></div>
                </div>
                <p>We don’t play with food. Choose and taste to your place.</p>
            </div>
            <div class="col-md-4">
             <div class="chef" style="padding-top:70px;">
                 <img class="img-responsive" src="images/rice.jpg" />
             </div>
         </div>
     </div>
 </div>
</section> 
<div class="clearfix"></div>                          

<section id="services" style="margin-top:3%;">  
    <div class="container" align="center">
      <div class="margin_bottom2"></div>
		<div class="clearfix margin_bottom0_5"></div>
        <div class="row slide_padding">
        <div class="container">
            
            <div class="item">
               <div class="row">
               	<div class="p30_0">
                    <div class="col-md-4">
                        <img src="images/tumeric_salad.jpg" class="img img-responsive img-circle" />
                        <h4 style="color:#0CF;">Herring and tumeric salad</h4>
                        <p>A crunchy salad featuring herring and tumeric</p>
                     </div>
                    <div class="col-md-4">
                        <img src="images/chicken_stirfry.jpg" class="img img-responsive img-circle" />
                        <h4 style="color:#0CF;">Parsnip and chicken stir fry</h4>
                        <p>Crunchy stir fry featuring baby parsnips and corn-fed chicken</p>
                     </div>
                    <div class="col-md-4">
                        <img src="images/cheese_pudding.jpg" class="img img-responsive img-circle" />
                        <h4 style="color:#0CF;">Cheddar and cheese pudding</h4>
                        <p>A rich suet pudding made with cheddar and mature cheese</p>
                     </div>
                    <div class="clearfix p20_0"></div>
                 </div>
              </div>
             </div>
           </div>
         </div>
       </div>
     </div>
 </div>
</section> 


<section class="banner-4" id="demo">  
    <div class="container">
        <div class="row">
           <div class="col-md-12">
            <div class="section-title">
                 <div class="main_h3" align="center" style="color:#0CF;">Testimonials</div>
                <div class="line" align="center"><img class="img-responsive" src="images/undr.png" /></div> 
            </div>
            <div class="col-md-12" data-wow-delay="0.2s">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                 
                 <div class="carousel-inner text-center">
                    
                    <div class="item active">
                        <blockquote>
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p>Food was awesome and the service was great.</p>
                                    <small>Rohan</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    
                    <div class="item">
                        <blockquote>
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p>Delicous food, amazing ambience and great customer service.</p>
                                    <small>Chris</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    
                    <div class="item">
                        <blockquote>
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p>This place does'nt have Ichiraku Ramen though.</p>
                                    <small>Naruto</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<?php 
include('footer.php'); 
include('js_files.php'); 
?>
  
</body>
</html>
