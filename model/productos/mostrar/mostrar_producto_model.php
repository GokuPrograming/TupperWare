<?php


class mostrarProductos
{
    private $db;
    public function __construct()
    {
        $con = new Conexion();
        $this->db = $con->conectar();
    }
    public function mostrarTodosLosProductos()
    {
        //select nombre_producto,precio,foto,stock from producto where producto.status=1;
        $query = "SELECT id_producto,producto,precio,almacen,imagen from producto";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $cursos = array(); // Inicializa un array para almacenar los cursos
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $cursos[] = $row;
        }
        return $cursos; // Devuelve el array de cursos
    }

    public function mostrarProductoid($id_producto)
    {
        $query = "SELECT producto, precio, almacen, categoria,descripcion, imagen,imagen2,imagen3,id_producto
from producto
         inner join tupperware.categoria c on producto.id_categoria = c.id_categoria
where id_producto = :id_producto";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_producto', $id_producto, PDO::PARAM_INT);
        $stmt->execute();

        $productos = array(); // Inicializa un array para almacenar los productos
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $productos[] = $row;
        }

        return $productos;
    }

    //producto, precio, stock, foto


}
