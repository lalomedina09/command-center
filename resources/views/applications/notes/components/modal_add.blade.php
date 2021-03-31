<div class="modal fade" id="noteModal" tabindex="-1" aria-labelledby="noteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!--inicia form-->
                    <div class="form-group mb-25">
                        <label for="text">Titulo</label>
                        <input type="text" id="title" class="form-control" placeholder="Titulo de la nota" id="text">
                    </div>
                    <div class="form-group mb-25">
                        <label for="textarea">Descripción</label>
                        <textarea id="description" class="form-control" placeholder="Descripción"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="n-labels">Etiqueta</label>
                        <select class="form-control" id="label">
                            <option value="social">Social</option>
                            <option value="work">Trabajo</option>
                            <option value="personal">Personal</option>
                            <option value="important">Importante</option>
                        </select>
                    </div>
                    <div class="form-group mb-25">
                        <button class="btn btn-primary btn-default btn-rounded" onclick="add_note()">
                            Agregar Nota
                        </button>
                    </div>
                <!--termina form-->
            </div>
        </div>
    </div>
</div>
