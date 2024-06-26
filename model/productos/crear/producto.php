
<?php


class producto
{
    private $db;
    public function __construct()
    {
        $con = new Conexion();
        $this->db = $con->conectar();
    }
    public function mostrarProductos()
    {

        //select nombre_producto,precio,foto,stock from producto where producto.status=1;
        $query = "SELECT producto,id_producto,precio,foto,stock from producto ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $cursos = array(); // Inicializa un array para almacenar los cursos
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $cursos[] = $row;
        }
        return $cursos; // Devuelve el array de cursos
    }
    //producto, precio, stock, foto
    public function subir($producto, $precio, $stock, $id_categoria, $id_proveedor, $imagen1, $descripcion, $imagen2, $imagen3)
    {
        $query = "INSERT INTO producto(producto, precio, almacen, id_categoria, id_proveedor, imagen, descripcion, imagen2, imagen3)
                  VALUES (:producto, :precio, :stock, :id_categoria, :id_proveedor, :imagen1, :descripcion, :imagen2, :imagen3)";
        $rs = $this->db->prepare($query);
        $rs->bindParam(":producto", $producto);
        $rs->bindParam(":precio", $precio);
        $rs->bindParam(":stock", $stock);
        $rs->bindParam(":id_categoria", $id_categoria);
        $rs->bindParam(":id_proveedor", $id_proveedor);
        $rs->bindParam(":imagen1", $imagen1);
        $rs->bindParam(":descripcion", $descripcion);
        $rs->bindParam(":imagen2", $imagen2);
        $rs->bindParam(":imagen3", $imagen3);
        return $rs->execute() ? "Producto registrado exitosamente" : "Error al registrar el producto";
    }
    
    public function editar($idProducto, $producto, $precio, $stock)
    {
        $query = "UPDATE producto SET producto = :producto, precio = :precio, stock = :stock WHERE id_producto = :idProducto";
        $rs = $this->db->prepare($query);
        $rs->bindParam(":idProducto", $idProducto);
        $rs->bindParam(":producto", $producto);
        $rs->bindParam(":precio", $precio);
        $rs->bindParam(":stock", $stock);

        $rs->execute();
    }
    public function editarFoto($idProducto,$imagen){

 $query = "UPDATE producto SET foto = :foto WHERE id_producto = :idProducto";
        $rs = $this->db->prepare($query);
        $rs->bindParam(":idProducto", $idProducto);
        $rs->bindParam(":foto", $imagen);
        $rs->execute();
    }
    public function eliminar($idProducto)
{
    // Iniciar una transacción para asegurar la consistencia de los datos
    $this->db->beginTransaction();

    try {
        // Eliminar de la tabla carrito
        $query_carrito = "DELETE FROM carrito WHERE id_producto = :idProducto";
        $rs_carrito = $this->db->prepare($query_carrito);
        $rs_carrito->bindParam(":idProducto", $idProducto);
        $rs_carrito->execute();

        // Eliminar de la tabla venta
        $query_venta = "DELETE FROM venta WHERE id_producto = :idProducto";
        $rs_venta = $this->db->prepare($query_venta);
        $rs_venta->bindParam(":idProducto", $idProducto);
        $rs_venta->execute();

        // Eliminar de la tabla producto
        $query_producto = "DELETE FROM producto WHERE id_producto = :idProducto";
        $rs_producto = $this->db->prepare($query_producto);
        $rs_producto->bindParam(":idProducto", $idProducto);
        $rs_producto->execute();

        // Confirmar la transacción
        $this->db->commit();
    } catch (Exception $e) {
        // Revertir la transacción en caso de error
        $this->db->rollBack();
        echo "Error al eliminar: " . $e->getMessage();
    }
}

}