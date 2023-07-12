<?php require_once("../controller/script.php");
require_once("redirect.php");
$_SESSION["page-name"] = "Artikel";
$_SESSION["page-url"] = "artikel";
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
                      <h3>Artikel</h3>
                    </li>
                  </ul>
                  <div>
                    <div class="btn-wrapper">
                      <a href="#" class="btn btn-primary text-white me-0" data-bs-toggle="modal" data-bs-target="#tambah"><i class="mdi mdi-plus"></i> Tambah</a>
                    </div>
                  </div>
                </div>
                <div class="card rounded-0 mt-3">
                  <div class="card-body table-responsive">
                    <table class="table table-striped table-hover table-borderless table-sm display" id="datatable">
                      <thead>
                        <tr>
                          <th scope="col" class="text-center">#</th>
                          <th scope="col" class="text-center">Kegiatan <small>(Sub Kegiatan)</small></th>
                          <th scope="col" class="text-center">Judul</th>
                          <th scope="col" class="text-center">Author</th>
                          <th scope="col" class="text-center">Konten</th>
                          <th scope="col" class="text-center">Jumlah Kata</th>
                          <th scope="col" class="text-center">Tgl Publikasi</th>
                          <th scope="col" class="text-center">Tgl Buat</th>
                          <th scope="col" class="text-center">Tgl Ubah</th>
                          <th scope="col" class="text-center">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if (mysqli_num_rows($artikel) > 0) {
                          $no = 1;
                          while ($row = mysqli_fetch_assoc($artikel)) { ?>
                            <tr>
                              <th scope="row"><?= $no; ?></th>
                              <td><?= $row["nama_kegiatan"] ?> <small>(<?= $row['sub_kegiatan'] ?>)</small></td>
                              <td><img src="<?= $row["image"] ?>" style="width: 50px;height: 50px;margin-right: 10px;" alt="Image"><?= $row["title"] ?></td>
                              <td><?= $row["author"] ?></td>
                              <td>
                                <button type="button" class="btn btn-primary text-white p-2" data-bs-toggle="modal" data-bs-target="#lihat<?= $row['id_artikel'] ?>">
                                  <i class="mdi mdi-eye"></i> Lihat
                                </button>
                                <div class="modal fade" id="lihat<?= $row['id_artikel'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header border-bottom-0 shadow">
                                        <h5 class="modal-title" id="exampleModalLabel"><?= $row["title"] ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                                        <?= $row['content'] ?>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td><?= $row["word_count"] ?></td>
                              <td>
                                <div class="badge badge-opacity-success">
                                  <?php $publish = date_create($row["published_date"]);
                                  echo date_format($publish, "d M Y"); ?>
                                </div>
                              </td>
                              <td>
                                <div class="badge badge-opacity-success">
                                  <?php $dateCreate = date_create($row["created_at"]);
                                  echo date_format($dateCreate, "l, d M Y h:i a"); ?>
                                </div>
                              </td>
                              <td>
                                <div class="badge badge-opacity-warning">
                                  <?php $dateUpdate = date_create($row["updated_at"]);
                                  echo date_format($dateUpdate, "l, d M Y h:i a"); ?>
                                </div>
                              </td>
                              <td class="d-flex justify-content-center">
                                <div class="col">
                                  <button type="button" class="btn btn-warning btn-sm text-white rounded-0 border-0" style="height: 30px;" data-bs-toggle="modal" data-bs-target="#ubah<?= $row["id_artikel"] ?>">
                                    <i class="bi bi-pencil-square"></i>
                                  </button>
                                  <div class="modal fade" id="ubah<?= $row["id_artikel"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header border-bottom-0 shadow">
                                          <h5 class="modal-title" id="exampleModalLabel">Ubah <?= $row["title"] ?></h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="" method="POST" enctype="multipart/form-data">
                                          <div class="modal-body text-center">
                                            <div class="mb-3">
                                              <label for="id-sub-kegiatan" class="form-label">Sub Kegiatan <small class="text-danger">*</small></label>
                                              <select name="id-sub-kegiatan" id="id-sub-kegiatan" class="form-select" aria-label="Default select example">
                                                <option selected value="<?= $row['id_sub_kegiatan'] ?>"><?= $row['sub_kegiatan'] ?></option>
                                                <?php $id_sub = $row['id_sub_kegiatan'];
                                                $takeSub = mysqli_query($conn, "SELECT * FROM sub_kegiatan WHERE id_sub_kegiatan!='$id_sub'");
                                                foreach ($takeSub as $row_sk) : ?>
                                                  <option value="<?= $row_sk['id_sub_kegiatan'] ?>"><?= $row_sk['sub_kegiatan'] ?></option>
                                                <?php endforeach; ?>
                                              </select>
                                            </div>
                                            <div class="mb-3">
                                              <label for="avatar" class="form-label">Upload Gambar</label>
                                              <input type="file" name="avatar" class="form-control" id="avatar" placeholder="Upload Gambar">
                                            </div>
                                            <div class="mb-3">
                                              <label for="title" class="form-label">Judul</label>
                                              <input type="text" name="title" value="<?= $row['title'] ?>" class="form-control" id="title" placeholder="Judul" required>
                                            </div>
                                            <div class="mb-3">
                                              <label for="author" class="form-label">Author</label>
                                              <input type="text" name="author" value="<?= $row['author'] ?>" class="form-control" id="author" placeholder="Author" required>
                                            </div>
                                            <div class="mb-3">
                                              <label for="content" class="form-label">Konten</label>
                                              <textarea name="content" class="form-control" id="content-edit<?= $row["id_artikel"] ?>" rows="3" required><?= $row['content'] ?></textarea>
                                              <script>
                                                CKEDITOR.replace('content-edit<?= $row["id_artikel"] ?>');
                                              </script>
                                            </div>
                                            <div class="mb-3">
                                              <label for="publish" class="form-label">Tanggal Penerbitan</label>
                                              <input type="date" name="publish" value="<?= $row['published_date'] ?>" class="form-control" id="publish" placeholder="Tanggal Penerbitan" required>
                                            </div>
                                          </div>
                                          <div class="modal-footer justify-content-center border-top-0">
                                            <input type="hidden" name="id-artikel" value="<?= $row["id_artikel"] ?>">
                                            <input type="hidden" name="avatarOld" value="<?= $row["image"] ?>">
                                            <button type="button" class="btn btn-secondary btn-sm rounded-0 border-0" style="height: 30px;" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" name="ubah-artikel" class="btn btn-warning btn-sm rounded-0 border-0" style="height: 30px;">Ubah</button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <button type="button" class="btn btn-danger btn-sm text-white rounded-0 border-0" style="height: 30px;" data-bs-toggle="modal" data-bs-target="#hapus<?= $row["id_artikel"] ?>">
                                    <i class="bi bi-trash3"></i>
                                  </button>
                                  <div class="modal fade" id="hapus<?= $row["id_artikel"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header border-bottom-0 shadow">
                                          <h5 class="modal-title" id="exampleModalLabel">Hapus data <?= $row["title"] ?></h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                          Anda yakin ingin menghapus data ini?
                                        </div>
                                        <div class="modal-footer justify-content-center border-top-0">
                                          <button type="button" class="btn btn-secondary btn-sm rounded-0 border-0" style="height: 30px;" data-bs-dismiss="modal">Batal</button>
                                          <form action="" method="POST">
                                            <input type="hidden" name="id-artikel" value="<?= $row["id_artikel"] ?>">
                                            <input type="hidden" name="avatarOld" value="<?= $row["image"] ?>">
                                            <button type="submit" name="hapus-artikel" class="btn btn-danger btn-sm rounded-0 text-white border-0" style="height: 30px;">Hapus</button>
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

        <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header border-bottom-0 shadow">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Artikel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body text-center">
                  <div class="mb-3">
                    <label for="id-sub-kegiatan" class="form-label">Sub Kegiatan <small class="text-danger">*</small></label>
                    <select name="id-sub-kegiatan" id="id-sub-kegiatan" class="form-select" aria-label="Default select example">
                      <option selected value="">Pilih Sub Kegiatan</option>
                      <?php foreach ($sub_kegiatan as $row_sk) : ?>
                        <option value="<?= $row_sk['id_sub_kegiatan'] ?>"><?= $row_sk['sub_kegiatan'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="avatar" class="form-label">Upload Gambar</label>
                    <input type="file" name="avatar" class="form-control" id="avatar" placeholder="Upload Gambar" required>
                  </div>
                  <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Judul" required>
                  </div>
                  <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" name="author" class="form-control" id="author" placeholder="Author" required>
                  </div>
                  <div class="mb-3">
                    <label for="content" class="form-label">Konten</label>
                    <textarea name="content" class="form-control" id="content-add" rows="3" required></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="publish" class="form-label">Tanggal Penerbitan</label>
                    <input type="date" name="publish" class="form-control" id="publish" placeholder="Tanggal Penerbitan" required>
                  </div>
                </div>
                <div class="modal-footer border-top-0 justify-content-center">
                  <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" name="tambah-artikel" class="btn btn-primary btn-sm rounded-0 border-0">Tambah</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <?php require_once("../resources/dash-footer.php") ?>
        <script>
          CKEDITOR.replace('content-add');
        </script>
</body>

</html>