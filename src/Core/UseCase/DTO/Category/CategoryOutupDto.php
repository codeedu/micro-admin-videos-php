<?php

namespace Core\UseCase\DTO\Category;

class CategoryOutupDto
{
    public function __construct(
        public string $id,
        public string $name,
        public string $description = '',
        public bool $is_active = true,
        public string $created_at = '',
    ) {}
}
