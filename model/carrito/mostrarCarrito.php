<?php
class mostrarCarrito
{

    private $db;
    public function __construct()
    {
        $con = new Conexion();
        $this->db = $con->conectar();
    }
    public function obtenerCarrito($user_id)
    {
        $query = "SELECT cantidad, descripcion, precio, producto,carrito.id_producto,imagen, sum(cantidad*precio) as subtotal from carrito
        join tupperware.producto p on carrito.id_producto = p.id_producto
        where id_usuario=:id_usuario
        group by id_producto
        order by producto";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_usuario', $user_id, PDO::PARAM_INT);
        $stmt->execute();
        $p = array(); // Inicializa un array para almacenar los cursos
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $p[] = $row;
        }
        return $p; // Devuelve el array de cursos
    }
    public function mostrarTotal($user_id)
    {
        $query = "SELECT sum(cantidad*precio) as total
        from carrito
        join tupperware.producto p on p.id_producto = carrito.id_producto where id_usuario=:id_usuario
        group by id_usuario
        order by producto";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_usuario', $user_id, PDO::PARAM_INT);
        $stmt->execute();
        $p = array(); // Inicializa un array para almacenar los cursos
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $p[] = $row;
        }
        return $p; // Devuelve el array de cursos
    }
}
