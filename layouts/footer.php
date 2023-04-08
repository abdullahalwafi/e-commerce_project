<div class="container-fluid bg-success text-white my-3">
    <div class="row">
        <div class="container">
            <div class="row  py-4 ">
                <div class="col-12 col-md-4 mb-3">
                    <h5 class="text-uppercase mb-2">Hub Kami</h5>
                    <p>
                        Senin - Jum'at<br />09.00 – 21.00 WIB (Hari Kerja) </p>

                    <p><i class="material-icons">perm_phone_msg</i> 6285588883118 </p>
                    <p><i class="material-icons">email</i> official@adila.id </p>
                    <p><i class="material-icons">map</i> Jln. Moh Noh Nur Leuwiliang Bogor Jawa barat 16640 </p>
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <h5 class="text-uppercase mb-2">Bantuan</h5>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <h5 class="text-uppercase mb-2">Merk</h5>
                    <?php

                    $qeury = $koneksi->prepare("SELECT * FROM merk LIMIT 10");
                    $qeury->execute();
                    foreach ($qeury as $data) { ?>
                        <p class="mb-0"><?= $data['merk'] ?></p>
                    <?php } ?>
                </div>
                <div class="col-12 col-md-3">
                    <h5 class="text-uppercase mb-2">Ekspedisi</h5>
                    <img style="width:28%;margin:2%;" src="admin/assets/img/kurir/sicepat.png" /><img style="width:28%;margin:2%;" src="admin/assets/img/kurir/ninja.png" /><img style="width:28%;margin:2%;" src="admin/assets/img/kurir/pos.png" /><img style="width:28%;margin:2%;" src="admin/assets/img/kurir/jnt.png" /><img style="width:28%;margin:2%;" src="admin/assets/img/kurir/jne.png" /><img style="width:28%;margin:2%;" src="admin/assets/img/kurir/online.html" />
                </div>
            </div>
            <div class="text-center">
                <span> Copyright © 2023 All rights reserved | ADILA ID</span>
            </div>
        </div>
    </div>
</div>
<div class="text-center">
    <a href="https://facebook.com/www.adila.id" title="Facebook" class="btn btn-default button-rounded-36 shadow-sm"><i class=" fab fa-facebook-f"></i></a>
    <a href="https://instagram.com/adila.sosmed" title="Instagram" class="btn btn-default button-rounded-36 shadow-sm"><i class=" fab fa-instagram"></i></a>
    <a href="#" title="Twitter" class="btn btn-default button-rounded-36 shadow-sm"><i class=" fab fa-twitter"></i></a>
    <a href="#" title="Linkedin" class="btn btn-default button-rounded-36 shadow-sm"><i class=" fab fa-linkedin-in"></i></a>
    <a href="https://youtube.com/alwafisysdev" title="Youtube" class="btn btn-default button-rounded-36 shadow-sm"><i class=" fab fa-youtube"></i></a>
