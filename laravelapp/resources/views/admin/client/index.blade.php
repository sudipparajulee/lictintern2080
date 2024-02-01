@extends('layouts.app')
@section('heading')
Clients
@endsection

@section('content')
@include('layouts.message')
    <div class="flex justify-end">
        <a href="{{route('client.create')}}" class="bg-blue-600 text-white px-5 py-2 rounded">Add Client</a>
    </div>

    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>Order</th>
                <th>Client Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{$client->priority}}</td>
                    <td><img class="h-20" src="{{asset('images/client/'.$client->photopath)}}" alt=""></td>
                    <td>
                        <a href="{{route('client.edit',$client->id)}}" class="bg-blue-600 text-white px-4 py-1 rounded-lg mx-1">Edit</a>
                        <a onclick="showDelete('{{$client->id}}')" class="bg-red-600 text-white px-4 py-1 rounded-lg mx-1">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        let table = new DataTable('#myTable');
    </script>
@endsection
