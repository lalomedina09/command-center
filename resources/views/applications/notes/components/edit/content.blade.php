<div class="row">
    <div class="col-md-12">
        <h3 class="text-center">Actualizar nota {{ $note->title }}</h3>
        <!--inicia form-->
            <div class="form-group mb-25">
                <label for="text">Titulo</label>
                <input type="text" id="title-update" class="form-control"
                placeholder="Titulo de la nota" id="text" value="{{ $note->title}}">
            </div>
            <div class="form-group mb-25">
                <label for="textarea">Descripción</label>
                <textarea id="description-update" class="form-control" placeholder="Descripción">{{ $note->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="n-labels">Etiqueta</label>
                <select class="form-control" id="label-update">
                    <option value="social">Social</option>
                    <option value="work">Trabajo</option>
                    <option value="personal">Personal</option>
                    <option value="important">Importante</option>
                </select>
                {{--{!! Form::select('state',$labels, null,
                    ['class' => 'form-control',
                    'required' => 'required',
                    'placeholder' => 'Elige una opción'] )
                !!}--}}
            </div>
            <div class="form-group mb-25">
                <button class="btn btn-primary btn-default btn-rounded"
                onclick="update_note({{ $note->id }})">
                    Actualizar Nota
                </button>
            </div>
        <!--termina form-->
    </div>
</div>
