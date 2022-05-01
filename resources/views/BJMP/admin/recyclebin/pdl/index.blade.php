@extends('BJMP.admin.layouts.mainlayout')
@section('contents')
    <h1 class="h3 mb-4 text-gray-800">Pdl's Recyclebin</h1>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="recyclebin pdl">
                    <thead class="table-active text-black">
                        <tr>
                            <th>Full name</th>
                            <th>Address</th>
                            <th>Date of Commitment</th>
                            <th>Offense/Crime Commited</th>
                            <th>Case number</th>
                            <th>More Info</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($records as $record)
                            <tr>

                                <td>{{ $record->name }}</td>
                                <td>{{ $record->address }}</td>
                                <td>{{ $record->date_of_commitment }}</td>
                                <td>{{ $record->offense }}</td>
                                <td>{{ $record->case_number }}</td>

                                <td class="text-center">
                                    <a class="btn btn-sm btn-outline-primary" href="" data-toggle="modal"
                                        data-target="#view{{ $record->id }}"><i class="fas fa-eye"></i></a>
                                    @include('BJMP.admin.recyclebin.pdl.modal._show')
                                </td>

                                <td class="d-flex justify-content-center align-items-center">
                                    <a class="btn btn-sm  btn-outline-success mr-1" href="" data-toggle="modal"
                                        data-target="#download{{ $record->id }}"><i class="fas fa-download"></i></a>
                                    {{-- @include('BJMP.admin.appointment.pending.modal._confirm') --}}

                                    <a class="btn btn-sm  btn-outline-danger" href="" data-toggle="modal"
                                        data-target="#delete{{ $record->id }}"> <i class="fas fa-trash-alt"></i></a>
                                    @include('BJMP.admin.recyclebin.medical.modal._delete' )

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
            $('#recyclebin pdl').DataTable();
        });
    </script>
@endsection
