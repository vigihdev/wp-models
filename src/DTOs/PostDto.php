<?php

declare(strict_types=1);

namespace Vigihdev\WpModels\DTOs;

use WP_Post;
use Vigihdev\WpModels\Contracts\PostInterface;

/**
 * Class PostDto
 *
 * DTO untuk menyimpan dan mengakses data post
 */
final class PostDto implements PostInterface
{
    /**
     * Membuat instance objek PostDto dengan parameter yang ditentukan
     *
     * @param int $id ID dari post
     * @param int $postAuthor ID author dari post
     * @param string $postDate Tanggal pembuatan post
     * @param string $postDateGmt Tanggal pembuatan post dalam GMT
     * @param string $postContent Konten dari post
     * @param string $postTitle Judul dari post
     * @param string $postExcerpt Kutipan dari post
     * @param string $postStatus Status dari post
     * @param string $commentStatus Status komentar dari post
     * @param string $pingStatus Status ping dari post
     * @param string $postPassword Password dari post
     * @param string $postName Nama post (slug)
     * @param string $toPing Daftar URL yang akan di-ping
     * @param string $pinged Daftar URL yang sudah di-ping
     * @param string $postModified Tanggal modifikasi post
     * @param string $postModifiedGmt Tanggal modifikasi post dalam GMT
     * @param string $postContentFiltered Konten yang telah difilter dari post
     * @param int $postParent ID parent dari post
     * @param string $guid GUID dari post
     * @param int $menuOrder Urutan menu dari post
     * @param string $postType Tipe post
     * @param string $postMimeType Tipe MIME dari post
     * @param int $commentCount Jumlah komentar dari post
     */
    public function __construct(
        private readonly int $id = 0,
        private readonly int $postAuthor = 0,
        private readonly string $postDate = '0000-00-00 00:00:00',
        private readonly string $postDateGmt = '0000-00-00 00:00:00',
        private readonly string $postContent = '',
        private readonly string $postTitle = '',
        private readonly string $postExcerpt = '',
        private readonly string $postStatus = 'publish',
        private readonly string $commentStatus = 'open',
        private readonly string $pingStatus = 'open',
        private readonly string $postPassword = '',
        private readonly string $postName = '',
        private readonly string $toPing = '',
        private readonly string $pinged = '',
        private readonly string $postModified = '0000-00-00 00:00:00',
        private readonly string $postModifiedGmt = '0000-00-00 00:00:00',
        private readonly string $postContentFiltered = '',
        private readonly int $postParent = 0,
        private readonly string $guid = '',
        private readonly int $menuOrder = 0,
        private readonly string $postType = 'post',
        private readonly string $postMimeType = '',
        private readonly int $commentCount = 0,
    ) {}

    /**
     * Membuat instance PostDto dari objek WP_Post
     *
     * @param WP_Post $post Objek WordPress post yang akan dikonversi
     * @return self Instance PostDto baru
     */
    public static function fromPost(WP_Post $post): self
    {
        return new self(
            id: (int) $post->ID,
            postAuthor: (int) $post->post_author,
            postDate: $post->post_date,
            postDateGmt: $post->post_date_gmt,
            postContent: $post->post_content,
            postTitle: $post->post_title,
            postExcerpt: $post->post_excerpt,
            postStatus: $post->post_status,
            commentStatus: $post->comment_status,
            pingStatus: $post->ping_status,
            postPassword: $post->post_password,
            postName: $post->post_name,
            toPing: $post->to_ping,
            pinged: $post->pinged,
            postModified: $post->post_modified,
            postModifiedGmt: $post->post_modified_gmt,
            postContentFiltered: $post->post_content_filtered,
            postParent: (int) $post->post_parent,
            guid: $post->guid,
            menuOrder: (int) $post->menu_order,
            postType: $post->post_type,
            postMimeType: $post->post_mime_type,
            commentCount: (int) $post->comment_count,
        );
    }

    /**
     * Mendapatkan ID dari post
     *
     * @return int ID dari post
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Mendapatkan ID author dari post
     *
     * @return int ID author dari post
     */
    public function getPostAuthor(): int
    {
        return $this->postAuthor;
    }

