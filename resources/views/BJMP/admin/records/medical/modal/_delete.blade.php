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

                <form action="{{ route('medical.recyclebin.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $record->id }}">
                    <input type="hidden" name="name" value="{{ $record->name }}">
                    <input type="hidden" name="birthdate" value="{{ $record->birthdate }}">
                    <input type="hidden" name="age" value="{{ $record->age }}">
                    <input type="hidden" name="address" value="{{ $record->address }}">
                    <input type="hidden" name="emergency_contact" value="{{ $record->emergency_contact }}">
                    <input type="hidden" name="relationship" value="{{ $record->relationship }}">
                    <input type="hidden" name="allergies" value="{{ $record->allergies }}">
                    <input type="hidden" name="current_medication" value="{{ $record->current_medication }}">
                    <input type="hidden" name="current_health_status" value="{{ $record->current_health_status }}">
                    <input type="hidden" name="medical_history" value="{{ $record->medical_history }}">


                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">YES</button>
                        {{-- <button type="button" class="btn btn-danger">CANCEL</button> --}}
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
