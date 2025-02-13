$("#berhasil").click(function () {
    $("#tampilBerhasil").show();
});

$("#linkMenu").click(function () {
    $("#tampilLinkMenu").show();
});

// tampil option form lokasi pembangunan
$("#pilihLokasi").click(function () {
    $("#tampilPilihLokasi").show();
    $("#tampilTulisManual").hide();
});
$("#tulisManual").click(function () {
    $("#tampilPilihLokasi").hide();
    $("#tampilTulisManual").show();
});

$(function () {
    bsCustomFileInput.init();
});

$(".select2").select2();

//Initialize Select2 Elements
$(".select2bs4").select2({
    theme: "bootstrap4",
});

// Menentukan tahun mulai dan tahun saat ini untuk form pembangunan
const tahunMulai = 2000;
const tahunSekarang = new Date().getFullYear(); // Mengambil tahun saat ini

// Mendapatkan elemen select
const selectTahun = document.getElementById("tahun");

// Menambahkan tahun sekarang sebagai option pertama
const optionTahunSekarang = document.createElement("option");
optionTahunSekarang.value = tahunSekarang;
optionTahunSekarang.textContent = tahunSekarang;
selectTahun.appendChild(optionTahunSekarang);

// Menambahkan opsi tahun lainnya
for (let tahun = tahunSekarang - 1; tahun >= tahunMulai; tahun--) {
  const option = document.createElement("option");
  option.value = tahun;
  option.textContent = tahun;
  selectTahun.appendChild(option);
}

// radio button untuk form
$('#radioBtn a').on('click', function(){
    var sel = $(this).data('title');
    var tog = $(this).data('toggle');
    $('#'+tog).prop('value', sel);

    $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
    $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
})
