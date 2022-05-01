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
                        <td class="text-left">Name:</td>
                        <td class="text-left">{{ $record->name }}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Birthdate:</td>
                        <td class="text-left">{{ $record->birthdate }}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Address:</td>
                        <td class="text-left">{{ $record->address }}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Religion:</td>
                        <td class="text-left">{{ $record->religion }}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Civil Status:</td>
                        <td class="text-left">{{ $record->civil_status }}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Built:</td>
                        <td class="text-left">{{ $record->built }}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Complexion:</td>
                        <td class="text-left">{{ $record->complexion}}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Eye Color:</td>
                        <td class="text-left">{{ $record->eye_color }}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Sex:</td>
                        <td class="text-left">{{ $record->sex}}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Blood Type:</td>
                        <td class="text-left">{{ $record->blood_type}}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Educational Attainment:</td>
                        <td class="text-left">{{ $record->educational_attainment}}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Date of Commitment:</td>
                        <td class="text-left">{{ $record->date_of_commitment}}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Offense:</td>
                        <td class="text-left">{{ $record->offense}}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Case number:</td>
                        <td class="text-left">{{ $record->case_number}}</td>
                      </tr>

                    </tbody>
                  </table>

            </div>
            <div class=="modal-footer">

            </div>
        </div>

    </div>
</div>
