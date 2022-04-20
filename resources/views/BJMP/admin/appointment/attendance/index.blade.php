@extends('BJMP.admin.layouts.mainlayout')
@section('contents')


    <div class="row align-items-center mb-3">
        <div class="col">
            <h1 class="h3 mb-4 text-gray-800">Visitor's Attendance</h1>
        </div>
        <div class="col">
            <div class="d-flex justify-content-end">

                <a href="{{ route('attendance.create') }}" class="btn btn-success mr-3">
                    <span class="d-flex align-items-center"><i class="fa-solid fa-file-pdf"></i>&#160; print</span>
                </a>


            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="attendance">
                    <thead   <thead class="table-danger text-black">
                        <tr>
                            <th>Full name</th>
                            <th>PDL name</th>
                            <th>Date of visitation</th>
                            <th>Time in</th>
                            <th>Time out</th>
                           {{--  <th>Name of Prisoner</th>
                            <th>Relationship of the Prisoner</th>
                            <th>Contact number</th>
                            <th>Health Poll</th>
                            <th>More Info</th>
                            <th>Action</th> --}}

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($attendance as $attendance)

                            <tr>
                                <td>{{ $attendance->name }}</td>
                                <td>{{ $attendance->pdl_name }}</td>
                                <td>{{ $attendance->date }}</td>
                                <td>{{ $attendance->time_in }}</td>
                                <td>{{ $attendance->time_out }}</td>
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
            $('#attendance').DataTable();
        });
    </script>



@endsection
