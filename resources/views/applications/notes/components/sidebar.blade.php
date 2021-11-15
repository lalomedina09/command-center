<div class="note-sidebar">
    <div class="card border-0">
        <div class="card-body px-15 pt-30">
            <div class="px-3">
                <a href="#" class="btn btn-primary btn-default btn-rounded btn-block" data-toggle="modal" data-target="#noteModal"> <span data-feather="plus"></span>
                    Agregar Nota</a>
            </div>
            <div class="note-types">
                <ul class="list-unstyled">
                    <li>
                        <a href="#" onclick="notesall()" class="active">
                        <span data-feather="edit"></span> Todos</a>
                    </li>
                    <li>
                        <a onclick="notesListFavorites()" href="#">
                            <span data-feather="star"></span> Favoritos
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="notesListDeletes()">
                            <span data-feather="trash-2"></span> Papelera
                        </a>
                    </li>
                </ul>
            </div>
            <div class="note-labels">
                <p><span data-feather="tag"></span> Etiquetas</p>
                <ul class="list-unstyled">
                    <li>
                        <a class="label-personal" href="#" onclick="notesListLabels('personal')">
                            <span></span> Personal
                        </a>
                    </li>
                    <li>
                        <a class="label-work" href="#" onclick="notesListLabels('work')"
                        ><span></span> Trabajo
                    </a>
                    </li>
                    <li>
                        <a class="label-social" href="#" onclick="notesListLabels('social')"><span></span> Social
                    </a>
                    </li>
                    <li>
                        <a class="label-important" href="#" onclick="notesListLabels('important')">
                            <span></span> Importante
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
