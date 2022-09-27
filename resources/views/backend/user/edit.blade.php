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
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="lastnameInput" class="form-label">User
                                                Name</label>
                                            <input type="text" name="username" class="form-control" id="lastnameInput" placeholder="Enter your username" value="{{ $user->username }}">
                                            @error('username')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="phonenumberInput" class="form-label">Phone
                                                Number</label>
                                            <input type="text" name="phone" class="form-control" id="phonenumberInput" placeholder="Enter your phone number" value="{{ $user->phone }}">
                                            @error('phone')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="emailInput" class="form-label">Email
                                                Address</label>
                                            <input type="email" name="email" class="form-control" id="emailInput" placeholder="Enter your email address" value="{{ $user->email }}">
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <label for="image-input" class="form-label">Add Thumbnail</label>
                                        <input class="imput-image" type="file" name="thumbnail">

                                    </div>
                                    <div class="col-lg-6">
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
