<?php

declare(strict_types=1);

namespace Vigihdev\WpModels\DTOs;

use Vigihdev\WpModels\Contracts\TermTaxonomyInterface;

final class TermTaxonomyDto implements TermTaxonomyInterface
{

    public function __construct(
        private readonly ?int $termTaxonomyId = null,
        private readonly ?int $termId = null,
        private readonly ?string $taxonomy = null,
        private readonly ?string $description = '',
        private readonly ?int $parent = 0,
        private readonly ?int $count = 0,
    ) {}

    public function getTermTaxonomyId(): int
    {
        return $this->termTaxonomyId;
    }

    /**
     * Mendapatkan ID istilah
     *
     * @return int|null Mengembalikan nilai ID istilah
     */
    public function getTermId(): ?int
    {
        return $this->termId;
    }

    public function getTaxonomy(): ?string
    {
        return $this->taxonomy;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getParent(): int
    {
        return $this->parent;
    }

    public function getCount(): int
    {
        return $this->count;
    }
}
