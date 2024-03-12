const namaInput = document.getElementById('nama');
const jumlahPilihanInput = document.getElementById('jumlahPilihan');

const form = document.querySelector('form');

form.addEventListener('submit', (event) => {
    event.preventDefault();

    const nama = namaInput.value;
    const jumlahPilihan = parseInt(jumlahPilihanInput.value);

    // Validasi input

    if (nama === '' || jumlahPilihan === NaN) {
        alert('Nama dan Jumlah Pilihan harus diisi!');
        return;
    }

    // Tampilkan hasil

    const hasil = `
        Nama: ${nama}
        Jumlah Pilihan: ${jumlahPilihan}
    `;

    alert(hasil);
});
