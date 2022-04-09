<div class="modal" id="edit{{ $schedule->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header bg-info">
                <h5 class="modal-title  text-light font-weight-bold">INFORMATION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p> You are now able to edit the schedule</p>

                <form action="{{ route('dalaw.update', $schedule->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <label for="day" class="form-label">Day</label>
                        <input type="text" name="day" id="day" value="{{ $schedule->day }}">
                    </div>
                    <div class="col-md-4">
                        <label for="time" class="form-label">Time</label>
                        <input type="text" name="time" id="time" value="{{ $schedule->time }}">
                    </div>
                    <div class="col-md-2">
                        <label for="dorm" class="form-label">Dorm</label>
                        <input type="text" name="dorm" id="dorm" value="{{ $schedule->dorm }}">
                    </div>


                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save changes</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </form>
            </div>

        </div>





    </div>
</div>
</div>
