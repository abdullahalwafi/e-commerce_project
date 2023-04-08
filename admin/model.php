<?php
function hapusData($id, $nama_tabel, $koneksi)
{
    $query = "DELETE FROM $nama_tabel WHERE id = :id";
    $stmt = $koneksi->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        return true;
    } else {
        return false;
    }
    return true; 
}
// Fungsi untuk mengunggah file gambar
function uploadImageMulti($file)
{
    $target_dir = "uploads/";
    $uploaded_files = array(); // array untuk menyimpan nama file yang berhasil diunggah

    // Looping untuk menghandle setiap file yang diunggah
    for ($i = 0; $i < count($file["name"]); $i++) {
        $file_name = time() . '_' . uniqid() . '.' . pathinfo($file["name"][$i], PATHINFO_EXTENSION);
        $target_file = $target_dir . $file_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($file["tmp_name"][$i]);
        if ($check === false) {
            die("File yang diunggah bukan gambar.");
        }

        if (file_exists($target_file)) {
            die("File gambar sudah ada.");
        }

        if ($file["size"][$i] > 500000) {
            die("Ukuran file gambar terlalu besar. Maksimal 500KB.");
        }

        $allowed_extensions = array("jpg", "jpeg", "png", "gif");
        if (!in_array($imageFileType, $allowed_extensions)) {
            die("Hanya file gambar dengan ekstensi JPG, JPEG, PNG, dan GIF yang diperbolehkan.");
        }

        if (move_uploaded_file($file["tmp_name"][$i], $target_file)) {
            $uploaded_files[] = $target_file; // Menyimpan nama file yang berhasil diunggah
        } else {
            die("Gagal mengunggah file gambar.");
        }
    }

    return $uploaded_files; // Mengembalikan array berisi nama file yang berhasil diunggah
}
function uploadImage($file)
{
    $target_dir = "uploads/";
    $file_name = time() . '_' . uniqid() . '.' . pathinfo($file["name"], PATHINFO_EXTENSION);
    $target_file = $target_dir . $file_name;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($file["tmp_name"]);
    if ($check === false) {
        die("File yang diunggah bukan gambar.");
    }

    if (file_exists($target_file)) {
        die("File gambar sudah ada.");
    }

    if ($file["size"] > 500000) {
        die("Ukuran file gambar terlalu besar. Maksimal 500KB.");
    }

    $allowed_extensions = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $allowed_extensions)) {
        die("Hanya file gambar dengan ekstensi JPG, JPEG, PNG, dan GIF yang diperbolehkan.");
    }

    if (move_uploaded_file($file["tmp_name"], $target_file)) {
        return $target_file;
    } else {
        die("Gagal mengunggah file gambar.");
    }
}
