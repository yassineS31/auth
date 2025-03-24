<?php
    





namespace App\Service;
use Symfony\Contracts\HttpClient\HttpClientInterface;
class EmailService{

    private string $username;
    private string $password;
    private string $smtp;
    private string $port;


    public function __construct(
        private readonly string $emailuser,
        private readonly string $emailPassword,
        private readonly string $emailSmtp,
        private readonly string $emailPort
    ) {
    }

    public function getAllVariableEmail(){
        return "Pseudo:".$this->emailuser."mot de passe: ".$this->emailPassword."smtp: ".$this->emailSmtp."Port: ".$this->emailPort;
    
    }
}