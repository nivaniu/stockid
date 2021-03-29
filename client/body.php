
<?php
if (array_key_exists("fname",$_POST)){
    if(file_exists($_POST["fname"])){
        echo "<script>alert(\"File ".htmlspecialchars($_POST["fname"])." already exist.\")</script>";
    }else{
    createFolder($_POST["fname"]);
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
