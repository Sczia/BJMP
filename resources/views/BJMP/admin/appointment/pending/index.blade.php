@extends('BJMP.admin.layouts.mainlayout')
@section('contents')
    <h1 class="h3 mb-4 text-gray-800">I. Requests Appointments</h1>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="pending">
                    <thead class="table-info text-black">
                        <tr>
                            <th>Full name</th>
                            <th>Date of visitation</th>
                            <th>Name of Prisoner</th>
                            <th>Relationship of the Prisoner</th>
                            <th>Contact number</th>
                            <th>Health Poll</th>
                            <th>More Info</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($appointments as $appointment)

                            <tr>
                                <td>{{ $appointment->first_name }} {{ $appointment->last_name }} {{ $appointment->middle_name }}</td>
                                <td>{{ $appointment->date }}</td>
                                <td>{{ $appointment->prisoner_name }}</td>
                                <td>{{ $appointment->prisoner_relationship }}</td>
                                <td>{{ $appointment->phone_number }}</td>
                                <td>{{ $appointment->health_poll }}</td>

                               {{--  <td>{{ $appointment->age }}</td>
                                <td>{{ $appointment->gender }}</td>
                                <td>{{ $appointment->email }}</td>
                                <td>{{ $appointment->address }}</td>
 --}}





                                <td class="text-center">
                                    <a class="btn btn-sm btn-outline-primary" href="" data-toggle="modal"
                                        data-target="#view{{ $appointment->id }}"><i class="fas fa-eye"></i></a>
                                    @include('BJMP.admin.appointment.pending.modal._show')
                                </td>

                                <td class="d-flex justify-content-center align-items-center">
                                    <a class="btn btn-sm  btn-outline-success mr-1" href="" data-toggle="modal"
                                        data-target="#confirm{{ $appointment->id }}"><i class="fas fa-check-square"></i></a>
                                    @include('BJMP.admin.appointment.pending.modal._confirm')

                                    <a class="btn btn-sm  btn-outline-danger mr-1" href="" data-toggle="modal"
                                    data-target="#cancel{{ $appointment->id }}"> <i
                                        class="fas fa-window-close"></i></a>
                                @include('BJMP.admin.appointment.pending.modal._cancel')
                                </td>
                            </tr>

                        @endforeach



                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <h1 class="h3 mb-4 text-gray-800">II. Health Declaration</h1>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="pending">
                    <thead class="table-success text-black">
                        <tr>
                            <th>Full name</th>
                            <th>Date of visitation</th>
                            <th>Name of Prisoner</th>
                            <th>Relationship of the Prisoner</th>
                            <th>Contact number</th>
                            <th>Health Poll</th>
                            <th>More Info</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($appointments as $appointment)

                            <tr>
                                <td>{{ $appointment->first_name }} {{ $appointment->last_name }} {{ $appointment->middle_name }}</td>
                                <td>{{ $appointment->date }}</td>
                                <td>{{ $appointment->prisoner_name }}</td>
                                <td>{{ $appointment->prisoner_relationship }}</td>
                                <td>{{ $appointment->phone_number }}</td>
                                <td>{{ $appointment->health_poll }}</td>

                               {{--  <td>{{ $appointment->age }}</td>
                                <td>{{ $appointment->gender }}</td>
                                <td>{{ $appointment->email }}</td>
                                <td>{{ $appointment->address }}</td>
 --}}





                                <td class="text-center">
                                    <a class="btn btn-sm btn-outline-primary" href="" data-toggle="modal"
                                        data-target="#view{{ $appointment->id }}"><i class="fas fa-eye"></i></a>
                                    @include('BJMP.admin.appointment.pending.modal._show')
                                </td>

                                <td class="d-flex justify-content-center align-items-center">
                                    <a class="btn btn-sm  btn-outline-success mr-1" href="" data-toggle="modal"
                                        data-target="#confirm{{ $appointment->id }}"><i class="fas fa-check-square"></i></a>
                                    @include('BJMP.admin.appointment.pending.modal._confirm')


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
            $('#pending').DataTable(
                'odering':false
            );
        });
    </script>



@endsection
