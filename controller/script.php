<?php if (!isset($_SESSION[""])) {
  session_start();
}
error_reporting(~E_NOTICE & ~E_DEPRECATED);
require_once("db_connect.php");
require_once("functions.php");
if (isset($_SESSION["time-message"])) {
  if ((time() - $_SESSION["time-message"]) > 2) {
    if (isset($_SESSION["message-success"])) {
      unset($_SESSION["message-success"]);
    }
    if (isset($_SESSION["message-info"])) {
      unset($_SESSION["message-info"]);
    }
    if (isset($_SESSION["message-warning"])) {
      unset($_SESSION["message-warning"]);
    }
    if (isset($_SESSION["message-danger"])) {
      unset($_SESSION["message-danger"]);
    }
    if (isset($_SESSION["message-dark"])) {
      unset($_SESSION["message-dark"]);
    }
    unset($_SESSION["time-alert"]);
  }
}
if (isset($_SESSION["data"]["time"])) {
  if ((time() - $_SESSION["data"]["time"]) > 2) {
    if (isset($_SESSION["data"])) {
      unset($_SESSION["data"]);
    }
    unset($_SESSION["data"]["time"]);
  }
}

$baseURL = "http://$_SERVER[HTTP_HOST]/apps/wikisuku/";

$takeKegiatan = mysqli_query($conn, "SELECT * FROM kegiatan");
$takeKegiatan2 = mysqli_query($conn, "SELECT * FROM kegiatan");
$viewGaleri = mysqli_query($conn, "SELECT * FROM galeri");

if (isset($_POST['search'])) {
  $keyword = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $_POST['keyword']))));
  $_SESSION['data'] = [
    'url-search' => 'index',
    'keyword' => $keyword,
    'time' => time(),
  ];
  header("Location: artikel");
  exit();
}
if (isset($_SESSION['data'])) {
  $keyword = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $_SESSION['data']['keyword']))));
  $takeSub_kegiatan = mysqli_query($conn, "SELECT * FROM sub_kegiatan JOIN kegiatan ON sub_kegiatan.id_kegiatan=kegiatan.id_kegiatan JOIN artikel ON sub_kegiatan.id_sub_kegiatan=artikel.id_sub_kegiatan WHERE artikel.title LIKE '%$keyword%'");
} else {
  if (isset($_POST['search-artikel'])) {
    $keyword = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $_POST['keyword']))));
    $takeSub_kegiatan = mysqli_query($conn, "SELECT * FROM sub_kegiatan JOIN kegiatan ON sub_kegiatan.id_kegiatan=kegiatan.id_kegiatan JOIN artikel ON sub_kegiatan.id_sub_kegiatan=artikel.id_sub_kegiatan WHERE artikel.title LIKE '%$keyword%'");
  } else {
    $takeSub_kegiatan = mysqli_query($conn, "SELECT * FROM sub_kegiatan JOIN kegiatan ON sub_kegiatan.id_kegiatan=kegiatan.id_kegiatan JOIN artikel ON sub_kegiatan.id_sub_kegiatan=artikel.id_sub_kegiatan");
  }
}

if (!isset($_SESSION["data-user"])) {
  if (isset($_POST["masuk"])) {
    if (masuk($_POST) > 0) {
      header("Location: ../views/");
      exit();
    }
  }
}

