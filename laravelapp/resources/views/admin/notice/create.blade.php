@extends('layouts.app')
@section('heading')
    Create Notice
@endsection
@section('content')
    <form action="{{route('notice.store')}}" method="POST">
        @csrf
        <input type="text" name="notice_text" placeholder="Enter Notice" class="w-full my-2 rounded">
        @error('notice_text')
            <p class="text-red-500 -mt-2 text-sm">* {{$message}}</p>
        @enderror
        <input type="date" name="notice_date" class="w-full my-2 rounded" min="{{date('Y-m-d')}}">
        @error('notice_date')
            <p class="text-red-500 -mt-2 text-sm">* {{$message}}</p>
        @enderror
        <input type="text" name="priority" placeholder="Enter Priority" class="w-full my-2 rounded">
        @error('priority')
            <p class="text-red-500 -mt-2 text-sm">* {{$message}}</p>
        @enderror
        <select name="show" id="" class="w-full my-2 rounded">
            <option value="1">Show</option>
            <option value="0">Hide</option>
        </select>
        <div class="flex justify-center gap-5">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Add Notice</button>
            <a href="{{ route('notice.index') }}" class="bg-red-600 text-white px-4 py-2 rounded-lg">Cancel</a>
        </div>

    </form>
@endsection
