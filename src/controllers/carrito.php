<?php

namespace Adc\Tienda;

class Carrito
{
    private array $productos = [];

    public function agregarProducto(Producto $producto, int $cantidad): void
    {
        $this->productos[] = [
            'producto' => $producto,
            'cantidad' => $cantidad
        ];
    }

    public function eliminarProducto(Producto $producto): void
    {
        foreach ($this->productos as $key => $item) {
            if ($item['producto']->getId() === $producto->getId()) {
                unset($this->productos[$key]);
                break;
            }
        }
    }

    public function obtenerTotal(): float
    {
        $total = 0;
        foreach ($this->productos as $item) {
            $total += $item['producto']->getPrecio() * $item['cantidad'];
        }
        return $total;
    }

    public function mostrarProductos(): array
    {
        return $this->productos;
    }
}
