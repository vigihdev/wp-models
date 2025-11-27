<?php

declare(strict_types=1);

namespace Vigihdev\WpModels\Contracts;

/**
 * Interface PostInterface
 *
 * Interface untuk mendefinisikan struktur data post
 */
interface PostInterface
{
    /**
     * Mendapatkan ID dari post
     *
     * @return int ID dari post
     */
    public function getId(): int;

    /**
     * Mendapatkan ID author dari post
     *
     * @return int ID author dari post
     */
    public function getPostAuthor(): int;

    /**
     * Mendapatkan tanggal pembuatan post
     *
     * @return string Tanggal pembuatan post
     */
    public function getPostDate(): string;

    /**
     * Mendapatkan tanggal pembuatan post dalam GMT
     *
     * @return string Tanggal pembuatan post dalam GMT
     */
    public function getPostDateGmt(): string;

    /**
     * Mendapatkan konten dari post
     *
     * @return string Konten dari post
     */
    public function getPostContent(): string;

    /**
     * Mendapatkan judul dari post
     *
     * @return string Judul dari post
     */
    public function getPostTitle(): string;

    /**
     * Mendapatkan kutipan dari post
     *
     * @return string Kutipan dari post
     */
    public function getPostExcerpt(): string;

    /**
     * Mendapatkan status dari post
     *
     * @return string Status dari post
     */
    public function getPostStatus(): string;

    /**
     * Mendapatkan status komentar dari post
     *
     * @return string Status komentar dari post
     */
    public function getCommentStatus(): string;

    /**
     * Mendapatkan status ping dari post
     *
     * @return string Status ping dari post
     */
    public function getPingStatus(): string;

    /**
     * Mendapatkan password dari post
     *
     * @return string Password dari post
     */
    public function getPostPassword(): string;

    /**
     * Mendapatkan nama post (slug)
     *
     * @return string Nama post
     */
    public function getPostName(): string;

    /**
     * Mendapatkan daftar URL yang akan di-ping
     *
     * @return string Daftar URL yang akan di-ping
     */
    public function getToPing(): string;

    /**
     * Mendapatkan daftar URL yang sudah di-ping
     *
     * @return string Daftar URL yang sudah di-ping
     */
    public function getPinged(): string;

    /**
     * Mendapatkan tanggal modifikasi post
     *
     * @return string Tanggal modifikasi post
     */
    public function getPostModified(): string;

    /**
     * Mendapatkan tanggal modifikasi post dalam GMT
     *
     * @return string Tanggal modifikasi post dalam GMT
     */
    public function getPostModifiedGmt(): string;

    /**
     * Mendapatkan konten yang telah difilter dari post
     *
     * @return string Konten yang telah difilter dari post
     */
    public function getPostContentFiltered(): string;

    /**
     * Mendapatkan ID parent dari post
     *
     * @return int ID parent dari post
     */
    public function getPostParent(): int;

    /**
     * Mendapatkan GUID dari post
     *
     * @return string GUID dari post
     */
    public function getGuid(): string;

    /**
     * Mendapatkan urutan menu dari post
     *
     * @return int Urutan menu dari post
     */
    public function getMenuOrder(): int;

    /**
     * Mendapatkan tipe post
     *
     * @return string Tipe post
     */
    public function getPostType(): string;

    /**
     * Mendapatkan tipe MIME dari post
     *
     * @return string Tipe MIME dari post
     */
    public function getPostMimeType(): string;

    /**
     * Mendapatkan jumlah komentar dari post
     *
     * @return int Jumlah komentar dari post
     */
    public function getCommentCount(): int;
}
