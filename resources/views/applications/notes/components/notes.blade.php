@foreach ($notes as $note)
    <div class="note-single" id="note-id-{{ $note->id }}">
        <div class="note-card note-{{$note->label}}">
            <div class="card border-0">
                <div class="card-body">
                    <h4 class="note-title">{{ $note->title }} <span class="note-status"></span></h4>
                    <p class="note-excerpt">{{ $note->description }}</p>
                    <p class="note-date">Actualizado {{ $note->updated_at->diffForHumans() }}</p>
                    <div class="note-action">
                        <div class="note-action__left">
                            @if ( $note->favorite == true)
                                <a href="#" onclick="note_update_favorite({{ $note->id }}, 0)">
                                    <span class="c-icon-favorite" data-feather="star">
                                    </span>
                                </a>
                            @else
                                <a href="#" onclick="note_update_favorite({{ $note->id }}, 1)">
                                    <span data-feather="star"></span>
                                </a>
                            @endif
                            <!--<a href="#" onclick="note_update_favorite({{ $note->id }})">
                                <span @if($note->favorite == true) class="c-icon-favorite" @endif data-feather="star">
                                </span>
                            </a>-->
                            <a href="#" onclick="delete_note({{ $note->id }})">
                                <span data-feather="trash-2"></span>
                            </a>
                            <a href="#" onclick="note_edit({{ $note->id }})">
                                <span data-feather="edit"></span>
                            </a>
                        </div>
                        <div class="note-action__right">
                            <div class="label-dropdown dropdown dropdown-hover">
                                <a class="btn-link" href="#">
                                    <span data-feather="more-vertical"></span>
                                </a>
                                <div class="dropdown-default">
                                    <a class="nl-personal dropdown-item" onclick="note_update_label({{ $note->id }}, 'personal')" href="#">
                                        Personal
                                    </a>
                                    <a class="nl-work dropdown-item" onclick="note_update_label({{ $note->id }}, 'work')" href="#">
                                        Trabajo
                                    </a>
                                    <a class="nl-social dropdown-item" onclick="note_update_label({{ $note->id }}, 'social')" href="#">
                                        Social
                                    </a>
                                    <a class="nl-important dropdown-item" onclick="note_update_label({{ $note->id }}, 'important')" href="#">
                                        Importante
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
