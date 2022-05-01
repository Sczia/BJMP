
<!-- Modal -->
  <div class="modal fade" id="view{{ $contact->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role document="document">
        <div class="modal-content">
            <div class="modal-header align-items-center bg-warning  text-light">
                <div class="row flex-nowrap">
                     <div class="col">
                        <img src="{{ asset('img/profile.jpg') }}" class="user-icon" alt="user icon">
                    </div>
                    <div class="d-flex flex-column">
                        <h5>{{ $contact->name }}</h5>
                        <span>{{ $contact->email }}</span>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" style="height: 100px;">
                    <h6 class="text-left">{{ $contact->message }}</h6>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <form action="{{route('contact.reply') }}" method="post">
                    @csrf
                    <div class="row flex-nowrap align-items-center">
                        <div class="col">
                            <input type="hidden" name="email" value="{{ $contact->email }}">
                            <textarea name="reply" id="reply" cols="50" rows="10" style="height: 50px; width: 100%;" placeholder="Reply"></textarea>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                <span>  Send</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
