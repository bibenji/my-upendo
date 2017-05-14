<?php

namespace AppBundle\Entity;

use AppBundle\Entity\PostType;

use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\IdType;
use Youshido\GraphQL\Type\Scalar\StringType;

class CommentType extends AbstractObjectType 
{
    /**
     * @param \Youshido\GraphQL\Config\Object\ObjectTypeConfig $config
     */
    public function build($config)
    {
        $config->addFields([
            'id' => new IdType(),
            'author' => [
                'type' => new StringType(),
                'description' => "Auteur"
            ],
            'content' => [
                'type' => new StringType(),
                'description' => "Contenu"
            ],
            'post' => [
                'type' =>new PostType(),
                'description' => "Post lié"
            ],
        ]);
        
        $config->setDescription("Commentaire");
    }
}