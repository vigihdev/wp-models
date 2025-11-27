<?php

declare(strict_types=1);

namespace Vigihdev\WpModels\Contracts;

/**
 * Interface TermRelationshipInterface
 *
 * Interface untuk mendefinisikan struktur data relationship antara term dan taxonomy
 */
interface TermRelationshipInterface
{
    /**
     * Mendapatkan ID objek (post ID atau object ID lainnya)
     *
     * @return int ID objek
     */
    public function getObjectId(): int;

    /**
     * Mendapatkan ID taksonomi term
     *
     * @return int ID taksonomi term
     */
    public function getTermTaxonomyId(): int;

    /**
     * Mendapatkan urutan term
     *
     * @return int Urutan term
     */
    public function getTermOrder(): int;
}
