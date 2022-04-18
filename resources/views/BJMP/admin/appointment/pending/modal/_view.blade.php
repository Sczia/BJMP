

<div class="modal fade" id="view{{ $appointment->id }}" tabindex="-1" role="dialog" aria-labelledby="examplModallongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role document="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light font-weight-bold" id="exampleModalLongtitle">Health Declaration </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>





            <div class="modal-body">
                <table class="table table-hover">
                    <thead>
                      <tr>

                       <h3 class="modal-title text-dark font-weight-bold">HEALTH INFORMATION</h3>


                      </tr>
                    </thead>

                    <tbody>

                      <tr>
                        <td>1. Does your temperature is >38°C</td>
                        <td>{{ $appointment->name}}</td>
                      </tr>
                      <tr>
                        <td>2. Presence of the following</td>
                        <td>{{ $appointment->last_name }}</td>
                      </tr>
                      <tr>
                        <td>3.Countires or Local places with known confirmed cases of COVID-19.</td>
                        <td>{{ $appointment->middle_name }}</td>
                      </tr>
                      <tr>
                        <td>4.Have you been in a close contact with a relative or friend who has been to a country or
                            place with confirmed case of COVID-39. </td>
                        <td>{{ $appointment->age }}</td>
                      </tr>
                      <tr>
                        <td>5. Have you been in a hospital/health care facility with confirmed cases of COVID-19.</td>
                        <td>{{ $appointment->gender}}</td>
                      </tr>
                      <tr>
                        <td>6. Have you been to a public market or grocery store?</td>
                        <td>{{ $appointment->email }}</td>
                      </tr>
                      <tr>
                        <td>7. Have you been in CLOSE contact with a confirmed cases of COVID-19.</td>
                        <td>{{ $appointment->address }}</td>
                      </tr>
                      <tr>
                        <td>8. Have you had a CLOSE contact with or currentlyliving with relative/friend who is a
                            FRONTLINER? (such as: health care worker, law inforcer or uninformed personnel, security
                            gaurd, member of LGU or NGO & others with almost the
                            same role including endor/cahsier in a public market/grocery store & other alike.</td>
                        <td>{{ $appointment->date }}</td>
                      </tr>
                      <tr>
                        <td>9. Did you go out of your place or go somewhere else duriing your quarantine period.</td>
                        <td>{{ $appointment->prisoner_name }}</td>
                      </tr>


                    </tbody>
                  </table>

            </div>

            <div class=="modal-footer">

            </div>
        </div>

    </div>
</div>
