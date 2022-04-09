@extends('BJMP.admin.layouts.mainlayout')
@section('contents')
    <h1 class="h3 mb-4 text-gray-800">II. Health Declaration</h1>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="health">
                    <thead class="table-info text-black">
                        <tr>
                            <th>Full name</th>
                            <th>More Info</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($health as $health)

                            <tr>

                                <td>{{ $health->name }}</td>









                                <td class="text-center">
                                    <a class="btn btn-sm btn-outline-primary" href="" data-toggle="modal"
                                        data-target="#view{{ $health->id }}"><i class="fas fa-eye"></i></a>
                                    @include('BJMP.admin.health.modal._show')
                                </td>

                                <td class="d-flex justify-content-center align-items-center">
                                    <a class="btn btn-sm  btn-outline-success mr-1" href="" data-toggle="modal"
                                        data-target="#confirm{{ $health->id }}"><i class="fas fa-check-square"></i></a>
                                    @include('BJMP.admin.health.modal._confirm')

                                    <a class="btn btn-sm  btn-outline-danger mr-1" href="" data-toggle="modal"
                                    data-target="#cancel{{ $health->id }}"> <i
                                        class="fas fa-window-close"></i></a>
                                @include('BJMP.admin.health.modal._delete')


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
            $('#health').DataTable();
        });
    </script>



@endsection
