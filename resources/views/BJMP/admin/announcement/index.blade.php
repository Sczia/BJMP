@extends('BJMP.admin.layouts.mainlayout')
@section('contents')
    <h1 class="h3 mb-4 text-gray-800">Announcement</h1>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="pending">
                    <thead class="table-danger text-black">
                        <tr>
                            <th>Announcement</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($announcement as $announcement)

                            <tr>
                                <td>{{ $announcement->announce  }} </td>

                                <td class="d-flex justify-content-center align-items-center">
                                    <a class="btn btn-sm  btn-outline-success mr-1" href="" data-toggle="modal"
                                        data-target="#edit{{ $announcement->id }}">
                                     <i class="fa-solid fa-pen-to-square"></i></a>
                                    @include('BJMP.admin.announcement.modal._edit')


                                </td>
                            </tr>

                        @endforeach



                    </tbody>

                </table>
            </div>
        </div>
    </div>


@endsection

@section('page-level-javascript')
    <script>
        $(document).ready(function() {
            $('#announcement').DataTable();
        });
    </script>



@endsection
