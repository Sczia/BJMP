<div class="modal fade" id="view{{ $record->id }}" tabindex="-1" role="dialog" aria-labelledby="examplModallongTitle"
    aria-hidden="true">
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
                            <td class="text-left">Name:</td>
                            <td class="text-left">{{ $record->name }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Birthdate:</td>
                            <td class="text-left">{{ $record->birth_date }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Age:</td>
                            <td class="text-left">{{ $record->age }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Address:</td>
                            <td class="text-left">{{ $record->address }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Emergency contact:</td>
                            <td class="text-left">{{ $record->emergency_contact }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Relationship:</td>
                            <td class="text-left">{{ $record->relationship }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Allergies:</td>
                            <td class="text-left">{{ $record->allergies }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Current Medication:</td>
                            <td class="text-left">{{ $record->current_medication }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Current Health Status:</td>
                            <td class="text-left">{{ $record->current_health_status }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Medical History:</td>
                            <td class="text-left">{{ $record->medical_history }}</td>
                        </tr>

                    </tbody>
                </table>
                <a href="{{ route('medical.download', $record->id) }}" class="btn btn-sm btn-success">EXPORT WORD </a>

            </div>
            <div class=="modal-footer">

            </div>
        </div>

    </div>
</div>
