@extends('backend.layout.master')
@section('title','Shikhi | Edit User')
@section('page','Edit User')

@section('page-content')

<div class="col-xxl-9">
    <div class="card">
        <div class="card-body">
            <form id="createform" action="{{ route('user.update', $user) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="firstnameInput" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="firstnameInput" placeholder="Enter your name" value="{{ $user->name }}">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="lastnameInput" class="form-label">User
                                Name</label>
                            <input type="text" name="username" class="form-control" id="lastnameInput" placeholder="Enter your username" value="{{ $user->username }}">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="phonenumberInput" class="form-label">Phone
                                Number</label>
                            <input type="text" name="phone" class="form-control" id="phonenumberInput" placeholder="Enter your phone number" value="{{ $user->phone }}">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="emailInput" class="form-label">Email
                                Address</label>
                            <input type="email" name="email" class="form-control" id="emailInput" placeholder="Enter your email address" value="{{ $user->email }}">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-6">
                        <label for="image-input" class="form-label">Add Thumbnail</label>
                        <div class="mb-3 pt-5 pb-5 border">
                            <div class="text-center">
                                <div class="position-relative d-inline-block">
                                    <div class="position-absolute top-100 start-100 translate-middle">
                                        <label for="image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Select Image">
                                            <div class="avatar-xs">
                                                <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                    <i class="ri-image-fill"></i>
                                                </div>
                                            </div>
                                        </label>
                                        <input class="form-control d-none" value="" name="thumbnail" id="image-input" type="file" accept="image/png, image/gif, image/jpeg" />
                                    </div>
                                    <div class="avatar-lg">
                                        <div class="avatar-title bg-light rounded">
                                            <img src="#" id="img" class="avatar-md h-auto" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-12">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="submit" class="btn btn-primary">Updates</button>
                            <a href="{{ route('user.index') }}"class="btn btn-soft-success">Cancel</a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </form>
        </div>
    </div>
</div>


@endsection
