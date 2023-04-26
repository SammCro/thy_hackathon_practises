<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    var SITE_URL = '<?= $standart::base ?>';


    function send(btn, frm, operation) {
        var oldBtn = $('#' + btn).html();
        $("#" + btn).html("<ion-icon name=\"hourglass-outline\"></ion-icon>").prop('disabled', true);
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
        var myData = new FormData($("#" + frm)[0]);
        $.ajax({
            type: "POST",
            url: SITE_URL + 'process/' + operation,
            data: myData,
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                $('#' + btn).html(oldBtn).prop('disabled', false);
                
            }
        });
    }
</script>