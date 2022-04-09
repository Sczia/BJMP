<div class="modal fade" id="view{{ $record->id }}" tabindex="-1" role="dialog"
    aria-labelledby="examplModallongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role document="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title  text-light font-weight-bold" id="exampleModalLongtitle">PDl's Information</h5>
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
                        <td>Name:</td>
                        <td>{{ $record->name }}</td>
                      </tr>
                      <tr>
                        <td>Birthdate:</td>
                        <td>{{ $record->birthdate }}</td>
                      </tr>
                      <tr>
                        <td>Address:</td>
                        <td>{{ $record->address }}</td>
                      </tr>
                      <tr>
                        <td>Religion:</td>
                        <td>{{ $record->religion }}</td>
                      </tr>

                      <tr>
                        <td>Civil Status:</td>
                        <td>{{ $record->civil_status }}</td>
                      </tr>
                      <tr>
                        <td>Built:</td>
                        <td>{{ $record->built }}</td>
                      </tr>

                      <tr>
                        <td>Complexion:</td>
                        <td>{{ $record->complexion}}</td>
                      </tr>
                      <tr>
                        <td>Eye Color:</td>
                        <td>{{ $record->eye_color }}</td>
                      </tr>

                      <tr>
                        <td>Sex:</td>
                        <td>{{ $record->sex}}</td>
                      </tr>
                      <tr>
                        <td>Blood Type:</td>
                        <td>{{ $record->blood_type}}</td>
                      </tr>
                      <tr>
                        <td>Educational Attainment:</td>
                        <td>{{ $record->educational_attainment}}</td>
                      </tr>
                      <tr>
                        <td>Date of Commitment:</td>
                        <td>{{ $record->date_of_commitment}}</td>
                      </tr>
                      <tr>
                        <td>Offense:</td>
                        <td>{{ $record->offense}}</td>
                      </tr>
                      <tr>
                        <td>Case number:</td>
                        <td>{{ $record->case_number}}</td>
                      </tr>

                    </tbody>
                  </table>

            </div>
            <div class=="modal-footer">

            </div>
        </div>

    </div>
</div>
