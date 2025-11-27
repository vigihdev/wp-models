<?php

declare(strict_types=1);

namespace Vigihdev\WpModels\DTOs;

use Vigihdev\WpModels\Contracts\TermInterface;
use WP_Term;

/**
 * Class TermDto
 *
 * DTO untuk menyimpan dan mengakses data term
 */
final class TermDto implements TermInterface
{
    /**
     * Membuat instance objek TermDto dengan parameter yang ditentukan
     *
     * @param int $termId ID dari term
     * @param string $name Nama dari term
     * @param string $slug Slug dari term
     * @param int $termGroup Group dari term
     */
    public function __construct(
        private readonly int $termId,
        private readonly string $name,
        private readonly string $slug,
        private readonly int $termGroup,
    ) {}

    /**
     * Membuat instance objek TermDto berdasarkan WP_Term
     *
     * @param WP_Term $term Objek term WordPress yang akan dikonversi
     * @return self Instance TermDto yang dibuat dari term
     */
    public static function fromTerm(WP_Term $term): static
    {
        return new self(
            termId: (int) $term->term_id,
            name: (string) $term->name,
            slug: (string) $term->slug,
            termGroup: (int) $term->term_group,
        );
    }


    /**
     * Mendapatkan ID dari term
     *
     * @return int ID dari term
     */
    public function getTermId(): int
    {
        return $this->termId;
    }

    /**
     * Mendapatkan nama dari term
     *
     * @return string Nama dari term
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Mendapatkan slug dari term
     *
     * @return string Slug dari term
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * Mendapatkan group dari term
     *
     * @return int Group dari term
     */
    public function getTermGroup(): int
    {
        return $this->termGroup;
    }
}
