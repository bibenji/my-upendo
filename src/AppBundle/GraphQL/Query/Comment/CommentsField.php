<?php

namespace AppBundle\GraphQL\Query\Comment;

use AppBundle\Entity\Comment;
use AppBundle\Entity\CommentType;

use Youshido\GraphQL\Config\Field\FieldConfig;
use Youshido\GraphQL\Execution\ResolveInfo;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Type\Scalar\IntType;
use Youshido\GraphQLBundle\Field\AbstractContainerAwareField;

class CommentsField extends AbstractContainerAwareField
{
    public function build(FieldConfig $config)
    {
        $config->setDescription("Liste tous les commentaires");
    }
	
    public function resolve($parentEntity, array $args, ResolveInfo $info)
    {
        $em = $this->container->get('doctrine')->getManager();
		
        $repository = $em->getRepository(Comment::class);
        
		return $repository->findAll();
    }
	
    public function getType()
    {
        return new ListType(new CommentType());
    }
}