</div>
</div>
<div class="modal fade" id="modalMoreCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="exampleModalCenterTitle">Semua Merk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="main-category">
                    <?php
                    $qeury = $koneksi->prepare("SELECT * FROM merk LIMIT 10");
                    $qeury->execute();
                    foreach ($qeury as $data) { ?>
                        <a href="merk/<?= $data['slug'] ?>.html">
                            <div class="item">
                                <img src="admin/<?= $data['img'] ?>" alt="<?= $data['merk'] ?>">
                                <p><?= $data['merk'] ?></p>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="exampleModalCenterTitle">Cari Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="https://adila.id/shop?cari=" method="get" class="search-header">
                    <div class="input-group mb-3">
                        <input type="hidden" name="csrf_test_name" value="5113333e8a029237a66ed1310353b329" style="display: none">
                        <input class="form-control" type="text" value="" name="cari" placeholder="Cari Produk">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit"><i class="material-icons md-18">search</i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<div class="modal fade " id="colorscheme" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header theme-header border-0">
                <h6 class="">Setting Warna</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pt-0">
                <div class="text-center theme-color">
                    <button class="m-1 btn pink-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="pink-theme"></button>
                    <button class="m-1 btn brown-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="brown-theme"></button>
                    <button class="m-1 btn blue-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="blue-theme"></button>
                    <button class="m-1 btn purple-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="purple-theme"></button>
                    <button class="m-1 btn green-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="green-theme"></button>
                    <button class="m-1 btn grey-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="grey-theme"></button>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-12 text-center w-100">
                    <div class="row justify-content-center">
                        <div class="col-auto text-right align-self-center"><i class="material-icons text-warning md-36 vm">wb_sunny</i></div>
                        <div class="col-auto text-center align-self-center px-0">
                            <div class="custom-control custom-switch float-right">
                                <input type="checkbox" name="themelayout" class="custom-control-input" id="theme-dark">
                                <label class="custom-control-label" for="theme-dark"></label>
                            </div>
                        </div>
                        <div class="col-auto text-left align-self-center"><i class="material-icons text-dark md-36 vm">brightness_2</i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="subtitle mt-0 text-center" id="exampleModalCenterTitle">Tambah Ke Troli</h5>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-2 pl-0">
                            <figure class="product-image h-auto"><img src="https://adila.id/admin/uploads/" alt="" class="vm"></figure>
                        </div>
                        <div class="col px-0">
                            <span class="text-dark mb-1 h6 d-block">Janna Tea Cold Pilihan minuman santai </span>

                            <h5>
                                <span id="hargacetak" class="text-success font-weight-normal mb-0">
                                    Rp 115.000 </span>
                            </h5>
                        </div>
                        <div class="text-center">
                            <div class="btn btn-sm btn-warning shadow btn-rounded mt-3 mb-3" id="stokrefresh">STOK: 251 </div>
                        </div>

                    </div>

                    <form id="keranjang">
                        <input type="hidden" name="csrf_test_name" value="2c8c1948d1da6b04b1250945f8e34854" style="display: none">
                        <input type="hidden" name="idproduk" value="67" />
                        <input type="hidden" id="variasi" name="variasi" value="0" />
                        <input type="hidden" id="harga" name="harga" value="115000" />
                        <div class="container">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <span class="text-dark mb-1 h6 d-block">Jumlah: </span>
                                </div>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <input class="w-45 num-product" type="number" min="1" name="jumlah" value="1" id="jumlahorder" max="251" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group mb-0 float-label">
                                <input type="text" class="form-control" name="keterangan" value="">
                                <label class="form-control-label">Keterangan</label>
                            </div>
                        </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-default shadow btn-rounded mt-3"><i class="material-icons mb-18 mr-2">shopping_cart</i>Tambah Ke Keranjang</button>
                    <span id="proses" class="cl1" style="display:none;"><b><i class="fa fa-spin fa-spinner"></i> Memproses pesanan</b></span>
                </div>
                </form>



            </div>

        </div>
    </div>
</div>
<div class="modal fade " id="colorscheme" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header theme-header border-0">
                <h6 class="">Setting Warna</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pt-0">
                <div class="text-center theme-color">
                    <button class="m-1 btn pink-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="pink-theme"></button>
                    <button class="m-1 btn brown-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="brown-theme"></button>
                    <button class="m-1 btn blue-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="blue-theme"></button>
                    <button class="m-1 btn purple-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="purple-theme"></button>
                    <button class="m-1 btn green-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="green-theme"></button>
                    <button class="m-1 btn grey-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="grey-theme"></button>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-12 text-center w-100">
                    <div class="row justify-content-center">
                        <div class="col-auto text-right align-self-center"><i class="material-icons text-warning md-36 vm">wb_sunny</i></div>
                        <div class="col-auto text-center align-self-center px-0">
                            <div class="custom-control custom-switch float-right">
                                <input type="checkbox" name="themelayout" class="custom-control-input" id="theme-dark">
                                <label class="custom-control-label" for="theme-dark"></label>
                            </div>
                        </div>
                        <div class="col-auto text-left align-self-center"><i class="material-icons text-dark md-36 vm">brightness_2</i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- color chooser menu ends -->
<!-- jquery, popper and bootstrap js -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- cookie js -->
<script src="assets/js/jquery.cookie.js"></script>

<!-- swiper js -->
<script src="assets/js/swiper.min.js"></script>

<!-- template custom js -->
<script src="https://kit.fontawesome.com/2baad1d54e.js" crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>

<div class="modal fade" id="share" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-end" role="document">
        <div class="modal-content text-center">
            <input type="text" class="url_public_id" id="myInput" value="https://adila.id/produk/Janna-Tea-Cold-Pilihan-minuman-santai--103315" readonly></input>
            <div class="modal-body">
                <h6 class="subtitle mt-0">Bagikan</h6>
                <span id="myTooltip"></span>

                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <a href="https://www.facebook.com/sharer.php?u=https://adila.id/produk/Janna-Tea-Cold-Pilihan-minuman-santai--103315" target="_blank" title="Facebook" class="btn btn-default button-rounded-36 shadow-sm"><i class=" fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/share?url=https://adila.id/produk/Janna-Tea-Cold-Pilihan-minuman-santai--103315" target="_blank" title="Twitter" class="btn btn-default button-rounded-36 shadow-sm"><i class=" fab fa-twitter"></i></a>
                            <a href="whatsapp://send?text=https://adila.id/produk/Janna-Tea-Cold-Pilihan-minuman-santai--103315" target="_blank" title="Whatsapp" class="btn btn-default button-rounded-36 shadow-sm"><i class=" fab fa-whatsapp"></i></a>
                            <button type="button" onclick="copyToClipboard()" title="copy link" class="btn btn-default button-rounded-36 shadow-sm"><i class=" fa fa-copy"></i></button>
                            <style>
                                .url_public_id {
                                    border: #fff;
                                    color: #fff;
                                    margin-top: 18px;
                                    margin-left: 31px;
                                    position: absolute;
                                    z-index: -1;
                                }
                            </style>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php if ($page == 'produk') { ?>
    <script>
        $(window).on('load', function() {
            var swiper = new Swiper('.swiper-container', {
                zoom: true,
                pagination: {
                    el: '.swiper-pagination',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
        /* counter count down script */
    </script>
<?php
} ?>
<script>
    $(window).on('load', function() {
        /* swiper slider carousel */
        var swiper = new Swiper('.small-slide', {
            slidesPerView: 'auto',
            spaceBetween: 0,
        });

        var swiper = new Swiper('.news-slide', {
            slidesPerView: 5,
            spaceBetween: 0,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            breakpoints: {
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 0,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                },
                320: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                }
            }
        });
        var swiper = new Swiper('.swiper-banner', {
            slidesPerView: 3,
            spaceBetween: 10,
            freeMode: true,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                    freeMode: true,
                    loop: true,
                },
                768: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    freeMode: true,
                    loop: true,
                },
                640: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    freeMode: true,
                    loop: true,
                },
                320: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    loop: true,
                }
            }
        });

        /* notification view and hide */
        setTimeout(function() {
            $('.notification').addClass('active');
            setTimeout(function() {
                $('.notification').removeClass('active');
            }, 35000);
        }, 500);
        $('.closenotification').on('click', function() {
            $(this).closest('.notification').removeClass('active')
        });
    });
    $.fn.stars = function() {
        return $(this).each(function() {

            var rating = $(this).data("rating");

            var numStars = $(this).data("numStars");

            var fullStar = new Array(Math.floor(rating + 1)).join('<i class="material-icons text-warning md-18 vm">star</i>');

            var halfStar = ((rating % 1) !== 0) ? '<i class="material-icons text-warning md-18 vm">star_half</i>' : '';

            var noStar = new Array(Math.floor(numStars + 1 - rating)).join('<i class="material-icons text-secondary md-18 vm">star_border</i>');

            $(this).html(fullStar + halfStar + noStar);

        });
    }

    $('.stars').stars();
