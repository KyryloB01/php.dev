<?php
declare(strict_types=1);

namespace Controllers;

use Core\Http\BaseController;
use Connection;

class ContactController extends BaseController
{
    public function index(): void
    {
        $title = "Contact page";
        $config = require_once dirname(__DIR__, 2).'/config/db.php';
        $pdo = Connection::make($config['database']);

        $sql = "SELECT * FROM feedback";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();

        echo $this->view()->render('contact', compact('title', 'result'));
    }
}
