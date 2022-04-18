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



                <form action="{{ route('pdl.destroy',$record->id) }}" method="POST">
                    @csrf
                    @method('DELETE')



                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">YES</button>
                        {{-- <button type="button" class="btn btn-danger">CANCEL</button> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
