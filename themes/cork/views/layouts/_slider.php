<?php
$mainAssets = Yii::app()->AssetManager->publish(Yii::app()->theme->basePath . "/web/");
Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/camera/camera.js');
Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/camera/setting.js');
?>
<section id="featured">

			<!-- slideshow start here -->

				<div id="camera-slide" class="camera_wrap" style="height: 1272px;"><div class="camera_fakehover"><div class="camera_src camerastarted paused">
				
					<!-- slide 1 here -->
					<div data-src="/img/slides/camera/slide1/img1.jpg">
						
					</div>
					
					<!-- slide 2 here -->
					<div data-src="/img/slides/camera/slide2/img1.jpg">
						
					</div>
					
					<!-- slide 3 here -->
					<div data-src="/img/slides/camera/slide2/img1.jpg">
						
					</div>

				</div><div class="camera_target"><div class="cameraCont"><div class="cameraSlide cameraSlide_0" style="visibility: visible; display: none; z-index: 1; margin-left: 0px; margin-top: 0px;"><img width="1990" height="500" src="/img/slides/camera/slide1/img1.jpg?1396446133099" class="imgLoaded" style="visibility: visible; height: 1272px; margin-left: -1259.78px; margin-top: 0px; position: absolute; width: 5062.56px;" data-alignment="" data-portrait=""><div class="camerarelative" style="width: 2543px; height: 1272px;"></div></div><div class="cameraSlide cameraSlide_1 cameracurrent" style="display: block; z-index: 999;"><img width="1990" height="500" src="/img/slides/camera/slide2/img1.jpg?1396446310950" class="imgLoaded" style="visibility: visible; height: 1272px; margin-left: -1259.78px; margin-top: 0px; position: absolute; width: 5062.56px;" data-alignment="" data-portrait=""><div class="camerarelative" style="width: 2543px; height: 1272px;"></div></div><div class="cameraSlide cameraSlide_2 cameranext" style="display: none; z-index: 1;"><img width="1990" height="500" src="/img/slides/camera/slide2/img1.jpg?1396446321105" class="imgLoaded" style="visibility: visible; height: 1272px; margin-top: 0px; position: absolute; margin-left: -1259.78px; width: 5062.56px;" data-alignment="" data-portrait=""><div class="camerarelative" style="width: 2543px; height: 1272px;"></div></div><div class="cameraSlide cameraSlide_3 cameranext" style="z-index: 1; display: none;"><div class="camerarelative" style="width: 2543px; height: 1272px;"></div></div></div></div><div class="camera_overlayer"></div><div class="camera_target_content"><div class="cameraContents"><div class="cameraContent" style="display: none;"><div class="camera_caption fadeFromLeft" style="visibility: hidden; opacity: 1; left: 0px; right: auto;"><div>
							<div class="container">
								<div class="row">                                
									<div class="span6">
										<h2 class="animated fadeInDown"><strong>Great template for <span class="colored">multi usage</span></strong></h2>
										<p class="animated fadeInUp"> Vim porro dicam reprehendunt te, populo quodsi dissentiet cum ad. Ne natum deseruisse vis. Iisque deseruisse sententiae mel ne, dolores appetere vim ut. Sea no tamquam reprimique.</p>
										<a class="btn btn-success btn-large animated fadeInUp" href="#">
											<i class="icon-link"></i> Read more
										</a>
										<a class="btn btn-theme btn-large animated fadeInUp" href="#">
											<i class="icon-download"></i> Download
										</a>
									</div>
									<div class="span6">
										<img class="animated bounceInDown delay1" alt="" src="/img/slides/camera/slide1/screen.png">
									</div>
								</div>  
							</div>                                                                                         
						</div></div></div><div class="cameraContent cameracurrent" style="display: block;"><div class="camera_caption fadeFromLeft" style="visibility: visible; opacity: 1; left: 0px; right: auto;"><div>
							<div class="container">
								<div class="row"> 
									<div class="span6">
										<img alt="" src="/img/slides/camera/slide2/iMac.png">
									</div>								
									<div class="span6">
										<h2 class="animated fadeInDown"><strong>Put your <span class="colored">Opt in form</span></strong></h2>
										<p class="animated fadeInUp"> Vim porro dicam reprehendunt te, populo quodsi dissentiet cum ad. Ne natum deseruisse vis. Iisque deseruisse sententiae mel ne, dolores appetere vim ut. Sea no tamquam reprimique.</p>
										<form> 
											<div class="input-append">
												<input type="text" class="span3 input-large">
												<button type="submit" class="btn btn-theme btn-large">Subscribe</button>
											</div> 
										</form>	
									</div>

								</div>  
							</div>                                                                                         
						</div></div></div><div class="cameraContent" style="display: none;"><div class="camera_caption fadeFromLeft" style="visibility: hidden; opacity: 1; left: 0px; right: auto;"><div>
							<div class="container">
								<div class="row">                                
									<div class="span12 aligncenter">
										<h2 class="animated fadeInDown"><strong><span class="colored">Responsive</span> and <span class="colored">cross broswer</span> compatibility</strong></h2>
										<p class="animated fadeInUp">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
										<img class="animated bounceInDown delay1" alt="" src="/img/slides/camera/slide3/browsers.png">
									</div>
								</div>  
							</div>                                                                                         
						</div></div></div></div></div><div style="display: none; top: auto; height: 7px;" class="camera_bar"><span class="camera_bar_cont" style="opacity: 0.8; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px; background-color: rgb(34, 34, 34);"><span id="pie_0" style="opacity: 0.8; position: absolute; background-color: rgb(238, 238, 238); left: 0px; right: 0px; top: 2px; bottom: 2px; display: none;"></span></span></div><div class="camera_commands" style="opacity: 0;"><div class="camera_play" style="display: block;"></div><div class="camera_stop" style="display: none;"></div></div><div class="camera_prev" style="opacity: 0;"><span></span></div><div class="camera_next" style="opacity: 0;"><span></span></div></div><div class="camera_loader" style="display: none; visibility: visible;"></div></div>

			<!-- slideshow end here --> 

	</section>