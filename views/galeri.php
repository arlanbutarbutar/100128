<?php require_once("../controller/script.php");
require_once("redirect.php");
$_SESSION["page-name"] = "Galeri";
$_SESSION["page-url"] = "galeri";
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
                      <h3>Galeri</h3>
                    </li>
                  </ul>
                </div>
                <div class="card rounded-0 mt-3">
                  <div class="card-body">
                    <!--begin::Title-->
                    <h3 class="text-dark text-center fs-1 fw-boldest line-height-lg">Upload Gambar</h3>
                    <!--end::Title-->
                    <!--begin::Action-->
                    <div class="p-5 text-center" id="drop-area">
                      <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="images"><strong class="text-primary" style="cursor: pointer;">Click here to Upload</strong><br>Or <br>Drag and Drop here: </label>
                          <input type="file" class="form-control-file d-none" id="images" name="images[]" multiple>
                        </div>
                        <div class="form-group shadow mb-5" style="height: 200px;overflow: auto;padding: 10px;">
                          <div id="fileList"></div>
                        </div>
                        <button type="submit" name="tambah-galeri" class="btn btn-primary border-0 rounded-0 text-white">Upload</button>
                      </form>
                    </div>
                    <!--end::Action-->

                    <!--begin::Images content-->
                    <div class="d-flex flex-wrap justify-content-start mt-3">
                      <?php if (mysqli_num_rows($galeri) > 0) {
                        while ($row = mysqli_fetch_assoc($galeri)) { ?>
                          <form action="" method="post">
                            <img src="<?= $row['image'] ?>" class="img-thumbnail m-2" style="object-fit: cover;width: 275px;height: 200px;" alt="">
                            <input type="hidden" name="id_galeri" value="<?= $row['id_galeri'] ?>">
                            <input type="hidden" name="url_image" value="<?= $row['image'] ?>">
                            <button type="submit" name="hapus-galeri" class="btn btn-danger btn-sm" style="margin-left: -63px;border-top-right-radius: 0px;border-bottom-right-radius: 0px;"><i class="bi bi-trash3"></i></button>
                          </form>
                      <?php }
                      } ?>
                    </div>
                    <!--end::Images content-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php require_once("../resources/dash-footer.php") ?>
        <script>
          const dropArea = document.querySelector("#drop-area");
          const input = document.querySelector("#images");

          dropArea.addEventListener("dragover", function(e) {
            e.preventDefault();
          });

          dropArea.addEventListener("drop", function(e) {
            e.preventDefault();
            input.files = e.dataTransfer.files;

            var files = input.files,
              filesLength = files.length;
            for (var i = 0; i < filesLength; i++) {
              var file = files[i];
              var fileName = file.name;
              var list = document.createElement("li");
              list.innerHTML = fileName;
              document.querySelector("#fileList").appendChild(list);
            }
          });

          input.addEventListener("change", function(e) {
            var files = e.target.files,
              filesLength = files.length;
            for (var i = 0; i < filesLength; i++) {
              var file = files[i];
              var fileName = file.name;
              var list = document.createElement("li");
              list.innerHTML = fileName;
              document.querySelector("#fileList").appendChild(list);
            }
          });
        </script>
</body>

</html>