<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="w3l-main-slider" id="home">
  <!-- main-slider -->
  <div class="companies20-content">
   
    <div class="owl-one owl-carousel owl-theme">
      <div class="item">
        <li>
          <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Meet with us to <bold>success</bold>
                    dream business</h5>
                 <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="services.html">Read More</a>
                </div>
                
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>The largest <bold>Business</bold>
                    expert in London</h5>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="services.html">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Meet with us to <bold>success</bold>
                    dream business</h5>
                 <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="services.html">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top3 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>The largest <bold>Business</bold>
                    expert in London</h5>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="services.html">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
    </div>
  </div>

</div>


  <script src="<?php echo base_url('/') ?>assets/js/owl.carousel.js"></script>
  <!-- script for -->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->
  <!-- /main-slider -->
</section>
<!-- features-4 block -->
<section class="w3l-index1" id="about">
	<div class="calltoaction-20  py-5 editContent">
		<div class="container py-md-3">
		
			<div class="calltoaction-20-content row">
				<div class="column center-align-self col-lg-6 pr-lg-5">
					<h5 class="editContent">Who We Are</h5>
					<p class="more-gap editContent">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
						architecto, ex veritatis tempora aliquid labore natus autem iusto magni dicta incidunt nostrum
						odit veniam voluptas provident minus saepe reiciendis nulla dolore delectus molestias</p>
						<p class="more-gap editContent">Numquam
							architecto, ex veritatis tempora aliquid labore natus autem iusto magni dicta incidunt nostrum
							odit veniam voluptas provident </p>
							<a class="btn btn-secondary btn-theme2 mt-2 mt-lg-3" href="about.html"> Read More</a>
				</div>
				<div class="column ccont-left col-lg-6 mt-lg-0 mt-5">
					<img src="<?php echo base_url('/') ?>assets/images/g1.jpg" class="img-responsive" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- features-4 block -->
 <!--  services section -->
<section class="w3l-index6" id="service">
  <div class="features-with-17_sur py-5">
    <div class="container py-lg-5">
      <div class="features-with-17-top_sur">
        <div class="row">
          <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
            <div class="features-with-17-right-tp_sur">
              <div class="features-with-17-left1 mb-3">
                <span class="fa fa-lightbulb-o" aria-hidden="true"></span>
              </div>
              <div class="features-with-17-left2">
                <h6><a href="#url"><bold>Business </bold> Idea</a></h6>
                <p> Lorem Ipsum is simply dummy text of the printing and industry.
                  Lorem Ipsum has the industry's standard dummy text ever since the 1500s,</p>
                  <a href="services.html" class="actionbg">Read More </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
            <div class="features-with-17-right-tp_sur">
              <div class="features-with-17-left1 mb-3">
                <span class="fa fa-recycle" aria-hidden="true"></span>
              </div>
              <div class="features-with-17-left2">
                <h6><a href="#url"><bold>Team </bold> Work</a></h6>
                <p> Lorem Ipsum is simply dummy text of the printing and industry.
                  Lorem Ipsum has the industry's standard dummy text ever since the 1500s,</p>
                  <a href="services.html" class="actionbg">Read More </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
            <div class="features-with-17-right-tp_sur">
              <div class="features-with-17-left1 mb-3">
                <span class="fa fa-bar-chart" aria-hidden="true"></span>
              </div>
              <div class="features-with-17-left2">
                <h6><a href="#url"><bold>Advanced </bold> Analytics</a> </h6>
                <p> Lorem Ipsum is simply dummy text of the printing and industry.
                  Lorem Ipsum has the industry's standard dummy text ever since the 1500s,</p>
                  <a href="services.html" class="actionbg">Read More </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 <!--  //services section -->
