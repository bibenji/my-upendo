<?php

namespace AppBundle\Entity;

use AppBundle\Entity\ProfileType;

use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\DateTimeType;
use Youshido\GraphQL\Type\Scalar\IdType;
use Youshido\GraphQL\Type\Scalar\StringType;

class UserType extends AbstractObjectType
{
    /**
     * @param \Youshido\GraphQL\Config\Object\ObjectTypeConfig $config
     */
    public function build($config)
    {
        $config->addFields([
            'id' => new StringType(),
            'username' => [
                'type' => new StringType(),
                'description' => "Username"
            ],
            'email' => [
                'type' => new StringType(),
                'description' => "Email"
            ],
            'gender' => [
                'type' => new StringType(),
                'description' => "Gender"
            ],
            'phone' => [
                'type' => new StringType(),
                'description' => "Phone"
            ],			
            'firstname' => [
                'type' => new StringType(),
                'description' => "Firstname"
            ],			
			'lastname' => [
                'type' => new StringType(),
                'description' => "Lastname"
            ],
			'profile' => [
				'type' => new ProfileType(),
				'description' => "Profile"			
			],
        ]);
		
        $config->setDescription("User");
    }
}