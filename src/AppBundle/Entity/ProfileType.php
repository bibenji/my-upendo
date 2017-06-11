<?php

namespace AppBundle\Entity;

use AppBundle\Entity\ProfileType;

use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Object\ObjectType;
use Youshido\GraphQL\Type\Scalar\IdType;
use Youshido\GraphQL\Type\Scalar\IntType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQL\Type\Scalar\AbstractScalarType;

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
			'criteria' => [
                // 'type' => new ObjectType([
					// "searching" => [
						// "type" => new StringType(),
						// "description" => "criteria_searching",
						// "resolve" => function() { return 'coucou';}
					// ],
					// "searching" => [
						// "type" => new IntType(),
						// "description" => "criteria_age_min",
						// "resolve" => function() { return 'coucou';}
					// ],					
					// 'age_max' => ["type" => new IntType(), "description" => "criteria_age_max"],
				// ]),
				'type' => new StringType(),
				'resolve' => function($obj) { return(json_encode([
					'searching' => $obj->getCriteria()[0],
					'age_min' => $obj->getCriteria()[1],
					'age_max' => $obj->getCriteria()[2],
				]));},
                'description' => "Criteria"
            ],
			'profileData' => [
				'type' => new StringType(),
				'resolve' => function($obj) { return(json_encode([
					'weight' => $obj->getProfileData()[0],
					'size' => $obj->getProfileData()[1],
					'eyes_color' => $obj->getProfileData()[2],
					'hair_color' => $obj->getProfileData()[3],
				]));},
				'description' => 'ProfileData'			
			],
			'profileLikes' => [
				'type' => new StringType(),
				'resolve' => function($obj) { return(json_encode([
					'music' => $obj->getProfileLikes()[0],
					'cinema' => $obj->getProfileLikes()[1],
					'books' => $obj->getProfileLikes()[2],
					'hobbies' => $obj->getProfileLikes()[3],
					'traveling' => $obj->getProfileLikes()[4],
					'television' => $obj->getProfileLikes()[5],
					'sports' => $obj->getProfileLikes()[6],
				]));},
				'description' => 'ProfileData'
			],
        ]);
        
        $config->setDescription("Profile");
    }
}