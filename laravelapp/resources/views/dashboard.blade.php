@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold text-indigo-600">Dashboard</h1>
    <hr class="my-2 h-1 bg-red-600">

    <div class="grid grid-cols-3 gap-10">
        <div class="bg-blue-600 rounded-tr-full text-white rounded-lg flex justify-between py-4 px-2">
            <h1 class="text-xl">Total Blogs</h1>
            <h1 class="text-4xl font-bold">10</h1>
        </div>

        <div class="bg-red-600 text-white rounded-lg flex justify-between py-4 px-2">
            <h1 class="text-xl">Total Blogs</h1>
            <h1 class="text-4xl font-bold">10</h1>
        </div>

        <div class="bg-green-600 text-white rounded-lg flex justify-between py-4 px-2">
            <h1 class="text-xl">Total Blogs</h1>
            <h1 class="text-4xl font-bold">10</h1>
        </div>
    </div>
@endsection
