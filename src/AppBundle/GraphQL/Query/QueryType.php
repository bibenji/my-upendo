<?php

namespace AppBundle\GraphQL\Query;

// use AppBundle\GraphQL\Query\HelloWorld\HelloField;
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
            // new HelloField(),           
			new UsersField(),
			new UserField(),
			new ProfilesField(),
			new ProfileField(),
        ]);
    }
}