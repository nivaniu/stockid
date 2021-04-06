<?php
function uploadFile()
{
    if (array_key_exists("fileToUpload", $_FILES)) {

        $target_file = basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

// Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            return;
        }

// Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            return;
        }

// Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" && $imageFileType != "pdf") {
            echo "Sorry, only JPG, JPEG, PNG, GIF & PDF files are allowed.";
            return;
        }

// Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            return;
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
                return;
            }
        }
    }
}
uploadFile();
?>

<?php
if (array_key_exists("fname",$_POST)){
    if(file_exists($_POST["fname"])){
        echo "<script>alert(\"File ".htmlspecialchars($_POST["fname"])." already exist.\")</script>";
    }else{
        createFolder($_POST["fname"]);
    }
}
function rrmdir($dir) {
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (is_dir($dir. DIRECTORY_SEPARATOR .$object) && !is_link($dir."/".$object))
                    rrmdir($dir. DIRECTORY_SEPARATOR .$object);
                else
                    unlink($dir. DIRECTORY_SEPARATOR .$object);
            }
        }
        rmdir($dir);
    }
}
if (array_key_exists("delete",$_GET)){
    $filename = $_GET["delete"];
    if (file_exists($filename) && strpos($filename, "..") === false && strpos($filename, "/") === false && strpos($filename, "\\") === false && $filename != "."){
        if (filetype($filename)=="dir"){
            p("deleted folder $filename");
            rrmdir($filename);
        }else {
            p("deleted file $filename");
            unlink($filename);
        }
    }
}
$arr = scandir('.');
function p($str = ""){echo $str;}
#foreach ($arr as $filename) {
#}
function createFolder($fname){
    mkdir ($fname, 0766);
    copy("index.php", $fname."/index.php");
}
?>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Create file
                    <button style="width: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h5>
            </div>
            <form action="." method="post">
                <div class="modal-body">
                    <label for="fname">Enter folder name:</label>
                    <input pattern="[a-zA-Z].*" id="fname" name="fname" class="input" type="text">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!--Upload doc modal-->
<!-- Modal -->
<div class="modal fade" id="uploadDocModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Create file
                    <button style="width: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h5>
            </div>
            <form enctype="multipart/form-data" action="." method="POST">
                <div class="modal-body">
                    <!-- MAX_FILE_SIZE must precede the file input field -->
                <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                <!-- Name of input element determines name in $_FILES array -->
                Send this file: <input name="fileToUpload" type="file" />
                </div>
                <div class="modal-footer">
                <input type="submit" value="Send File" />
                </div>
            </form>

        </div>
    </div>
</div>


<div class="contentDiv">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">FileType</th>
            <th scope="col">FileName</th>
            <th scope="col">Size</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        array_shift($arr);
        if (strstr($_CLIENT_PATH, getcwd()."/"))
            array_shift($arr);
        foreach ($arr as $key => $filename) {
            $imageFileType = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
            $allowedTypes = array("png", "jpg", "jpeg", "gif", "pdf");
            if (filetype($filename) == "file") {
                if (in_array($imageFileType, $allowedTypes))
                    p(getRow($key, $filename));
            }else{
                p(getRow($key, $filename));
            }
        }
        ?>

        </tbody>
    </table>
</div>
