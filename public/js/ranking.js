/*$(document).ready(function() {
    $("#buttonSearch").click(function() {
        var value = $("#search").val();
        $.ajax({
            headers: { filter: value },
            url: "dashboard/ranking",
            type: "get",
            success: (res) => {
                console.log(res)

            }
        })
    });

});*/

$(document).ready(function() {

    // ------------------ [ Language dropdown Change Event ] --------------
    $("#selectLang").change(function() {
        var id = $(this).val();
        $(this).fadeIn();

        $.ajax({
            url: 'admin/dashboard/ranking',
            type: 'POST',
            data: {
                id: id
            },
            dataType: "JSON",

            success: function(result) {
                var items = "";
                $("#selectFrame").empty();

                $("#selectFrame").append(
                    "<option selected disabled> name </option>");
                $.each(result, function(i, item) {
                    $("#selectFrame").append("<option value='" + item
                        .framework_id + "'>" + item.name +
                        "</option>");
                });
            }
        });
    });
});