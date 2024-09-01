// Membuat objek Date
const tanggalSekarang = new Date();

// Mendapatkan tahun saat ini
const tahunSaatIni = tanggalSekarang.getFullYear();

// Menampilkan tahun saat ini di elemen dengan class "tahun"
document.querySelector(".tahun").innerHTML = "&copy; " + tahunSaatIni + " - All Rights Reserved";
