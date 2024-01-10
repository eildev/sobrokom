@extends('backend.master')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="card border-top border-0 border-3 border-info col-md-12">

                <div class="card-body">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-info">Manage Category</h5>

                        <a href="{{ route('banner') }}" class="btn btn-info btn-sm text-light ">
                            <i class='bx bx-plus'></i>
                        </a>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>Title</th>
                                    <th>Short Description</th>
                                    <th>Long Description</th>
                                    <th>image</th>
                                    <th>Gallery Images</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($all_banner->count() > 0)
                                    @foreach ($all_banner as $banner)
                                        <tr>
                                            <td>{{ $banner->id }}</td>
                                            <td>{{ $banner->title }}</td>
                                            <td>{{ $banner->short_description }}</td>
                                            <td>{{ $banner->long_description }}</td>

                                            <td>
                                                <img src="{{ asset('/uploads/banner/' . $banner->image) }}"
                                                    style="height: 100px;" class="img-fluid" alt="banner Image">
                                            </td>
                                            <td>
                                                {{-- @php
                                                    $imageGalleries = App\Models\ImageGallery::filter($banner_id);
                                                    dd($imageGalleries->all());
                                                @endphp
                                                @if ($all_banner->count() > 0)
                                                    @foreach ($imageGalleries as $imageGallery)
                                                        <img src="{{ asset('/uploads/banner/gallery/' . $imageGallery->image) }}"
                                                            style="height: 100px;" class="img-fluid" alt="banner Image">
                                                    @endforeach
                                                @else
                                                    <span colspan="6" class="text-center text-warning">Data not
                                                        Found</span>
                                                @endif --}}
                                            </td>
                                            <td>{{ $banner->status }}</td>
                                            <td>


                                                <a href="{{ route('banner.edit', $banner->id) }}"
                                                    class="btn btn-info">Edit</a>
                                                <a href="{{ route('banner.delete', $banner->id) }}" class="btn btn-danger"
                                                    id="delete">Delete</a>
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
