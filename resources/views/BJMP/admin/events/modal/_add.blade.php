<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLongTitle">Add</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('events.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="title" class="text-dark text-black font-weight-bold">Title:</label>
                            <input class="form-control" type="text" name="title" id="title"
                                placeholder="Ex. Holiday">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="date_start" class="text-dark text-black font-weight-bold">Event Start Date:</label>
                            <input class="form-control" type="date" name="date_start" id="date_start" placeholder="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="date_end" class="text-dark text-black font-weight-bold">Event End Date:</label>
                            <input class="form-control" type="date" name="date_end" id="date_end" placeholder="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="time" class="text-dark text-black font-weight-bold">Event time:</label>
                            <input class="form-control" type="time" name="time" id="time" placeholder="">
                        </div>
                    </div>
                    <div class="modal-footer pb-0 mb-0 py-1">
                        <button class="btn btn-primary" type="submit">Add Event</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
