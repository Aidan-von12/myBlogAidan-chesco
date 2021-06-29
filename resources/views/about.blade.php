@extends('layouts.app')
@section('content')

    <div class="sm:grid grid-cols-2 w-4/5 m-auto ">
        <div class=" bg-yellow-700 text-gray-100 pt-10">
            <div class=" mx-auto py-5 mt-4">
                <h2 class="uppercase text-3xl text-center text-italic ">
                    about me
                </h2>
                <div class="font-bold py-4 mt-4 uppercase text-center">
                    <h1>hi,i am <span class="text-green-500 uppercase"> aidan chesco</span></h1>
                </div>
                <div class="flex flex-row justify-center mb-3">
                    <div class="bg-pink-400 block rounded-full py-5 px-5 sm:grid">web developer</div>
                    <div class="bg-green-400 block rounded-full py-5 px-5">web designer</div>
                    <div class="bg-orange-400 block rounded-full py-5 px-5">ux/ui designer</div>
                </div>
                <p class="fonr-semibold py-2 px-3">I am in the website field since 2018 <span class="text-black-600">I am a web developer and ux/ui designer</span></p>
                <h3 class="uppercase text-green-400 mt-2 font-extrabold px-3">my service</h3>
               <div class="px-3 py-4">
                <ul class="list-disc">
                    <li>Website Design</li>
                    <li>Website Development</li>
                    <li>Wordpress Theme Development</li>
                    <li>Mobile Apps UI/UX Design</li>
                    <li>Online Software Development</li>
                    <li>E-commerce Development</li>
                    <li>Cyber Security</li>
                </ul>
            </div>
            </div>
        </div>
        <div>
            <img src="\images\blog.jpg" width="700" alt="">
        </div>
    </div>




@endsection('content')
