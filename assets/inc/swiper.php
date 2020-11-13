<!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <div class="card">
                <a href="#"><img src="https://picsum.photos/576/310?random=3" alt="pic"></a>
                <div class="content">Slide 1</div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="card">
                <a href="#"><img src="https://picsum.photos/576/310?random=4" alt="pic"></a>
                <div class="content">Slide 2</div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="card">
                <a href="#"><img src="https://picsum.photos/576/310?random=5" alt="pic"></a>
                <div class="content">Slide 3</div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="card">
                <a href="#"><img src="https://picsum.photos/576/310?random=6" alt="pic"></a>
                <div class="content">Slide 4</div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="card">
                <a href="#"><img src="https://picsum.photos/576/310?random=7" alt="pic"></a>
                <div class="content">Slide 5</div>
            </div>
        </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
</div>

<script>
var mySwiper = new Swiper('.swiper-container', {
    speed: 700,
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: 15,
    breakpoints: {
        // when window width is >= 480px
        640: {
            slidesPerView: 'auto',
            spaceBetween: 15,
        },
        // when window width is >= 680px
        768: {
            slidesPerView: 'auto',
            spaceBetween: 32,
        }
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
})
</script>