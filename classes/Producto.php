<?PHP

class Producto
{
    private $id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $precioAnterior;
    private $imagen;
    private $stock;
    private $categoria;
    private $piel;
    private $lanzamiento;
    private $contenido;

    public function productoCompleto(): array
{
    $producto = [];

    $JSON = file_get_contents('datos/productos.json');
    $JSONData = json_decode($JSON);

    foreach ($JSONData as $categoria => $productos) {
        foreach ($productos as $value) {
            $producto = new self();
    
            $producto->id = $value->id;
            $producto->nombre = $value->nombre;
            $producto->descripcion = $value->descripcion;
            $producto->precio = $value->precio;
            $producto->precioAnterior = $value->precioAnterior;
            $producto->imagen = $value->imagen;
            $producto->stock = $value->stock;
            $producto->categoria = $value->categoria;
            $producto->piel = $value->piel;
            $producto->lanzamiento = $value->lanzamiento;
            $producto->contenido = $value->contenido;
            
            if (isset($value->piel)) {
                $producto->piel = $value->piel;
            } else {
                $producto->piel = "No especificado";
            }

            $producto->lanzamiento = $value->lanzamiento;
    
            $producto[] = $producto;
        }
    }

    return $producto;
}


    /*
     * Devuelve el producto de productos de un nombre en particular
     * @param string $nombre Un string con el nombre del nombre a buscar
     * @return producto[] Un Array lleno de instancias de objeto producto.
     */
    public function productoPorCategoría(string $categoria): array
    {
        $resultado = [];
        $producto = $this->productoCompleto();

        foreach ($producto as $p) {
            if ($p->categoria == $categoria) {
                $resultado[] = $p;
            }
        }
        return $resultado;
    }

    /**
     * Devuelve los datos de un producto en particular
     * @param int $idProducto El ID único del producto a mostrar 
     */
    public function productoPorId(int $idProducto): ?Producto
    {
        $producto = $this->productoCompleto();

        foreach ($producto as $p) {
            if ($p->id == $idProducto) {
                return $p;
            }
        }
        return null;
    }


    public function precioAnterior($producto, $precio, $descuento): array
    {
        $resultado = [];
        foreach ($producto as $p) {
            $precioAnterior = $p->precio + ($p->precio * $descuento / 100);
            if ($precioAnterior == $precio) {
                $resultado[] = $p;
            }
        }
        return $resultado;
    }
    


    /**
     * Devuelve el precio de la unidad, formateado correctamente
     */
    public function precioFormateado(): string
    {
        return number_format($this->precio, 2, ".", ",");
    }

    // Gets

    public function getNombre()
    {
        return $this->nombre;
    }
    
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getPiel()
    {
        return $this->piel;
    }

    public function getLanzamiento()
    {
        return $this->lanzamiento;
    }

    public function getId()
    {
        return $this->id;
    }
}