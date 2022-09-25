@extends('backend.layout.master')
@section('title', 'Shikhi | User')
@section('page', 'User')

@section('page-content')

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">User List</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="table-responsive">
                        <table
                            class="table table-striped table-nowrap align-middle mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td class="fw-medium">{{ $user->id }}</td>
                                        <td>
                                            @php
                                                if ( !empty($user->avatar)) {
                                                    $user_image = $user->avatar;
                                                } else {
                                                    $user_image = asset('./backend/assets/images/users/user-dummy-img.jpg');
                                                }
                                            @endphp
                                            <img class="user-image" src="{{ $user_image }}" alt="" srcset="">
                                        </td>
                                        <td>{{ $user->name }} <br> {{ $user->username }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td class="text-center">
                                            <a href="#"><i
                                                    class="ri-edit-line fs-4 text-primary"></i></a>
                                            <a href="{{ route('user.show', $user) }}"><i
                                                    class="ri-eye-line fs-4 text-success"></i></a>
                                            <a href="#"><i
                                                    class="ri-delete-bin-5-line fs-4 text-danger"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="fs-5 text-center">
                                            No records are found
                                        </td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

@endsection
