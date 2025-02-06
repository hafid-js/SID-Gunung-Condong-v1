$("#berhasil").click(function () {
    $("#tampilBerhasil").show();
});

$("#linkMenu").click(function () {
    $("#tampilLinkMenu").show();
});

$(function () {
    bsCustomFileInput.init();
});

$(".select2").select2();

//Initialize Select2 Elements
$(".select2bs4").select2({
    theme: "bootstrap4",
});
