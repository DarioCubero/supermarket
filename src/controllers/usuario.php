<?php

namespace Adc\Tienda;

class Usuario
{
    private int $id;
    private string $nombre;
    private string $email;

    public function __construct(int $id, string $nombre, string $email)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
