@extends('layouts.app')
@section('heading')
    Edit Notice
@endsection
@section('content')
    <form action="{{route('notice.update',$notice->id)}}" method="POST">
        @csrf
        <input type="text" name="notice_text" placeholder="Enter Notice" class="w-full my-2 rounded" value="{{$notice->notice_text}}">
        @error('notice_text')
            <p class="text-red-500 -mt-2 text-sm">* {{$message}}</p>
        @enderror
        <input type="date" name="notice_date" class="w-full my-2 rounded" value="{{$notice->notice_date}}">
        @error('notice_date')
            <p class="text-red-500 -mt-2 text-sm">* {{$message}}</p>
        @enderror
        <input type="text" name="priority" placeholder="Enter Priority" class="w-full my-2 rounded" value="{{$notice->priority}}">
        @error('priority')
            <p class="text-red-500 -mt-2 text-sm">* {{$message}}</p>
        @enderror
        <select name="show" id="" class="w-full my-2 rounded">
            <option value="1" {{$notice->show ? 'selected' : ''}}>Show</option>
            <option value="0" {{$notice->show?'':'selected'}}>Hide</option>
        </select>
        <div class="flex justify-center gap-5">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Update Notice</button>
            <a href="{{ route('notice.index') }}" class="bg-red-600 text-white px-4 py-2 rounded-lg">Cancel</a>
        </div>

    </form>
@endsection
