<?php
declare(strict_types=1);

namespace Controllers;

use Response;
use Connection;

class ContactController
{
    public function index()
    {
        $title = "Contact page";
        $config = require_once dirname(__DIR__, 2).'/config/db.php';
        $pdo = Connection::make($config['database']);

        $sql = "SELECT * FROM feedback";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();

        $content = render('contact', compact('title', 'result'));

        $this->response = new Response($content);
        $this->render($content);       
    }

    private function render(string $content): void
    {
        echo $content;
    }
}
