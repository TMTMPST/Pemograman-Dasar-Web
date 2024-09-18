function validateForm() {
    var nama = document.getElementById("nama").value;
    var alamat = document.getElementById("alamat").value;
    var tanggalLahir = document.getElementById("tanggalLahir").value;
    var centang = document.getElementsByName("check").value;
    if (nama === "") {
        alert("nama harus diisi.")
        return false;
    }
    if (alamat === "") {
        alert("Alamat harus diisi.")
        return false;
    }
    if (tanggalLahir === "") {
        alert("Tanggal Lahir harus diisi.")
        return false;
    }
    if (centang > 1) {
        alert("silahkan Centang dulu")
        return false;
    }
    
    alert("Form submitted successfully!");

}