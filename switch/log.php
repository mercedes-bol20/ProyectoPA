<?php
    include("../ingress/access.php");
    
    // Sessions variables
    if (!isset($_SESSION)){
        session_start();
    }
    $query = mysqli_query($conn, "SELECT * FROM usuario WHERE  usuario = '$_POST[username]' AND clave = '$_POST[userpasswd]'");
    $row = mysqli_fetch_array($query);

    if (!$row[0]){
        echo '<script languaje = javascript>
        alert ("Datos incottectos");
        self.location="../index.php"</script>';
    } else {
        if ($row['rol'] == "administrador"){
            header("Location: ../views/viewadmin.php");
            $_SESSION['usuario'] = $row['username'];
            $_SESSION['rol'] = "administrador";
        }elseif ($row['rol'] == "invitado"){
            header("Location: ../views/viewinchar.php");
            $_SESSION['usuario'] = $row['username'];
            $_SESSION['rol'] = "invitado";
       
    }
}
?>