@extends('layouts.app')
@section('heading')
    Notice
@endsection
@section('content')
    <div class="flex justify-end">
        <a href="{{ route('notice.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg">Add Notice</a>
    </div>
@endsection
