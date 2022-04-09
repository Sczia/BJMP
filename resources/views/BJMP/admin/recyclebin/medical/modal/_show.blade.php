<div class="modal fade" id="view{{ $record->id }}" tabindex="-1" role="dialog"
    aria-labelledby="examplModallongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role document="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title  text-light font-weight-bold" id="exampleModalLongtitle">Medical Information</h5>
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
                        <td>Age:</td>
                        <td>{{ $record->age }}</td>
                      </tr>
                      <tr>
                        <td>Address:</td>
                        <td>{{ $record->address }}</td>
                      </tr>
                      <tr>
                        <td>Emergency contact:</td>
                        <td>{{ $record->emergency_contact }}</td>
                      </tr>
                      <tr>
                        <td>Relationship:</td>
                        <td>{{ $record->relationship }}</td>
                      </tr>

                      <tr>
                        <td>Allergies:</td>
                        <td>{{ $record->allergies}}</td>
                      </tr>
                      <tr>
                        <td>Current Medication:</td>
                        <td>{{ $record->current_medication }}</td>
                      </tr>

                      <tr>
                        <td>Current Health Status:</td>
                        <td>{{ $record->current_health_htatus }}</td>
                      </tr>
                      <tr>
                        <td>Medical History:</td>
                        <td>{{ $record->meddical_history}}</td>
                      </tr>

                    </tbody>
                  </table>

            </div>
            <div class=="modal-footer">

            </div>
        </div>

    </div>
</div>
