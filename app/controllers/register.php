<?php

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FormType;
// use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use SoundCloudApp\Providers\UserProvider;

// Gère la route de l'inscription
$app->match('/inscription', function (Request $request) use ($app) {
    $data = array();

    // Génére un form avec les champs nécessaires
    $form = $app['form.factory']->createBuilder(FormType::class, $data)
    ->add(
        'username',
        TextType::class,
        array(
          'label' => false,
          'attr' => array('placeholder' => 'Username', 'class' => 'form-control'),
        )
    )
    ->add(
        'plainPassword',
        RepeatedType::class,
        array(
            'type' => PasswordType::class,
            'invalid_message' => 'The password fields must match.',
            'required' => true,
            'first_options' => array(
            'label' => false,
            'attr' => array('placeholder' => 'Mot de passe', 'class' => 'form-control')),
            'second_options' => array(
            'label' => false,
            'attr' => array('placeholder' => 'Confirmation de mot de passe', 'class' => 'form-control')),
        )
    )
    ->getForm();

    // Fait en sorte que le form répond aux requêtes HTTP
    $form->handleRequest($request);

    if ($form->isValid()) {
        // Si le formulaire est valide (pas de champs pas/mal rempli) on peu extraire les données
        $data = $form->getData();

        // On prépare notre gestionnaire d'utilisateur
        $userProvider = new UserProvider($app['db']);

        if (!$userProvider->usernameExists($data['username'])) {
            // Si c'est bien un nouveau email, et pas déjà en base, créons un nouvel utilisateur
            $username = $data['username'];
            // Le mot de passe ne peut être stocké en clair dans la BDD
            $encodedPassword = $app['security.default_encoder']->encodePassword($data['plainPassword'], '');

            // Nous sauvegardons le nouvel utilisateur en BDD
            $userProvider->register($username, $encodedPassword);

            // On ajoute une clé-valeur au "flashbag", c'est un variable de session qui nous permet de faire
            // des messages flash (notification) dans les templates twig.
            $app['session']->getFlashBag()->add('connexion', 'You have been registered. Please login');

            // Retournons à la home une fois terminé
            return $app->redirect($app['url_generator']->generate('homepage'));
        } else {
            // Il faudrait gérer le case où l'utilisateur existe déjà ici
            
            // return $message('This user already exists');
        }
    }

    return $app['twig']->render('register.html.twig', array(
        'title' => 'Inscription',
        'form' => $form->createView() // permet à la vue d'afficher ce formulaire.
    ));
})
->before(function (Request $request, Application $app) {
    if ($app['security.authorization_checker']->isGranted('ROLE_USER')) {
        return $app->redirect($app['url_generator']->generate('homepage'));
    }
})
->bind('register');
