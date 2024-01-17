<div class="tpshop__top ml-60">
    <div class="row">
        <div class="col-lg-4 pe-0">
            <div class="card">

                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">

                            <img src="{{ !empty($user->pic) ? asset('uploads/user/'.$user->pic) : asset('uploads/user.jpg')}}" alt="Admin"
                                class="rounded-circle p-1 bg-primary" width="110">
                        <div class="mt-3">
                            <p>{{ $user->userName ?? 'Your User Name' }}</p>
                            <p class="text-secondary mb-1">{{ $user->fullName ?? 'Your Full Name' }}</p>
                            <p class="text-muted font-size-sm">{{ $user->email ?? 'Your Email address' }}</p>

                        </div>
                    </div>
                    <hr class="my-4" />
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <p class="mb-0">
                                Present Address
                            </p>
                            <span class="text-secondary">{{ $user->present_address ?? 'Your Address' }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <p class="mb-0">
                                Phone Number
                            </p>
                            <span class="text-secondary">{{ $user->phone ?? 'Your Phone Number' }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8 ps-2">
            <div class="card mb-2">
                <div class="card-title text-center fw-semibold my-4 fs-4">User Information</div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <p class="mb-0">User Name</p>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control"
                                value="{{ $user->userName ?? 'Data not found' }}" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <p class="mb-0">Full Name</p>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control"
                                value="{{ $user->fullName ?? 'Data not found' }}" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control"
                                value="{{ $user->email ?? 'Data not found' }}" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <p class="mb-0">Mobile</p>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control"
                                value="{{ $user->phone ?? 'Data not found' }}" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <p class="mb-0">Present Address</p>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control"
                                value="{{ $user->present_address ?? 'Data not found' }}" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <p class="mb-0">Permanent Address</p>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control"
                                value="{{ $user->permanent_address ?? 'Data not found' }}" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9 text-secondary">
                            <input type="button" class="btn btn-primary px-4" value="Save Changes" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="d-flex align-items-center mb-3">Customer Status</h5>
                            <p>Web Design</p>
                            <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p>Website Markup</p>
                            <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 72%"
                                    aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p>One Page</p>
                            <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 89%"
                                    aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p>Mobile Template</p>
                            <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 55%"
                                    aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p>Backend API</p>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 66%"
                                    aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab_card">
        this is profile page
    </div>
</div>
