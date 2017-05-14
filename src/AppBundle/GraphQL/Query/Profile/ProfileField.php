<?php

namespace AppBundle\GraphQL\Query\Profile;

use AppBundle\Entity\Profile;
use AppBundle\Entity\ProfileType;

use Youshido\GraphQL\Config\Field\FieldConfig;
use Youshido\GraphQL\Type\NonNullType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQL\Execution\ResolveInfo;
use Youshido\GraphQLBundle\Field\AbstractContainerAwareField;

class ProfileField extends AbstractContainerAwareField
{
    public function build(FieldConfig $config)
    {
        $config->addArgument("id", new NonNullType(new StringType()));
        $config->setDescription("Retourne un seul profile");
    }
	
    public function resolve($parent, array $args, ResolveInfo $info)
    {
        $em = $this->container->get('doctrine')->getManager();
        $repository = $em->getRepository(Profile::class);
        return $repository->find($args['id']);
    }
    
	public function getType()
    {
        return new ProfileType();
    }
}