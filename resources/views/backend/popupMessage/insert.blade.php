@extends('backend.master')
@section('admin')
<div class="page-content">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card border-top border-0 border-4 border-info">
                <form action="{{ Route('popupMessage.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf    
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0 text-info">Add Popup Message</h5>
                            </div>
                            <hr>
                            <div class="row mb-3">
                                <label for="" class="col-sm-3 col-form-label">Popup Title</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control" id=""
                                        placeholder="Enter Popup Title" >
                                </div>
                            </div>

                            

                            <div class="row mb-3">
                                <label for="" class="col-sm-3 col-form-label">Popup Link</label>
                                <div class="col-sm-9">
                                    <input type="url" name="link" class="form-control" id=""
                                        placeholder="Enter Popup Link" >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-3 col-form-label">Popup Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="description" placeholder="" style="resize: none; height: 150px;"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="image" class="col-sm-3 col-form-label">Popup Thumbnail </label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="image" >
                                </div>
                            </div>


                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-info px-5">Add Popup Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end row-->
</div>
@endsection