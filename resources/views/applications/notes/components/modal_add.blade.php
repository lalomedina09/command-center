<div class="modal fade" id="noteModal" tabindex="-1" aria-labelledby="noteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <form action="/">
                    <div class="form-group mb-25">
                        <label for="text">Titulo</label>
                        <input type="text" class="form-control" placeholder="Note Title" id="text">
                    </div>
                    <div class="form-group mb-25">
                        <label for="textarea">Descripción</label>
                        <textarea id="textarea" class="form-control" placeholder="Note Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="n-labels">Etiqueta</label>
                        <select class="form-control" id="n-labels">
                            <option>Social</option>
                            <option>Trabajo</option>
                            <option>Personal</option>
                            <option>Importante</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
