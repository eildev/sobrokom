@extends('backend.master')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="card border-top border-0 border-3 border-info col-md-12">

                <div class="card-body">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-info">All Approve Comment</h5>

                        <a href="{{ route('blog.all.pending.comment') }}" class="btn btn-info btn-sm text-light ">
                            <i class='bx bx-plus'></i>
                        </a>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>User Name </th>
                                    <th>Comments</th>
                                    <th>Blog title</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 {{-- //{{ Illuminate\Support\Str::limit($comments->blog_id, 30) }} --}}
                                @php
                                    $serialNumber = 1;
                                @endphp
                                @if ($blogComment->count() > 0)
                                    @foreach ($blogComment as $comments)
                                        @if($comments->status == 1)
                                        <tr>
                                            <td>{{ $serialNumber++ }}</td>
                                            <td>{{ $comments['user']['fullName']}}</td>
                                            <td>{{ $comments->comment }}</td>
                                            <td> {{ $comments['blog']['title']}}  </td>
                                            @if( $comments->status == 1)
                                            <td> <span class="badge rounded-pill bg-success">Approved</span> </td>
                                            @else
                                            @endif
                                            <td>
                                                <a href="{{route('comment.approve.cancel',$comments->id)}}" class="btn btn-warning" title="Approve Cancel" >Approved Cancel</a>
                                                <a href="{{route('comment.delete',$comments->id)}}" class="btn btn-danger" title="Delete Comment" id="delete"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                          </tr>
                                          @else

                                          @endif
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
