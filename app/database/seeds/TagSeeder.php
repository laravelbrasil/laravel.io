<?php

use Lio\Tags\Tag;

class TagSeeder extends Seeder
{
    public function run()
    {
        if (Tag::count() == 0) {
            $this->createTags();
        }
    }

    private function createTags()
    {
        $commonTags = [
            'Installation' => array('Instalação', 'framework installation, package installation, application installation'),
            'Configuration' => array('Configuração', 'framework configuration, web-server configuration, application configuration'),
            'Authentication' => array('Autenticação', 'topics related to authentication, including user logins, oauth, etc'),
            'Security' => array('Segurança', 'code safety, user roles and authorization'),
            'Requests' => array('Requisições', 'information related to handling requests'),
            'Input' => array('Entrada', 'handling user input'),
            'Session' => array('Sessão', 'persisting data between requests using PHP or Laravel sessions'),
            'Cache' => array('Cache', 'performance caching or any use of Laravel\'s cache system'),
            'Database' => array('Banco de Dados', 'query-building, connections, or drivers'),
            'Eloquent' => array('Eloquent', 'Eloquent modeling, relationships, etc'),
            'Ioc' => array('IoC', 'binding to and resolving from the IoC container'),
            'Views' => array('Views', 'topics related to the rendering of views'),
            'Blade' => array('Blade', 'topics related to Blade templating'),
            'Forms' => array('Formulários', 'topics related to forms'),
            'Validation' => array('Validação', 'topics related to the validation of data'),
            'Mail' => array('Email', 'topics related to compiling and sending email'),
            'Queues' => array('Queues', 'topics related to queues'),
            'LaravelIO' => array('Comunidade', 'topics that relate to the Laravel.io site or community'),
            'Packages' => array('Pacotes', 'topics related to creating, discussing, and importing packages'),
            'Meetups' => array('Encontros', 'topics related to community meetups or user groups'),
            'OOP' => array('OOP', 'topics related to writing good object-oriented code'),
            'Testing' => array('Testes', 'topics related to automated testing'),
        ];

        foreach ($commonTags as $name => $description) {
            Tag::create([
                'name' => $name,
                'slug' => $description[0],
                'description' => $description[1],
                'articles' => 1,
                'forum' => 1,
            ]);
        }

        $articleTags = [
            'News' => array("Noticias", 'information about an occurance'),
        ];

        foreach ($articleTags as $name => $description) {
            Tag::create([
                'name' => $name,
                'slug' => $description[0],
                'description' => $description[1],
                'articles' => 1,
                'forum' => 0,
            ]);
        }
    }
}
