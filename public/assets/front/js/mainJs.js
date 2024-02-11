let currentIndex = 0;
const images = document.querySelectorAll('#image-container img');
const nextBtn = document.getElementById('nextBtn');
const prevBtn = document.getElementById('prevBtn');
function showImage(index) {
    images.forEach((img, i) => {
        img.classList.toggle('active', i === index);
    });

    if(index === 0){
        nextBtn.style.color = 'blue';
        prevBtn.style.color = 'cornflowerblue';
    }
    else if (index === images.length - 1) {
        nextBtn.style.color = 'cornflowerblue';
        prevBtn.style.color = 'blue';
    }
    else{
        nextBtn.style.color = 'blue';
        prevBtn.style.color = 'blue';
    }
}

function nextImage() {
    currentIndex = (currentIndex + 1) % images.length;
    showImage(currentIndex);
}

function prevImage() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    showImage(currentIndex);
}

setInterval(nextImage, 3000); // 3san'den bir img'ler deyishir


var swiper = new Swiper(".mySwiper.my", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        1024: {
            slidesPerView: 4,
            spaceBetween: 10,
        },
    },
});

var swiper = new Swiper(".mySwiper.my2", {
    slidesPerView: 1,
    spaceBetween: 10,
    slidesPerGroup: 1,
    speed: 1000,
    autoplay: {
        delay: 2000,
    },
    loop: true,
    pagination: {
        el: ".swiper-pagination.my2",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next.my2",
        prevEl: ".swiper-button-prev.my2",
    },
    breakpoints: {
        1024: {
            slidesPerView: 4,
            spaceBetween: 50,
        },
    },
});
