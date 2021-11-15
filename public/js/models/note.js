function add_note() {
    let url = '/applications/note/store';
    let token = $('#token').val();
    let title = $('#title').val();
    let description = $('#description').val()
    let label = $('#label').val();

    if (title == '' || description == '' || label == '') {
        console.log('Algun campo vacio');
        return false;
    } else {
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

function note_restore(id) {
    let url = '/applications/note/restore/' + id;
    let token = $('#token').val();

    $.post(url, {
            _token: token,
        },

        function(data) {
            console.log(data);
            $("#content-notes").empty();
            $("#content-notes").html(data.view);
            $("#btnactionsuccess").trigger("click");
            $(".breadcrumb-title").text("Mis Notas Eliminadas");
        });
}

function notesListFavorites() {
    let url = '/applications/note/list-favorites';

    $.ajax({
        //url: "{{ route('/applications/note/list-favorites') }}",
        url: url,
        method: 'get',
        dataType: 'json',
        success: function(data) {
            //console.log("información");
            $("#content-notes").empty();
            $("#content-notes").html(data.view);
            $("#btnactionsuccess").trigger("click");
            $(".breadcrumb-title").text("Mis Notas Favoritas");

        },
        error: function() {
            console.log("Error " + "Algo Salio mal!!!");
        }
    });

}

function notesListLabels(label) {
    let url = '/applications/note/list-label/' + label;

    $.ajax({
        url: url,
        method: 'get',
        dataType: 'json',
        success: function(data) {
            $("#content-notes").empty();
            $("#content-notes").html(data.view);
            $("#btnactionsuccess").trigger("click");
            $(".breadcrumb-title").text("Mis Notas " + label + 'es');
        },
        error: function() {
            console.log("Error " + "Algo Salio mal!!!");
        }
    });

}

function notesListDeletes() {
    let url = '/applications/note/list-deletes/';

    $.ajax({
        url: url,
        method: 'get',
        dataType: 'json',
        success: function(data) {
            $("#content-notes").empty();
            $("#content-notes").html(data.view);
            $("#btnactionsuccess").trigger("click");
            $(".breadcrumb-title").text("Mis Notas Eliminadas");
        },
        error: function() {
            console.log("Error " + "Algo Salio mal!!!");
        }
    });

}

function notesall() {
    let url = '/applications/note/list-favorites';

    $.ajax({
        url: url,
        method: 'get',
        dataType: 'json',
        success: function(data) {
            //console.log("información");
            $("#content-notes").empty();
            $("#content-notes").html(data.view);
            $("#btnactionsuccess").trigger("click");
            $(".breadcrumb-title").text("Mis Notas Favoritas");

        },
        error: function() {
            console.log("Error " + "Algo Salio mal!!!");
        }
    });

}

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
            $("#div-content-note").empty();
            $("#div-content-note").html(data.view);
            $("#noteModalAction").modal('show');
        });
}

function update_note(id) {
    let url = '/applications/note/update';
    let token = $('#token').val();
    let title = $('#title-update').val();
    let description = $('#description-update').val()
    let label = $('#label-update').val();

    $.post(url, {
            _token: token,
            title: title,
            description: description,
            label: label,
            id: id,
        },

        function(data) {
            console.log(data);

            actions = noteActionList(data);
            clear = note_clear_inputs();
            $("#noteModalAction").modal('hide');
        });
}