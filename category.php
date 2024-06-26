<?php

class Category
{
    protected string $name;
    protected string $icon;

    public function __construct(string $_name, string $_icon)
    {
        $this->name = $_name;
        $this->icon = $_icon;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }
}
