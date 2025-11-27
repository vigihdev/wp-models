<?php

declare(strict_types=1);

namespace Vigihdev\WpModels\DTOs;

use Vigihdev\WpModels\Contracts\TermTaxonomyInterface;
use WP_Taxonomy;

final class TermTaxonomyDto implements TermTaxonomyInterface
{

    /**
     * Membuat instance objek dengan parameter yang ditentukan
     *
     * @param int|null $termTaxonomyId ID taksonomi istilah
     * @param int|null $termId ID istilah
     * @param string|null $taxonomy Jenis taksonomi
     * @param string|null $description Deskripsi istilah
     * @param int|null $parent ID parent istilah
     * @param int|null $count Jumlah item terkait
     */
    public function __construct(
        private readonly ?int $termTaxonomyId = null,
        private readonly ?int $termId = null,
        private readonly ?string $taxonomy = null,
        private readonly ?string $description = '',
        private readonly ?int $parent = 0,
        private readonly ?int $count = 0,
    ) {}

    /**
     * Membuat instance objek TermTaxonomyDto berdasarkan data TermTaxonomy
     *
     * @param object $termTaxonomy Objek TermTaxonomy yang akan dikonversi
     * @return self Instance TermTaxonomyDto hasil konversi
     */
    public static function fromTermTaxonomy(object $termTaxonomy): self
    {
        return new self(
            termTaxonomyId: (int) $termTaxonomy->term_taxonomy_id,
            termId: (int) $termTaxonomy->term_id,
            taxonomy: (string) $termTaxonomy->taxonomy,
            description: (string) $termTaxonomy->description,
            parent: (int) $termTaxonomy->parent,
            count: (int) $termTaxonomy->count,
        );
    }

    /**
     * Mengambil nilai ID taksonomi term
     *
     * @return int Hasil ID taksonomi term dalam format integer
     */
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

    /**
     * Mengambil nilai taxonomy
     *
     * @return string|null Hasil nilai taxonomy dalam format string atau null jika tidak tersedia
     */
    public function getTaxonomy(): ?string
    {
        return $this->taxonomy;
    }

    /**
     * Mengambil deskripsi
     *
     * @return string|null Hasil deskripsi dalam format string atau null jika tidak tersedia
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Mendapatkan nilai parent
     *
     * @return int Nilai parent dalam format integer
     */
    public function getParent(): int
    {
        return $this->parent;
    }

    /**
     * Mendapatkan nilai count saat ini
     *
     * @return int Hasil count dalam format integer
     */
    public function getCount(): int
    {
        return $this->count;
    }
}
