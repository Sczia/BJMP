<div class="modal fade" id="download{{ $record->id }}" tabindex="-1" role="dialog"
    aria-labelledby="examplModallongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role document="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title  text-light font-weight-bold" id="exampleModalLongtitle">PDL's Recyclebin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body d-flex flex-column">
                <div class="modal-body-top d-flex">

                </div>

                <div class="modal-body-bottom mt-2" >
                    <h3>{{ $record->name }}</h3>
                    <h3>{{ $record->birthdate }}</h3>
                    <h3>{{ $record->age }}</h3>
                    <h3>{{ $record->address }}</h3>
                    <h3>{{ $record->emergency_contact }}</h3>
                    <h3>{{ $record->relationships }}</h3>
                    <h3>{{ $record->allergies }}</h3>
                    <h3>{{ $record->current_medication }}</h3>
                    <h3>{{ $record->current_health_status }}</h3>
                    <h3>{{ $record->medical_history }}</h3>




                </div>
            </div>
            <div class=="modal-footer">

            </div>
        </div>

    </div>
</div>
