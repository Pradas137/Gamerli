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
function filterStudentsPage() {
    data = {};
    formChildren = $("section.filter > *");
    for (const elem of formChildren) {
        if (elem.value != "") {
            data[elem.name] = elem.value;
            console.log(data[elem.name]);
        }
    }
    $.ajax({
        url: "/dashboard/ranking?filter=" + encodeURI(JSON.stringify(data)),
        method: "GET",
        headers: {
            token: $("meta[name='_token']").attr("content"),
        },
        success: (res) => {
            $("tbody").css("display", "none").html("");
            if (res.data.length > 0) {
                for (const item of res.data) {
                    let state = "";
                    if (item.state === "pending") {
                        state = `<div class="circle-box" title="Pendent"><div class="circle orange"></div></div>`;
                    } else if (item.state === "unregistered") {
                        state = `<div class="circle-box" title="Sense Registrar"><div class="circle gray"></div></div>`;
                    }
                    $("tbody").append(
                        insertNewRow(
                            item.firstname,
                            item.lastname1 + " " + item.lastname2,
                            item.email,
                            item.name,
                            state,
                            `?ranking=${item.id}&term=${item.term_id}`, "rankings"
                        )
                    );
                }
                for (const item of res.links) {
                    if (item.label === "&laquo; Previous")
                        item.label = '<i class="fas fa-angle-left"></i>';
                    else if (item.label === "Next &raquo;")
                        item.label = '<i class="fas fa-angle-right"></i>';

                    if (item.active)
                        $("ul.pagination").append(
                            `<li class="pageNumber active no-click"><a>${item.label}</a></li>`
                        );
                    else if (!item.url)
                        $("ul.pagination").append(
                            `<li class="pageNumber no-click"><a>${item.label}</a></li>`
                        );
                    else
                        $("ul.pagination").append(
                            `<li class="pageNumber"><a href="${
                                location.pathname
                            }?page=${item.url.split("?page=")[1]}">${
                                item.label
                            }</a></li>`
                        );
                }
            } else {
                $("tbody").append(
                    `<tr>
											<td colspan="6"><p>Sense Games.</p></td>
									</tr>`
                );
            }

            $("tbody").fadeIn(300);
            $("body").addClass("body-logs");
        },
        error: (res) => {
            console.log(res);
        },
    });
}
/*
$(document).ready(function() {

    $("#buttonSearch").click(function() {
        var text = $('#game').val();
        $.ajax({
            type: "GET",
            url: 'dashboard/ranking',
            data: { text: $('#game').val() },
            success: function(response) {
                response = JSON.parse(response);
                for (var patient of response) {
                    console.log(patient);
                }
            }
        });
    });
});]*/