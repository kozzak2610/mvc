<?php


namespace config;
use Medoo\Medoo;

class config
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'mvc';

    public function DbConfigDate() {
        $date =[
            "host" => $this->host,
            "user" => $this->username,
            "pass" => $this->password,
            "db" => $this->database
        ];
        return $date;
}
}
$dbconf = new config();
$db = $dbconf->DbConfigDate();
$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => $db['db'],
    'server' =>  $db['host'],
    'username' =>  $db['user'],
    'password' =>  $db['pass']
]);