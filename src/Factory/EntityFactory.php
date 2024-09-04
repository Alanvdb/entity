<?php declare(strict_types=1);

namespace AlanVdb\Entity\Factory;

use AlanVdb\Entity\Post;
use AlanVdb\Entity\Image;
use AlanVdb\Entity\Tag;
use AlanVdb\Entity\Video;

class EntityFactory
{
    protected ValidatorFactory $validatorFactory;

    public function __construct(ValidatorFactory $validatorFactory)
    {
        $this->validatorFactory = $validatorFactory;
    }

    public function createPost() : Post
    {
        return new Post($this->validatorFactory);
    }

    public function createImage() : Image
    {
        return new Image($this->validatorFactory);
    }

    public function createTag() : Tag
    {
        return new Tag($this->validatorFactory);
    }

    public function createVideo() : Video
    {
        return new Video($this->validatorFactory);
    }
}