<section class="w3l-feature-3" id="stats">
	<div class="grid top-bottom">
		<div class="container">
			<div class="heading text-center mx-auto">
                <h3 class="head text-white">We’re Constantly Improving Our Skills</h3>
                <p class="my-3 head text-white"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                  Nulla mollis dapibus nunc, ut rhoncus
                  turpis sodales quis. Integer sit amet mattis quam.</p>
              </div>
			<div class="middle-section grid-column mt-5 pt-3">
				<div class="three-grids-columns">
				<h5>2450 <span>+</span></h5>
					<h4>Team Members</h4>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.Vestibulum ante ipsum primis in faucibus orci luctus </p>
				</div>
				<div class="three-grids-columns">
					<h5>550 <span>+</span></h5>
					<h4>Projects</h4>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.Vestibulum ante ipsum primis in faucibus orci luctus </p>
				</div>
				<div class="three-grids-columns">
					<h5>3450 <span>+</span></h5>
					<h4>Happy Clients</h4>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.Vestibulum ante ipsum primis in faucibus orci luctus </p>
				</div>
				<div class="three-grids-columns">
					<h5>450 <span>+</span></h5>
					<h4>Media Managment</h4>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.Vestibulum ante ipsum primis in faucibus orci luctus </p>
				</div>
				<div class="three-grids-columns">
					<h5>180 <span>+</span></h5>
					<h4>Finance</h4>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.Vestibulum ante ipsum primis in faucibus orci luctus </p>
				</div>
				<div class="three-grids-columns">
					<h5>1200 <span>+</span></h5>
					<h4>Brands</h4>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.Vestibulum ante ipsum primis in faucibus orci luctus </p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="w3l-features-4">
	<!-- /features -->
		<div class="features py-5" id="features">
            <div class="container py-md-3">
			<div class="heading text-center mx-auto">
				<h3 class="head">Advance Features!</h3>
				<p class="my-3 head"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
				  Nulla mollis dapibus nunc, ut rhoncus
				  turpis sodales quis. Integer sit amet mattis quam.</p>
			  </div>
			<div class="fea-gd-vv row mt-5 pt-3">	
			   <div class="float-lt feature-gd col-md-6">	
					 <div class="icon"> <span class="fa fa-handshake-o" aria-hidden="true"></span></div>
					 <div class="icon-info">
						<h5><a href="#">User Friendly
							</a></h5>
						<p> Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt primis in faucibus orci luctus et ultrices posuere  primis in faucibus </p>
						<a href="#" class="red mt-3">Read More <span class="fa fa-angle-right pl-1"></span></a>
					</div>
					 
				</div>	
				<div class="float-mid feature-gd col-md-6 mt-md-0 mt-5">	
					 <div class="icon"> <span class="fa fa-mobile" aria-hidden="true"></span></div>
					 <div class="icon-info">
						<h5><a href="#">Responsive Layout
						</a></h5>
						<p> Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt primis in faucibus orci luctus et ultrices posuere  primis in faucibus </p>
						<a href="#" class="red mt-3">Read More <span class="fa fa-angle-right pl-1"></span></a>
					</div>
			 </div> 
				<div class="float-rt feature-gd col-md-6 mt-5">	
					 <div class="icon"> <span class="fa fa-gg" aria-hidden="true"></span></div>
					 <div class="icon-info">
						<h5><a href="#">Easy to customize</a></h5>
						<p> Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt primis in faucibus orci luctus et ultrices posuere  primis in faucibus </p>
						<a href="#" class="red mt-3">Read More <span class="fa fa-angle-right pl-1"></span></a>
					</div>
			 </div>	 
			 <div class="float-lt feature-gd col-md-6 mt-5">	
					 <div class="icon"> <span class="fa fa-eye" aria-hidden="true"></span></div>
					 <div class="icon-info">
						<h5><a href="#">Cross Browser</a>
						</h5>
						<p> Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt primis in faucibus orci luctus et ultrices posuere  primis in faucibus </p>
						<a href="#" class="red mt-3">Read More <span class="fa fa-angle-right pl-1"></span></a>
					</div>
					 
				</div>	
				<div class="float-mid feature-gd col-md-6 mt-5">	
					 <div class="icon"> <span class="fa fa-cog" aria-hidden="true"></span></div>
					 <div class="icon-info">
						<h5><a href="#">
							W3C Standard</a>
						</h5>
						<p> Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt primis in faucibus orci luctus et ultrices posuere  primis in faucibus </p>
						<a href="#" class="red mt-3">Read More <span class="fa fa-angle-right pl-1"></span></a>
					</div>
			 </div> 
				<div class="float-rt feature-gd col-md-6 mt-5">	
					 <div class="icon"> <span class="fa fa-paint-brush" aria-hidden="true"></span></div>
					 <div class="icon-info">
						<h5><a href="#">Color Option</a>
						</h5>
						<p> Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt primis in faucibus orci luctus et ultrices posuere  primis in faucibus </p>
						<a href="#" class="red mt-3">Read More <span class="fa fa-angle-right pl-1"></span></a>
					</div>
			 </div>		 				 
		  </div>  
		 </div>
	   </div>
   <!-- //features -->
