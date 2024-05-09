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

    public function catalogoCompleto(): array
{
    $catalogo = [];

    $JSON = file_get_contents('datos/productos.json');
    $JSONData = json_decode($JSON);

    foreach ($JSONData as $categoria => $productos) {
        foreach ($productos as $value) {
            $producto = new self();
    
            $producto->id = $value->id;
            $producto->nombre = $value->nombre;
            $producto->descripcion = $value->descripcion;
            $producto->precio = $value->precio;
            $producto->imagen = $value->imagen;
            $producto->stock = $value->stock;
            $producto->categoria = $value->categoria;
            
            if (isset($value->piel)) {
                $producto->piel = $value->piel;
            } else {
                $producto->piel = "No especificado";
            }
    
            $producto->lanzamiento = $value->lanzamiento;
    
            $catalogo[] = $producto;
        }
    }        

    return $catalogo;
}


    /**
     * Devuelve el catalogo de productos de un nombre en particular
     * @param string $nombre Un string con el nombre del nombre a buscar
     * @return producto[] Un Array lleno de instancias de objeto producto.
     */
    public function catalogoPorNombre(string $nombre): array
    {
        $resultado = [];
        $catalogo = $this->catalogoCompleto();

        foreach ($catalogo as $p) {
            if ($p->nombre == $nombre) {
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
        $catalogo = $this->catalogoCompleto();

        foreach ($catalogo as $p) {
            if ($p->id == $idProducto) {
                return $p;
            }
        }
        return null;
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