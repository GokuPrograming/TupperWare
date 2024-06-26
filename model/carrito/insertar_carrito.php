<?php
class insertar_carrito
{

    private $db;
    public function __construct()
    {
        $con = new Conexion();
        $this->db = $con->conectar();
    }
    public function agregarCarrito($id_usuario, $producto_id, $cantidad)
    {
        // Primero, verifica si la cantidad a comprar es menor o igual al stock disponible
        if ($this->verificarStockSuficiente($producto_id, $cantidad)) {
            // La cantidad a comprar es válida, puedes agregar el producto al carrito
            //cantidad, id_producto, id_usuario
            $query = "INSERT INTO carrito(id_usuario, id_producto, cantidad) VALUES (:id_usuario, :id_producto, :cantidad)";
            $rs = $this->db->prepare($query);
            $rs->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
            $rs->bindParam(':id_producto', $producto_id, PDO::PARAM_INT);
            $rs->bindParam(':cantidad', $cantidad, PDO::PARAM_INT);

            if ($rs->execute()) {
                // La compra se ha registrado correctamente en la base de datos
                echo "¡Se agregó a su carrito :D siga comprando!";
               // $this->actualizarStock($producto_id, $cantidad); // Llamamos a la función para actualizar el stock
            } else {
                // Hubo un error al registrar la compra
                echo "Error al registrar la compra.";
            }
        } else {
            // La cantidad a comprar es mayor que el stock disponible
            echo "La cantidad a comprar es mayor que el stock disponible.";
        }
    }
    private function verificarStockSuficiente($producto_id, $cantidad)
    {
        $query = "SELECT almacen from producto where id_producto = :id_producto";
        $rs = $this->db->prepare($query);
        $rs->bindParam(':id_producto', $producto_id, PDO::PARAM_INT);
        $rs->execute();

        $row = $rs->fetch(PDO::FETCH_ASSOC);

        if ($row['almacen'] >= $cantidad) {
            // El stock es suficiente
            return true;
        } else {
            // El stock no es suficiente
            echo 'tenemnos un problema';
            return false;
        }
    }
}
