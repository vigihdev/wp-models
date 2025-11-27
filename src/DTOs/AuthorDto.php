<?php

declare(strict_types=1);

namespace Vigihdev\WpModels\DTOs;

use Vigihdev\WpModels\Contracts\AuthorInterface;
use WP_User;

/**
 * Class AuthorDto
 *
 * DTO untuk menyimpan dan mengakses data author
 */
final class AuthorDto implements AuthorInterface
{
    /**
     * Membuat instance objek AuthorDto dengan parameter yang ditentukan
     *
     * @param int $id ID dari author
     * @param string $userLogin Login name dari author
     * @param string $userNicename Nice name dari author
     * @param string $userEmail Email dari author
     * @param string $userUrl URL dari author
     * @param string $userRegistered Tanggal registrasi author
     * @param string $userActivationKey Activation key dari author
     * @param int $userStatus Status user dari author
     * @param string $displayName Display name dari author
     */
    public function __construct(
        private readonly int $id = 0,
        private readonly string $userLogin = '',
        private readonly string $userNicename = '',
        private readonly string $userEmail = '',
        private readonly string $userUrl = '',
        private readonly string $userRegistered = '0000-00-00 00:00:00',
        private readonly string $userActivationKey = '',
        private readonly int $userStatus = 0,
        private readonly string $displayName = '',
    ) {}

    /**
     * Membuat instance AuthorDto dari objek WP_User
     *
     * @param WP_User $user Objek WordPress user yang akan dikonversi
     * @return self Instance AuthorDto baru
     */
    public static function fromUser(WP_User $user): self
    {
        return new self(
            id: (int) $user->ID,
            userLogin: (string) $user->user_login,
            userNicename: (string) $user->user_nicename,
            userEmail: (string) $user->user_email,
            userUrl: (string) $user->user_url,
            userRegistered: (string) $user->user_registered,
            userActivationKey: (string) $user->user_activation_key,
            userStatus: (int) $user->user_status,
            displayName: (string) $user->display_name,
        );
    }

    /**
     * Mendapatkan ID dari author
     *
     * @return int ID dari author
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Mendapatkan login name dari author
     *
     * @return string Login name dari author
     */
    public function getUserLogin(): string
    {
        return $this->userLogin;
    }


    /**
     * Mendapatkan nice name dari author
     *
     * @return string Nice name dari author
     */
    public function getUserNicename(): string
    {
        return $this->userNicename;
    }

    /**
     * Mendapatkan email dari author
     *
     * @return string Email dari author
     */
    public function getUserEmail(): string
    {
        return $this->userEmail;
    }

    /**
     * Mendapatkan URL dari author
     *
     * @return string URL dari author
     */
    public function getUserUrl(): string
    {
        return $this->userUrl;
    }

    /**
     * Mendapatkan tanggal registrasi author
     *
     * @return string Tanggal registrasi author
     */
    public function getUserRegistered(): string
    {
        return $this->userRegistered;
    }

    /**
     * Mendapatkan activation key dari author
     *
     * @return string Activation key dari author
     */
    public function getUserActivationKey(): string
    {
        return $this->userActivationKey;
    }

    /**
     * Mendapatkan status user dari author
     *
     * @return int Status user dari author
     */
    public function getUserStatus(): int
    {
        return $this->userStatus;
    }

    /**
     * Mendapatkan display name dari author
     *
     * @return string Display name dari author
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }
}
