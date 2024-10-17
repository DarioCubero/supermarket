<?php

namespace Adc\Tienda;

class Producto
{
    private int $id;
    private string $nombre;
    private float $precio;

    public function __construct(int $id, string $nombre, float $precio)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getPrecio(): float
    {
        return $this->precio;
    }
}
