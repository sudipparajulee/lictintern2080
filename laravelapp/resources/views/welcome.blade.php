@extends('layouts.master')
@section('content')
    <div class="grid md:grid-cols-2 gap-10 bg-indigo-900 md:p-20 p-5 pb-48 items-center">
        <div>
            <h1 class="font-bold text-white md:text-5xl text-2xl leading-normal">IT Solution & Graphics Services Company
            </h1>
            <p class="text-gray-100">Presenting your business in a digital mode is known to be a smarter way of doing business. <br>
                LET THE WORLD KNOW YOU EXIST</p>

            <div class="mt-10">
                <a class="slide-bg bg-white  text-center hover:text-white  duration-700 delay-50 transition-all ease-in-out py-4 px-10 rounded-md hover:bg-[#00489e]" href="">About Us</a>
                <a class="bg-red-600 inline-block mt-5 text-white rounded-lg px-24 py-4 mx-1" href="">Contact Us</a>
            </div>
        </div>
        <div>
            <img class="lg:w-8/12 md:w-11/12 ml-auto xl:py-10 lg:py-5 lg:mr-16" src="https://www.bitmapitsolution.com/images/home.png" alt="">
        </div>
    </div>
    <img src="https://www.bitmapitsolution.com/images/home_bottom_shape.png" alt="" class="-mt-52 h-56 w-full">

    <div class="flex">
        <p class="bg-red-600 text-white text-lg font-bold px-10 py-2">Notice</p>
        <marquee class="bg-gray-100 text-gray-800 text-lg font-bold px-10 py-2" scrollamount="10" onmouseover="this.stop()" onmouseout="this.start()">
            @foreach ($notices as $notice)
                {{$notice->notice_text}} ||
            @endforeach
        </marquee>
    </div>


    <section class="py-20" id="services">
        <h1 class="text-3xl text-center text-indigo-900">Services</h1>
        <p class="text-center text-indigo-600 py-2">We provide the following Services as per the need of the clients.</p>

        <div class="mt-5 grid lg:grid-cols-3 px-24 gap-10">
            <div class="wow animate__animated animate__zoomIn shadow-md p-4 py-12 bg-gradient-to-bl from-blue-300 to-red-300 hover:from-red-600 hover:to-blue-600 hover:bg-gradient-to-br flex gap-6 rounded-lg hover:scale-105 duration-300" data-wow-duration="1s" data-wow-delay="0.3s">
                <img src="https://www.bitmapitsolution.com/images/html.png" class="w-24" alt="">
                <div>
                    <h1 class="text-xl font-bold">Website Development</h1>
                    <p class="mt-4 text-gray-500">Let the market know you exist. Website is the identity of your business on digital market.</p>
                </div>
            </div>

            <div class="shadow-md p-4 py-12 bg-gray-100 flex gap-6 rounded-lg">
                <img src="https://www.bitmapitsolution.com/images/html.png" class="w-24" alt="">
                <div>
                    <h1 class="text-xl font-bold">Website Development</h1>
                    <p class="mt-4 text-gray-500">Let the market know you exist. Website is the identity of your business on digital market.</p>
                </div>
            </div>


            <div class="shadow-md p-4 py-12 bg-gray-100 flex gap-6 rounded-lg">
                <img src="https://www.bitmapitsolution.com/images/html.png" class="w-24" alt="">
                <div>
                    <h1 class="text-xl font-bold">Website Development</h1>
                    <p class="mt-4 text-gray-500">Let the market know you exist. Website is the identity of your business on digital market.</p>
                </div>
            </div>

            <div class="shadow-md p-4 py-12 bg-gray-100 flex gap-6 rounded-lg">
                <img src="https://www.bitmapitsolution.com/images/html.png" class="w-24" alt="">
                <div>
                    <h1 class="text-xl font-bold">Website Development</h1>
                    <p class="mt-4 text-gray-500">Let the market know you exist. Website is the identity of your business on digital market.</p>
                </div>
            </div>


            <div class="shadow-md p-4 py-12 bg-gray-100 flex gap-6 rounded-lg">
                <img src="https://www.bitmapitsolution.com/images/html.png" class="w-24" alt="">
                <div>
                    <h1 class="text-xl font-bold">Website Development</h1>
                    <p class="mt-4 text-gray-500">Let the market know you exist. Website is the identity of your business on digital market.</p>
                </div>
            </div>


            <div class="shadow-md p-4 py-12 bg-gray-100 flex gap-6 rounded-lg">
                <img src="https://www.bitmapitsolution.com/images/html.png" class="w-24" alt="">
                <div>
                    <h1 class="text-xl font-bold">Website Development</h1>
                    <p class="mt-4 text-gray-500">Let the market know you exist. Website is the identity of your business on digital market.</p>
                </div>
            </div>


            <div class="shadow-md p-4 py-12 bg-gray-100 flex gap-6 rounded-lg">
                <img src="https://www.bitmapitsolution.com/images/html.png" class="w-24" alt="">
                <div>
                    <h1 class="text-xl font-bold">Website Development</h1>
                    <p class="mt-4 text-gray-500">Let the market know you exist. Website is the identity of your business on digital market.</p>
                </div>
            </div>


            <div class="shadow-md p-4 py-12 bg-gray-100 flex gap-6 rounded-lg">
                <img src="https://www.bitmapitsolution.com/images/html.png" class="w-24" alt="">
                <div>
                    <h1 class="text-xl font-bold">Website Development</h1>
                    <p class="mt-4 text-gray-500">Let the market know you exist. Website is the identity of your business on digital market.</p>
                </div>
            </div>


            <div class="shadow-md p-4 py-12 bg-gray-100 flex gap-6 rounded-lg">
                <img src="https://www.bitmapitsolution.com/images/html.png" class="w-24" alt="">
                <div>
                    <h1 class="text-xl font-bold">Website Development</h1>
                    <p class="mt-4 text-gray-500">Let the market know you exist. Website is the identity of your business on digital market.</p>
                </div>
            </div>


        </div>
    </section>


    <section class="py-16 bg-indigo-900">
        <h2 class="text-3xl text-center text-white font-bold">Testimonials</h2>
        <p class="text-center text-gray-200 mt-2">What our clients say</p>


            <!-- Slider main container -->
        <div class="swiper swiper1">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="my-10">
                    <img src="https://www.bitmapitsolution.com/images/testimonial_images/bipinkandel_1684143077.jpg" alt="" class="h-20 rounded-full mx-auto">
                    <div class="text-center text-gray-200">
                        <p class="text-2xl">Bipin Kandel</p>
                        <p>Founder of V-group</p>
                        <p class="w-8/12 mx-auto mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quidem aliquid expedita sint amet alias quas explicabo distinctio, mollitia ex voluptatum aperiam aliquam possimus quisquam. Repellendus sed quae recusandae atque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, mollitia. Autem id atque architecto, fuga fugiat nam facere quibusdam adipisci accusamus? At debitis aliquam aperiam exercitationem quidem mollitia animi eos.</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="my-10">
                    <img src="https://www.bitmapitsolution.com/images/testimonial_images/bipinkandel_1684143077.jpg" alt="" class="h-20 rounded-full mx-auto">
                    <div class="text-center text-gray-200">
                        <p class="text-2xl">Bipin Kandel</p>
                        <p>Founder of V-group</p>
                        <p class="w-8/12 mx-auto mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quidem aliquid expedita sint amet alias quas explicabo distinctio, mollitia ex voluptatum aperiam aliquam possimus quisquam. Repellendus sed quae recusandae atque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, mollitia. Autem id atque architecto, fuga fugiat nam facere quibusdam adipisci accusamus? At debitis aliquam aperiam exercitationem quidem mollitia animi eos.</p>
                    </div>
                </div>
            </div>


            <div class="swiper-slide">
                <div class="my-10">
                    <img src="https://www.bitmapitsolution.com/images/testimonial_images/bipinkandel_1684143077.jpg" alt="" class="h-20 rounded-full mx-auto">
                    <div class="text-center text-gray-200">
                        <p class="text-2xl">Bipin Kandel</p>
                        <p>Founder of V-group</p>
                        <p class="w-8/12 mx-auto mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quidem aliquid expedita sint amet alias quas explicabo distinctio, mollitia ex voluptatum aperiam aliquam possimus quisquam. Repellendus sed quae recusandae atque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, mollitia. Autem id atque architecto, fuga fugiat nam facere quibusdam adipisci accusamus? At debitis aliquam aperiam exercitationem quidem mollitia animi eos.</p>
                    </div>
                </div>
            </div>


            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>



        </div>

    </section>





    <section class="bg-[url('https://t4.ftcdn.net/jpg/02/81/89/73/360_F_281897358_3rj9ZBSZHo5s0L1ug7uuIHadSxh9Cc75.jpg')] h-96 bg-cover bg-fixed relative">
        <div class="text-center text-white bg-blue-900 bg-opacity-50 flex items-center justify-center absolute left-0 top-0 right-0 bottom-0">
            <div>
                <p>Want to work with Us?</p>
                <h1 class="uppercase text-3xl font-bold">Let the world know you exist !</h1>
                <p class="w-8/12 mx-auto">Digitalise your business with attractive graphics, grow the customers and business. Get all IT related services and shift from the traditional way of business marketing to the new digital technology.</p>
            </div>

        </div>
    </section>


    <section class="my-20">
        <h1 class="text-3xl text-center text-indigo-900">Our Team</h1>
        <p class="text-center text-indigo-600 py-2">Faces behind the success of Bitmap I.T. Solution Pvt. Ltd.</p>

        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-10 xl:px-24 md:px-10 px-5">
            <div class="text-center">
                <div class="relative rounded-lg group overflow-hidden h-72">
                    <img class="rounded-lg h-72 w-full object-cover group-hover:scale-110 duration-500" src="https://www.bitmapitsolution.com/images/team_images/myimage_1684143425.png" alt="">
                    <div class="absolute hidden group-hover:flex bg-black inset-0 bg-opacity-70 rounded-lg items-center justify-center">
                        <a href="" class="hover:text-blue-500 hover:-translate-y-1 duration-300 text-white text-xl mx-3"><i class="ri-facebook-fill "></i></a>
                        <i class="ri-twitter-fill text-white text-xl mx-3"></i>
                        <i class="ri-instagram-fill hover:-translate-y-1 duration-300 text-white hover:text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-yellow-600 text-xl mx-3"></i>

                    </div>
                </div>
                <p class="text-xl">Sudip Parajuli</p>
                <p class="text-indigo-700">Co-founder/MD</p>
            </div>
        </div>
    </section>

    <section class="my-20" id="blogs">
        <h1 class="text-3xl text-center text-indigo-900">Blogs & Articles</h1>
        <p class="text-center text-indigo-600 py-2">Recent Blog</p>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-10 xl:px-24 md:px-10 px-5">
            <div class="shadow rounded-lg">
                <img src="https://www.bitmapitsolution.com/images/blog_images/graphic_1684144239.jpg" class="rounded-t-lg" alt="">
                <div class="flex justify-between px-4 text-indigo-600">
                    <p>2023-12-05</p>
                    <p>Bitmap I.T. Solution</p>
                </div>
                <div class="p-4">
                    <h2 class="font-bold">Importance of Graphics Design for Business</h2>
                    <p class="text-gray-500 text-justify text-sm line-clamp-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae doloremque perferendis tempora, fuga numquam cumque dolor. Voluptates reiciendis ut veniam dignissimos, optio quibusdam corrupti nam nemo quam consectetur velit est?</p>
                    <a href="" class="block mt-4 font-bold">Read More</a>
                </div>
            </div>



            <div class="shadow rounded-lg">
                <img src="https://www.bitmapitsolution.com/images/blog_images/graphic_1684144239.jpg" class="rounded-t-lg" alt="">
                <div class="flex justify-between px-4 text-indigo-600">
                    <p>2023-12-05</p>
                    <p>Bitmap I.T. Solution</p>
                </div>
                <div class="p-4">
                    <h2 class="font-bold">Importance of Graphics Design for Business</h2>
                    <p class="text-gray-500 text-justify text-sm line-clamp-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae doloremque perferendis tempora, fuga numquam cumque dolor. Voluptates reiciendis ut veniam dignissimos, optio quibusdam corrupti nam nemo quam consectetur velit est?</p>
                    <a href="" class="block mt-4 font-bold">Read More</a>
                </div>
            </div>

            <div class="shadow rounded-lg">
                <img src="https://www.bitmapitsolution.com/images/blog_images/graphic_1684144239.jpg" class="rounded-t-lg" alt="">
                <div class="flex justify-between px-4 text-indigo-600">
                    <p>2023-12-05</p>
                    <p>Bitmap I.T. Solution</p>
                </div>
                <div class="p-4">
                    <h2 class="font-bold">Importance of Graphics Design for Business</h2>
                    <p class="text-gray-500 text-justify text-sm line-clamp-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae doloremque perferendis tempora, fuga numquam cumque dolor. Voluptates reiciendis ut veniam dignissimos, optio quibusdam corrupti nam nemo quam consectetur velit est?</p>
                    <a href="" class="block mt-4 font-bold">Read More</a>
                </div>
            </div>


        </div>

        <div class="text-center mt-12">
            <a href="" class="px-4 py-3 bg-indigo-700 text-white rounded-lg hover:bg-red-600  duration-300">View All Blogs</a>
        </div>

    </section>


    <section class="py-16 px-24">
        <h2 class="text-3xl text-center text-indigo-900">Our Happy Clients</h2>
        <p class="text-center text-indigo-400 mt-2">We are glad to be trusted by</p>


            <!-- Slider main container -->
        <div class="swiper swiper2 py-10">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
            <!-- Slides -->

            @foreach($clients as $client)
            <div class="swiper-slide">
                <div class="px-2 py-5 border shadow rounded-lg">
                    <img class="h-28 mx-auto" src="{{asset('images/client/'.$client->photopath)}}" alt="">
                </div>
            </div>
            @endforeach

            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>



        </div>

    </section>

@endsection
