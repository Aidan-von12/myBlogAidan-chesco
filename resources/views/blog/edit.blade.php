@extends('layouts.app')
@section('content')
<div class="w-4/5 m-auto text-left ">
    <div class="py-15 ">
        <h1 class="text-6xl">
            Update Posts
        </h1>
    </div>
</div>
<!--end -->
<!-- check error image -->
@if ($errors->any())
<div class="w-4/5 m-auto">
    <ul>
        @foreach($errors->all() as $error)
        <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
            {{$error}}
        </li>
        @endforeach
    </ul>
</div>
@endif
<!-- end --->
<!-- post form -->
<div class="w-4/5 m-auto pt-20">
    <form action="/blog/{{$posts->slug}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{$posts->title}}" class="bg-transparent block border-b-2
       italic w-full h-20 text-3xl outline-none">
        <textarea name="description" placeholder="Description..." class="py-20 bg-transparent block
      italic border-b-2 w-full h-40 text-xl outline-none">{{$posts->description}}</textarea>

        <button type="submit" class="uppercase mt-15 bg-blue-500 font-extrabold py-4 px-8 rounded-3xl">
            submit post
        </button>
    </form>
</div>
@endsection('content')
