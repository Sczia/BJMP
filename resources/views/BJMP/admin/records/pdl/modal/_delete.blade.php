<div class="modal" id="delete{{ $record->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">

                <h5 class="modal-title  text-light font-weight-bold">WARNING!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p> Are you sure you want to deleted This information? and move to recycle bin?</p>



                <form action="{{ route('pdl.recyclebin.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $record->id }}">
                    <input type="hidden" name="name" value="{{ $record->name }}">
                    <input type="hidden" name="birthdate" value="{{ $record->birthdate }}">
                    <input type="hidden" name="address" value="{{ $record->address }}">
                    <input type="hidden" name="religion" value="{{ $record->religion }}">
                    <input type="hidden" name="civil_status" value="{{ $record->civil_status }}">
                    <input type="hidden" name="built" value="{{ $record->built }}">
                    <input type="hidden" name="complexion" value="{{ $record->complexion }}">
                    <input type="hidden" name="eye_color" value="{{ $record->eye_color }}">
                    <input type="hidden" name="sex" value="{{ $record->sex }}">
                    <input type="hidden" name="blood_type" value="{{ $record->blood_type }}">
                    <input type="hidden" name="educational_attainment" value="{{ $record->educational_attainment }}">
                    <input type="hidden" name="date_of_commitment" value="{{ $record->date_of_commitment }}">
                    <input type="hidden" name="offense" value="{{ $record->offense }}">
                    <input type="hidden" name="case_number" value="{{ $record->case_number }}">


                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">YES</button>
                        {{-- <button type="button" class="btn btn-danger">CANCEL</button> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
