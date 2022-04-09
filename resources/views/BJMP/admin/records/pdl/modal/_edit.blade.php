<div class="modal" id="edit{{ $record->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header bg-info">
                <h5 class="modal-title  text-light font-weight-bold">INFORMATION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p>You are now able to edit this information</p>

                <form action="{{ route('pdl.update', $record->id) }}" method="POST">
                    @csrf
                    @method('PUT')




                    <div class="form-group ">
                        <label for="name" class="text-dark text-black font-weight-bold">NAME</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                            value="{{ $record->name }}">
                    </div>

                    <div class="form-group ">
                        <label for="birthdate" class="text-dark text-black font-weight-bold">BIRTHDATE</label>
                        <input type="text" class="form-control" name="birthdate" id="birthdate"
                            placeholder="Birthdate" value="{{ $record->birthdate }}">
                    </div>

                    <div class="form-group">
                        <label for="address" class="text-dark text-black font-weight-bold">ADDRESS</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Address"
                            value="{{ $record->address }}">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="religion" class="text-dark text-black font-weight-bold">RELIGION</label>
                            <input type="text" class="form-control" name="religion" id="religion"
                                placeholder="Religion" value="{{ $record->religion }}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="civil_status" class="text-dark text-black font-weight-bold">CIVIL STATUS</label>
                            <input type="text" class="form-control" name="civil_status" id="civil_status"
                                placeholder="Civil Status" value="{{ $record->civil_status }}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="built" class="text-dark text-black font-weight-bold">BUILT</label>
                            <input type="text" class="form-control" name="built" id="built" placeholder="Built"
                                value="{{ $record->built }}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="complexion" class="text-dark text-black font-weight-bold">COMPLEXION</label>
                            <input type="text" class="form-control" name="complexion" id="complexion"
                                placeholder="Complexion" value="{{ $record->complexion }}">
                        </div>

                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="eye_color" class="text-dark text-black font-weight-bold">EYE COLOR</label>
                            <input type="text" class="form-control" name="eye_color" id="eye_color"
                                placeholder="Eye Color" value="{{ $record->eye_color }}">
                        </div>
                        <div class="form-group col-md-4">

                            <label for="sex" class="text-dark text-black font-weight-bold">SEX</label>
                            <input type="text" class="form-control" name="sex" id="sex" placeholder="Sex"
                                value="{{ $record->sex }}">

                        </div>
                        <div class="form-group col-md-4">
                            <label for="blood_type" class="text-dark text-black font-weight-bold">BLOOD TYPE</label>
                            <input type="text" class="form-control" name="blood_type" id="blood_type"
                                placeholder="Blood Type" value="{{ $record->blood_type }}">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="educational_attainment" class="text-dark text-black font-weight-bold">EDUCATIONAL
                            ATTAINMENT</label>
                        <input type="text" class="form-control" id="educational_attainment"
                            name="educational_attainment" placeholder="Educational Attainment"
                            value="{{ $record->educational_attainment }}">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="date of commitment" class="text-dark text-black font-weight-bold">DATE OF
                                COMMITMENT</label>
                            <input type="date" class="form-control" name="date_of_commitment" id="date_of_commitment"
                                placeholder=" Date of Commitment" value="{{ $record->date_of_commitment }}">
                        </div>
                        <div class="form-group col-md-3">

                            <label for="offense" class="text-dark text-black font-weight-bold">OFFENSE</label>
                            <input type="text" class="form-control" id="offense" placeholder="ofense"
                                value="{{ $record->offense }}">

                        </div>
                        <div class="form-group col-md-4">
                            <label for="case_number" class="text-dark text-black font-weight-bold">CASE NUMBER</label>
                            <input type="text" class="form-control" name="case_number" id="case_number"
                                placeholder="Case number" value="{{ $record->case_number }}">
                        </div>
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
