<?php

namespace AppBundle\GraphQL\Query;

use AppBundle\GraphQL\Query\HelloWorld\HelloField;
use AppBundle\GraphQL\Query\Post\PostField;
use AppBundle\GraphQL\Query\Post\PostsField;
use AppBundle\GraphQL\Query\Comment\CommentsField;
use AppBundle\GraphQL\Query\User\UsersField;
use AppBundle\GraphQL\Query\User\UserField;
use AppBundle\GraphQL\Query\Profile\ProfilesField;
use AppBundle\GraphQL\Query\Profile\ProfileField;

use Youshido\GraphQL\Config\Object\ObjectTypeConfig;
use Youshido\GraphQL\Type\Object\AbstractObjectType;

class QueryType extends AbstractObjectType
{
    /**
     * @param ObjectTypeConfig $config
     *
     * @return mixed
     */
    public function build($config)
    {
        $config->addFields([
            new HelloField(),
            new PostField(),
            new PostsField(),
			new CommentsField(),
			new UsersField(),
			new UserField(),
			new ProfilesField(),
			new ProfileField(),
        ]);
    }
}