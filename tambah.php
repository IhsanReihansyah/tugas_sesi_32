<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'koneksi.php';
    ?>

    <div class="container ">
        <h2 class="position-absolute top-0 start-50 translate-middle-x"><br>Create Data</h2>
    </div>

    <div class="card position-absolute top-50 start-50 translate-middle p-4" style="width: 30rem;">
        <form class="text-center" action="proses_tambah.php" method="post" enctype="multipart/form-data">

            <div class="input-group mb-3 col-md-4 text-center">
                <span class="input-group-text" id="inputGroup-sizing-default">ISBN</span>
                <div class="col-md-8"> <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="isbn"></div>
            </div>
            <div class="input-group mb-4 col-md-4 text-center">
                <span class="input-group-text" id="inputGroup-sizing-default">Judul</span>
                <div class="col-md-8">
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="judul">
                </div>
            </div>
            <div class="input-group mb-4 col-md-4 text-center">
                <span class="input-group-text" id="inputGroup-sizing-default">Tahun</span>
                <div class="col-md-8">
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="tahun">
                </div>
            </div>
            <div class="input-group mb-3 col-md-4">
                <label class="input-group-text" for="inputGroupSelect01">Katalog</label>
                <div class="col-md-8">
                    <select class="form-select" id="katalog" name="katalog">
                        <option selected>
                            <?php
                            $query = mysqli_query($conn, "SELECT * FROM katalog");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_array($query)) {
                                    echo "<option value='" . $data["id_katalog"] . "'>" . $data["nama"] . "</option>";
                                }
                            } else {
                                echo "<option value=''>No items available</option>";
                            }
                            ?>
                        </option>
                    </select>
                </div>
            </div>

            <div class="input-group mb-3 col-mb-4">
                <span class="input-group-text" id="inputGroup-sizing-default">Stok</span>
                <div class="col-md-8">
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="stok">
                </div>
            </div>
            <div class="input-group mb-3 col-mb-4">
                <span class="input-group-text" id="inputGroup-sizing-default">Harga Pinjam</span>
                <div class="col-md-8">
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="harga_pinjam">
                </div>
            </div>
            <input type="submit" name="Submit" value="Save">
        </form>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>