<div class="modal fade" id="edit{{ $event->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLongTitle">Edit</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('events.update', $event->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="title" class="text-dark text-black font-weight-bold">Title:</label>
                            <input class="form-control" type="text" name="title" id="title"
                                value="{{ $event->title }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="start" class="text-dark text-black font-weight-bold">Start Date:</label>
                            <input class="form-control" type="date" name="start" id="start"
                                value="{{ $event->start }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="end" class="text-dark text-black font-weight-bold">End Date:</label>
                            <input class="form-control" type="date" name="end" id="end" value="{{ $event->end }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="time" class="text-dark text-black font-weight-bold">Event time:</label>
                            <input class="form-control" type="time" name="time" id="time"
                                value="{{ $event->time }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="color" class="text-dark text-white font-weight-bold">Event color:</label>
                            <select class="form-control" aria-label="Default select example" name="color" id="color">
                                <option selected value="{{ $event->color }}"
                                    style="background-color: {{ $event->color }}; color: #636060">Dafault</option>
                                <option value="c72121" style="background-color: #c72121">Red</option>
                                <option value="21dc6c" style="background-color: #21dc6c">Green</option>
                                <option value="3e4acc" style="background-color: #3e4acc">Blue</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer pb-0 mb-0 py-1">
                        <button class="btn btn-primary" type="submit">Edit Event</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
