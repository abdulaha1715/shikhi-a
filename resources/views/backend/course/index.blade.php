@extends('backend.layout.master')
@section('title', 'Shikhi | Course')
@section('page', 'Course')

@section('page-content')

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Course List</h4>
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
                                    <th scope="col">Audience</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Category</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($courses as $course)
                                    <tr>
                                        <td class="fw-medium">{{ $course->id }}</td>
                                        <td>
                                            @php
                                                if ( !empty($course->thumbnail)) {
                                                    $course_image = $course->thumbnail;
                                                } else {
                                                    $course_image = asset('./backend/assets/images/users/user-dummy-img.jpg');
                                                }
                                            @endphp
                                            <img class="user-image" src="{{ $course_image }}" alt="" srcset="">
                                        </td>
                                        <td>{{ $course->name }}</td>
                                        <td>{{ $course->audience }}</td>
                                        <td>{{ $course->status }}</td>
                                        <td>{{ $course->category_id }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('course.edit', $course) }}"><i class="ri-edit-line fs-4 text-primary"></i></a>
                                            <a href=""><i class="ri-eye-line fs-4 text-success"></i></a>
                                            <form action="{{ route('course.destroy', $course->id) }}" method="POST" class="file-delete" onsubmit="return confirm('Do you want to delete?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class=""><i class="ri-delete-bin-5-line fs-4 text-danger"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="fs-5 text-center">
                                            No records are found
                                        </td>
                                    </tr>
                                @endforelse

                                {{ $courses->links() }}
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
