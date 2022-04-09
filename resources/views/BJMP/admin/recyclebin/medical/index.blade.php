@extends('BJMP.admin.layouts.mainlayout')
@section('contents')
    <h1 class="h3 mb-4 text-gray-800">Medical's Recyclebin</h1>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="recyclebin medical">
                    <thead class="table-success text-black">
                        <tr>
                            <th>Full name</th>
                            <th>Address</th>
                            <th>Emergency contact</th>
                            <th>Medical History</th>
                            <th>More info</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($records as $record)

                            <tr>
                                <td>{{ $record->name }}</td>
                                <td>{{ $record->address }}</td>
                                <td>{{ $record->emergency_contact }}</td>
                                <td>{{ $record->medical_history }}</td>
                               {{--  <td>{{ $record->birthdate }}</td>
                                <td>{{ $record->age }}</td>
                                <td>{{ $record->relationships }}</td>
                                <td>{{ $record->allergies }}</td>
                                <td>{{ $record->current_medication }}</td>
                                <td>{{ $record->current_health_status }}</td>

 --}}


                                <td class="text-center">
                                    <a class="btn btn-sm btn-outline-primary" href="" data-toggle="modal" data-target="#view{{ $record->id }}"><i class="fas fa-eye"></i></a>
                                    @include('BJMP.admin.recyclebin.medical.modal._show')
                                </td>

                              <td class="d-flex justify-content-center align-items-center">
                                    <a class="btn btn-sm  btn-outline-success mr-1" href="" data-toggle="modal" data-target="#download{{ $record->id }}"><i class="fas fa-download"></i></a>
                                 @include('BJMP.admin.recyclebin.medical.modal._download')
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
            $('#recyclebin medical').DataTable();
        });
    </script>



@endsection
