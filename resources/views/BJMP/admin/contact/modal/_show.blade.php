<!-- Modal -->
<div class="modal fade" id="view{{ $contact->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role document="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light font-weight-bold" id="exampleModalLabel">MESSAGE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>


            </div>
            <div class="modal-body text-align-justify">
                <h4>Name:</h4>
                <p>{{ $contact->name }}</p>

                <h4>Email:</h4>
                <p>{{ $contact->email }}</p>
                <h4>Message:</h4>
                <p>{{ $contact->message }}</p>

            </div>
            <div class="modal-footer">


            </div>
        </div>
    </div>
</div>
</div>








