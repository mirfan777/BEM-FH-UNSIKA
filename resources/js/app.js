import './bootstrap';
// Import Swiper
import Swiper from 'swiper';
import { Navigation, Pagination, EffectCoverflow, Autoplay } from 'swiper/modules'; // Tambahkan Autoplay
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/effect-coverflow';
import 'swiper/css/autoplay';

// Initialize Swiper when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    const pengurusSwiper = new Swiper('.mySwiper', {
    modules: [Navigation, Pagination, EffectCoverflow],
    
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 200,
        modifier: 1,
        slideShadows: false,
    },
    
    autoplay: {
        delay: 3000,                    // Delay 3 detik per slide
        disableOnInteraction: false,    // Tetap autoplay setelah user interaksi
        pauseOnMouseEnter: true,        // Pause saat mouse hover
    },

    breakpoints: {
        320: {
            slidesPerView: 1.5,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2.5,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 40,
        }
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
    },

    // Loop hanya jika slide > 3
    loop: document.querySelectorAll('.swiper-slide').length > 3,
    speed: 600,
    
    on: {
        init: function () {
            updateSlideInfo(this);
        },
        slideChange: function () {
            updateSlideInfo(this);
        }
    }
});

    function updateSlideInfo(swiper) {
        // Hide all member info
        document.querySelectorAll('.member-info').forEach(info => {
            info.style.opacity = '0';
        });
        
        // Show only center slide info
        const centerSlide = swiper.slides[swiper.activeIndex];
        if (centerSlide) {
            const centerInfo = centerSlide.querySelector('.member-info');
            if (centerInfo) {
                centerInfo.style.opacity = '1';
            }
        }
    }
});

