 <!-- Create an interface Logger with a method log($message). Create a class FileLogger that implements
this interface and prints "Logging to file: [message]". Test it. -->
<?php
interface Logger {
    public function log($message);
}

class FileLogger implements Logger {
    public function log($message) {
        echo "Logging to file: $message";
    }
}

$logger = new FileLogger();
$logger->log("Hello World");
?>