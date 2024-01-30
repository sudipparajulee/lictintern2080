@extends('layouts.app')
@section('heading')
Clients
@endsection

@section('content')
    <div class="flex justify-end">
        <a href="{{route('client.create')}}" class="bg-blue-600 text-white px-5 py-2 rounded">Add Client</a>
    </div>
@endsection
