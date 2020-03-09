<?php
class MyLogger
{
    private function logWithTime($message)
    {
        return date('[Y-m-d H:i] ') . $message;
    }

    public function warning($message)
    {
        echo $this->logWithTime('WARNING: ' . $message . PHP_EOL);
    }

    public function error($message)
    {
        echo $this->logWithTime('ERROR: ' . $message . PHP_EOL);
    }

    public function debug($message)
    {
        echo $this->logWithTime('DEBUG: ' . $message . PHP_EOL);
    }

    public function info($message)
    {
        echo $this->logWithTime('INFO: ' . $message . PHP_EOL);
    }

    public function log($message, $loglevel = "")
    {
        switch ($loglevel) {
        case 'WARNING':
            $this->warning($message);
            break;
        case 'ERROR':
            $this->error($message);
            break;
        case 'DEBUG':
            $this->debug($message);
            break;
        case 'INFO':
            $this->info($message);
            break;
        default:
            echo $message;
            break;
        }
    }
}

$logger = new MyLogger();
$logger->error('dit is een error'); // Result: 'ERROR: dit is een error'
$logger->log('hello world', 'INFO'); // Result: 'INFO: hello world'
