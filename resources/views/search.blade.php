@extends('layout')
@section('content')


<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>PDS Num</th>
        <th>Description</th>
        <th>Status</th>
        <th>Comment</th>
        <th>Action</th>
    </tr>
    <tbody>
        {{-- @foreach($pds as $pds)
        <tr>
            <td>{{$pds->id}}</td>
            <td>{{$pds->pds_num}}</td>
            <td>{{$pds->description}}</td>
            <td>{{$pds->status}}</td>
            <td>{{$pds->comment}}</td>
            <td>
                <a href="{{route('pds.edit',$pds->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route('pds.show',$pds->id)}}" class="btn btn-success">View</a>
                <form action="{{route('pds.destroy',$pds->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach --}}
    </tbody>
</table>

@endsection

{{-- <tr>
    <td>TEst</td>
    <td>Test2</td>
    <td>
        <a class="btn btn-info" href="">Show</a>
        <a class="btn btn-primary" href="">Edit</a>
        <a class="btn btn-danger" href="">Delete</a>
    </td> --}}
{{-- @extends('layout')
@section('content')
    @if(isset($student))
        <h2>Search Result</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>SDR</th>
                <th>First Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($student as $data)
                <tr>
                    <td>{{$data->sdr}}</td>
                    <td>{{$data->first_name}}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('show',$data->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('edit',$data->id) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('destroy',$data->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <div style="padding-top: 20px;">
            <p> {{$message}}</p>
        </div>
    @endif
@endsection --}}
