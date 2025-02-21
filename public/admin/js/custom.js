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

// tampil option form persentase pembangunan
$("#pilihPrsn").click(function () {
    $("#tampilPersentase").show();
    $("#tampilKisaranPersentase").hide();
});
$("#tulisPrsn").click(function () {
    $("#tampilPersentase").hide();
    $("#tampilKisaranPersentase").show();
});

$(function () {
    bsCustomFileInput.init();
});

// Ketika ada perubahan pada select option
$("#pilihPerNom").on("change", function () {
    // Mendapatkan nilai yang dipilih
    var selectedOption = $(this).val();

    // Menyembunyikan kedua form terlebih dahulu
    $("#form-a").hide();
    $("#form-b").hide();

    // Menampilkan form sesuai pilihan
    if (selectedOption == "a") {
        $("#form-a").show(); // Menampilkan form A
    } else if (selectedOption == "b") {
        $("#form-b").show(); // Menampilkan form B
    }
});

// Inisialisasi untuk menampilkan form yang sesuai saat halaman pertama kali dibuka
$(document).ready(function () {
    $("#pilihPerNom").trigger("change");
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
$("#radioBtn a").on("click", function () {
    var sel = $(this).data("title");
    var tog = $(this).data("toggle");
    $("#" + tog).prop("value", sel);

    $('a[data-toggle="' + tog + '"]')
        .not('[data-title="' + sel + '"]')
        .removeClass("active")
        .addClass("notActive");
    $('a[data-toggle="' + tog + '"][data-title="' + sel + '"]')
        .removeClass("notActive")
        .addClass("active");
});

// radio button untuk form
$("#radioBtnPersentase a").on("click", function () {
    var sel = $(this).data("title");
    var tog = $(this).data("toggle");
    $("#" + tog).prop("value", sel);

    $('a[data-toggle="' + tog + '"]')
        .not('[data-title="' + sel + '"]')
        .removeClass("active")
        .addClass("notActive");
    $('a[data-toggle="' + tog + '"][data-title="' + sel + '"]')
        .removeClass("notActive")
        .addClass("active");
});

$("input[data-bootstrap-switch]").each(function () {
    $(this).bootstrapSwitch('state', $(this).prop('checked'));
})
