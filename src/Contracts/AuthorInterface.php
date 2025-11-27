<?php

declare(strict_types=1);

namespace Vigihdev\WpModels\Contracts;

/**
 * Interface AuthorInterface
 *
 * Interface untuk mendefinisikan struktur data author
 */
interface AuthorInterface
{
    /**
     * Mendapatkan ID dari author
     *
     * @return int ID dari author
     */
    public function getId(): int;

    /**
     * Mendapatkan login name dari author
     *
     * @return string Login name dari author
     */
    public function getUserLogin(): string;

    /**
     * Mendapatkan nice name dari author
     *
     * @return string Nice name dari author
     */
    public function getUserNicename(): string;

    /**
     * Mendapatkan email dari author
     *
     * @return string Email dari author
     */
    public function getUserEmail(): string;

    /**
     * Mendapatkan URL dari author
     *
     * @return string URL dari author
     */
    public function getUserUrl(): string;

    /**
     * Mendapatkan tanggal registrasi author
     *
     * @return string Tanggal registrasi author
     */
    public function getUserRegistered(): string;

    /**
     * Mendapatkan activation key dari author
     *
     * @return string Activation key dari author
     */
    public function getUserActivationKey(): string;

    /**
     * Mendapatkan status user dari author
     *
     * @return int Status user dari author
     */
    public function getUserStatus(): int;

    /**
     * Mendapatkan display name dari author
     *
     * @return string Display name dari author
     */
    public function getDisplayName(): string;
}
