<script>
//โฟกัส
$('#modal_add').on('show.bs.modal', function(event) {
    //    alert('test');
    var modal = $(this);
    setTimeout(function() {

        $("#modal_add input").first().focus();

    }, 500);

})

$(function() {

    CreateRow(0);

    $("body").keydown(function(e) {
        if (e.keyCode === 121) {
            e.preventDefault(); // Ensure it is only this code that runs

            alert("บันทึกสำเร็จ");
        }
    });

    $("input").on("keydown", function(e) {
        // e.preventDefault();

        if (e.key === 'Tab') {

            var lasttd = '';
            $('#tableAdd tbody tr td').each(function() {
                lasttd = $(this).find(':last-child');
                //your code
            });
            alert($(this).attr('id')+'<br>'+lasttd.attr('id'));
            if ($(this).attr('id') == lasttd.attr('id')) {
                // CreateRow(($("#tableAdd tbody tr").length)+1);
                alert(lasttd);
            }

        }

    });
    
    
    
});

function CreateRow(row) {

    var numcolumn = 8;
    $("#tableAdd").append('<tr id="tr'+row+'">');
    for(var count=1;count<numcolumn;count++)
    {
        $("#tableAdd").append('<td id=td'+row+'_'+count+'><input id="input'+row+'_'+count+'" type="text">');
        $("#tableAdd").append('</td>');
        $("#tableAdd").append('</tr>');
    }
}
</script>