$(document).ready(function() {
    selesai();
});
 
function selesai() {
    setTimeout(function() {
        update();
        selesai();
    }, 200);
}
 
function update() {
    $.getJSON("live.php", function(data) {
        // $("table tr").empty();
        // $("#table tr").remove();
        // $("#table tr").detach();
        $('#table tbody > tr').remove();
        // $("#table tr").remove();
        var no = 1;

        $.each(data.result, function() {
            $("#table").append(
            "<tr><td>"+(no++)+
            "</td><td>"+this['id_rfid']+
            "</td><td>"+this['id_finger']+
            "</td><td>"+this['nama']+
            "</td><td>"+this['tanggal']+
            "</td><td>"+this['metode']+
            "</td></tr>"
            );
        });
    });
}