    /**
     * Mendapatkan tanggal pembuatan post
     *
     * @return string Tanggal pembuatan post
     */
    public function getPostDate(): string
    {
        return $this->postDate;
    }

    /**
     * Mendapatkan tanggal pembuatan post dalam GMT
     *
     * @return string Tanggal pembuatan post dalam GMT
     */
    public function getPostDateGmt(): string
    {
        return $this->postDateGmt;
    }

    /**
     * Mendapatkan konten dari post
     *
     * @return string Konten dari post
     */
    public function getPostContent(): string
    {
        return $this->postContent;
    }

    /**
     * Mendapatkan judul dari post
     *
     * @return string Judul dari post
     */
    public function getPostTitle(): string
    {
        return $this->postTitle;
    }

    /**
     * Mendapatkan kutipan dari post
     *
     * @return string Kutipan dari post
     */
    public function getPostExcerpt(): string
    {
        return $this->postExcerpt;
    }

    /**
     * Mendapatkan status dari post
     *
     * @return string Status dari post
     */
    public function getPostStatus(): string
    {
        return $this->postStatus;
    }

    /**
     * Mendapatkan status komentar dari post
     *
     * @return string Status komentar dari post
     */
    public function getCommentStatus(): string
    {
        return $this->commentStatus;
    }

    /**
     * Mendapatkan status ping dari post
     *
     * @return string Status ping dari post
     */
    public function getPingStatus(): string
    {
        return $this->pingStatus;
    }

    /**
     * Mendapatkan password dari post
     *
     * @return string Password dari post
     */
    public function getPostPassword(): string
    {
        return $this->postPassword;
    }

    /**
     * Mendapatkan nama post (slug)
     *
     * @return string Nama post
     */
    public function getPostName(): string
    {
        return $this->postName;
    }

    /**
     * Mendapatkan daftar URL yang akan di-ping
     *
     * @return string Daftar URL yang akan di-ping
     */
    public function getToPing(): string
    {
        return $this->toPing;
    }

    /**
     * Mendapatkan daftar URL yang sudah di-ping
     *
     * @return string Daftar URL yang sudah di-ping
     */
    public function getPinged(): string
    {
        return $this->pinged;
    }

    /**
     * Mendapatkan tanggal modifikasi post
     *
     * @return string Tanggal modifikasi post
     */
    public function getPostModified(): string
    {
        return $this->postModified;
    }

    /**
     * Mendapatkan tanggal modifikasi post dalam GMT
     *
     * @return string Tanggal modifikasi post dalam GMT
     */
    public function getPostModifiedGmt(): string
    {
        return $this->postModifiedGmt;
    }

    /**
     * Mendapatkan konten yang telah difilter dari post
     *
     * @return string Konten yang telah difilter dari post
     */
    public function getPostContentFiltered(): string
    {
        return $this->postContentFiltered;
    }

    /**
     * Mendapatkan ID parent dari post
     *
     * @return int ID parent dari post
     */
    public function getPostParent(): int
    {
        return $this->postParent;
    }

    /**
     * Mendapatkan GUID dari post
     *
     * @return string GUID dari post
     */
    public function getGuid(): string
    {
        return $this->guid;
    }

    /**
     * Mendapatkan urutan menu dari post
     *
     * @return int Urutan menu dari post
     */
    public function getMenuOrder(): int
    {
        return $this->menuOrder;
    }

    /**
     * Mendapatkan tipe post
     *
     * @return string Tipe post
     */
    public function getPostType(): string
    {
        return $this->postType;
    }

    /**
     * Mendapatkan tipe MIME dari post
     *
     * @return string Tipe MIME dari post
     */
    public function getPostMimeType(): string
    {
        return $this->postMimeType;
    }

    /**
     * Mendapatkan jumlah komentar dari post
     *
     * @return int Jumlah komentar dari post
     */
    public function getCommentCount(): int
    {
        return $this->commentCount;
    }
}
