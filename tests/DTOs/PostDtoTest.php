<?php

declare(strict_types=1);

namespace Vigihdev\WpModels\Tests;

use Vigihdev\WpModels\DTOs\PostDto;

/**
 * Class PostDtoTest
 *
 * Unit tests untuk PostDto class
 */
class PostDtoTest extends TestCase
{
    /**
     * Menguji inisialisasi PostDto dengan nilai default
     *
     * @return void
     */
    public function testInitializeWithDefaultValues(): void
    {
        $postDto = new PostDto();

        $this->assertEquals(0, $postDto->getId());
        $this->assertEquals(0, $postDto->getPostAuthor());
        $this->assertEquals('0000-00-00 00:00:00', $postDto->getPostDate());
        $this->assertEquals('0000-00-00 00:00:00', $postDto->getPostDateGmt());
        $this->assertEquals('', $postDto->getPostContent());
        $this->assertEquals('', $postDto->getPostTitle());
        $this->assertEquals('', $postDto->getPostExcerpt());
        $this->assertEquals('publish', $postDto->getPostStatus());
        $this->assertEquals('open', $postDto->getCommentStatus());
        $this->assertEquals('open', $postDto->getPingStatus());
        $this->assertEquals('', $postDto->getPostPassword());
        $this->assertEquals('', $postDto->getPostName());
        $this->assertEquals('', $postDto->getToPing());
        $this->assertEquals('', $postDto->getPinged());
        $this->assertEquals('0000-00-00 00:00:00', $postDto->getPostModified());
        $this->assertEquals('0000-00-00 00:00:00', $postDto->getPostModifiedGmt());
        $this->assertEquals('', $postDto->getPostContentFiltered());
        $this->assertEquals(0, $postDto->getPostParent());
        $this->assertEquals('', $postDto->getGuid());
        $this->assertEquals(0, $postDto->getMenuOrder());
        $this->assertEquals('post', $postDto->getPostType());
        $this->assertEquals('', $postDto->getPostMimeType());
        $this->assertEquals(0, $postDto->getCommentCount());
    }

    /**
     * Menguji inisialisasi PostDto dengan nilai kustom
     *
     * @return void
     */
    public function testInitializeWithCustomValues(): void
    {
        $customValues = [
            'id' => 1,
            'postAuthor' => 2,
            'postDate' => '2023-01-01 00:00:00',
            'postDateGmt' => '2023-01-01 00:00:00',
            'postContent' => 'Sample content',
            'postTitle' => 'Sample Title',
            'postExcerpt' => 'Sample excerpt',
            'postStatus' => 'draft',
            'commentStatus' => 'closed',
            'pingStatus' => 'closed',
            'postPassword' => 'password123',
            'postName' => 'sample-post',
            'toPing' => 'http://example.com/ping',
            'pinged' => 'http://example.com/pinged',
            'postModified' => '2023-01-02 00:00:00',
            'postModifiedGmt' => '2023-01-02 00:00:00',
            'postContentFiltered' => 'Filtered content',
            'postParent' => 3,
            'guid' => 'http://example.com/?p=1',
            'menuOrder' => 10,
            'postType' => 'page',
            'postMimeType' => 'text/html',
            'commentCount' => 5
        ];

        $postDto = new PostDto(
            $customValues['id'],
            $customValues['postAuthor'],
            $customValues['postDate'],
            $customValues['postDateGmt'],
            $customValues['postContent'],
            $customValues['postTitle'],
            $customValues['postExcerpt'],
            $customValues['postStatus'],
            $customValues['commentStatus'],
            $customValues['pingStatus'],
            $customValues['postPassword'],
            $customValues['postName'],
            $customValues['toPing'],
            $customValues['pinged'],
            $customValues['postModified'],
            $customValues['postModifiedGmt'],
            $customValues['postContentFiltered'],
            $customValues['postParent'],
            $customValues['guid'],
            $customValues['menuOrder'],
            $customValues['postType'],
            $customValues['postMimeType'],
            $customValues['commentCount']
        );

        $this->assertEquals($customValues['id'], $postDto->getId());
        $this->assertEquals($customValues['postAuthor'], $postDto->getPostAuthor());
        $this->assertEquals($customValues['postDate'], $postDto->getPostDate());
        $this->assertEquals($customValues['postDateGmt'], $postDto->getPostDateGmt());
        $this->assertEquals($customValues['postContent'], $postDto->getPostContent());
        $this->assertEquals($customValues['postTitle'], $postDto->getPostTitle());
        $this->assertEquals($customValues['postExcerpt'], $postDto->getPostExcerpt());
        $this->assertEquals($customValues['postStatus'], $postDto->getPostStatus());
        $this->assertEquals($customValues['commentStatus'], $postDto->getCommentStatus());
        $this->assertEquals($customValues['pingStatus'], $postDto->getPingStatus());
        $this->assertEquals($customValues['postPassword'], $postDto->getPostPassword());
        $this->assertEquals($customValues['postName'], $postDto->getPostName());
        $this->assertEquals($customValues['toPing'], $postDto->getToPing());
        $this->assertEquals($customValues['pinged'], $postDto->getPinged());
        $this->assertEquals($customValues['postModified'], $postDto->getPostModified());
        $this->assertEquals($customValues['postModifiedGmt'], $postDto->getPostModifiedGmt());
        $this->assertEquals($customValues['postContentFiltered'], $postDto->getPostContentFiltered());
        $this->assertEquals($customValues['postParent'], $postDto->getPostParent());
        $this->assertEquals($customValues['guid'], $postDto->getGuid());
        $this->assertEquals($customValues['menuOrder'], $postDto->getMenuOrder());
        $this->assertEquals($customValues['postType'], $postDto->getPostType());
        $this->assertEquals($customValues['postMimeType'], $postDto->getPostMimeType());
        $this->assertEquals($customValues['commentCount'], $postDto->getCommentCount());
    }
}
