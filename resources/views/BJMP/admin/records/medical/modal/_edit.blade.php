<div class="modal" id="edit{{ $record->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-heade bg-info">

                <h5 class="modal-title  text-light font-weight-bold ">INFORMATION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p> You are now able to edit this information</p>

                <form action="{{ route('medical.update', $record->id) }}" method="POST">
                    @csrf
                    @method('PUT')



                        <div class="form-group ">
                            <label for="name" class="text-dark text-black font-weight-bold">NAME</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ $record->name }}">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="birthdate" class="text-dark text-black font-weight-bold">BIRTHDATE</label>
                                <input type="date" class="form-control" name="birthdate" id="birthdate" placeholder="Birthdate" value="{{ $record->birthdate }}">
                            </div>

                            <div class="form-group col-md-6">
                              <label for="age" class="text-dark text-black font-weight-bold">AGE</label>
                                <input type="text" class="form-control" name="age" id="age" placeholder="Age" value="{{ $record->age }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address" class="text-dark text-black font-weight-bold">ADDRESS</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="{{ $record->address }}">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="emergency_contact" class="text-dark text-black font-weight-bold">EMERGENCY CONTACT</label>
                                <input type="text" class="form-control" name="emergency_contact" id="emergency_contact" placeholder="Emergency Contact" value="{{ $record->emergency_contact }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="relationship" class="text-dark text-black font-weight-bold">RELATIONSHIP</label>
                                <input type="text" class="form-control" name="relationship" id="relationship" placeholder="Relationship" value="{{ $record->relationship }}">
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="allergies" class="text-dark text-black font-weight-bold">ALLERGIES</label>
                            <input type="text" class="form-control" name="allergies" id="allergies" placeholder="Allergies" value="{{ $record->allergies }}">
                        </div>

                        <div class="form-group">
                            <label for="current_medication" class="text-dark text-black font-weight-bold">CURRENT MEDICATION</label>
                            <input type="text" class="form-control" name="current_medication" id="current_medication" placeholder="Current Medication" value="{{ $record->current_medication }}">
                        </div>

                        <div class="form-group">
                            <label for="current_health_status" class="text-dark text-black font-weight-bold">CURRENT HEALTH STATUS</label>
                            <input type="text" class="form-control" name="current_health_status" id="current_health_status" placeholder="Current Health Status" value="{{ $record->current_health_status }}">
                        </div>

                        <div class="form-group">
                            <label for="medical_history" class="text-dark text-black font-weight-bold">MEDICAL HISTORY</label>
                            <input type="text" class="form-control" name="medical_history" id="medical_history" placeholder="Medical History" value="{{ $record->medical_history }}">
                        </div>






                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save changes</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>

            </div>



        </div>
    </div>
</div>
