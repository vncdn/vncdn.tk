<form action="" method="post">
        url: <input type="text" name="url"><hr>
        extension_loaded: <input type="text" name="ext"><hr>
        <button type="submit">Get</button>
        <a href="delete.php">Delete all file</a>
        <a href="/download">Downloaded</a>
    </form>
    <?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $url = $_POST['url']; 
        if(file_put_contents("download/download.".$_POST['ext'],file_get_contents($url))) { 
            echo "File downloaded successfully<hr>"; 
        } 
        else { 
            echo "File downloading failed."; 
        } 
}
    ?> 