@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto">
<div class="flex text-gray-100 pt-10">
<div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-cnter">
<h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
Do you want to became a developer?
</h1>
<a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
Read More
</a>
</div>
</div>
</div>
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
<div>
<img src="https://cdn.pixabay.com/photo/2017/06/23/11/49/laptop-2434393_960_720.jpg" width="400" alt="">
</div>
<div class="m-auto sm:m-auto text-left w-4/5 block">
<h2 class="text-4xl font-extrabold text-gray-600">
Struggling to be a better web developer?
</h2>
<p class="py-8 text-gray-500 text=s">
Like many degrees and careers, there are sometimes misconceptions and myths regarding what they are actually like. Web development is no exception. There are some myths as to what web development is, what it takes, and how it’s done.
</p>
<p class="font-extrabold  text-gray-500 text-l pb-9">
The truth: The terms may be used interchangeably sometimes and may even resemble each other, but they are quite different. Both have the same goal — to create a great website. But there are some major differences.
</p>
</div>

</div>

@endsection