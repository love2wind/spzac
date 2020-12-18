 <link rel="stylesheet" href="<?php $this->options->themeUrl('css/swiper.min.css'); ?>">
 <style>
   .Swiper_bl{
    background-color: white;
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 4px;
    border: 1px solid rgba(133,153,171,0.2);
    -webkit-box-shadow: 0 2px 26px 0 rgba(133,153,171,0.1);
    box-shadow: 0 2px 26px 0 rgba(133,153,171,0.1);
   
   }
    .swiper-container {
        width: 100%;
        height: 100%;
        margin-left: auto;
        margin-right: auto;
		
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
	@media screen and (max-width: 767px){
    .swiper-slide img{object-fit: cover; width: 100%; height: 100%;}
	}
	
    </style>
    <!-- Swiper -->
<div class="col-md-12 Swiper_bl">
    <div class="swiper-container ">
        <div class="swiper-wrapper">
           
		<div class="swiper-slide"><a href="https://love2wind.cn/archives/2166.html" ><img src="https://imgsrc.xyz/images/2020/10/12/288469565478a7e6ed82cb898cb4ffc3.jpg"></a></div>        
        <div class="swiper-slide"><a href="https://love2wind.cn/archives/1908.html" ><img src="https://imgsrc.xyz/images/2019/spimes2.jpg"></a></div>
        <div class="swiper-slide"><a href="https://love2wind.cn/archives/6.html" ><img src="https://imgsrc.xyz/images/2019/spimes3.jpg"></a></div>
          
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
 </div>  

    <!-- Swiper JS -->

	<script src="<?php $this->options->themeUrl('js/swiper.min.js'); ?>"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 10,
        loop: true
    });
    </script>