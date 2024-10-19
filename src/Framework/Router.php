<?php

declare(strict_types=1);

namespace Framework;

class Router 
{
    private array $routers = [];

    public function add(string $method, string $path) 
    {
        $path = $this->normalizePath($path);
        $this->routers[] = [
            'path' => $path,
            'method' => strtoupper($method)
        ];
    }

    private function normalizePath(string $path): string 
    {
        $path = trim($path, '/');
        $path = "/{$path}/";
        $path = preg_replace('#[/]{2,}#', '/', $path);

        return $path;
    }
}
