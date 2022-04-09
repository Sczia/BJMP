<div class="modal" id="edit{{ $schedule->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-heade bg-info">

                <h5 class="modal-title  text-light font-weight-bold ">INFORMATION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p> You are now able to edit the schedule</p>

                <form action="{{ route('paabot.update', $schedule->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="day" >Day</label>
                        <input type="text" name="day" class="form-control" id="day" placeholder="Day" value="{{ $schedule->day }}">
                    </div>
                    <div class="form-group">
                        <label for="time" >Time</label>
                        <input type="text" name="time" class="form-control" id="time" placeholder="Time" value="{{ $schedule->time }}">
                    </div>
                    <div class="form-group">
                        <label for="dorm" >Dorm</label>
                        <input type="text" name="dorm" class="form-control" id="dorm" placeholder="Dorm"  value="{{ $schedule->dorm }}">
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
