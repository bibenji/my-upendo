<?php

namespace AppBundle\GraphQL\Query\Post;

use AppBundle\Entity\Post;
use AppBundle\Entity\PostType;

use Youshido\GraphQL\Config\Field\FieldConfig;
use Youshido\GraphQL\Execution\ResolveInfo;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Type\Scalar\IntType;
use Youshido\GraphQLBundle\Field\AbstractContainerAwareField;

class PostsField extends AbstractContainerAwareField
{
    public function build(FieldConfig $config)
    {
        $config->setDescription("Liste tous les messages");
    }
	
    public function resolve($parentEntity, array $args, ResolveInfo $info)
    {
        $em = $this->container->get('doctrine')->getManager();
		
        $repository = $em->getRepository(Post::class);
        
		return $repository->findAll();
    }
	
    public function getType()
    {
        return new ListType(new PostType());
    }
}