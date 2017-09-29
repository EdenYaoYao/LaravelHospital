{{--轮播展示部分--}}
<div id="myCarousel" class="container carousel slide" style="padding: 0px;">
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="/img/Carousel_1.jpg" alt="First slide">
        </div>
        <div class="item">
            <img src="/img/Carousel_2.jpg" alt="Second slide">
        </div>
        <div class="item">
            <img src="/img/Carousel_3.jpg" alt="Third slide">
        </div>
    </div>
    <!-- 轮播（Carousel）导航 -->
    <a class="carousel-control left" href="#myCarousel"
       data-slide="prev">
    </a>
    <a class="carousel-control right" href="#myCarousel"
       data-slide="next">
    </a>
</div>