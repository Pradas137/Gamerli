$(document).ready(function() {
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

});