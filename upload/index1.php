


<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h1>Upload one file</h1>
            <form action="upload_multi_files.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="avatars[]">
                <input type="file" name="avatars[]">
                <input type="file" name="avatars[]">
                <button type="submit" class="btn btn-success">submit</button>
            </form>
        </div>
    </div>
</div>