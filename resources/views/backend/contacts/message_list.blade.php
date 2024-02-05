@extends('backend.master')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="card border-0 border-top border-3 border-info col-md-8 offset-md-2">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-info">contact_us list</h5>

                        <a href="#" class="btn btn-info btn-sm text-light ">
                            <i class='bx bx-plus'></i>
                        </a>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>Customer Name</th>
                                    <th>Subjects</th>
                                    <th>Message</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $serialNumber = 1;
                                @endphp
                                @if ($contact_us->count() > 0)
                                    @foreach ($contact_us as $message)
                                        {{-- @dd($message); --}}
                                        <tr>
                                            <td>{{ $serialNumber++ }}</td>
                                            <td>{{ $message->name }}</td>
                                            <td>{{ $message->subject }}</td>
                                            <td>{{ $message->message }}</td>
                                            <td>{{ $message->email }}</td>
                                            <td>{{ $message->phone }}</td>
                                            <td>
                                                @if ($message->read == 1)
                                                    <span class="badge rounded-pill bg-primary">Read</span>
                                                @else
                                                    <span class="badge rounded-pill bg-warning">Unread</span>
                                                @endif
                                            </td>
                                            <td>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#exampleLargeModal">View Meassage</button>
                                                <a href="{{ route('subscribe.delete', $message->id) }}"
                                                    class="btn btn-sm btn-danger" id="delete">Move to trash</a>

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

            <div class="col">

                <!-- Modal -->
                <div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">{{ $message->subject }}</h5>

                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <p class="fw-bold">{{ $message->name }}</p>
                                <p>{{ $message->message }}</p>

                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Write Replay Message Here</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                  </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Send Replay</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--end row-->
    </div>
@endsection