</section>
<section class="w3l-feature-2" id="process">
		<div class="grid top-bottom py-5">
			<div class="container py-md-5">
				<div class="heading text-center mx-auto">
					<h3 class="head text-white">Four Steps for Process</h3>
					<p class="my-3 head text-white"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
					  Nulla mollis dapibus nunc, ut rhoncus
					  turpis sodales quis. Integer sit amet mattis quam.</p>
					  
				  </div>
				<div class="middle-section row mt-5 pt-3 text-center">
					<div class="three-grids-columns col-lg-3 col-sm-6 ">
						<div class="icon"> <span class="">1</span></div>
						<h4>Register</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor.</p>
					
					</div>
					<div class="three-grids-columns col-lg-3 col-sm-6 mt-sm-0 mt-5">
						<div class="icon"> <span class="">2</span></div>
						<h4>App Download</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor.</p>
					
					</div>
					<div class="three-grids-columns col-lg-3 col-sm-6 mt-lg-0 mt-5">
						<div class="icon"> <span class="">3</span></div>
						<h4>Product Testing</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor.</p>
						
					</div>
					<div class="three-grids-columns col-lg-3 col-sm-6 mt-lg-0 mt-5">
						<div class="icon"> <span class="">4</span></div>
					<h4>Pro Support</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor.</p>
					
					</div>
				</div>
			</div>
		</div>
	</section>
<section class="w3l-news" id="news">
  <section id="grids5-block" class="py-5">
    <div class="container py-lg-3">
      <div class="heading text-center mx-auto">
				<h3 class="head">Latest News</h3>
				<p class="my-3 head"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
				  Nulla mollis dapibus nunc, ut rhoncus
				  turpis sodales quis. Integer sit amet mattis quam.</p>
			  </div>
      <div class="grid-view">
        <div class="row">
          <div class="col-lg-4 col-md-6 mt-md-4 mt-4">
            <div class="grids5-info">
              <a href="#" class="d-block zoom"><img src="<?php echo base_url('/') ?>assets/images/g2.jpg" alt="" class="img-fluid news-image"></a>
              <div class="blog-info">
                <p class="date">Mar 29, 2020</p>
                <h4><a href="#">Business Support</a></h4>
               
                <p class="blog-text">Lorem ipsum dolor sit amet nostrum ad minus libero fugiat molestiae ullam ipsam quas unde earum...</p>
                <a href="#" class="btn btn-news">Read More <span class="fa fa-angle-right pl-1"></span> </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-md-4 mt-5">
            <div class="grids5-info">
              <a href="#" class="d-block zoom"><img src="<?php echo base_url('/') ?>assets/images/g4.jpg" alt="" class="img-fluid news-image"></a>
              <div class="blog-info">
                <p class="date">Sep 28, 2020</p>
                <h4><a href="#">Add Helper!</a></h4>
                
                <p class="blog-text">Lorem ipsum dolor sit amet nostrum ad minus libero fugiat molestiae ullam ipsam quas unde earum...</p>
                <a href="#" class="btn btn-news">Read More <span class="fa fa-angle-right pl-1"></span> </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 mt-md-4 mt-5">
            <div class="grids5-info">
              <a href="#" class="d-block zoom"><img src="<?php echo base_url('/') ?>assets/images/g6.jpg" alt="" class="img-fluid news-image"></a>
              <div class="blog-info">
                <p class="date">Dec 28, 2020</p>
                <h4><a href="#">Capital Management</a></h4>
               
                <p class="blog-text">Lorem ipsum dolor sit amet nostrum ad minus libero fugiat molestiae ullam ipsam quas unde earum...</p>
                <a href="#" class="btn btn-news">Read More <span class="fa fa-angle-right pl-1"></span> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>