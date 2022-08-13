<?php

class Producto
{
    private $id;
    private $nombre;
    private $codigo;
    private $precio;
    private $marca;
    private $listaProveedores = array();

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getListaProveedores()
    {
        return $this->listaProveedores;
    }

    public function setProveedor($listaProveedores)
    {
        $this->listaProveedores[] = $listaProveedores;
    }

    public function MostrarInformacion()
    {
        echo 'Id del producto: ' . $this->getid() . '<br>';
        echo 'Nombre del producto: ' . $this->getnombre() . '<br>';
        echo 'Codigo del producto: ' . $this->getcodigo( ). '<br>';
        echo 'Precio del producto: ' . $this->getprecio() . '<br>';
        echo 'Marca del producto: ' . $this->getmarca() . '<br>';
        foreach ($this->getListaProveedores() as $p) {
        echo 'Id del proveedor: '. $p->getid(). '<br>';
        echo 'Nombre del proveedor: '. $p->getNombre().'<br>';
        echo 'Cuil del proveedor: '. $p->getCuil().'<br>';
        echo 'Direccion del proveedor: '. $p->getDireccion().'<br>';
        echo 'Telefono del proveedor: '. $p->getTelefono().'<br>';
        }

    }
}
