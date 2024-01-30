@extends('layouts.app')
@section('heading')
    Create New Client
@endsection
@section('content')
    <form action="{{route('client.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="priority" placeholder="Enter Priority" class="w-full rounded-lg">
        @error('priority')
            <p class="text-red-500 text-xs mt-0">{{$message}}</p>
        @enderror
        <input type="file" name="photopath" class="w-full rounded-lg mt-4 p-2 border border-gray-500" >
        @error('photopath')
            <p class="text-red-500 text-xs mt-0">{{$message}}</p>
        @enderror

        <div class="flex justify-center mt-4">
            <button type="submit" class="bg-blue-600 text-white mx-2 px-4 py-2 rounded-lg">Add Client</button>
            <a href="{{route('client.index')}}" class="bg-red-600 text-white mx-2 px-10 py-2 rounded-lg">Exit</a>
        </div>
    </form>
@endsection
