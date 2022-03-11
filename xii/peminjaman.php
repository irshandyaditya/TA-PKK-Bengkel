<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman</title>
    <link rel="stylesheet" href="css/stylep.css">
    <script src="https://kit.fontawesome.com/5ce308cc6d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php include('layout/navbar.php');?>
    <div class="div1">
        <br>
        <div class="container" id="div2">
            <div class="row" id="peminjaman">
                <i class="fa-solid fa-suitcase" style="font-size: 25px;"></i>
                <h4>Peminjaman</h4>       
            </div>
            <div class="row" id="ruanglab">
                <label for="ruangan">Ruang Lab.</label>
            </div>
            <div class="row">
                <select class="custom-select custom-select-sm" name="ruangan" id="ruangan">
                    <option selected>Pilih Ruang</option>
                    <option value="Lab RPL 1">Lab RPL 1</option>
                    <option value="Lab RPL 2">Lab RPL 2</option>
                </select>
            </div>
            <div class="row">
                <div class="col align-self-center" id="div3">
                    <div class="row">
                        <h6>Mouse</h6>
                        <i class="fa-regular fa-bookmark" style="font-size: 22px;"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col align-self-center" id="div4">
                    <div class="row">
                        <h6>Keyboard</h6>
                        <i class="fa-regular fa-bookmark" style="font-size: 22px;"></i>
                    </div>
                    <div class="row justify-content-start" id="div5">
                        <div class="col-3">
                            <div>Stok</div>
                            <div>Merk</div>
                            <div>Status</div>
                            <div>Status</div>
                        </div>
                        <div class="col-3">
                            <div>25</div>
                            <div>ajinomoto</div>
                            <div>Terpinjam</div>
                            <div>Status</div>
                        </div>
                    </div>
                    <div class="row" id="div6">
                        <button type="button">Pinjam</button>
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    </div>
</body>
</html>