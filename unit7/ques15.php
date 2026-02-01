<!--  Create a PageController class with a method getMessage(). Create a PageTemplate class with a
method render($message). Use both classes to display a message like "Welcome to OOP in PHP!". -->
<?php
class PageController {
    public function getMessage() {
        return "Welcome to OOP in PHP!";
    }
}

class PageTemplate {
    public function render($message) {
        echo $message;
    }
}

// Using both classes
$controller = new PageController();
$template = new PageTemplate();

$message = $controller->getMessage();
$template->render($message);
?>
