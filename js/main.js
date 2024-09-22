//menu//
let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');
menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}


function togglePassword(fieldId, toggleButton) {
    const passwordField = document.getElementById(fieldId);
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleButton.textContent = 'Ẩn';
    } else {
        passwordField.type = 'password';
        toggleButton.textContent = 'Hiện';
    }
}


//san pham
document.addEventListener('DOMContentLoaded', function() {
    const productButtons = document.querySelectorAll('.product-img');
    const productInfos = document.querySelectorAll('.product-info');
    const closeButton = document.querySelectorAll('.close-btn');
    productButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-product');
            productInfos.forEach(info => {
                if (info.id === productId) {
                    info.style.display = 'block';
                } else {
                    info.style.display = 'none';
                }
            });
        });
    });
    const products = document.querySelectorAll('.btn');
    products.forEach(button => {
        button.addEventListener('click', function() {
            this.parentElement.parentElement.style.display = 'flex';
        });
    });
    closeButton.forEach(button => {
        button.addEventListener('click', function() {
            this.parentElement.style.display = 'none';
        });
    });
});
const shareButton = document.querySelectorAll('.fa-share');
shareButton.forEach(button => {
    button.addEventListener('click', function() {
        this.parentElement.parentElement.style.display = 'none';
    });
});

const huyButon = document.querySelectorAll('.btn-product');
huyButon.forEach(button => {
    button.addEventListener('click', function() {
        this.parentElement.parentElement.style.display = 'none';
    });
});

const deleteproduct = document.querySelectorAll('.btn');
deleteproduct.forEach(button => {
    button.addEventListener('click', function() {
        this.parentElement.parentElement.style.display = 'none';
    });
});



//tìm kiếm//
window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}
document.querySelector('#search-icon').onclick = () => {
    document.querySelector('#search-form').classList.toggle('active');
}
document.querySelector('#close').onclick = () => {
    document.querySelector('#search-form').classList.remove('active');
}

var swiper = new Swiper(".mySwiper", {
    slidesPerView: "auto",
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 4500,
        disableOnInteraction: false
    },
});

document.addEventListener('scroll', function() {
    const heroSection = document.getElementById('hero');
    const productSection = document.getElementById('product')
    const aboutSection = document.getElementById('about')
    const kienThucSection = document.getElementById('knowledge');
    const argencySection = document.getElementById('agency');

    const heroLink = document.getElementById('hero-link');
    const productLink = document.getElementById('product-link');
    const aboutLink = document.getElementById('about-link');
    const kienThucLink = document.getElementById('knowledge-link');
    const argencyLink = document.getElementById('agency-link');

    const heroTop = heroSection.getBoundingClientRect().top;
    const productTop = productSection.getBoundingClientRect().top;
    const aboutTop = aboutSection.getBoundingClientRect().top;
    const kienThucTop = kienThucSection.getBoundingClientRect().top;
    const argencyTop = argencySection.getBoundingClientRect().top;

    if (heroTop <= window.innerHeight / 5 && heroTop >= -window.innerHeight / 5) {
        heroLink.classList.add('active');
        productLink.classList.remove('active');
        aboutLink.classList.remove('active');
        kienThucLink.classList.remove('active');
        argencyLink.classList.remove('active');
    } else if (kienThucTop <= window.innerHeight / 5 && kienThucTop >= -window.innerHeight / 5) {
        kienThucLink.classList.add('active');
        heroLink.classList.remove('active');
        productLink.classList.remove('active');
        aboutLink.classList.remove('active');
        argencyLink.classList.remove('active');
    } else if (productTop <= window.innerHeight / 5 && productTop >= -window.innerHeight / 5) {
        productLink.classList.add('active');
        aboutLink.classList.remove('active');
        heroLink.classList.remove('active');
        kienThucLink.classList.remove('active');
        argencyLink.classList.remove('active');
    } else if (aboutTop <= window.innerHeight / 5 && aboutTop >= -window.innerHeight / 5) {
        aboutLink.classList.add('active');
        productLink.classList.remove('active');
        heroLink.classList.remove('active');
        kienThucLink.classList.remove('active');
        argencyLink.classList.remove('active');
    } else if (argencyTop <= window.innerHeight / 5 && argencyTop >= -window.innerHeight / 5) {
        argencyLink.classList.add('active');
        aboutLink.classList.remove('active');
        productLink.classList.remove('active');
        kienThucLink.classList.remove('active');
        heroLink.classList.remove('active');
    }
});