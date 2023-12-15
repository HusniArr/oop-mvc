<?php include(ROOT . DS . 'app' . DS . 'views' . DS .'includes'. DS .'header.php');?>
<?php include(ROOT . DS . 'app' . DS . 'views' . DS .'includes'. DS .'navbar.php')?>

<div id="header" class="p-5">
    <h1 class="display-5 fw-bold title-header">Temukan layanan sewa mobil dan truk barang terbaik pilihan Anda</h1>
    <p class="fs-4 info">Di Pijar kami melayani berbagai macam pilihan kebutuhan sewa mobil dan truk barang. Fasilitas yang kami tawarkan diantaranya bisa menerima carteran mobil, truk angkutan barang ataupun pindahan dan rute perjalanan yang dilalui baik antar kota maupun provinsi.</p>
    <button class="btn btn-primary btn-lg" type="button">LIHAT DAFTAR SEWA</button>
</div>
<div id="gallery" class="">
    <h2 class="text-center mb-4 mt-4">Galeri PIJAR</h2>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div id="services">
    <h2 class="text-center mb-4 mt-4">Layanan Kami</h2>
    <div class="container">
        <div class="row">
            <div class="col-6">
                    <div class="card" aria-hidden="true">
                        <img src="" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title placeholder-glow">
                            <span class="placeholder col-6"></span>
                            </h5>
                            <p class="card-text placeholder-glow">
                            <span class="placeholder col-7"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-6"></span>
                            <span class="placeholder col-8"></span>
                            </p>
                            <a class="btn btn-primary col-6">Order Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card" aria-hidden="true">
                    <img src="" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title placeholder-glow">
                        <span class="placeholder col-6"></span>
                        </h5>
                        <p class="card-text placeholder-glow">
                        <span class="placeholder col-7"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-6"></span>
                        <span class="placeholder col-8"></span>
                        </p>
                        <a class="btn btn-primary col-6" >Order Sekarang</a>
                </div>
            </div>
            </div>
        </div>

    </div>
</div>
<div id="contact" class="">
    <h2 class="text-center mb-4 mt-4">Kontak Kami</h2>
    <div class="container">
        <form action="#">
            <div class="row">
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    
                    
                </div>
                <div class="col-6">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
    
                </div>
            </div>
            <button class="btn btn-md mt-4 mb-4 btn-primary">Submit</button>
       </form>

    </div>

</div>
  
<?php
    include(ROOT . DS . 'app' . DS . 'views' . DS .'includes'. DS .'footer.php');
?>