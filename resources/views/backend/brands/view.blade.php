


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
                                    <th>Brand Name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Brands as $Brand)

                                    @php
                                        // echo"<pre>";print_r($Brand);echo"</pre>";
                                        $serialNumber = 1;
                                    @endphp

                                    <tr>
                                        <td>{{ $serialNumber++ }}</td>
                                        <td>{{ $Brand->BrandName }}</td>
                                        <td>
                                            <img src="{{ asset('/uploads/brands/' . $Brand->image) }}" class="w-25" alt="">
                                        </td>
                                        <td>{{ $Brand->status }}</td>
                                        <td>
                                            <a href="{{ route('brand.edit', $Brand->id) }}" class="btn btn-info">Edit</a>
                                            <a href="{{ route('brand.delete', $Brand->id) }}" class="btn btn-danger" id="delete">Delete</a>
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
