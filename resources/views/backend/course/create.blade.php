@extends('backend.layout.master')
@section('title','Shikhi | Create Course')
@section('page','Course')

@section('page-content')

<form id="createform" action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label" for="title-input">Course Title</label>
                        <input type="text" class="form-control" name="name" id="title-input" value="" placeholder="Enter Course title" required="" />

                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label>Description</label> <br>
                        <textarea name="description" id="" cols="80" rows="8"></textarea>

                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body mb-3">
                    <div>
                        <label>Requirements</label> <br>
                        <textarea name="requirements" id="" cols="80" rows="8"></textarea>

                        @error('requirements')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <!-- end card -->

            <div class="card">
                <div class="card-body mb-3">
                    <div>
                        <label>Audience</label> <br>
                        <textarea name="audience" id="" cols="80" rows="8"></textarea>

                        @error('audience')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <!-- end card -->

            <div class="text-end mb-3">
                <button type="submit" class="btn btn-success w-sm">Create</button>
            </div>
        </div>
        <!-- end col -->

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Publish</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="choices-publish-status-input" class="form-label">Status</label>
                        <select class="form-select" name="status" id="choices-publish-status-input" class="formInput">
                            <option value="none">Select Status</option>
                            <option value="public" {{ old('visibility') == 'public' ? 'selected' : '' }}>Public</option>
                            <option value="private" {{ old('visibility') == 'private' ? 'selected' : '' }}>Private</option>
                        </select>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0"> Categories</h5>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-2"><a href="#" class="float-end text-decoration-underline">Add New</a>Select  category</p>
                    <select class="form-select" id="choices-category-input" name="category_id" data-choices="" data-choices-search-false="">
                        <option value="none">Select Category</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Thumbnail</h5>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <p class="text-muted">Add Course Thumbnail.</p>
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
            </div>
            <!-- end card -->

        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</form>


@endsection
