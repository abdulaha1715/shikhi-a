@extends('backend.layout.master')
@section('title','Shikhi | Category')
@section('page','Category')

@section('page-content')

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Create Categoty</h4>
            </div><!-- end card header -->

            <div class="card-body category-form">
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="totalProjects" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="totalProjects" placeholder="Categoty Name" value="{{ old('name') }}">
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="totalTasks" class="form-label">Slug</label>
                                <input type="text" name="slug" class="form-control" id="totalTasks" placeholder="Categoty Slug" value="{{ old('slug') }}">
                                @error('slug')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="hstack">
                                <button type="submit" class="btn btn-success">Add Categoty</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- end category-form -->
        </div><!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Create List</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="live-preview">
                    <div class="table-responsive">
                        <table class="table table-striped table-nowrap align-middle mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Invoice</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-medium">01</td>
                                    <td>Bobby Davis</td>
                                    <td>Nov 14, 2021</td>
                                    <td>$2,410</td>
                                    <td><span class="badge bg-success">Confirmed</span></td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">02</td>
                                    <td>Christopher Neal</td>
                                    <td>Nov 21, 2021</td>
                                    <td>$1,450</td>
                                    <td><span class="badge bg-warning">Waiting</span></td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">03</td>
                                    <td>Monkey Karry</td>
                                    <td>Nov 24, 2021</td>
                                    <td>$3,500</td>
                                    <td><span class="badge bg-success">Confirmed</span></td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">04</td>
                                    <td>Aaron James</td>
                                    <td>Nov 25, 2021</td>
                                    <td>$6,875</td>
                                    <td><span class="badge bg-danger">Cancelled</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

@endsection
