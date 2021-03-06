<div class="modal" id="confirm{{ $appointment->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">

                <h5 class="modal-title text-light font-weight-bold">INFORMATION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <h5 class="text-left">Name: {{ $appointment->first_name}}  {{ $appointment->last_name}} {{ $appointment->middle_name}} </h5>
                <h5 class="text-left">Prisoner name: {{ $appointment->prisoner_name}} </h5>
                <h5 class="text-left">Relationship to the Prisoner: {{ $appointment->prisoner_relationship}} </h5>

                <form action="{{ route('confirm.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $appointment->id }}">
                    <input type="hidden" name="first_name" value="{{ $appointment->first_name }}">
                    <input type="hidden" name="last_name" value="{{ $appointment->last_name }}">
                    <input type="hidden" name="middle_name" value="{{ $appointment->middle_name }}">
                    <input type="hidden" name="age" value="{{ $appointment->age }}">
                    <input type="hidden" name="gender" value="{{ $appointment->gender }}">
                    <input type="hidden" name="email" value="{{ $appointment->email }}">
                    <input type="hidden" name="address" value="{{ $appointment->address }}">
                    <input type="hidden" name="date" value="{{ $appointment->date }}">
                    <input type="hidden" name="prisoner_name" value="{{ $appointment->prisoner_name }}">
                    <input type="hidden" name="prisoner_relationship" value="{{ $appointment->prisoner_relationship }}">
                    <input type="hidden" name="phone_number" value="{{ $appointment->phone_number }}">
                    <input type="hidden" name="health_poll" value="{{ $appointment->health_poll }}">

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">YES</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
