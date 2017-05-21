<?php

namespace AppBundle\Entity;

use Youshido\GraphQL\Type\InputObject\AbstractInputObjectType;
use Youshido\GraphQL\Type\Scalar\StringType;

class UserTypeInput extends AbstractInputObjectType
{
    public function build($config)
    {		
        $config->addFields([
            'username' => new StringType(),
            'email' => new StringType(),
            'gender' => new StringType(),
            'phone' => new StringType(),
            'firstname' => new StringType(),
            'lastname' => new StringType(),			
            'region' => new StringType(),			
        ]);
    }
}