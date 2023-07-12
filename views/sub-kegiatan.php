<?php require_once("../controller/script.php");
require_once("redirect.php");
$_SESSION["page-name"] = "Sub Kegiatan";
$_SESSION["page-url"] = "sub-kegiatan";
?>

<!DOCTYPE html>
<html lang="en">

<head><?php require_once("../resources/dash-header.php") ?></head>

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
                      <h3>Sub Kegiatan</h3>
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
                          <th scope="col" class="text-center">Kegiatan</th>
                          <th scope="col" class="text-center">Sub Kegiatan</th>
                          <th scope="col" class="text-center">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if (mysqli_num_rows($sub_kegiatan) > 0) {
                          $no = 1;
                          while ($row = mysqli_fetch_assoc($sub_kegiatan)) { ?>
                            <tr>
                              <th scope="row"><?= $no; ?></th>
                              <td><?= $row["nama_kegiatan"] ?></td>
                              <td><?= $row["sub_kegiatan"] ?></td>
                              <td class="d-flex justify-content-center">
                                <div class="col">
                                  <button type="button" class="btn btn-warning btn-sm text-white rounded-0 border-0" style="height: 30px;" data-bs-toggle="modal" data-bs-target="#ubah<?= $row["id_sub_kegiatan"] ?>">
                                    <i class="bi bi-pencil-square"></i>
                                  </button>
                                  <div class="modal fade" id="ubah<?= $row["id_sub_kegiatan"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header border-bottom-0 shadow">
                                          <h5 class="modal-title" id="exampleModalLabel">Ubah data <?= $row["sub_kegiatan"] ?></h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="" method="POST">
                                          <div class="modal-body text-center">
                                            <div class="mb-3">
                                              <label for="id-kegiatan" class="form-label">Kegiatan <small class="text-danger">*</small></label>
                                              <select name="id-kegiatan" id="id-kegiatan" class="form-select" aria-label="Default select example">
                                                <option selected value="<?= $row['id_kegiatan'] ?>"><?= $row["nama_kegiatan"] ?></option>
                                                <?php $id_kegiatan = $row['id_kegiatan'];
                                                $kegiatanEdit = mysqli_query($conn, "SELECT * FROM kegiatan WHERE id_kegiatan!='$id_kegiatan'");
                                                foreach ($kegiatanEdit as $row_k) : ?>
                                                  <option value="<?= $row_k['id_kegiatan'] ?>"><?= $row_k['nama_kegiatan'] ?></option>
                                                <?php endforeach; ?>
                                              </select>
                                            </div>
                                            <div class="mb-3">
                                              <label for="sub-kegiatan" class="form-label">Sub Kegiatan</label>
                                              <input type="text" name="sub-kegiatan" value="<?= $row['sub_kegiatan'] ?>" min="3" class="form-control" id="sub-kegiatan" placeholder="Sub Kegiatan">
                                            </div>
                                          </div>
                                          <div class="modal-footer justify-content-center border-top-0">
                                            <input type="hidden" name="id-sub-kegiatan" value="<?= $row["id_sub_kegiatan"] ?>">
                                            <button type="button" class="btn btn-secondary btn-sm rounded-0 border-0" style="height: 30px;" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" name="ubah-sub-kegiatan" class="btn btn-warning btn-sm rounded-0 border-0" style="height: 30px;">Ubah</button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <button type="button" class="btn btn-danger btn-sm text-white rounded-0 border-0" style="height: 30px;" data-bs-toggle="modal" data-bs-target="#hapus<?= $row["id_sub_kegiatan"] ?>">
                                    <i class="bi bi-trash3"></i>
                                  </button>
                                  <div class="modal fade" id="hapus<?= $row["id_sub_kegiatan"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header border-bottom-0 shadow">
                                          <h5 class="modal-title" id="exampleModalLabel">Hapus data <?= $row["sub_kegiatan"] ?></h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                          Anda yakin ingin menghapus data ini?
                                        </div>
                                        <div class="modal-footer justify-content-center border-top-0">
                                          <button type="button" class="btn btn-secondary btn-sm rounded-0 border-0" style="height: 30px;" data-bs-dismiss="modal">Batal</button>
                                          <form action="" method="POST">
                                            <input type="hidden" name="id-sub-kegiatan" value="<?= $row["id_sub_kegiatan"] ?>">
                                            <button type="submit" name="hapus-sub-kegiatan" class="btn btn-danger btn-sm rounded-0 text-white border-0" style="height: 30px;">Hapus</button>
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
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header border-bottom-0 shadow">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Sub Kegiatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="" method="post">
                <div class="modal-body text-center">
                  <div class="mb-3">
                    <label for="id-kegiatan" class="form-label">Kegiatan <small class="text-danger">*</small></label>
                    <select name="id-kegiatan" id="id-kegiatan" class="form-select" aria-label="Default select example">
                      <option selected value="">Pilih Kegiatan</option>
                      <?php foreach ($kegiatan as $row_k) : ?>
                        <option value="<?= $row_k['id_kegiatan'] ?>"><?= $row_k['nama_kegiatan'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="sub-kegiatan" class="form-label">Sub Kegiatan</label>
                    <input type="text" name="sub-kegiatan" min="3" class="form-control" id="sub-kegiatan" placeholder="Sub Kegiatan">
                  </div>
                </div>
                <div class="modal-footer border-top-0 justify-content-center">
                  <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" name="tambah-sub-kegiatan" class="btn btn-primary btn-sm rounded-0 border-0">Tambah</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <?php require_once("../resources/dash-footer.php") ?>
</body>

</html>