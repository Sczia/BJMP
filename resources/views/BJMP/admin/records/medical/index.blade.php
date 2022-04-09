@extends('BJMP.admin.layouts.mainlayout')
@section('contents')
<div class="row align-items-center mb-3">
    <div class="col">
        <h1 class="h3 mb-4 text-gray-800">PDL Record</h1>
    </div>
    <div class="col">
        <div class="d-flex justify-content-end">
            <a type="button" class="btn btn-primary mr-3" data-toggle="modal" data-target="#add">
                <span class="d-flex align-items-center"><i class="fas fa-plus-circle"></i>&#160; Add</span>
            </a>
            <a href="{{ route('medical.create') }}" class="btn btn-success mr-3">
                <span class="d-flex align-items-center"><i class="fa-solid fa-file-pdf"></i>&#160; print</span>
            </a>
            @include('BJMP.admin.records.medical.modal._add')

        </div>
    </div>
</div>


    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="medical">
                    <thead class="table-success text-black">
                        <tr>
                            <th>Full name</th>
                            <th>Address</th>
                            <th>Emergency contact</th>
                            <th>Medical History</th>
                           <th>More Info</th>
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






                                <td class="text-center">
                                    <a class="btn btn-sm btn-outline-primary" href="" data-toggle="modal" data-target="#view{{ $record->id }}"><i class="fas fa-eye"></i></a>
                                   @include('BJMP.admin.records.medical.modal._show')
                                </td>

                                <td class="d-flex justify-content-center align-items-center">
                                    <a class="btn btn-sm  btn-outline-info mr-1" href="" data-toggle="modal" data-target="#edit{{ $record->id }}"><i class="fas fa-user-edit"></i></a>
                                    @include('BJMP.admin.records.medical.modal._edit')

                                    <a class="btn btn-sm  btn-outline-danger mr-1" href="" data-toggle="modal" data-target="#delete{{ $record->id }}"><i class="fas fa-trash-alt"></i></a>
                                    @include('BJMP.admin.records.medical.modal._delete')
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
            $('#medical').DataTable();
        });
    </script>



@endsection
