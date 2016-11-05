<section id="uploadContainer" class="containerForHiding">
    <div class="container-fluid popUpContainer">
        <div class="popUpFormContainer">
            <div class="closeContainer">
                <span class="uploadBtn glyphicon glyphicon-remove formClose"></span>
            </div>
            <h3>Upload Files</h3>
            <br />
            <form action="modules/fileUpload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="uploaded"  class="btn-file">
                <input type="submit" value="Upload File" class="btn btn-primary">
            </form>            
        </div>
    </div>
</section>