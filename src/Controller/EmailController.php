<?php

namespace App\Controller;

use App\Service\EmailService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmailController extends AbstractController
{
    #[Route('/email', name: 'test_email')]
    public function testEmail(EmailService $emailService): Response
    {
        return new Response( $emailService->getAllVariableEmail() );
    }
}
