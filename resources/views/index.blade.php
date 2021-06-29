@extends('layouts.app')
@section('content')
<div class="background-image grid grid-cols-1 m-auto">
  <div class="flex text-gray-100 pt-10">
    <div class="mx-auto pt-4 pb-16 sm:m-auto
w-4/5 block text-center">
      <h1 class="sm:text-white text-5xl text-gray-700  font-bold
  uppercase pb-14">
        hello,i'm <span class="text-red-800">aidan chesco</span> <br>
        i'm a full stack web developer.
      </h1>
      <a href="" class="text-center bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 py-2 px-4
   font-bold uppercase">
        View my work
      </a>
    </div>
  </div>
</div>

<!-- end -->
<!-- About -->

<figure class="bg-gray-300 rounded-xl p-8">
    <header class="text-center uppercase font-semibold">About</header><br>
    <div class="flex flex-wrap justify-center ">
        <div class="w-6/12 sm:w-4/12 px-4">
     <img class="w-32 h-32 rounded-full mx-auto" src="\images\blog.jpg" alt="" width="384" height="512">
        </div>
    </div>

<div class="pt-6 text-center space-y-4">
    <h1 class="text-lg font-semibold uppercase "> who's this guy?</h1>
    <blockquote>

        <p class="text-lg font-semibold text-center">
         "i'm a front-End and back-End developer for OpenSkillTz in Tanzania.
         i have serious passion for UI effects, animations and creating intuitive, dynamic user experience"
        </p>
    </blockquote>
   <figcaption class="font-extrabold">
    <div class="text-green-900">
      aidan chesco
    </div>
    <div class="text-cyan-500">
        software developer, Tanzania
    </div>
   </figcaption>
</div>
<!-- PROGRESS  -->
<div class="relative pt-1">
    <div class="flex mb-2 items-center justify-between">
        <div>
            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-green-500 bg-green-200">
               HTML
            </span>
        </div>
        <div class="text-right">
            <span class="text-xs font-semibold inline-block text-green-500">
                80%
            </span>
        </div>
    </div>
    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-green-200">
        <div style="width:80%"
            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500"></div>
    </div>
</div>
<!-- css progress -->
<div class="relative pt-1">
 <div class="flex mb-2 items-center justify-between">
     <div>
         <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full bg-green-200 text-green-500">
            tailwind CSS
         </span>
     </div>
     <div class="text-right">
       <span class="text-xs font-semibold inline-block text-green-500">
           70%
       </span>
     </div>
 </div>
 <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-green-200">
    <div style="width:70%"
        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500"></div>
</div>
</div>
<!-- end css progress -->
<!-- javascript progress -->
<div class="relative pt-1">
    <div class="flex mb-2 items-center justify-between">
        <div>
            <span
                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full bg-green-200 text-green-500">
                javascript
            </span>
        </div>
        <div class="text-right">
            <span class="text-xs font-semibold inline-block text-green-500">
                50%
            </span>
        </div>
    </div>
    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-green-200">
        <div style="width:50%"
            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500">
        </div>
    </div>
</div>
<!-- end javascript progress -->

<!-- UI progress -->
<div class="relative pt-1">
    <div class="flex mb-2 items-center justify-between">
        <div>
            <span
                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full bg-green-200 text-green-500">
                ui/ux design
            </span>
        </div>
        <div class="text-right">
            <span class="text-xs font-semibold inline-block text-green-500">
                50%
            </span>
        </div>
    </div>
    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-green-200">
        <div style="width:50%"
            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500">
        </div>
    </div>
</div>
<!-- end ui progress -->
<!-- php progress -->
<div class="relative pt-1">
    <div class="flex mb-2 items-center justify-between">
        <div>
            <span
                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full bg-green-200 text-green-500">
                php
            </span>
        </div>
        <div class="text-right">
            <span class="text-xs font-semibold inline-block text-green-500">
                70%
            </span>
        </div>
    </div>
    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-green-200">
        <div style="width:70%"
            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500">
        </div>
    </div>
</div>
<!-- end php progress -->
<!-- laravel progress -->
<div class="relative pt-1">
    <div class="flex mb-2 items-center justify-between">
        <div>
            <span
                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full bg-green-200 text-green-500">
                laravel
            </span>
        </div>
        <div class="text-right">
            <span class="text-xs font-semibold inline-block text-green-500">
                80%
            </span>
        </div>
    </div>
    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-green-200">
        <div style="width:70%"
            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500">
        </div>
    </div>
</div>
<!-- end css progress -->
</figure>

<!--  end of about -->

<div class="text-center p-15 bg-gray-800 text-white rounded-xl">
  <h2 class="text-l pb-5 text-2xl">
    i'm an expert in ...
  </h2>
  <span class="text-extrabold block text-4xl py-1">
    UI/UX Design
  </span>
  <span class="text-extrabold block text-4xl py-1">
    web Development
  </span>
  <span class="text-extrabold block text-4xl py-1">
    Project management
  </span>
  <span class="text-extrabold block text-4xl py-1">
    Database Adminstrator
  </span>
  <span class="text-extrabold block text-4xl py-1">
    front-end Development
  </span>
</div>

<div class="text-center py-15">
  <span class="uppercase text-s text-gray-400">
    Blog
  </span>
  <h2 class="text-4xl py-10 font-bold">
    Recents Posts
  </h2>
  <p class="m-auto w-4/5 text-gray-500">
    A language that doesn't affect the way
    you think about programming is not worth knowing
  </p>
</div>
<!--end -->
<!-- -->
<div class="sm:grid grid-cols-2 w-4/5 m-auto ">
  <div class="flex bg-yellow-700 text-gray-100 pt-10">
    <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
      <span class="uppercase text-3xl ">
        PHP
      </span>
      <h3 class="text-xl font-bold py-10">
        A language that doesn't affect the way you
         think about programming is not worth knowing
      </h3>

      <a href="" class="uppercase bg-transparent border-2
      border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl ">
        Find Out More
      </a>
    </div>
  </div>
  <div>
    <img src="https://cdn.pixabay.com/photo/2016/02/19/10/00/laptop-1209008_960_720.jpg"
    width="700" alt="">
  </div>
</div>
@endsection
