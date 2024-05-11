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
    private $descuento;
    private $waterproof;
    private $vegano;


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
                $producto->precioAnterior = $value->precioAnterior;
                $producto->imagen = $value->imagen;
                $producto->stock = $value->stock;
                $producto->categoria = $value->categoria;
                $producto->piel = isset($value->piel) ? $value->piel : ["No especificado"];
                $producto->lanzamiento = $value->lanzamiento;
                $producto->contenido = $value->contenido;
                $producto->descuento = $value->descuento;
                $producto->waterproof = $value->waterproof;
                $producto->vegano = $value->vegano;
    
                $catalogo[] = $producto;
            }
        }
    
        return $catalogo;
    }

    public function catalogoPorCategoria(string $categoria): array
    {
        $resultado = [];
        $catalogo = $this->catalogoCompleto();
    
        foreach ($catalogo as $p) {
            if ($p->getCategoria() == $categoria) {
                $resultado[] = $p;
            }
        }
        return $resultado;
    }

    public function catalogoPorDescuento(float $descuento): array
    {
        $resultado = [];
        $catalogo = $this->catalogoCompleto();
    
        foreach ($catalogo as $p) {
            if ($p->getDescuento() == $descuento) {
                $resultado[] = $p;
            }
        }
        return $resultado;
    }
    

    public function catalogoDestacado(bool $productoDestacado): array
    {
        $resultado = [];
        $catalogo = $this->catalogoCompleto();
    
        foreach ($catalogo as $p) {
            if ($p->getDestacado() == $productoDestacado) {
                $resultado[] = $p;
            }
        }
        return $resultado;
    }

    public function catalogoPorPiel(string $piel): array
    {
        $resultado = [];
        $catalogo = $this->catalogoCompleto();
        
        foreach ($catalogo as $producto) {
            $tiposDePiel = $producto->getPiel();
            
            if (in_array($piel, $tiposDePiel)) {
                $resultado[] = $producto;
            }
        }
        
        return $resultado;
    }


    

    /**
     * Devuelve los datos de un producto en particular
     * @param int $idProducto El ID único del producto a mostrar 
     */
    public function productoPorId(int $id): ?Producto
    {
        $catalogo = $this->catalogoCompleto();

        foreach ($catalogo as $p) {
            if ($p->id == $id) {
                return $p;
            }
        }
        return null;
    }


    public function precioDescuento(): string
    {
        $resultado = number_format(($this->precio - ($this->precio * $this->descuento /100)), 2, ".", ",");
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

    public function getDescuento()
    {
        return $this->descuento;
    }

    public function getContenido()
    {
        return $this->contenido;
    }

    public function getwaterproof()
    {
        return $this->waterproof;
    }

    public function gatVegano()
    {
        return $this->vegano;
    }

    public function getDestacado()
    {
        return $this->vegano;
    }
}