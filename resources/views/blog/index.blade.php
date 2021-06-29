@extends('layouts.app')
@section('content')
<div class="w-4/5 m-auto text-center ">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>
<!--end -->
<!-- error message -->
@if (session()->has('message'))
<div class="w-4/5 m-auto mt-10 pl-2">
<p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4 ">
{{session()->get('message')}}
</p>
</div>
@endif
<!--end  -->
<!-- authentication check for posts -->
@if (Auth::check())
<div class="pt-15 w-4/5 m-auto">
<a href="/blog/create" class="bg-blue-500 uppercase bg-transparent text-gray-100
font-extrabold rounded-3xl text-xs py-3 px-5">
Create post
</a>
</div>
@endif
<!-- end -->
<!-- code for post div-->
@foreach($posts as $Posts)
<div class="sm:grid grid-cols-2 gap-20 w-4/5
 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="{{ asset('images/'. $Posts->image_path) }}" width="700" alt="">
    </div>
    <div>
      <h2 class="text-gray-700 text-5xl
      font-bold pb-4">
     {{$Posts->title}}
      </h2>
      <span class="text-gray-500">
      by <span class="font-bold italic text-gray-800">{{$Posts->user->name}}
      </span>,Created on {{date('jS M Y', strtotime($Posts->updated_at))}}
      </span>
      <p class="text-xl text-gray-700 pt-8 pb-10
       leading-8 font-light">
      {{$Posts->description}}
    </p>
    <a href="/blog/{{$Posts->slug}}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl ">
    Keep Reading
    </a>
    @if(isset(Auth::user()->id) && auth::user()->id == $Posts->user_id )
    <span class="float-right">
    <a href="/blog/{{$Posts->slug}}/edit"
    class="text-gray-700 italic bg-blue-400 hover:text-gray-900 pb-1 border-b-2 py-3 px-5 rounded-3xl">
         Edit
    </a>
    </span>
    <span class="float-right">
        <form action="/blog/{{ $Posts->slug }}" method="POST">
    @csrf
    @method('delete')
    <button class="text-red-500 py-3 px-5 bg-gray-500 rounded-3xl" type="submit">
        Delete
    </button>
        </form>
    </span>
    @endif

    </div>
</div>
@endforeach

@endsection('content')
