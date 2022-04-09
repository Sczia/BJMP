<div class="modal" id="edit{{ $announcement->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header bg-info">
                <h5 class="modal-title  text-light font-weight-bold">INFORMATION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p> You are now able to edit the announcement</p>

                <form action="{{ route('announcement.update', $announcement->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="announce">Announcement</label>
                        <input type="text" name="announce" class="form-control" id="announce" placeholder="Announcement" value="{{ $announcement->announce }}">
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
