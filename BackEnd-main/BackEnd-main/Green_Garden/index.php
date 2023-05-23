<?php include 'header.php';
require 'functions.php';

?>

<?php
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    $login = $_POST["login"];
    $password = $_POST["password"];

    $host = "localhost";
    $user = "root";
    $pwd = "";
    $dbname = "greengarden";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
    } catch (PDOException $e) {
        echo "Connection failed " . $e->getMessage();
    }

    $stmt = $conn->prepare('SELECT * FROM t_d_user WHERE Id_User=:id');
    $stmt->bindValue(':id', $user_id);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

    <p> Coucou <?php echo $user['Login'] ?> </p>

<?php
}

?>


<p>Coucou </p>
<?php
echo 'coucou||||||   /////';
?>

<?php include 'footer.php'; ?>