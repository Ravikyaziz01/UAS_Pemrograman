<!DOCTYPE html>
<html lang="en">
    <?php require_once("header.php");
    require_once("connect.php");
    if (isset($_POST['simpan'])){
        $id_sat = $_POST['id_sat'];
        $nama_sat = $_POST['nama_sat'];

        $query = mysqli_query($mysqli,"INSERT INTO tb_satuan(id_satuan,nama) VALUES ('$id_sat','$nama_sat')") or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));
        if ($query){
            header("location:index.php?alert=1");
        } 
        }?>
        <div id="layoutSidenav">
            <?php require_once("sidenav_bar.php");?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Input Data Satuan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Input Satuan</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <p class="mb-0">
                                    Masukkan jenis satuan yang digunakan untuk mengukur barang
                                </p>
                                <br>
                                <form method="POST" action="input_satuan.php">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ID Satuan</label>
                                        <br>
                                        <input type="number" class="form-control" name="id_sat" aria-describedby="emailHelp" placeholder="Masukkan ID" required>
                                    </div>
                                    <div class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Nama Satuan</label>
                                        <br>
                                        <input type="text" class="form-control" name="nama_sat" placeholder="Masukkan Nama Satuan" required>
                                    </div>
                                    <br>
                                    <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; CupCup Market 2022</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
