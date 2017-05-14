<?php

namespace AppBundle\GraphQL\Query\User;

use AppBundle\Entity\User;
use AppBundle\Entity\UserType;

use Youshido\GraphQL\Config\Field\FieldConfig;
use Youshido\GraphQL\Execution\ResolveInfo;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Type\Scalar\IntType;
use Youshido\GraphQLBundle\Field\AbstractContainerAwareField;

class UsersField extends AbstractContainerAwareField
{
    public function build(FieldConfig $config)
    {
        $config->setDescription("Liste tous les users");
    }
	
    public function resolve($parentEntity, array $args, ResolveInfo $info)
    {
        $em = $this->container->get('doctrine')->getManager();
		
        $repository = $em->getRepository(User::class);
        
		return $repository->findAll();
    }
	
    public function getType()
    {
        return new ListType(new UserType());
    }
}