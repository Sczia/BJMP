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

                <form action="{{ route('pdl.store') }} " method="POST">
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

                            <div class="form-group">
                                <label for="address" class="text-dark text-black font-weight-bold">ADDRESS</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Address" value=""">
                            </div>

                            <div class="form-group col-md-6">
                              <label for="religion" class="text-dark text-black font-weight-bold">RELIGION</label>
                                <input type="text" class="form-control" name="religion" id="religion" placeholder="Religion" value="">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="civil_status" class="text-dark text-black font-weight-bold">CIVIL STATUS</label>
                                <input type="text" class="form-control" name="civil_status" id="civil_status" placeholder="Civil Status" value=""">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="built" class="text-dark text-black font-weight-bold">BUILT</label>
                                <input type="text" class="form-control" name="built" id="built" placeholder="Built" value="">
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="complexion" class="text-dark text-black font-weight-bold">COMPLEXION</label>
                            <input type="text" class="form-control" name="complexion" id="complexion" placeholder="Complexion" value="">
                        </div>

                        <div class="form-group">
                            <label for="eye_color" class="text-dark text-black font-weight-bold">EYE COLOR</label>
                            <input type="text" class="form-control" name="eye_color" id="eye_color" placeholder="Eye Color" value="">
                        </div>

                        <div class="form-group">
                            <label for="sex" class="text-dark text-black font-weight-bold">SEX</label>
                            <input type="text" class="form-control" name="sex" id="sex" placeholder="Sex" value="">
                        </div>

                        <div class="form-group">
                            <label for="blood_type" class="text-dark text-black font-weight-bold">BLOOD TYPE</label>
                            <input type="text" class="form-control" name="blood_type" id="blood_type" placeholder="Blood Type" value="">
                        </div>

                        <div class="form-group">
                            <label for="educational_attainment" class="text-dark text-black font-weight-bold">EDUCATIONAL ATTAINMENT</label>
                            <input type="text" class="form-control" name="educational_attainment" id="educational_attainment" placeholder="Educational Attainment" value="">
                        </div>
                        <div class="form-group">
                            <label for="date_of_commitment" class="text-dark text-black font-weight-bold">Date OF COMMITMENT</label>
                            <input type="text" class="form-control" name="date_of_commitment" id="date_of_commitment" placeholder="Date of Commitment" value="">
                        </div>
                        <div class="form-group">
                            <label for="offense" class="text-dark text-black font-weight-bold">OFFENSE</label>
                            <input type="text" class="form-control" name="offense" id="offense" placeholder="Offense" value="">
                        </div>
                        <div class="form-group">
                            <label for="case_number" class="text-dark text-black font-weight-bold">CASE NUMBER</label>
                            <input type="text" class="form-control" name="case_number" id="case_number" placeholder="Case Number" value="">
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
