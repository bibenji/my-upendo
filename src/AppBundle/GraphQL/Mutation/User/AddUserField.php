<?php

namespace AppBundle\GraphQL\Mutation\User;

use AppBundle\Entity\User;
use AppBundle\Entity\UserType;
use AppBundle\Entity\UserTypeInput;

use Doctrine\ORM\EntityManager;

use Youshido\GraphQL\Config\Field\FieldConfig;
use Youshido\GraphQL\Execution\ResolveInfo;
use Youshido\GraphQL\Type\NonNullType;
use Youshido\GraphQLBundle\Field\AbstractContainerAwareField;

class AddUserField extends AbstractContainerAwareField
{
    public function build(FieldConfig $config)
    {	
        $config->addArguments([
            "user" => new NonNullType(new UserTypeInput()),
            // "user" => new UserTypeInput(),            
        ]);
		
        $config->setDescription("Créer un nouvel utilisateur");
    }
    public function resolve($parent, array $args, ResolveInfo $info)
    {		
        /** @var EntityManager $em */
        $em = $this->container->get('doctrine')->getManager();
        $user = new User();
        $user->setUsername($args['user']['username']);
        $user->setEmail($args['user']['email']);
        $user->setGender($args['user']['gender']);
        $user->setPhone($args['user']['phone']);
        $user->setFirstname($args['user']['firstname']);
        $user->setLastname($args['user']['lastname']);
        $user->setRegion($args['user']['region']);
        $em->persist($user);
        $em->flush();
        return $user;
    }
	
    public function getType()
    {	
		// dump('coucou la'); exit;
        return new UserType();
    }
}