if (isset($_SESSION["data-user"])) {
  $idUser = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $_SESSION["data-user"]["id"]))));

  $profile = mysqli_query($conn, "SELECT * FROM users WHERE id_user='$idUser'");
  if (isset($_POST["ubah-profile"])) {
    if (edit_profile($_POST) > 0) {
      $_SESSION["message-success"] = "Profil akun anda berhasil di ubah.";
      $_SESSION["time-message"] = time();
      header("Location: profil");
      exit();
    }
  }

  $users = mysqli_query($conn, "SELECT * FROM users WHERE id_user!='$idUser' ORDER BY id_user DESC");
  if (isset($_POST["tambah-user"])) {
    if (add_user($_POST) > 0) {
      $_SESSION["message-success"] = "Pengguna " . $_POST["username"] . " berhasil ditambahkan.";
      $_SESSION["time-message"] = time();
      header("Location: users");
      exit();
    }
  }
  if (isset($_POST["ubah-user"])) {
    if (edit_user($_POST) > 0) {
      $_SESSION["message-success"] = "Pengguna " . $_POST["usernameOld"] . " berhasil diubah.";
      $_SESSION["time-message"] = time();
      header("Location: users");
      exit();
    }
  }
  if (isset($_POST["hapus-user"])) {
    if (delete_user($_POST) > 0) {
      $_SESSION["message-success"] = "Pengguna " . $_POST["username"] . " berhasil dihapus.";
      $_SESSION["time-message"] = time();
      header("Location: users");
      exit();
    }
  }

  $kegiatan = mysqli_query($conn, "SELECT * FROM kegiatan ORDER BY id_kegiatan DESC");
  if (isset($_POST["tambah-kegiatan"])) {
    if (add_kegiatan($_POST) > 0) {
      $_SESSION["message-success"] = "Nama kegiatan berhasil ditambahkan.";
      $_SESSION["time-message"] = time();
      header("Location: kegiatan");
      exit();
    }
  }
  if (isset($_POST["ubah-kegiatan"])) {
    if (edit_kegiatan($_POST) > 0) {
      $_SESSION["message-success"] = "Nama kegiatan berhasil diubah.";
      $_SESSION["time-message"] = time();
      header("Location: kegiatan");
      exit();
    }
  }
  if (isset($_POST["hapus-kegiatan"])) {
    if (delete_kegiatan($_POST) > 0) {
      $_SESSION["message-success"] = "Nama kegiatan berhasil dihapus.";
      $_SESSION["time-message"] = time();
      header("Location: kegiatan");
      exit();
    }
  }

  $sub_kegiatan = mysqli_query($conn, "SELECT sub_kegiatan.*, kegiatan.nama_kegiatan FROM sub_kegiatan JOIN kegiatan ON sub_kegiatan.id_kegiatan=kegiatan.id_kegiatan ORDER BY sub_kegiatan.id_sub_kegiatan DESC");
  if (isset($_POST["tambah-sub-kegiatan"])) {
    if (add_sub_kegiatan($_POST) > 0) {
      $_SESSION["message-success"] = "Nama sub kegiatan berhasil ditambahkan.";
      $_SESSION["time-message"] = time();
      header("Location: sub-kegiatan");
      exit();
    }
  }
  if (isset($_POST["ubah-sub-kegiatan"])) {
    if (edit_sub_kegiatan($_POST) > 0) {
      $_SESSION["message-success"] = "Nama sub kegiatan berhasil diubah.";
      $_SESSION["time-message"] = time();
      header("Location: sub-kegiatan");
      exit();
    }
  }
  if (isset($_POST["hapus-sub-kegiatan"])) {
    if (delete_sub_kegiatan($_POST) > 0) {
      $_SESSION["message-success"] = "Nama sub kegiatan berhasil dihapus.";
      $_SESSION["time-message"] = time();
      header("Location: sub-kegiatan");
      exit();
    }
  }

  $artikel = mysqli_query($conn, "SELECT artikel.*, sub_kegiatan.sub_kegiatan, kegiatan.nama_kegiatan FROM artikel JOIN sub_kegiatan ON artikel.id_sub_kegiatan=sub_kegiatan.id_sub_kegiatan JOIN kegiatan ON sub_kegiatan.id_kegiatan=kegiatan.id_kegiatan ORDER BY artikel.id_artikel DESC");
  if (isset($_POST["tambah-artikel"])) {
    if (add_artikel($_POST) > 0) {
      $_SESSION["message-success"] = "Artikel berhasil ditambahkan.";
      $_SESSION["time-message"] = time();
      header("Location: artikel");
      exit();
    }
  }
  if (isset($_POST["ubah-artikel"])) {
    if (edit_artikel($_POST) > 0) {
      $_SESSION["message-success"] = "Artikel berhasil diubah.";
      $_SESSION["time-message"] = time();
      header("Location: artikel");
      exit();
    }
  }
  if (isset($_POST["hapus-artikel"])) {
    if (delete_artikel($_POST) > 0) {
      $_SESSION["message-success"] = "Artikel berhasil dihapus.";
      $_SESSION["time-message"] = time();
      header("Location: artikel");
      exit();
    }
  }

  $galeri = mysqli_query($conn, "SELECT * FROM galeri");
  if (isset($_POST["tambah-galeri"])) {
    if (add_galeri($_POST) > 0) {
      $_SESSION["message-success"] = "Gambar berhasil ditambahkan.";
      $_SESSION["time-message"] = time();
      header("Location: galeri");
      exit();
    }
  }
  if (isset($_POST["hapus-galeri"])) {
    if (delete_galeri($_POST) > 0) {
      $_SESSION["message-success"] = "Gambar berhasil dihapus.";
      $_SESSION["time-message"] = time();
      header("Location: galeri");
      exit();
    }
  }
}
