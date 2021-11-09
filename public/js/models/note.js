function add_note() {

    let url = '/applications/note/store';
    let token = $('#token').val();
    let title = $('#title').val();
    let description = $('#description').val()
    let label = $('#label').val();

    $.post(url, {
            _token: token,
            title: title,
            description: description,
            label: label
        },

        function(data) {
            console.log(data);

            actions = noteActionList(data);
            clear = note_clear_inputs();
            $("#noteModal").modal('hide');



        });
}

function delete_note(id) {

    let url = '/applications/note/delete';
    let token = $('#token').val();

    $.post(url, {
            _token: token,
            id: id,
        },

        function(data) {
            $("#delete-content-note").empty();
            $("#delete-content-note").html(data.view);
            $("#deleteNote").modal('show');
        });
}

function destroy_note(id) {

    let url = '/applications/note/destroy/' + id;
    let token = $('#token').val();

    $.post(url, {
            _token: token,
        },

        function(data) {
            console.log(data);

            actions = noteActionList(data);
            $("#deleteNote").modal('hide');
        });
}

function notesListFavorites(id) {

    let url = '/applications/note/list-favorites';

    $.ajax({
        url: "{{ route('comprobar') }}",
        method: 'get',
        dataType: 'json',
        success: function(respuesta) {
            console.log("información");

        },
        error: function() {
            console.log("No se ha podido obtener la información");
        }
    });

}
/*GET METODO laravel y ajax quedaa pendiente revizar esto*/

function note_update_label(id, label) {
    let url = '/applications/note/label/update/' + id;
    let token = $('#token').val();

    $.post(url, {
            _token: token,
            label: label,
        },

        function(data) {
            console.log(data);
            actions = noteActionList(data);

        });
}

function note_update_favorite(id, favorite) {
    let url = '/applications/note/favorite/update/' + id;
    let token = $('#token').val();

    $.post(url, {
            _token: token,
            favorite: favorite,
        },
        function(data) {
            console.log(data);
            actions = noteActionList(data);
        });
}

function noteActionList(data) {
    $("#content-notes").empty();
    $("#content-notes").html(data.view);
    $("#btnactionsuccess").trigger("click");
    //feather.replace();
}

function note_clear_inputs() {
    $("#title").val('');
    $("#description").val('');
}

function note_edit(id) {

    let url = '/applications/note/edit';
    let token = $('#token').val();

    $.post(url, {
            _token: token,
            id: id,
        },

        function(data) {
            $("#delete-content-note").empty();
            $("#delete-content-note").html(data.view);
            $("#deleteNote").modal('show');
        });
}