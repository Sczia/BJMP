<div class="modal fade" id="view{{ $health->id }}" tabindex="-1" role="dialog"
    aria-labelledby="examplModallongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role document="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title  text-light font-weight-bold" id="exampleModalLongtitle">Health Survey</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>



            <div class="modal-body">
                <table class="table table-hover">
                    <thead>
                      <tr>

                       <h3 class="modal-title text-dark font-weight-bold">INFORMATION</h3>


                      </tr>
                    </thead>

                    <tbody>

                      <tr>
                        <td>First name:</td>
                        <td>{{ $health->name }}</td>
                      </tr>


                    </tbody>
                  </table>

            </div>

            <div class=="modal-footer">

            </div>
        </div>

    </div>
</div>
