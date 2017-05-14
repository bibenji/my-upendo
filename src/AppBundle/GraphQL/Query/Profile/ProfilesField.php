<?php

namespace AppBundle\GraphQL\Query\Profile;

use AppBundle\Entity\Profile;
use AppBundle\Entity\ProfileType;

use Youshido\GraphQL\Config\Field\FieldConfig;
use Youshido\GraphQL\Execution\ResolveInfo;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Type\Scalar\IntType;
use Youshido\GraphQLBundle\Field\AbstractContainerAwareField;

class ProfilesField extends AbstractContainerAwareField
{
    public function build(FieldConfig $config)
    {
        $config->setDescription("Liste tous les profiles");
    }
	
    public function resolve($parentEntity, array $args, ResolveInfo $info)
    {
        $em = $this->container->get('doctrine')->getManager();
		
        $repository = $em->getRepository(Profile::class);
        
		return $repository->findAll();
    }
	
    public function getType()
    {
        return new ListType(new ProfileType());
    }
}