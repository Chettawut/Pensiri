<script>
$('#modal_add').on('show.bs.modal', function(event) {
    //    alert('test');
    var modal = $(this);
    setTimeout(function() {

        $("#modal_add input").first().focus();

    }, 500);


    // modal.find('.modal-title').text('New message to ' + recipient)
    // modal.find('.modal-body input').val(recipient)
})

$(function() {

    $("body").keydown(function(e) {
        if (e.keyCode === 121) {
            e.preventDefault(); // Ensure it is only this code that runs

            alert("บันทึกสำเร็จ");
        }
    });

    $("input").on("keydown", function(e) {
        // e.preventDefault();
        var tbody = $("#tableAdd tbody")
        var last = tbody.find('tr:last');
        if (e.key === 'Tab') {
            alert($(this).parent().html());
           
            var lasttd= tbody.find(':last-child')
            alert(last.attr('id'))

        }

    });
});
</script>