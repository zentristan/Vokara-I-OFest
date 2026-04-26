function bukaPopup() {
    document.getElementById('overlay').classList.add('active');
    document.getElementById('popup').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function tutupPopup() {
    document.getElementById('overlay').classList.remove('active');
    document.getElementById('popup').classList.remove('active');
    document.body.style.overflow = '';
}

function konfirmasiPesanan() {
    document.getElementById('popup').classList.remove('active');
    document.getElementById('popup-sukses').classList.add('active');
}