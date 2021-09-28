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

      function(data){
        console.log(data);

        $("#content-notes").empty();
        $("#content-notes").html(data.view);

        $("#noteModal").modal('hide');

        $("#btnactionsuccess").trigger("click");

      });
}

function delete_note(id) {

  let url = '/applications/note/delete';
  let token = $('#token').val();

  $.post(url, {
          _token: token,
          id: id,
          },

    function(data){
      $("#delete-content-note").empty();
      $("#delete-content-note").html(data.view);
      $("#deleteNote").modal('show');
    });
}

function destroy_note(id) {

  let url = '/applications/note/destroy/'+id;
  let token = $('#token').val();

  $.post(url, {
          _token: token,
          },

  function(data){
      console.log(data);

        $("#content-notes").empty();
        $("#content-notes").html(data.view);

        $("#deleteNote").modal('hide');

        $("#btnactionsuccess").trigger("click");
  });
}