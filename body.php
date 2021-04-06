
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
    if (file_exists($filename) && !strpos($filename, "..")){
    if (filetype($filename)=="dir"){
     rrmdir($filename);
    }else {
        unlink($filename);
    }
    }
}
$arr = scandir('.');
function p($str){echo $str;}
#foreach ($arr as $filename) {
#}
function createFolder($fname){
    mkdir ($fname, 0766);
    copy("index.php", $fname."/index.php");
}
?>
<!-- Button trigger modal -->
<!-- Button trigger modal -->

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

            p(getRow($key, $filename));
        }
        ?>

        </tbody>
    </table>
</div>
