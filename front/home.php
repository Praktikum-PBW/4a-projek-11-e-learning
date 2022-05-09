<!-- header -->
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-6 text-md-start text-start py-6">
            <h1 class="mb-4 fs-9 fw-bold">You don't need to be insecure, everyone can be a professional.</h1>
            <p class="mb-6 lead text-secondary">Start by always learning new things and consistently practicing to
                prepare
                the skills needed in the creative world today. Immediately choose the class that suits your interests
                and
                start upgrading your skills.</p>
            <div class="text-start text-md-start"><a class="btn btn-primary" href="index.php?page=kelas" role="button"
                    id="btn-course">See Class</a></div>
        </div>
        <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid" src="../aset/img/gambar1.png" alt="" /></div>
    </div>
</div>

<!-- kategori -->
<section class="sub-content">
    <div class="container">
        <h1 class="fs-9 fw-bold mb-4 text-center"> Categories of Class</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php
            include '../aset/lib/koneksi.php';
            $query = mysqli_query($koneksi, "SELECT * FROM kategori");
            foreach($query as $data){
            ?>
            <div class="col">
                <div class="card">
                    <img src="../aset/img/kategori/<?=$data['thumbnail']?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="card-title"><?= $data['kategori']?></p>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<!-- End kategori -->

<!-- welcome -->
<section class="sub-content bg-light">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid" src="../aset/img/teamwork.png" />
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-4 fs-9 fw-bold">Welcome in Let's Learn,</h1>
                    <p class="mb-6 lead text-secondary">Let's Learn is an online learning platform specialized in
                        creative fields.Here you can access materials anywhere and anytime.<br
                            class="d-none d-xl-block" /><br class="d-none d-xl-block" />Come on, don't let laziness
                        bother you, today's world is changing quickly. Learn the skills that suit your interests, and
                        become an expert in their field.</p>
                    <div class="cards">
                        <div class="card-single">
                            <div>
                                <h1>18</h1>
                                <span>Classes</span>
                            </div>
                            <div>
                                <span class="las la-book"></span>
                            </div>
                        </div>
                        <div class="card-single">
                            <div>
                                <h1>20</h1>
                                <span>Mentor</span>
                            </div>
                            <div>
                                <span class="las la-user-tie"></span>
                            </div>
                        </div>
                        <div class="card-single">
                            <div>
                                <h1>258</h1>
                                <span>Alumnus</span>
                            </div>
                            <div>
                                <span class="las la-users"></span>
                            </div>
                        </div>
                    </div>
                    <br class="d-none d-xl-block" />
                    <a class="btn btn-primary" href="index.php?page=kelas">See Class</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End welcome -->

<!-- Promo -->
<section class="sub-content">
    <div class="container">
        <h1 class="fs-9 fw-bold mb-4 text-center">Today's Discount</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4" id="promo">
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">March Yey!</h5>
                        <p class="card-text">Get a discount of IDR 59,000 <br class="d-none d-xl-block" /> You can proof
                            it with the coupon code
                            <strong>MarchYey!</strong> </p>
                        <a href="#" class="btn btn-primary">WhatsApp</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">For Student</h5>
                        <p class="card-text">Get a discount of Rp. 109,000 <br class="d-none d-xl-block" /> You can send
                            your student card to proof your identity.</p>
                        <a href="#" class="btn btn-primary">WhatsApp</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">For Member</h5>
                        <p class="card-text">Get a discount of Rp. 119,000 <br class="d-none d-xl-block" />especially
                            for those who have registered for
                            classes/alumni.</p>
                        <a href="#" class="btn btn-primary">WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End promo -->

<!-- Class -->
<section class="sub-content">
    <div class="container-xxl py-5 bg-light">
        <h1 class="fs-9 fw-bold mb-4 text-center">Class</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card-shadow">
                    <?php
                    include '../aset/lib/koneksi.php';
                    $query = mysqli_query($koneksi, "SELECT * FROM kelas JOIN guru ON kelas.id_guru = guru.id_guru LIMIT 3");
                    foreach($query as $data){
                    ?>
                    <div class="card text-white">
                        <img src="../aset/img/kelas/<?=$data['thumbnail']?>" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title"><?=$data['nama_kelas']?></h5>
                            <p class="card-text">by <?=$data['nama_guru']?></p>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Class -->

<!-- Review -->
<section id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h1 class="fs-9 fw-bold mb-4 text-center">What they say?</h1>
                </div>
            </div>
            <div class="col-12">
                <div id="testimonialCarousel" class="carousel carousel-dark slide" data-ride="carousel">
                    <!-- Slide Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#testimonialCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#testimonialCarousel" data-slide-to="1"></li>
                        <li data-target="#testimonialCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <?php
                                    include '../aset/lib/koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT * FROM review JOIN user ON review.id_user=user.id_user");
                                    foreach($query as $data){
                                ?>
                            <!-- Slide 1 -->
                            <div class="carousel-item active">
                                <div class="carousel-content">
                                    <p><i><?=$data['review']?></i></p>
                                    <h3><span>-</span> <?=$data['username']?> <span>-</span></h3>
                                </div>
                            </div>
                            <?php
                                }
                                ?>
                            <!-- Slider pre and next arrow -->
                            <a class="carousel-control-prev text-black" href="#testimonialCarousel" role="button"
                                data-slide="prev">
                                <i class="las la-angle-left"></i>
                            </a>
                            <a class="carousel-control-next text-black" href="#testimonialCarousel" role="button"
                                data-slide="next">
                                <i class="las la-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- End review -->