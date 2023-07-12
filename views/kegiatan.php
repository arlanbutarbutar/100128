<?php require_once("../controller/script.php");
require_once("redirect.php");
$_SESSION["page-name"] = "Kegiatan";
$_SESSION["page-url"] = "kegiatan";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once("../resources/dash-header.php") ?>
  <script src="../assets/ckeditor/ckeditor.js"></script>
</head>

<body>
  <?php if (isset($_SESSION["message-success"])) { ?>
    <div class="message-success" data-message-success="<?= $_SESSION["message-success"] ?>"></div>
  <?php }
  if (isset($_SESSION["message-info"])) { ?>
    <div class="message-info" data-message-info="<?= $_SESSION["message-info"] ?>"></div>
  <?php }
  if (isset($_SESSION["message-warning"])) { ?>
    <div class="message-warning" data-message-warning="<?= $_SESSION["message-warning"] ?>"></div>
  <?php }
  if (isset($_SESSION["message-danger"])) { ?>
    <div class="message-danger" data-message-danger="<?= $_SESSION["message-danger"] ?>"></div>
  <?php } ?>
  <div class="container-scroller">
    <?php require_once("../resources/dash-topbar.php") ?>
    <div class="container-fluid page-body-wrapper">
      <?php require_once("../resources/dash-sidebar.php") ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <h3>Kegiatan</h3>
                    </li>
                  </ul>
                </div>
                <div class="container m-0 p-0">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="card rounded-0 mt-3">
                        <div class="card-header">
                          <div class="card-title text-center m-auto">
                            <h4>Tambah List Kegiatan</h4>
                          </div>
                        </div>
                        <div class="card-body text-center">
                          <form action="" method="post">
                            <div class="mb-3">
                              <label for="nama" class="form-label">Nama Kegiatan <small class="text-danger">*</small></label>
                              <input type="text" name="nama" class="form-control text-center" id="nama" minlength="3" placeholder="Nama Kegiatan" required>
                            </div>
                            <div class="mb-3">
                              <button type="submit" name="tambah-kegiatan" class="btn btn-primary btn-sm rounded-0 border-0">Tambah</button>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="card rounded-0 mt-3">
                        <div class="card-header">
                          <div class="card-title text-center m-auto">
                            <h4>List Kegiatan</h4>
                          </div>
                        </div>
                        <div class="card-body">
                          <table class="">
                            <thead>
                              <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Nama Kegiatan</th>
                                <th scope="col" class="text-center">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php if (mysqli_num_rows($kegiatan) > 0) {
                                $no = 1;
                                while ($row = mysqli_fetch_assoc($kegiatan)) { ?>
                                  <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <td><?= $row["nama_kegiatan"] ?></td>
                                    <td class="d-flex justify-content-center">
                                      <div class="col">
                                        <button type="button" class="btn btn-link btn-sm text-white rounded-0 border-0 p-0 m-0" style="height: 30px;" data-bs-toggle="modal" data-bs-target="#ubah<?= $row["id_kegiatan"] ?>">
                                          <i class="bi bi-pencil-square text-warning"></i>
                                        </button>
                                        <div class="modal fade" id="ubah<?= $row["id_kegiatan"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header border-bottom-0 shadow">
                                                <h5 class="modal-title" id="exampleModalLabel">Ubah data <?= $row["nama_kegiatan"] ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <form action="" method="POST">
                                                <div class="modal-body text-center">
                                                  <div class="mb-3">
                                                    <label for="nama" class="form-label">Nama Kegiatan <small class="text-danger">*</small></label>
                                                    <input type="text" name="nama" value="<?= $row["nama_kegiatan"] ?>" class="form-control text-center" id="nama" minlength="3" placeholder="Nama Kegiatan" required>
                                                  </div>
                                                </div>
                                                <div class="modal-footer justify-content-center border-top-0">
                                                  <input type="hidden" name="id-kegiatan" value="<?= $row["id_kegiatan"] ?>">
                                                  <button type="button" class="btn btn-secondary btn-sm rounded-0 border-0" style="height: 30px;" data-bs-dismiss="modal">Batal</button>
                                                  <button type="submit" name="ubah-kegiatan" class="btn btn-warning btn-sm rounded-0 border-0" style="height: 30px;">Ubah</button>
                                                </div>
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col">
                                        <button type="button" class="btn btn-link btn-sm text-white rounded-0 border-0 p-0 m-0" style="height: 30px;" data-bs-toggle="modal" data-bs-target="#hapus<?= $row["id_kegiatan"] ?>">
                                          <i class="bi bi-trash3 text-danger"></i>
                                        </button>
                                        <div class="modal fade" id="hapus<?= $row["id_kegiatan"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header border-bottom-0 shadow">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus data <?= $row["nama_kegiatan"] ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body text-center">
                                                Anda yakin ingin menghapus data ini?
                                              </div>
                                              <div class="modal-footer justify-content-center border-top-0">
                                                <button type="button" class="btn btn-secondary btn-sm rounded-0 border-0" style="height: 30px;" data-bs-dismiss="modal">Batal</button>
                                                <form action="" method="POST">
                                                  <input type="hidden" name="id-kegiatan" value="<?= $row["id_kegiatan"] ?>">
                                                  <button type="submit" name="hapus-kegiatan" class="btn btn-danger btn-sm rounded-0 text-white border-0" style="height: 30px;">Hapus</button>
                                                </form>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                              <?php $no++;
                                }
                              } ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="card rounded-0 mt-3">
                        <div class="card-header p-0">
                          <div class="card-title p-0 m-0">
                            <div class="d-flex justify-content-between">
                              <h4 class="mt-2 mb-1" style="margin-left: 20px;">Kegiatan</h4>
                              <button type="button" class="btn btn-primary btn-sm text-white rounded-0 border-0" data-bs-toggle="modal" data-bs-target="#tambah">
                                Tambah
                              </button>
                              <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header border-bottom-0 shadow">
                                      <h5 class="modal-title" id="exampleModalLabel">Tambah Kegiatan</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                      <div class="modal-body text-center">
                                        <div class="mb-3">
                                          <label for="id_kegiatan" class="form-label">Kegiatan <small class="text-danger">*</small></label>
                                          <select name="id_kegiatan" id="id-kegiatan" class="form-select" aria-label="Default select example" required>
                                            <option selected value="">Pilih Kegiatan</option>
                                            <?php foreach ($kegiatan as $row_k) : ?>
                                              <option value="<?= $row_k['id_kegiatan'] ?>"><?= $row_k['nama_kegiatan'] ?></option>
                                            <?php endforeach; ?>
                                          </select>
                                        </div>
                                        <div class="mb-3">
                                          <label for="col_image" class="form-label">Tata Letak Gambar <small class="text-danger">*</small></label>
                                          <div class="form-check" style="text-align: left;">
                                            <input class="form-check-input" style="margin-left: 10px;" type="radio" name="col_image" value="kiri" id="kiri" checked>
                                            <label class="form-check-label" style="margin-left: 40px;" for="kiri">
                                              Gambar Bagian Kiri
                                            </label>
                                          </div>
                                          <div class="form-check" style="text-align: left;">
                                            <input class="form-check-input" style="margin-left: 10px;" type="radio" name="col_image" value="kanan" id="kanan">
                                            <label class="form-check-label" style="margin-left: 40px;" for="kanan">
                                              Gambar Bagian Kanan
                                            </label>
                                          </div>
                                        </div>
                                        <div class="mb-3">
                                          <label for="avatar" class="form-label">Upload Gambar <small class="text-danger">*</small></label>
                                          <input type="file" name="avatar" class="form-control" id="avatar" placeholder="Upload Gambar" required>
                                        </div>
                                        <div class="mb-3">
                                          <label for="judul" class="form-label">Judul <small class="text-danger">*</small></label>
                                          <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul" required>
                                        </div>
                                        <div class="mb-3">
                                          <label for="deskripsi" class="form-label">Deskripsi <small class="text-danger">*</small></label>
                                          <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" required></textarea>
                                        </div>
                                      </div>
                                      <div class="modal-footer justify-content-center border-top-0">
                                        <button type="button" class="btn btn-secondary btn-sm rounded-0 border-0" style="height: 30px;" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" name="tambah-data-kegiatan" class="btn btn-primary btn-sm rounded-0 border-0" style="height: 30px;">Tambah</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-body table-responsive">
                          <table class="table table-striped table-hover table-borderless table-sm display" id="datatable">
                            <thead>
                              <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Kegiatan</th>
                                <th scope="col" class="text-center">Judul</th>
                                <th scope="col" class="text-center">Deskripsi</th>
                                <th scope="col" class="text-center">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php if (mysqli_num_rows($data_kegiatan) > 0) {
                                $no = 1;
                                while ($row = mysqli_fetch_assoc($data_kegiatan)) { ?>
                                  <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <td><?= $row["nama_kegiatan"] ?></td>
                                    <td>
                                      <div class="d-flex">
                                        <img src="<?= $row['slug_image'] ?>" alt="">
                                        <div class="my-auto">
                                          <h6 style="margin-left: 10px;"><?= $row['judul'] ?></h6>
                                        </div>
                                      </div>
                                    </td>
                                    <td><textarea cols="30" rows="10" style="line-height: 15px;" readonly><?= strip_tags($row['deskripsi']) ?></textarea></td>
                                    <td class="d-flex justify-content-center">
                                      <div class="col">
                                        <button type="button" class="btn btn-warning btn-sm text-white rounded-0 border-0" style="height: 30px;" data-bs-toggle="modal" data-bs-target="#ubah-kegiatan<?= $row["id_data_kegiatan"] ?>">
                                          <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <div class="modal fade" id="ubah-kegiatan<?= $row["id_data_kegiatan"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header border-bottom-0 shadow">
                                                <h5 class="modal-title" id="exampleModalLabel">Ubah data <?= $row["judul"] ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <form action="" method="POST">
                                                <div class="modal-body text-center">
                                                  <div class="mb-3">
                                                    <label for="id_kegiatan" class="form-label">Kegiatan <small class="text-danger">*</small></label>
                                                    <select name="id_kegiatan" id="id-kegiatan" class="form-select" aria-label="Default select example" required>
                                                      <option selected value="<?= $row['id_kegiatan'] ?>"><?= $row['nama_kegiatan'] ?></option>
                                                      <?php $id_kegiatan = $row['id_kegiatan'];
                                                      $selectKegiatan = mysqli_query($conn, "SELECT * FROM kegiatan WHERE id_kegiatan!='$id_kegiatan'");
                                                      foreach ($selectKegiatan as $row_sk) : ?>
                                                        <option value="<?= $row_sk['id_kegiatan'] ?>"><?= $row_sk['nama_kegiatan'] ?></option>
                                                      <?php endforeach; ?>
                                                    </select>
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="col_image" class="form-label">Tata Letak Gambar <small class="text-danger">*</small></label>
                                                    <div class="form-check" style="text-align: left;">
                                                      <input class="form-check-input" style="margin-left: 10px;" type="radio" name="col_image" value="kiri" id="kiri" <?php if ($row['col_image'] == "kiri") {
                                                                                                                                                                        echo "checked";
                                                                                                                                                                      } ?>>
                                                      <label class="form-check-label" style="margin-left: 40px;" for="kiri">
                                                        Gambar Bagian Kiri
                                                      </label>
                                                    </div>
                                                    <div class="form-check" style="text-align: left;">
                                                      <input class="form-check-input" style="margin-left: 10px;" type="radio" name="col_image" value="kanan" id="kanan" <?php if ($row['col_image'] == "kanan") {
                                                                                                                                                                          echo "checked";
                                                                                                                                                                        } ?>>
                                                      <label class="form-check-label" style="margin-left: 40px;" for="kanan">
                                                        Gambar Bagian Kanan
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="avatar" class="form-label">Upload Gambar <small class="text-danger">*</small></label>
                                                    <input type="file" name="avatar" class="form-control" id="avatar" placeholder="Upload Gambar">
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="judul" class="form-label">Judul <small class="text-danger">*</small></label>
                                                    <input type="text" name="judul" value="<?= $row['judul'] ?>" class="form-control" id="judul" placeholder="Judul" required>
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="deskripsi" class="form-label">Deskripsi <small class="text-danger">*</small></label>
                                                    <textarea name="deskripsi" id="deskripsi-edit<?= $row["id_data_kegiatan"] ?>" cols="30" rows="10" required><?= $row['deskripsi'] ?></textarea>
                                                    <script>
                                                      CKEDITOR.replace('deskripsi-edit<?= $row["id_data_kegiatan"] ?>');
                                                    </script>
                                                  </div>
                                                </div>
                                                <div class="modal-footer justify-content-center border-top-0">
                                                  <input type="hidden" name="id_data_kegiatan" value="<?= $row["id_data_kegiatan"] ?>">
                                                  <input type="hidden" name="avatarOld" value="<?= $row["slug_image"] ?>">
                                                  <button type="button" class="btn btn-secondary btn-sm rounded-0 border-0" style="height: 30px;" data-bs-dismiss="modal">Batal</button>
                                                  <button type="submit" name="ubah-data-kegiatan" class="btn btn-warning btn-sm rounded-0 border-0" style="height: 30px;">Ubah</button>
                                                </div>
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col">
                                        <button type="button" class="btn btn-danger btn-sm text-white rounded-0 border-0" style="height: 30px;" data-bs-toggle="modal" data-bs-target="#hapus-kegiatan<?= $row["id_data_kegiatan"] ?>">
                                          <i class="bi bi-trash3"></i>
                                        </button>
                                        <div class="modal fade" id="hapus-kegiatan<?= $row["id_data_kegiatan"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header border-bottom-0 shadow">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus data <?= $row["judul"] ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body text-center">
                                                Anda yakin ingin menghapus data ini?
                                              </div>
                                              <div class="modal-footer justify-content-center border-top-0">
                                                <button type="button" class="btn btn-secondary btn-sm rounded-0 border-0" style="height: 30px;" data-bs-dismiss="modal">Batal</button>
                                                <form action="" method="POST">
                                                  <input type="hidden" name="id_data_kegiatan" value="<?= $row["id_data_kegiatan"] ?>">
                                                  <input type="hidden" name="avatarOld" value="<?= $row["slug_image"] ?>">
                                                  <button type="submit" name="hapus-data-kegiatan" class="btn btn-danger btn-sm rounded-0 text-white border-0" style="height: 30px;">Hapus</button>
                                                </form>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                              <?php $no++;
                                }
                              } ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php require_once("../resources/dash-footer.php") ?>
        <script>
          CKEDITOR.replace('deskripsi');
        </script>
</body>

</html>