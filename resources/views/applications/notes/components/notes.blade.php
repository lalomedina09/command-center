@foreach ($notes as $note)
    <div class="note-single">
        <div class="note-card note-{{$note->label}}">
            <div class="card border-0">
                <div class="card-body">
                    <h4 class="note-title">{{ $note->title }} <span class="note-status"></span></h4>
                    <p class="note-excerpt">{{ $note->description }}</p>
                    <div class="note-action">
                        <div class="note-action__left">
                            <a href="#" class=""><span data-feather="star"></span></a>
                            <a href="#"><span data-feather="trash-2"></span></a>
                        </div>
                        <div class="note-action__right">
                            <div class="label-dropdown dropdown dropdown-hover">
                                <a class="btn-link" href="#"><span data-feather="more-vertical"></span></a>
                                <div class="dropdown-default">
                                    <a class="nl-personal dropdown-item" href="#">Personal</a>
                                    <a class="nl-work dropdown-item" href="#">Work</a>
                                    <a class="nl-social dropdown-item" href="#">Socail</a>
                                    <a class="nl-important dropdown-item" href="#">Important</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
