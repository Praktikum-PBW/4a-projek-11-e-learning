<div class="container" id="blog">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
            $query = mysqli_query($koneksi, "SELECT * FROM kelas");
            foreach($query as $data){
        ?>
        <div class="col">
            <div class="card h-100">
                <img src="../aset/img/kelas/<?=$data['thumbnail']?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['nama_kelas']?></h5>
                    <a href="index.php?page=kelas_konten&id=<?=$data['id_kelas']?>" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
