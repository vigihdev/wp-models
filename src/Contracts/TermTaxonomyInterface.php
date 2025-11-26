<?php

declare(strict_types=1);

namespace Vigihdev\WpModels\Contracts;

interface TermTaxonomyInterface
{

    public function getTermTaxonomyId(): ?int;
    public function getTermId(): ?int;
    public function getTaxonomy(): ?string;
    public function getDescription(): ?string;
    public function getParent(): int;
    public function getCount(): int;
}
