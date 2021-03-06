@extends('BJMP.admin.layouts.mainlayout')
@section('contents')
    <h1 class="h3 mb-4 text-gray-800">II. Confirm Appointments</h1>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class=" table-bordered table-hover" id="confirm">
                    <thead class="table-info text-black">
                        <tr>
                            <th>Full name</th>
                            <th>Date of visitation</th>
                            <th>Name of Prisoner</th>
                            <th>Relationship of the Prisoner</th>
                            <th>Contact number</th>
                            <th>Health Poll</th>
                            <th>More Info</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($appointments as $appointment)
                            <tr>


                                <td>{{ $appointment->first_name }} {{ $appointment->last_name }}
                                    {{ $appointment->middle_name }}</td>
                                <td>{{ $appointment->date }}</td>
                                <td>{{ $appointment->prisoner_name }}</td>
                                <td>{{ $appointment->prisoner_relationship }}</td>
                                <td>{{ $appointment->phone_number }}</td>
                                <td>{{ $appointment->health_poll }}</td>








                                <td class="text-center">
                                    <a class="btn btn-sm btn-outline-primary" href="" data-toggle="modal"
                                        data-target="#show{{ $appointment->id }}"> <i class="fas fa-eye"></i></a>
                                    @include('BJMP.admin.appointment.confirm.modal._show')

                                    <a class="btn btn-sm btn-outline-success" href="" data-toggle="modal"
                                        data-target="#view{{ $appointment->id }}"><i
                                            class="fa-solid fa-hospital-user"></i></a>
                                    @include('BJMP.admin.appointment.confirm.modal._view')
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
            $('#confirm').DataTable();
        });
    </script>
@endsection
