@extends('backend.master')
@section('admin')
<div class="page-content">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>SI</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($popupMessages as $popupMessage )
                                <tr>
                                    <td>{{ $popupMessage->id }}</td>
                                    <td>{{ $popupMessage->title }}</td>
                                    <td>{{ $popupMessage->description }}</td>
                                    <td>
                                        <img src="{{ asset('/uploads/popupMessage/' . $popupMessage->image) }}" style="height: 100px;" class="img-fluid" alt="Popup message Image">
                                    </td>
                                    <td>{{ $popupMessage->status }}</td>
                                    <td>
                                        <a href="{{ route('popupMessage.edit', $popupMessage->id)}}" class="btn btn-info">Edit</a>
                                        <a href="{{ route('popupMessage.delete', $popupMessage->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
</div>
@endsection