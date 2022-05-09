<div class="container">
    <h1 class="fs-9 fw-bold mb-4 text-center">Contact Us</h1>
    <div class="row align-items-center">
        <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid" src="../aset/img/contact.jpg" /></div>
        <div class="col-md-6 text-md-start text-start py-6">
            <form action="index.php?page=review_proses" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Input Username" value="<?=$_SESSION['username']?>">
                </div>
                <label for="review" class="form-label">Review</label>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="review" name="review" style="height: 100px"></textarea>
                </div>
                <button type="submit" name="submit" id="submit" class="btn btn-primary ">Submit</button>
            </form>
        </div>
    </div>
</div>