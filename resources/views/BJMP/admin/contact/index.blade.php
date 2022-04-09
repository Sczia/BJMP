@extends('BJMP.admin.layouts.mainlayout')
@section('contents')
    <h1 class="h3 mb-4 text-gray-800">Message</h1>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="pending">
                    <thead class="table-warning text-black">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>

                            <th>More Info</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($contact as $contact)

                            <tr>
                                <td>{{ $contact->name }} </td>
                                <td>{{ $contact->email }}</td>









                                <td class="text-center">
                                    <a class="btn btn-sm btn-outline-primary" href="" data-toggle="modal"
                                        data-target="#view{{ $contact->id }}"><i class="fas fa-eye"></i></a>
                                    @include('BJMP.admin.contact.modal._show')
                                </td>

                                <td class="d-flex justify-content-center align-items-center">
                                    <a class="btn btn-sm  btn-outline-danger mr-1" href="" data-toggle="modal"
                                        data-target="#delete{{ $contact->id }}"> <i
                                        class="fas fa-window-close"></i></a>
                                    @include('BJMP.admin.contact.modal._delete')


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
            $('#contact').DataTable();
        });
    </script>



@endsection
