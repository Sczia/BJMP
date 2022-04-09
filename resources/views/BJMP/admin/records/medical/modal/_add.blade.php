<div class="modal" id="add" tabindex="-1" role="dialog">
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

                <form action="{{ route('medical.store') }} " method="POST">
                    @csrf



                        <div class="form-group ">
                            <label for="name" class="text-dark text-black font-weight-bold">NAME</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="birthdate" class="text-dark text-black font-weight-bold">BIRTHDATE</label>
                                <input type="date" class="form-control" name="birthdate" id="birthdate" placeholder="Birthdate" value="">
                            </div>

                            <div class="form-group col-md-6">
                              <label for="age" class="text-dark text-black font-weight-bold">AGE</label>
                                <input type="text" class="form-control" name="age" id="age" placeholder="Age" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address" class="text-dark text-black font-weight-bold">ADDRESS</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Address" value=""">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="emergency_contact" class="text-dark text-black font-weight-bold">EMERGENCY CONTACT</label>
                                <input type="text" class="form-control" name="emergency_contact" id="emergency_contact" placeholder="Emergency Contact" value=""">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="relationship" class="text-dark text-black font-weight-bold">RELATIONSHIP</label>
                                <input type="text" class="form-control" name="relationship" id="relationship" placeholder="Relationship" value="">
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="allergies" class="text-dark text-black font-weight-bold">ALLERGIES</label>
                            <input type="text" class="form-control" name="allergies" id="allergies" placeholder="Allergies" value="">
                        </div>

                        <div class="form-group">
                            <label for="current_medication" class="text-dark text-black font-weight-bold">CURRENT MEDICATION</label>
                            <input type="text" class="form-control" name="current_medication" id="current_medication" placeholder="Current Medication" value="">
                        </div>

                        <div class="form-group">
                            <label for="current_health_status" class="text-dark text-black font-weight-bold">CURRENT HEALTH STATUS</label>
                            <input type="text" class="form-control" name="current_health_status" id="current_health_status" placeholder="Current Health Status" value="">
                        </div>

                        <div class="form-group">
                            <label for="medical_history" class="text-dark text-black font-weight-bold">MEDICAL HISTORY</label>
                            <input type="text" class="form-control" name="medical_history" id="medical_history" placeholder="Medical History" value="">
                        </div>



                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>



                </form>

            </div>



        </div>
    </div>
</div>