</script><!-- color chooser menu start -->
<!-- page level script -->
<script type="text/javascript" src="assets/vendor/select2/select2.min.js"></script>>

<script type="text/javascript">
    $(function() {
        setTimeout(() => {
            toaster();
        }, 3000);
    });

    function toaster() {
        $.post("assync/booster.html", {
            "id": 0
        }, function(msg) {
            var data = eval("(" + msg + ")");
            if (data.success == true) {
                $("#toast-foto").attr("src", data.foto);
                $("#toast-user").html(data.user);
                $("#toast-produk").html(data.produk);

                $("#toaster").show("slow");
                setTimeout(() => {
                    $("#toaster").hide("slow");
                    setTimeout(() => {
                        toaster();
                    }, 3000);
                }, 5000);
            } else {
                setTimeout(() => {
                    toaster();
                }, 5000);
            }
        });
    }
</script>

<div class="modal fade" id="modalpilihpesan" tabindex="-1" role="dialog" style="background: rgba(0,0,0,.5);" style="bottom:0;right:0;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h3 class="modal-title"><i class="fa fa-comments"></i> Hubungi Admin</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <a href="https://wa.me/+6285588883118" target="_blank" class="btn btn-lg btn-success shadow btn-rounded mb-3 mt-3 ml-3 mr-3"><i class="fa fa-whatsapp"></i>Hubungi via Whatsapp</a>
        </div>
    </div>
</div>
</body>

</html>