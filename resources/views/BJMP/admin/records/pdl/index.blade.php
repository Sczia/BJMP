@extends('BJMP.admin.layouts.mainlayout')
@section('contents')
<div class="row align-items-center mb-3">
    <div class="col">
            <h1 class="h3 mb-4 text-gray-800">PDL's Records</h1>

        </div>
        <div class="col">
            <div class="d-flex justify-content-end">
                <a type="button" class="btn btn-primary mr-3" data-toggle="modal" data-target="#add">
                    <span class="d-flex align-items-center"><i class="fas fa-plus-circle"></i>&#160; Add</span>
                </a>
                <a href="{{ route('pdl.create') }}" class="btn btn-success mr-3">
                    <span class="d-flex align-items-center"><i class="fa-solid fa-file-pdf"></i>&#160; print</span>
                </a>
                @include('BJMP.admin.records.pdl.modal._add')
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="pdl">
                    <thead class="table-secondary text-black">
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
                            {{--   <td>{{ $record->birthdate }}</td>
                                <td>{{ $record->religion }}</td>
                                <td>{{ $record->civil_status }}</td>
                                <td>{{ $record->built }}</td>
                                <td>{{ $record->complexion }}</td>
                                <td>{{ $record->eye_color }}</td>
                                <td>{{ $record->sex }}</td>
                                <td>{{ $record->blood_type }}</td>
                                <td>{{ $record->educational_attainment }}</td> --}}





                                <td class="text-center">
                                    <a class="btn btn-sm btn-outline-primary" href="" data-toggle="modal" data-target="#view{{ $record->id }}"><i class="fas fa-eye"></i></a>
                                    @include('BJMP.admin.records.pdl.modal._show')
                                </td>

                                <td class="d-flex justify-content-center align-items-center">
                                    <a class="btn btn-sm  btn-outline-info mr-1" href="" data-toggle="modal" data-target="#edit{{ $record->id }}"><i class="fas fa-user-edit"></i></a>
                                    @include('BJMP.admin.records.pdl.modal._edit')

                                    <a class="btn btn-sm  btn-outline-danger mr-1" href="" data-toggle="modal" data-target="#delete{{ $record->id }}"><i class="fas fa-trash-alt"></i></i></a>
                                    @include('BJMP.admin.records.pdl.modal._delete')
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
            $('#pdl').DataTable();
        });
    </script>



@endsection
