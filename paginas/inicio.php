<?php
require_once 'paginas/header.php';
require_once "dependencias.php"
?>

<main style="margin-top: -1em;">
<!--Main Slider: Begin-->
<div class="home-slidershow">
    <div class="slide-show">
        <div class="vt-slideshow"> 
            <ul>
                <!-- SLIDE  -->
                <li data-transition="random" data-slotamount="7" data-masterspeed="1500">
                    <!-- MAIN IMAGE -->
                    <img src="assets/img/slider/slide-1.jpg"  alt="slidebg1" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption skewfromrightshort fadeout" data-x="right" data-hoffset="-370" data-y="340" data-speed="500" data-start="1200" data-easing="Power4.easeOut"><img src="assets/img/slider/slide-1-lay1.png" alt="" style="margin-right:-3em;">
                    </div>
                    <div class="tp-caption skewfromrightshort fadeout slide-color" data-x="right" data-hoffset="-400" data-y="550" data-speed="500" data-start="1200" data-easing="Power4.easeOut" style="margin-right:-8em;">
                    </div> 

                </li>

                <!-- SLIDE  -->
                <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                    <!-- MAIN IMAGE -->
                    <img src="assets/img/slider/slide-2.jpg" style="width: 1024px; left: 0px; top: -170.5px; height: 512px;">>
                    <!-- LAYERS -->
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption skewfromrightshort fadeout" data-x="left" data-hoffset="500" data-y="350" data-speed="500" data-start="1200" data-easing="Power4.easeOut"><img src="assets/img/slider/slide-1-lay1.png" alt="" style="margin-left: 15em;">
                    </div>
                    <div class="tp-caption skewfromrightshort fadeout slide-color" data-x="left" data-hoffset="500" data-y="550" data-speed="500" data-start="1200" data-easing="Power4.easeOut">
                    </div>
                </li>

                <!-- SLIDE  -->
                <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                    <!-- MAIN IMAGE -->
                    <img src="assets/img/slider/slide-3.jpg"  alt="darkblurbg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption skewfromrightshort fadeout" data-x="700" data-y="350" data-speed="500" data-start="1200" data-easing="Power4.easeOut"><img src="assets/img/slider/slide-1-lay2.png" alt="" style="margin-left: -3em;">
                    </div>
                    <div style="position: absolute; top: 500px; margin-top: -20px; left: 20px;" class="tp-leftarrow tparrows default hidearrows"></div>
                    <div class="tp-caption skewfromrightshort fadeout slide-color-2" data-x="700" data-y="550" data-speed="500" data-start="1200" data-easing="Power4.easeOut" style="margin-left: -5em;">
                    </div>
                </li>
            </ul> 
        </div>
    </div>
</div>
<!--Main Slider: End-->
<!-- New Product: Begin  -->

</main>

<?php 

require_once 'paginas/footer.php';
?>