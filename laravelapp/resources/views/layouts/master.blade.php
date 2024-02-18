<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css" rel="stylesheet">

    <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        .slide-bg {
            --hover: red;
        }
        .ease-in-out {
            transition-timing-function: cubic-bezier(.4,0,.2,1);
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=604f09836ac5460013735f86&product=inline-share-buttons' async='async'></script>
</head>
<body>
    <div id="popup" class="fixed hidden bg-opacity-50 backdrop-blur-md z-20 bg-blue-600 bottom-0 right-0 left-0 top-0  items-center">
        <div class="xl:w-4/12 lg:w-6/12 md:9/12 w-11/12 mx-auto relative">
            <i class="ri-close-fill text-4xl absolute px-0.5 -right-5 -top-5 bg-white rounded-full cursor-pointer" id="closebtn"></i>
            <img src="https://www.bitmapitsolution.com/images/modal_images/Untitled-1_1672117600.png" class="" alt="">
        </div>
        <!-- <i class="ri-close-fill absolute text-white text-6xl right-14 top-14"></i> -->
    </div>
    <a id="topbtn" class="bg-indigo-900 text-white cursor-pointer fixed right-5 bottom-10 p-2 rounded"><i class="ri-arrow-up-s-line text-2xl"></i></a>
    <nav class="hidden lg:flex z-10 bg-white justify-between items-center px-12 shadow-lg py-2 sticky top-0">
        <img src="https://www.bitmapitsolution.com/images/logo/logo.png" alt="" class="w-32">
        <div>
            <a href="/">Home</a>
            <a href="/about">About Us</a>
            <a href="#services">Services</a>
            <a href="">Projects</a>
            <a href="#blogs">Blogs</a>
            <a href="/contact">Contact Us</a>
        </div>
        <a href="" class="bg-indigo-700 text-white px-2 py-1 rounded-md">Get IT Support</a>
    </nav>

    <nav class="block lg:hidden px-4 bg-white shadow-lg py-2 sticky top-0 z-20">
        <div class="flex justify-between items-center">
            <img src="{{ asset('images/logo.png') }}" alt="" class="w-32">
            <i onclick="toggleMenu()" class="ri-menu-fill text-3xl"></i>
        </div>
        <div id="mynav" class="hidden">
            <div>
                <a class="block my-4" href="index.html">Home</a>
                <a class="block my-4" href="">About Us</a>
                <a class="block my-4" href="#services">Services</a>
                <a class="block my-4" href="">Projects</a>
                <a class="block my-4" href="#blogs">Blogs</a>
                <a class="block my-4" href="contact.html">Contact Us</a>
            </div>
            <a href="" class="bg-indigo-700 text-white px-2 py-1 rounded-md">Get IT Support</a>
        </div>
    </nav>

@yield('content')

<footer>
    <div class="bg-indigo-900 px-16 py-10 grid xl:grid-cols-4 md:grid-cols-2 gap-10">
        <div>
            <h1 class="font-bold text-xl text-white uppercase">Bitmap I.T. Solution Pvt. Ltd.</h1>
            <p class="text-sm mt-5 text-gray-300 text-justify">BITS is a creatively driven integrated Business Consulting, Advertising agency and IT company located in Narayangarh that creates high-impact business solutions for both traditional and digital media to its clients.</p>
        </div>

        <div class="xl:pl-20">
            <h1 class="font-bold text-xl text-white uppercase">Useful Links</h1>
            <p class="text-sm mt-5 text-gray-300">
                <a class="block" href="">Home</a><br>
                <a class="block" href="">About Us</a><br>
                <a class="block" href="">Services</a><br>
                <a class="block" href="">Projects</a><br>
                <a class="block" href="">Blogs</a><br>
                <a class="block" href="">Contact Us</a><br>
            </p>
        </div>

        <div>
            <h1 class="font-bold text-xl text-white uppercase">Contact Us</h1>
            <p class="text-sm mt-5 text-gray-300">
                <span class="block mt-4"><i class="ri-map-pin-line"></i> Bharatpur-3, Belchowk, Narayangarh, Nepal</span>
                <span class="block mt-4"><i class="ri-phone-line"></i> 056-596250</span>
                <span class="block mt-4"><i class="ri-phone-line"></i> 9855011559, 9865042465</span>
                <span class="block mt-4"><i class="ri-mail-line"></i> info@bitmapitsolution.com</span>
            </p>
        </div>

        <div>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbitmapitsolution&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=292504516900196" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>


    </div>
    <div class="bg-indigo-700 text-center py-4">
        <p class="text-indigo-200">Copyright &copy; {{now()->year}} <span class="text-white">Bitmap I.T. Solution Pvt. Ltd.</span> All Rights Reserveds</p>
    </div>
</footer>

<script>
    var topbtn = document.getElementById('topbtn');
    topbtn.style.display = 'none';
    // alert('hello');
    // window.onscroll = function() {
    //     scrollFunction();
    // }
    window.addEventListener('scroll',function(){
        scrollFunction();
    })

    function scrollFunction(){
        if(window.pageYOffset > 200)
        {
            topbtn.style.display = 'flex';
        }
        else{
            topbtn.style.display = 'none';
        }
    }

    topbtn.addEventListener('click',function(){
        window.scrollTo(0,0);
    });

</script>


<script>
    var closebtn = document.getElementById('closebtn');
    closebtn.addEventListener('click',function(){
        // document.getElementById('popup').classList.add('hidden');
        document.getElementById('popup').style.display = 'none';
    });
</script>

<script>
    const swiper = new Swiper('.swiper1', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    autoplay: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

    });
</script>

<script>
const swiper2 = new Swiper('.swiper2', {
// Optional parameters
direction: 'horizontal',
loop: true,
autoplay: true,
// slidesPerView: 1,
spaceBetween: 30,

// If we need pagination
pagination: {
    el: '.swiper-pagination',
    clickable: true,
},

breakpoints: {
    0:{
        slidesPerView: 1,
    },
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 5,
      spaceBetween: 50,
    },
  },

});
</script>

<script>
function toggleMenu()
{
    var menu = document.getElementById('mynav');
    if(menu.style.display == 'block')
    {
        menu.style.display = 'none';
    }
    else
    {
        menu.style.display = 'block';
    }
}
</script>


<script>
    new WOW().init();
</script>
</body>
</html>
