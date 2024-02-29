@extends('backend.master')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="card border-top border-0 border-3 border-info col-md-12">

                <div class="card-body">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-info">Manage Category</h5>
                        <a href="{{ route('offerbanner') }}" class="btn btn-info btn-sm text-light ">
                            <i class='bx bx-plus'></i>
                        </a>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table id="order_table" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>Heading</th>
                                    <th>Title</th>
                                    <th>Short Description</th>
                                    <th>image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $serialNumber = 1;
                                @endphp
                                @if ($all_banner->count() > 0)
                                    @foreach ($all_banner as $banner)
                                        <tr>
                                            <td>{{ $serialNumber++ }}</td>
                                            <td>{{ $banner->head }}</td>
                                            <td>
                                                {{ Illuminate\Support\Str::limit($banner->title, 20) }}
                                            </td>
                                            <td>{{ Illuminate\Support\Str::limit($banner->short_description, 20) }}
                                            </td>

                                            <td>
                                                <img src="{{ asset('/uploads/offer_banner/' . $banner->image) }}"
                                                    style="max-width: 300px; object-fit:contain;" class="img-fluid"
                                                    alt="banner Image">
                                            </td>
                                            <td>{{ $banner->status }}</td>
                                            <td>


                                                <a href="{{ route('offerbanner.edit', $banner->id) }}"
                                                    class="btn btn-info">Edit</a>
                                                <a href="{{ route('offerbanner.delete', $banner->id) }}"
                                                    class="btn btn-danger" id="delete">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6" class="text-center text-warning">Data not Found</td>
                                    </tr>
                                @endif
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
@endsection
