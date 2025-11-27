<?php

declare(strict_types=1);

namespace Vigihdev\WpModels\Contracts;

/**
 * Interface TermInterface
 *
 * Interface untuk mendefinisikan struktur data term
 */
interface TermInterface
{
    /**
     * Mendapatkan ID dari term
     *
     * @return int ID dari term
     */
    public function getTermId(): int;

    /**
     * Mendapatkan nama dari term
     *
     * @return string Nama dari term
     */
    public function getName(): string;

    /**
     * Mendapatkan slug dari term
     *
     * @return string Slug dari term
     */
    public function getSlug(): string;

    /**
     * Mendapatkan group dari term
     *
     * @return int Group dari term
     */
    public function getTermGroup(): int;
}
