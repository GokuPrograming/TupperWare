<?php
require_once '../model/productos/crear/producto.php';
require_once '../model/conexion.php';

$subir = new producto();

if (isset($_GET['opc'])) {
    $opc = $_GET['opc'];

    switch ($opc) {
        case '12':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $producto = $_POST['producto'];
                $stock = $_POST['stock'];
                $precio = $_POST['precio'];
                $id_categoria = 1;
                $id_proveedor = 1;
                $descripcion = $_POST['descripcion'];

                // Manejo de archivos de imagen
                $nombreImagen = $_FILES['foto']['name'];
                $nombreImagen2 = $_FILES['foto2']['name'];
                $nombreImagen3 = $_FILES['foto3']['name'];

                $rutaImagen = '../assets/img/products/' . $nombreImagen;
                $rutaImagen2 = '../assets/img/products/' . $nombreImagen2;
                $rutaImagen3 = '../assets/img/products/' . $nombreImagen3;

                $uploadSuccess = move_uploaded_file($_FILES['foto']['tmp_name'], $rutaImagen);
                $uploadSuccess2 = move_uploaded_file($_FILES['foto2']['tmp_name'], $rutaImagen2);
                $uploadSuccess3 = move_uploaded_file($_FILES['foto3']['tmp_name'], $rutaImagen3);

                if ($uploadSuccess && $uploadSuccess2 && $uploadSuccess3) {
                    $resultado = $subir->subir($producto, $precio, $stock, $id_categoria, $id_proveedor, $nombreImagen, $descripcion, $nombreImagen2, $nombreImagen3);
                    echo $resultado;
                } else {
                    echo "Error al subir las imágenes.";
                }
            } else {
                echo "Acceso no permitido";
            }
            break;
        default:
            echo "Opción no válida";
            break;
    }
}
?>
