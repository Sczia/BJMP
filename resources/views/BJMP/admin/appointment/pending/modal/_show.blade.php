

<div class="modal fade" id="view{{ $appointment->id }}" tabindex="-1" role="dialog" aria-labelledby="examplModallongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role document="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light font-weight-bold" id="exampleModalLongtitle">Request Appointments </h5>
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
                        <td>{{ $appointment->first_name }}</td>
                      </tr>
                      <tr>
                        <td>Last name:</td>
                        <td>{{ $appointment->last_name }}</td>
                      </tr>
                      <tr>
                        <td>Middle name:</td>
                        <td>{{ $appointment->middle_name }}</td>
                      </tr>
                      <tr>
                        <td>Age:</td>
                        <td>{{ $appointment->age }}</td>
                      </tr>
                      <tr>
                        <td>Gender:</td>
                        <td>{{ $appointment->gender}}</td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td>{{ $appointment->email }}</td>
                      </tr>
                      <tr>
                        <td>Address:</td>
                        <td>{{ $appointment->address }}</td>
                      </tr>
                      <tr>
                        <td>Date:</td>
                        <td>{{ $appointment->date }}</td>
                      </tr>
                      <tr>
                        <td>Name of the Prisoner:</td>
                        <td>{{ $appointment->prisoner_name }}</td>
                      </tr>
                      <tr>
                        <td>Relationship to the Prisoner:</td>
                        <td>{{ $appointment->prisoner_relationship }}</td>
                      </tr>
                      <tr>
                        <td>Phone number:</td>
                        <td>{{ $appointment->phone_number }}</td>
                      </tr>
                      <tr>
                        <td>Health Poll:</td>
                        <td>{{ $appointment->health_poll }}</td>
                      </tr>

                    </tbody>
                  </table>

            </div>

            <div class=="modal-footer">

            </div>
        </div>

    </div>
</div>
