<?php

declare(strict_types=1);

namespace Vigihdev\WpModels\DTOs;

use Vigihdev\WpModels\Contracts\TermRelationshipInterface;

/**
 * Class TermRelationshipDto
 *
 * DTO untuk menyimpan dan mengakses data relationship antara term dan taxonomy
 */
final class TermRelationshipDto implements TermRelationshipInterface
{
    /**
     * Membuat instance objek TermRelationshipDto dengan parameter yang ditentukan
     *
     * @param int $objectId ID objek (post ID atau object ID lainnya)
     * @param int $termTaxonomyId ID taksonomi term
     * @param int $termOrder Urutan term
     */
    public function __construct(
        private readonly int $objectId,
        private readonly int $termTaxonomyId,
        private readonly int $termOrder,
    ) {}

    /**
     * Mendapatkan ID objek (post ID atau object ID lainnya)
     *
     * @return int ID objek
     */
    public function getObjectId(): int
    {
        return $this->objectId;
    }

    /**
     * Mendapatkan ID taksonomi term
     *
     * @return int ID taksonomi term
     */
    public function getTermTaxonomyId(): int
    {
        return $this->termTaxonomyId;
    }

    /**
     * Mendapatkan urutan term
     *
     * @return int Urutan term
     */
    public function getTermOrder(): int
    {
        return $this->termOrder;
    }
}
