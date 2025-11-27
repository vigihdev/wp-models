<?php

declare(strict_types=1);

namespace Vigihdev\WpModels\Repositories;

use Vigihdev\WpModels\Contracts\{PostInterface, PostRepositoryInterface};
use Vigihdev\WpModels\DTOs\{PostDto, TermDto};
use WP_Term;

final class PostRepository implements PostRepositoryInterface
{
    /**
     * Mengambil post secara acak
     *
     * @param int $limit Jumlah post yang diambil
     * @param array $args Additional WP_Query arguments
     * @return PostDto[] Array of PostDto objects
     */
    public static function randomPosts(int $limit = 7, array $args = []): array
    {
        $defaults = [
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'rand',
            'posts_per_page' => $limit,
        ];

        $query = new \WP_Query(array_merge($defaults, $args));

        return array_map(
            fn($post) => PostDto::fromPost($post),
            $query->posts
        );
    }

    /**
     * Mengambil post terbaru
     *
     * @param int $limit Jumlah post yang diambil
     * @param array $args Additional WP_Query arguments
     * @return PostDto[] Array of PostDto objects
     */
    public static function recentPosts(int $limit = 7, array $args = []): array
    {
        $defaults = [
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => $limit,
        ];

        $query = new \WP_Query(array_merge($defaults, $args));

        return array_map(
            fn($post) => PostDto::fromPost($post),
            $query->posts
        );
    }

    public function __construct(
        private readonly PostInterface $post,
    ) {}


    /**
     * Mengambil post terkait (memerlukan post context)
     *
     * @param int $limit Jumlah post yang diambil
     * @param array $args Additional WP_Query arguments
     * @return PostDto[] Array of PostDto objects
     * @throws \RuntimeException Jika tidak ada post context
     */
    public function relatedPosts(int $limit = 7, array $args = []): array
    {
        if (!$this->post) {
            throw new \RuntimeException('Post context diperlukan untuk related posts');
        }

        $defaults = [
            'post_type' => $this->post->getPostType(),
            'post_status' => $this->post->getPostStatus(),
            'posts_per_page' => $limit,
            'post__not_in' => [$this->post->getId()],
            'category__in' => wp_get_post_categories($this->post->getId()),
        ];

        $query = new \WP_Query(array_merge($defaults, $args));

        return array_map(
            fn($post) => PostDto::fromPost($post),
            $query->posts
        );
    }

    /**
     * Mengambil daftar kategori berdasarkan ID post
     *
     * @return TermDto[] Daftar kategori dalam format array objek TermDto
     */
    public function getCategories(): array
    {

        // Mengambil kategori menggunakan WordPress API
        $categories = wp_get_post_categories($this->post->getId(), ['fields' => 'all']);

        // Jika tidak ada kategori, kembalikan array kosong
        if (empty($categories)) {
            return [];
        }

        // Konversi kategori ke objek TermDto
        $result = [];
        foreach ($categories as $category) {
            if ($category instanceof WP_Term) {
                $result[] = TermDto::fromTerm(term: $category);
            }
        }

        return $result;
    }
}
