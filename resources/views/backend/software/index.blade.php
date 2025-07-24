@extends('layouts.backend_master')

@section('content')
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Software Informations</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Software Informations</li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                    <!-- Start col -->
                    <div class="col-lg-12 connectedSortable">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h3 class="card-title">Update Software Informations</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th class="text-center">Slide Image</th>
                                            <th class="text-center">Update</th>
                                            <th class="text-center">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($softwares->isEmpty())
                                            <tr>
                                                <td colspan="4" class="text-center text-muted">
                                                    Please, add a software item to enrich your software category.
                                                </td>
                                            </tr>
                                        @else
                                            @foreach ($softwares as $software)
                                                <tr class="align-middle">
                                                    <td>{{ $software->id }}.</td>

                                                    <!-- Slide Preview -->
                                                    <td class="text-center">
                                                        <img src="{{ asset('uploads/home_slide/' . $software->category) }}"
                                                            class="img-fluid" alt="Slide Image"
                                                            style="width: 400px; height: 225px;">
                                                    </td>

                                                    <!-- Slide Update Form -->
                                                    <td class="text-center">
                                                        <form action="{{ route('software.update', $software->id) }}"
                                                            method="POST" enctype="multipart/form-data"
                                                            class="d-flex align-items-center justify-content-center gap-2">
                                                            @csrf
                                                            @method('PUT')

                                                            <input type="file" name="home_slide_{{ $software->id }}"
                                                                class="form-control form-control-sm"
                                                                style="max-width: 220px;" required>

                                                            <button type="submit"
                                                                class="btn btn-warning btn-sm">Update</button>
                                                        </form>

                                                        <!-- Slide-specific error -->
                                                        @if ($errors->has("home_slide_{$software->id}"))
                                                            <div x-data="{ show: true }" x-show="show"
                                                                x-transition.opacity.duration.1000ms x-init="setTimeout(() => show = false, 3000)"
                                                                class="text-danger small mt-1">
                                                                <i class="bi bi-exclamation-circle me-1"></i>
                                                                {{ $errors->first("home_slide_{$software->id}") }}
                                                            </div>
                                                        @endif

                                                        <!-- Slide-specific success -->
                                                        @if (session('success_update') && session('software_id') == $software->id)
                                                            <div x-data="{ show: true }" x-show="show"
                                                                x-transition.opacity.duration.1000ms x-init="setTimeout(() => show = false, 2000)"
                                                                class="text-success small mt-1">
                                                                <i class="bi bi-check-circle-fill me-1"></i>
                                                                {{ session('success_update') }}
                                                            </div>
                                                        @endif
                                                    </td>

                                                    <!-- Optional: Delete button column -->
                                                    <td class="text-center">
                                                        <!-- Delete Button triggers modal -->
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteModal_{{ $software->id }}">
                                                            Delete
                                                        </button>

                                                        <!-- Delete Confirmation Modal -->
                                                        <div class="modal fade" id="deleteModal_{{ $software->id }}"
                                                            tabindex="-1"
                                                            aria-labelledby="deleteModalLabel_{{ $software->id }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">

                                                                    <div class="modal-header bg-danger text-white">
                                                                        <h5 class="modal-title"
                                                                            id="deleteModalLabel_{{ $software->id }}">
                                                                            Confirm Deletion</h5>
                                                                        <button type="button"
                                                                            class="btn-close btn-close-white"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>

                                                                    <div class="modal-body text-center">
                                                                        <p>Are you sure you want to delete this software?
                                                                        </p>
                                                                        {{-- <img src="{{ asset('uploads/home_slide/' . $software->category) }}" --}}
                                                                        class="img-fluid rounded shadow"
                                                                        style="max-height: 200px;"
                                                                        alt="Slide Preview">
                                                                    </div>

                                                                    <div class="modal-footer justify-content-center">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Cancel</button>

                                                                        <form
                                                                            action="{{ route('software.destroy', $software->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit"
                                                                                class="btn btn-danger">Yes, Delete</button>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- Slide-specific delete success message --}}
                                                        {{-- @if (session('success') && session('software_id') == $software->id) --}}
                                                        <div x-data="{ show: true }" x-show="show"
                                                            x-transition.opacity.duration.1000ms x-init="setTimeout(() => show = false, 2000)"
                                                            class="text-success small mt-1">
                                                            <i class="bi bi-check-circle-fill me-1"></i>
                                                            {{ session('success') }}
                                                        </div>
                                                        {{-- @endif --}}
                                                    </td>


                                                </tr>
                                            @endforeach
                                        @endif

                                        <!-- End of foreach loop -->
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                {{-- <ul class="pagination pagination-sm m-0 float-end">
                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                <!-- /.row (main row) -->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content-->
    </main>
@endsection()
