@extends('BJMP.admin.layouts.mainlayout')
@section('contents')
    <h1 class="h3 mb-4 text-gray-800">PAABOT</h1>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="pending">
                    <thead class="table-success text-black">
                        <tr>
                            <th>Name</th>
                            <th>Days</th>
                            <th>Time</th>
                            <th>Dorm</th>


                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($schedules as $schedule)

                            <tr>
                                <td>{{ $schedule->name }} </td>
                                <td>{{ $schedule->day }} </td>
                                <td>{{ $schedule->time }}</td>
                                <td>{{ $schedule->dorm }}</td>

                                <td class="d-flex justify-content-center align-items-center">
                                    <a class="btn btn-sm  btn-outline-success mr-1" href="" data-toggle="modal"
                                        data-target="#edit{{ $schedule->id }}">
                                        <i class="fa-solid fa-pen-to-square"></i></a>
                                    @include('BJMP.admin.schedule.paabot.modal._edit')


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
            $('#paabot').DataTable();
        });
    </script>



@endsection
