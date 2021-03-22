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
