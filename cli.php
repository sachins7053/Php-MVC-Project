<?php

if ($argc < 3) {
    echo "Usage: php sachin make:<type> <name>\n";
    exit(1);
}

$command = $argv[1];
$name = $argv[2];

switch ($command) {
    case 'make:controller':
        createController($name);
        break;
    
    case 'make:model':
        createModel($name);
        break;

    default:
        echo "Unknown command\n";
        break;
}

function createController($name) {
    $controllerTemplate = "<?php\n\nnamespace App\Controllers;\n\nclass {$name}Controller extends BaseController {\n    public function index() {\n        echo 'This is the {$name} controller.';\n    }\n}\n";

    $filePath = __DIR__ . "/app/controllers/{$name}Controller.php";
    if (!file_exists($filePath)) {
        file_put_contents($filePath, $controllerTemplate);
        echo "Controller {$name}Controller created successfully.\n";
    } else {
        echo "Controller {$name}Controller already exists.\n";
    }
}

function createModel($name) {
    $modelTemplate = "<?php\n\nnamespace App\Models;\n\nuse App\Models\Database;\n\n use PDO;\n\nclass {$name} {\n\n    private \$db;\n\n    public function __construct() {\n        \$this->db = Database::getInstance()->getConnection();\n    }\n\n    // Model properties and methods\n}\n";

    $filePath = __DIR__ . "/app/models/{$name}Model.php";
    if (!file_exists($filePath)) {
        file_put_contents($filePath, $modelTemplate);
        echo "Model {$name} created successfully.\n";
    } else {
        echo "Model {$name} already exists.\n";
    }
}
