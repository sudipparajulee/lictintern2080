@extends('layouts.app')
@section('heading')
    Notice
@endsection
@section('content')
    <div class="flex justify-end">
        <a href="{{ route('notice.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg">Add Notice</a>
    </div>

    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>Order</th>
                <th>Notice Date</th>
                <th>Notice</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notices as $notice)
                <tr>
                    <td>{{$notice->priority}}</td>
                    <td>{{$notice->notice_date}}</td>
                    <td>{{$notice->notice_text}}</td>
                    <td>{{$notice->show?'Show':'Hide' }}</td>
                    <td>
                        <a href="{{route('notice.edit',$notice->id)}}" class="bg-blue-600 text-white px-4 py-1 rounded-lg mx-1">Edit</a>
                        <a href="" class="bg-red-600 text-white px-4 py-1 rounded-lg mx-1">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <script>
        let table = new DataTable('#myTable');
    </script>
@endsection
