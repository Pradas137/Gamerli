$(document).on("click", ".update", function() {
    var edit_id = $(this).data('id');

    var name = $('#name_' + edit_id).val();
    var surname = $('#surname_' + edit_id).val();

    if (name != '' && surname != '') {
        $.ajax({
            url: '/admin/dashboard/profile',
            type: 'post',
            data: { _token: CSRF_TOKEN, editid: edit_id, name: name, surname: surname },
            success: function(response) {
                alert(response);
            }
        });
    } else {
        alert('Fill all fields');
    }
});

// Fetch records
function fetchRecords() {
    $.ajax({
        url: 'getUsers',
        type: 'get',
        dataType: 'json',
        success: function(response) {

            var len = 0;
            $('#userTable tbody tr:not(:first)').empty(); // Empty <tbody>
            if (response['data'] != null) {
                len = response['data'].length;
            }

            if (len > 0) {
                for (var i = 0; i < len; i++) {

                    var id = response['data'][i].id;
                    var username = response['data'][i].username;
                    var name = response['data'][i].name;
                    var email = response['data'][i].email;

                    var tr_str = "<tr>" +
                        "<td align='center'><input type='text' value='" + username + "' id='username_" + id + "' disabled></td>" +
                        "<td align='center'><input type='text' value='" + name + "' id='name_" + id + "'></td>" +
                        "<td align='center'><input type='email' value='" + email + "' id='email_" + id + "'></td>" +
                        "<td align='center'><input type='button' value='Update' class='update' data-id='" + id + "' ><input type='button' value='Delete' class='delete' data-id='" + id + "' ></td>" +
                        "</tr>";

                    $("#userTable tbody").append(tr_str);

                }
            } else {
                var tr_str = "<tr class='norecord'>" +
                    "<td align='center' colspan='4'>No record found.</td>" +
                    "</tr>";

                $("#userTable tbody").append(tr_str);
            }

        }
    });
}