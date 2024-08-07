<?php
if (!isset($_SESSION["data-user"])) {
  function masuk($data)
  {
    global $conn;
    $email = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data["email"]))));
    $password = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data["password"]))));

    // check account
    $checkAccount = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($checkAccount) == 0) {
      $_SESSION["message-danger"] = "Maaf, akun yang anda masukan belum terdaftar.";
      $_SESSION["time-message"] = time();
      return false;
    } else if (mysqli_num_rows($checkAccount) > 0) {
      $row = mysqli_fetch_assoc($checkAccount);
      if (password_verify($password, $row["password"])) {
        $_SESSION["data-user"] = [
          "id" => $row["id_user"],
          "role" => $row["id_role"],
          "email" => $row["email"],
          "username" => $row["username"],
        ];
      } else {
        $_SESSION["message-danger"] = "Maaf, kata sandi yang anda masukan salah.";
        $_SESSION["time-message"] = time();
        return false;
      }
    }
  }
}
if (isset($_SESSION["data-user"])) {
  function compressImage($source, $destination, $quality)
  {
    // mendapatkan info image
    $imgInfo = getimagesize($source);
    $mime = $imgInfo['mime'];
    // membuat image baru
    switch ($mime) {
        // proses kode memilih tipe tipe image 
      case 'image/jpeg':
        $image = imagecreatefromjpeg($source);
        break;
      case 'image/png':
        $image = imagecreatefrompng($source);
        break;
      default:
        $image = imagecreatefromjpeg($source);
    }

    // Menyimpan image dengan ukuran yang baru
    imagejpeg($image, $destination, $quality);

    // Return image
    return $destination;
  }
  function edit_profile($data)
  {
    global $conn, $idUser;
    $username = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data["username"]))));
    $password = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data["password"]))));
    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($conn, "UPDATE users SET username='$username', password='$password' WHERE id_user='$idUser'");
    return mysqli_affected_rows($conn);
  }
  function add_user($data)
  {
    global $conn;
    $username = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data["username"]))));
    $email = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data["email"]))));
    $checkEmail = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($checkEmail) > 0) {
      $_SESSION["message-danger"] = "Maaf, email yang anda masukan sudah terdaftar.";
      $_SESSION["time-message"] = time();
      return false;
    }
    $password = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data["password"]))));
    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($conn, "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')");
    return mysqli_affected_rows($conn);
  }
  function edit_user($data)
  {
    global $conn;
    $id_user = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data["id-user"]))));
    $username = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data["username"]))));
    $email = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data["email"]))));
    $emailOld = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data["emailOld"]))));
    if ($email != $emailOld) {
      $checkEmail = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
      if (mysqli_num_rows($checkEmail) > 0) {
        $_SESSION["message-danger"] = "Maaf, email yang anda masukan sudah terdaftar.";
        $_SESSION["time-message"] = time();
        return false;
      }
    }
    mysqli_query($conn, "UPDATE users SET username='$username', email='$email', updated_at=CURRENT_TIMESTAMP WHERE id_user='$id_user'");
    return mysqli_affected_rows($conn);
  }
  function delete_user($data)
  {
    global $conn;
    $id_user = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data["id-user"]))));
    mysqli_query($conn, "DELETE FROM users WHERE id_user='$id_user'");
    return mysqli_affected_rows($conn);
  }
  function add_kegiatan($data)
  {
    global $conn;
    $nama = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['nama']))));
    $checkNama = mysqli_query($conn, "SELECT * FROM kegiatan WHERE nama_kegiatan='$nama'");
    if (mysqli_num_rows($checkNama) > 0) {
      $_SESSION["message-danger"] = "Maaf, nama kegiatan sudah ada.";
      $_SESSION["time-message"] = time();
      return false;
    }

    mysqli_query($conn, "INSERT INTO kegiatan(nama_kegiatan) VALUES('$nama')");
    return mysqli_affected_rows($conn);
  }
  function edit_kegiatan($data)
  {
    global $conn;
    $id_kegiatan = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id-kegiatan']))));
    $nama = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['nama']))));
    $namaOld = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['namaOld']))));
    if ($nama != $namaOld) {
      $checkNama = mysqli_query($conn, "SELECT * FROM kegiatan WHERE nama_kegiatan='$nama'");
      if (mysqli_num_rows($checkNama) > 0) {
        $_SESSION["message-danger"] = "Maaf, nama kegiatan sudah ada.";
        $_SESSION["time-message"] = time();
        return false;
      }
    }

    mysqli_query($conn, "UPDATE kegiatan SET nama_kegiatan='$nama' WHERE id_kegiatan='$id_kegiatan'");
    return mysqli_affected_rows($conn);
  }
  function delete_kegiatan($data)
  {
    global $conn;
    $id_kegiatan = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id-kegiatan']))));

    mysqli_query($conn, "DELETE FROM kegiatan WHERE id_kegiatan='$id_kegiatan'");
    return mysqli_affected_rows($conn);
  }
  function add_data_kegiatan($data)
  {
    global $conn, $baseURL;
    $id_kegiatan = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id_kegiatan']))));
    $col_image = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['col_image']))));
    $path = "../assets/images/kegiatan/";
    $fileName = basename($_FILES["avatar"]["name"]);
    $fileName = str_replace(" ", "-", $fileName);
    $fileName_encrypt = crc32($fileName);
    $ekstensiGambar = explode('.', $fileName);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    $imageUploadPath = $path . $fileName_encrypt . "." . $ekstensiGambar;
    $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
    $allowTypes = array('jpg', 'png', 'jpeg');
    if (in_array($fileType, $allowTypes)) {
      $imageTemp = $_FILES["avatar"]["tmp_name"];
      compressImage($imageTemp, $imageUploadPath, 75);
      $url_image = $baseURL . "assets/images/kegiatan/" . $fileName_encrypt . "." . $ekstensiGambar;
    } else {
      $_SESSION['message-danger'] = "Maaf, hanya file gambar JPG, JPEG, dan PNG yang diizinkan.";
      $_SESSION['time-message'] = time();
      return false;
    }
    $judul = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['judul']))));
    $deskripsi = $data['deskripsi'];

    mysqli_query($conn, "INSERT INTO data_kegiatan(id_kegiatan,col_image,slug_image,judul,deskripsi) VALUES('$id_kegiatan','$col_image','$url_image','$judul','$deskripsi')");
    return mysqli_affected_rows($conn);
  }
  function edit_data_kegiatan($data)
  {
    global $conn, $baseURL;
    $id_data_kegiatan = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id_data_kegiatan']))));
    $id_kegiatan = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id_kegiatan']))));
    $col_image = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['col_image']))));
    $avatar = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['avatarOld']))));
    if (!empty($_FILES['avatar']["name"])) {
      $path = "../assets/images/kegiatan/";
      $fileName = basename($_FILES["avatar"]["name"]);
      $fileName = str_replace(" ", "-", $fileName);
      $fileName_encrypt = crc32($fileName);
      $ekstensiGambar = explode('.', $fileName);
      $ekstensiGambar = strtolower(end($ekstensiGambar));
      $imageUploadPath = $path . $fileName_encrypt . "." . $ekstensiGambar;
      $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
      $allowTypes = array('jpg', 'png', 'jpeg');
      if (in_array($fileType, $allowTypes)) {
        $imageTemp = $_FILES["avatar"]["tmp_name"];
        compressImage($imageTemp, $imageUploadPath, 75);
        $unwanted_characters = $baseURL . "/assets/images/kegiatan/";
        $remove_avatar = str_replace($unwanted_characters, "", $avatar);
        unlink($path . $remove_avatar);
        $url_image = $baseURL . "assets/images/kegiatan/" . $fileName_encrypt . "." . $ekstensiGambar;
      } else {
        $_SESSION['message-danger'] = "Sorry, only JPG, JPEG and PNG image files are allowed.";
        $_SESSION['time-message'] = time();
        return false;
      }
    } else if (empty($_FILE['avatar']["name"])) {
      $url_image = $avatar;
    }
    $judul = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['judul']))));
    $deskripsi = $data['deskripsi'];

    mysqli_query($conn, "UPDATE data_kegiatan SET id_kegiatan='$id_kegiatan', col_image='$col_image', slug_image='$url_image', judul='$judul', deskripsi='$deskripsi' WHERE id_data_kegiatan='$id_data_kegiatan'");
    return mysqli_affected_rows($conn);
  }
  function delete_data_kegiatan($data)
  {
    global $conn, $baseURL;
    $id_data_kegiatan = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id_data_kegiatan']))));
    $avatar = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['avatarOld']))));

    $path = "../assets/images/kegiatan/";
    $unwanted_characters = $baseURL . "assets/images/kegiatan/";
    $remove_avatar = str_replace($unwanted_characters, "", $avatar);
    unlink($path . $remove_avatar);

    mysqli_query($conn, "DELETE FROM data_kegiatan WHERE id_data_kegiatan='$id_data_kegiatan'");
    return mysqli_affected_rows($conn);
  }
  function add_sub_kegiatan($data)
  {
    global $conn;
    $id_kegiatan = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id-kegiatan']))));
    $sub_kegiatan = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['sub-kegiatan']))));
    $checkSub = mysqli_query($conn, "SELECT * FROM sub_kegiatan WHERE sub_kegiatan='$sub_kegiatan'");
    if (mysqli_num_rows($checkSub) > 0) {
      $_SESSION["message-danger"] = "Maaf, nama sub kegiatan sudah ada.";
      $_SESSION["time-message"] = time();
      return false;
    }

    mysqli_query($conn, "INSERT INTO sub_kegiatan(id_kegiatan,sub_kegiatan) VALUES('$id_kegiatan','$sub_kegiatan')");
    return mysqli_affected_rows($conn);
  }
  function edit_sub_kegiatan($data)
  {
    global $conn;
    $id_sub_kegiatan = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id-sub-kegiatan']))));
    $id_kegiatan = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id-kegiatan']))));
    $sub_kegiatan = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['sub-kegiatan']))));
    $sub_kegiatanOld = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['sub-kegiatanOld']))));
    if ($sub_kegiatan != $sub_kegiatanOld) {
      $checkSub = mysqli_query($conn, "SELECT * FROM sub_kegiatan WHERE sub_kegiatan='$sub_kegiatan'");
      if (mysqli_num_rows($checkSub) > 0) {
        $_SESSION["message-danger"] = "Maaf, nama sub kegiatan sudah ada.";
        $_SESSION["time-message"] = time();
        return false;
      }
    }

    mysqli_query($conn, "UPDATE sub_kegiatan SET id_kegiatan='$id_kegiatan', sub_kegiatan='$sub_kegiatan' WHERE id_sub_kegiatan='$id_sub_kegiatan'");
    return mysqli_affected_rows($conn);
  }
  function delete_sub_kegiatan($data)
  {
    global $conn;
    $id_sub_kegiatan = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id-sub-kegiatan']))));
    mysqli_query($conn, "DELETE FROM sub_kegiatan WHERE id_sub_kegiatan='$id_sub_kegiatan'");
    return mysqli_affected_rows($conn);
  }
  function add_artikel($data)
  {
    global $conn, $baseURL;
    $id_sub_kegiatan = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id-sub-kegiatan']))));
    $path = "../assets/images/artikel/";
    $fileName = basename($_FILES["avatar"]["name"]);
    $fileName = str_replace(" ", "-", $fileName);
    $fileName_encrypt = crc32($fileName);
    $ekstensiGambar = explode('.', $fileName);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    $imageUploadPath = $path . $fileName_encrypt . "." . $ekstensiGambar;
    $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
    $allowTypes = array('jpg', 'png', 'jpeg');
    if (in_array($fileType, $allowTypes)) {
      $imageTemp = $_FILES["avatar"]["tmp_name"];
      compressImage($imageTemp, $imageUploadPath, 75);
      $url_image = $baseURL . "/assets/images/artikel/" . $fileName_encrypt . "." . $ekstensiGambar;
    } else {
      $_SESSION['message-danger'] = "Sorry, only JPG, JPEG and PNG image files are allowed.";
      $_SESSION['time-message'] = time();
      return false;
    }
    $title = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['title']))));
    $author = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['author']))));
    $content = $data['content'];
    $word_count = str_word_count($content);
    $publish = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['publish']))));

    mysqli_query($conn, "INSERT INTO artikel(id_sub_kegiatan,image,title,author,content,word_count,published_date) VALUES('$id_sub_kegiatan','$url_image','$title','$author','$content','$word_count','$publish')");
    return mysqli_affected_rows($conn);
  }
  function edit_artikel($data)
  {
    global $conn, $baseURL;
    $id_artikel = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id-artikel']))));
    $id_sub_kegiatan = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id-sub-kegiatan']))));
    $avatar = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['avatarOld']))));
    if (!empty($_FILES['avatar']["name"])) {
      $path = "../assets/images/artikel/";
      $fileName = basename($_FILES["avatar"]["name"]);
      $fileName = str_replace(" ", "-", $fileName);
      $fileName_encrypt = crc32($fileName);
      $ekstensiGambar = explode('.', $fileName);
      $ekstensiGambar = strtolower(end($ekstensiGambar));
      $imageUploadPath = $path . $fileName_encrypt . "." . $ekstensiGambar;
      $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
      $allowTypes = array('jpg', 'png', 'jpeg');
      if (in_array($fileType, $allowTypes)) {
        $imageTemp = $_FILES["avatar"]["tmp_name"];
        compressImage($imageTemp, $imageUploadPath, 75);
        $unwanted_characters = $baseURL . "/assets/images/artikel/";
        $remove_avatar = str_replace($unwanted_characters, "", $avatar);
        unlink($path . $remove_avatar);
        $url_image = $baseURL . "/assets/images/artikel/" . $fileName_encrypt . "." . $ekstensiGambar;
      } else {
        $_SESSION['message-danger'] = "Sorry, only JPG, JPEG and PNG image files are allowed.";
        $_SESSION['time-message'] = time();
        return false;
      }
    } else if (empty($_FILE['avatar']["name"])) {
      $url_image = $avatar;
    }
    $title = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['title']))));
    $author = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['author']))));
    $content = $data['content'];
    $word_count = str_word_count($content);
    $publish = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['publish']))));

    mysqli_query($conn, "UPDATE artikel SET id_sub_kegiatan='$id_sub_kegiatan', image='$url_image', title='$title', author='$author', content='$content', word_count='$word_count', published_date='$publish', updated_at=CURRENT_TIMESTAMP WHERE id_artikel='$id_artikel'");
    return mysqli_affected_rows($conn);
  }
  function delete_artikel($data)
  {
    global $conn, $baseURL;
    $id_artikel = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id-artikel']))));
    $avatar = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['avatarOld']))));

    $path = "../assets/images/artikel/";
    $unwanted_characters = $baseURL . "/assets/images/artikel/";
    $remove_avatar = str_replace($unwanted_characters, "", $avatar);
    unlink($path . $remove_avatar);

    mysqli_query($conn, "DELETE FROM artikel WHERE id_artikel='$id_artikel'");
    return mysqli_affected_rows($conn);
  }
  function add_galeri($data)
  {
    global $conn, $baseURL;
    if (isset($_FILES['images'])) {
      $files = $_FILES['images'];
      $upload_directory = "../assets/images/galeri/";

      for ($i = 0; $i < count($files['name']); $i++) {
        $file_name = $files['name'][$i];
        $file_tmp = $files['tmp_name'][$i];
        $file_size = $files['size'][$i];

        if ($file_size > 2097152) {
          $_SESSION['message-danger'] = "File size must be exactly 2 MB";
          $_SESSION['time-message'] = time();
          return false;
        }

        $fileName = str_replace(" ", "-", $file_name);
        $fileName_encrypt = crc32($fileName);
        $ekstensiGambar = explode('.', $fileName);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        $imageUploadPath = $upload_directory . $fileName_encrypt . "." . $ekstensiGambar;
        $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
        $allowTypes = array('jpg', 'png', 'jpeg');
        if (in_array($fileType, $allowTypes)) {
          compressImage($file_tmp, $imageUploadPath, 75);
          $url_image = $baseURL . "/assets/images/galeri/" . $fileName_encrypt . "." . $ekstensiGambar;
          mysqli_query($conn, "INSERT INTO galeri(image) VALUES('$url_image')");
        } else {
          $_SESSION['message-danger'] = "Sorry, only JPG, JPEG and PNG image files are allowed.";
          $_SESSION['time-message'] = time();
          return false;
        }
      }
    }
    return mysqli_affected_rows($conn);
  }
  function delete_galeri($data)
  {
    global $conn, $baseURL;
    $id_galeri = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id_galeri']))));
    $url_image = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['url_image']))));

    $path = "../assets/images/galeri/";
    $unwanted_characters = $baseURL . "/assets/images/galeri/";
    $remove_avatar = str_replace($unwanted_characters, "", $url_image);
    unlink($path . $remove_avatar);

    mysqli_query($conn, "DELETE FROM galeri WHERE id_galeri='$id_galeri'");
    return mysqli_affected_rows($conn);
  }
}
