


    requirejs.config({
    baseUrl: '.'
});

function disbtnLeft() {
    $('#disableLeft *').attr("disabled", true);
}

function disbtnRight() {
    $('#disableRight *').attr("disabled", true);
}
function disbtnMinHours() {
    $('#disableMinHours *').attr("disabled", true);
}
function disbtnShiftTable() {
    $('#disableShiftTable *').attr("disabled", true);
}
function disbtnNonShiftTable() {
    $('#disableNonShiftTable *').attr("disabled", true);
}
function disbtnAnnualPermit() {
    $('#disableAnnualPermit *').attr("disabled", true);
}
    $( function() {
        $( "#sortable" ).sortable();
        $( "#sortable" ).disableSelection();
    } );
    $(function () {
        $("#sortable").sortable({
            update: function (event, ui) {
                var order = $(this).sortable('serialize');

                $(document).on("click", "button", function () { //that doesn't work
                    $.ajax({
                        data: order,
                        type: 'POST',
                        url: 'saverank.php'
                    });
                });
            }
        }).disableSelection();
        $('#saveRight').on('click', function () {
            var r = $("#sortable").sortable("toArray");
            var a = $("#sortable").sortable("serialize", {
                attribute: "id"
            });
            console.log(r, a);
            $("#sortable").addClass("disabledbutton");
        });
    });