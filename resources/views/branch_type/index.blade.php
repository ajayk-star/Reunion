@extends('layouts.master')
@section('content')

    <!-- Loader -->
    {{-- <div id="global-loader">
        <img src="/assets/img/loader.svg" class="loader-img" alt="Loader">
    </div> --}}
    <!-- /Loader -->

    <!-- main-content -->
    <div class="main-content app-content">

        <!-- container -->
        <div class="main-container container-fluid">


            <!-- breadcrumb -->
            <div class="col-xl-12">
                <div class="breadcrumb-header justify-content-between">
                    <div class="left-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1">Branch Type</span>
                    </div>
                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Institutes</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Branch Type</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /breadcrumb -->

            <div class="col-xl-12">
                @include('layouts.flash-message')
                <div class="d-flex justify-content-between pb-3">
                    @can('create-event')

                   <a class="btn btn-md btn-primary active" href="{{ route('branch-type.create') }}">Create</a> @endcan

                </div>
                <div class="table-responsive">
                    <div class="row">
                        @include('branch_type._search')
                    </div>
                    <table class="table table-bordered table-striped table-hover mg-b-0 text-md-nowrap" id="examstream">
                        <thead>
                            <tr>

                                <th scope="col">#</th>
                                <th scope="col"> Name</th>
                                <th scope="col">Phone </th>
                                <th scope="col">amount</th>
                                <th scope="col">Date Created</th>
                                <th scope="col">Date Updated</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @dd($bramchTypes); --}}
                            @if ($bramchTypes->count() > 0)
                                @foreach ($bramchTypes as $types)
                                    <tr>
                                        <td scope="col">{{ $loop->iteration }}</td>

                                        <td scope="col">{{ $types->name }}</td>
                                        <td scope="col">{{ $types->phone }}</td>
                                        <td scope="col">{{ $types->amount }}</td>

                                        <td scope="col">{{ \Carbon\Carbon::parse($types->created_at)->format('d-m-Y h:i A') }}</td>
                                        <td scope="col">{{ \Carbon\Carbon::parse($types->updated_at)->format('d-m-Y h:i A') }}</td>
                                        <td>
                                            <a class="btn btn-sm"
                                                href="{{ route('branch-type.edit',$types->id) }}">Edit</a>


                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <th colspan="12">No Record Found</th>
                                </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="font-size: 15px;">
                    {{-- {{ $event->links() }} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- @section('script')
        @include('backend::layouts._datatable')
        <script>
            $(document).ready(function() {
                $('#eventstream').DataTable();
            });
        </script>
    @endsection --}}
