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
            'Instalação' => 'instalacao do framework, instalacao do pacotes, instalacao de aplicacao',
            'Configuração' => 'framework configuration, web-server configuration, application configuration',
            'Autenticação' => 'topics related to authentication, including user logins, oauth, etc',
            'Segurança' => 'code safety, user roles and authorization',
            'Pedidos' => 'information related to handling requests',
            'Entrada' => 'handling user input',
            'Sessão' => 'persisting data between requests using PHP or Laravel sessions',
            'Cache' => 'performance caching or any use of Laravel\'s cache system',
            'Batabase' => 'query-building, connections, or drivers',
            'Eloquent' => 'Eloquent modeling, relationships, etc',
            'Ioc' => 'binding to and resolving from the IoC container',
            'Views' => 'topics related to the rendering of views',
            'Blade' => 'topics related to Blade templating',
            'Formularios' => 'topics related to forms',
            'Validação' => 'topics related to the validation of data',
            'Email' => 'topics related to compiling and sending email',
            'Queues' => 'topics related to queues',
            'Laravel.com.br' => 'topics that relate to the Laravel.com.br site or community',
            'Pacotes' => 'topics related to creating, discussing, and importing packages',
            'Encontros' => 'topics related to community meetups or user groups',
            'POO' => 'topics related to writing good object-oriented code',
            'Testes' => 'topics related to automated testing',
        ];

        foreach ($commonTags as $name => $description) {
            Tag::create([
                'name' => $name,
                'slug' => $name,
                'description' => $description,
                'articles' => 1,
                'forum' => 1,
            ]);
        }

        $articleTags = [
            'Noticias' => 'information about an occurance',
        ];

        foreach ($articleTags as $name => $description) {
            Tag::create([
                'name' => $name,
                'slug' => $name,
                'description' => $description,
                'articles' => 1,
                'forum' => 0,
            ]);
        }
    }
}
