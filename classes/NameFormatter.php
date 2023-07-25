<?php


class NameFormatter {
    private string $name;
    public function __construct($name)
    {
        $this->name = $name;        
    }
    public function interpolateName() {
        return ucwords($this->name);
    }
}