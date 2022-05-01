<div class="modal fade" id="show{{ $appointment->id }}" tabindex="-1" role="dialog"
    aria-labelledby="examplModallongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role document="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title  text-light font-weight-bold" id="exampleModalLongtitle"> Confirm
                    Appointments</h5>
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
                        <td class="text-left">First name:</td>
                        <td class="text-left">{{ $appointment->first_name }}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Last name:</td>
                        <td class="text-left">{{ $appointment->last_name }}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Middle name:</td>
                        <td class="text-left">{{ $appointment->middle_name }}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Age:</td>
                        <td class="text-left">{{ $appointment->age }}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Gender:</td>
                        <td class="text-left">{{ $appointment->gender}}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Email:</td>
                        <td class="text-left">{{ $appointment->email }}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Address:</td>
                        <td class="text-left">{{ $appointment->address }}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Date:</td>
                        <td class="text-left"{{ $appointment->date }}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Name of the Prisoner:</td>
                        <td class="text-left">{{ $appointment->prisoner_name }}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Relationship to the Prisoner:</td>
                        <td class="text-left">{{ $appointment->prisoner_relationship }}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Phone number:</td>
                        <td class="text-left">{{ $appointment->phone_number }}</td>
                      </tr>

                      <tr>
                        <td class="text-left">Health Poll:</td>
                        <td class="text-left">{{ $appointment->health_poll }}</td>
                      </tr>

                    </tbody>
                  </table>

            </div>

            <div class=="modal-footer">

            </div>
        </div>

    </div>
</div>
