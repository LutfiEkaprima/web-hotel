<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAM GADANG HOTEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="container my-5">
        <?php include "layout/navbar.php" ?>
        <div class="row justify-content-center">

            <!-- Standard Room -->
            <div class="col-md-4">
                <div class="card room-card">
                    <img src="img/Standard.jpg" alt="https://asset.kompas.com/crops/o1nOE7_VXW4A5TVv-rxFPr5h7VM=/22x0:733x473/750x500/data/photo/2022/06/11/62a450487247f.jpg">
                    <div class="card-body text-center">
                        <h5>KAMAR STANDARD</h5>
                        <p>Fasilitas</p>
                        <ul class="text-start">
                            <li>Kasur Single Bed</li>
                            <li>1 - 2 Orang</li>
                            <li>AC, TV</li>
                        </ul>
                        <a href="pesanan.php" class="btn btn-primary">Pesan Kamar</a>
                    </div>
                </div>
            </div>

            <!-- Deluxe Room -->
            <div class="col-md-4">
                <div class="card room-card">
                    <img src="img/deluxe.jpeg" alt="https://dbijapkm3o6fj.cloudfront.net/resources/1044,1004,1,6,4,0,600,450/-4601-/20171205231752/deluxe-queen-twin.jpeg">
                    <div class="card-body text-center">
                        <h5>KAMAR DELUXE</h5>
                        <p>Fasilitas</p>
                        <ul class="text-start">
                            <li>2 Kasur Twin</li>
                            <li>2 - 3 Orang</li>
                            <li>AC, Wifi, TV</li>
                        </ul>
                        <a href="pesanan.php" class="btn btn-primary">Pesan Kamar</a>
                    </div>
                </div>
            </div>

            <!-- Family Room -->
            <div class="col-md-4">
                <div class="card room-card">
                    <img src="img/family.jpeg" alt="https://www.thebatuvillas.com/family-suite-balcony/">
                    <div class="card-body text-center">
                        <h5>KAMAR FAMILY</h5>
                        <p>Fasilitas</p>
                        <ul class="text-start">
                            <li>2 Kasur King Bed</li>
                            <li>4 - 5 Orang</li>
                            <li>AC, Bathtub, Wifi, TV</li>
                        </ul>
                        <a href="pesanan.php" class="btn btn-primary">Pesan Kamar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
