<?php

namespace alf89\AbeloHost\DTO;

final readonly class ArticleDTO
{
    public function __construct(
        public int $id,
        public string $title,
        public string $description,
        public string $text,
        public string $img,
        public int $view,
        public string $dateUp,
        public string $dateAt,
    ){}
}