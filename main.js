// animated search bar
let search = document.querySelector('.search-box');

document.querySelector('#search-icon').onclick = () =>{
    search.classList.toggle('active');
    cart.classList.remove('active'); 
    // auto hide wen you click another
}

// cart
let cart = document.querySelector('.cart');

document.querySelector('#cart-icon').onclick = () =>{
    cart.classList.toggle('active');
    search.classList.remove('active');
}

// navbar scroll
// let header = document.querySelector('header');

// window.addEventListener('scroll', () => {
//     header.classList.toggle('shadow', window.scrollY > 0);
// });