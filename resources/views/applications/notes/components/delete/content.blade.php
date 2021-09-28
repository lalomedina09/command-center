<div class="note-single">
    <div class="note-card note-{{$note->label}}">
        <div class="card border-0">
            <div class="card-body">
                <h4 class="note-title">{{ $note->title }} <span class="note-status"></span></h4>
                <p class="note-excerpt">{{ $note->description }}</p>
            </div>
        </div>
    </div>

    <div class="form-group mb-25" style="margin-top: 5%">
        <button class="btn btn-danger btn-default btn-rounded" onclick="destroy_note({{ $note->id }})">
            Mover a papelera
        </button>
    </div>
</div>