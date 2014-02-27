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
            'Installation' => array('Instalação', 'instalação do Framework, instalação de pacotes'),
            'Configuration' => array('Configuração', 'configuração do Pacote, Configuração de Servidores WEB, Configuração da Aplicação'),
            'Authentication' => array('Autenticação', 'tópicos relacionados a autenticação, incluindo login, oauth, etc'),
            'Security' => array('Segurança', 'segurança de código, papéis de usuário and autorização'),
            'Requests' => array('Requisições', 'tópicos relacionadas a manusear requisições'),
            'Input' => array('Entrada', 'manipupação da entrada do usuário'),
            'Session' => array('Sessão', 'persistindo dados entre requisições, usando PHP ou Laravel'),
            'Cache' => array('Cache', 'performance do cache ou qualquer uso do sistema de cache do Larvel'),
            'Database' => array('Banco de Dados', 'construção de queries, conexões ou drivers'),
            'Eloquent' => array('Eloquent', 'Models do Eloquent, relacionamentos, etc'),
            'Ioc' => array('IoC', 'resolvendo e atribuindo no IoC container'),
            'Views' => array('Views', 'tópicos relacionados a renderização de views'),
            'Blade' => array('Blade', 'tópicos relacionados ao sistema de templates Blade'),
            'Forms' => array('Formulários', 'tópicos relacionados a formulários'),
            'Validation' => array('Validação', 'tópicos relacionados a validação de dados'),
            'Mail' => array('Email', 'tópicoss relacionados a compilação e envio de emails'),
            'Queues' => array('Queues', 'tópicos relacionados a Queues (filas)'),
            'LaravelIO' => array('Comunidade', 'tópicos relacionados ao uso do Fórum, ou ao site laravel.com.br'),
            'Packages' => array('Pacotes', 'tópicos relacionados a criação, discussão e importação de pacotes'),
            'Meetups' => array('Encontros', 'tópicos relacionados a encontros e hangouts da comunidade'),
            'OOP' => array('OOP', 'tópicos relacionados a boas práticas de orientação a objetos'),
            'Testing' => array('Testes', 'tópicos relacionados a testes automatizados'),
        ];

        foreach ($commonTags as $name => $description) {
            Tag::create([
                'name' => $description[0],
                'slug' => $name,
                'description' => $description[1],
                'articles' => 1,
                'forum' => 1,
            ]);
        }

        $articleTags = [
            'News' => array("Noticias", 'informações sobre uma ocorrência'),
        ];

        foreach ($articleTags as $name => $description) {
            Tag::create([
                'name' => $description[0],
                'slug' => $name,
                'description' => $description[1],
                'articles' => 1,
                'forum' => 0,
            ]);
        }
    }
}
