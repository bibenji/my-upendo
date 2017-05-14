<?php

namespace AppBundle\Entity;

use AppBundle\Entity\ProfileType;

use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\IdType;
use Youshido\GraphQL\Type\Scalar\StringType;

class ProfileType extends AbstractObjectType 
{
    /**
     * @param \Youshido\GraphQL\Config\Object\ObjectTypeConfig $config
     */
    public function build($config)
    {
        $config->addFields([
			'id' => new StringType(),
            'description' => [
                'type' => new StringType(),
                'description' => "Description"
            ],
            'searching' => [
                'type' => new StringType(),
                'description' => "Searching"
            ],
        ]);
        
        $config->setDescription("Profile");
    }
}