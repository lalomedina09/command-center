@foreach ($notes as $note)
    <div class="note-single" id="note-id-{{ $note->id }}">
        <div class="note-card alert-danger">
            <div class="card border-0">
                <div class="card-body">
                    <h4 class="note-title">{{ $note->title }} <span class="note-status"></span></h4>
                    <p class="note-excerpt">{{ $note->description }}</p>
                    <p class="note-date">Actualizado {{ $note->updated_at->diffForHumans() }}</p>
                    <p class="note-date">Eliminado {{ $note->deleted_at->diffForHumans() }}</p>
                    <div class="note-action">
                        <div class="note-action__left">
                            <a href="#" onclick="note_restore({{ $note->id }})">
                                <span data-feather="rotate-ccw"></span>
                            </a>
                        </div>
                        <div class="note-action__right">
                            <div class="label-dropdown dropdown dropdown-hover">
                                <a class="btn-link" href="#">
                                    <span data-feather="more-vertical"></span>
                                </a>
                                <div class="dropdown-default">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
