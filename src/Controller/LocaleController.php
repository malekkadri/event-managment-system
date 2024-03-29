<?php
// src/Controller/LocaleController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;


class LocaleController extends AbstractController
{
    #[Route('/switch-locale/{_locale}', name: 'locale_switch')]
    public function switchLocale(Request $request, $_locale, LoggerInterface $logger): RedirectResponse
{
    $logger->info('Current locale: ' . $request->getSession()->get('_locale'));
    $request->getSession()->set('_locale', $_locale);
    $logger->info('New locale set: ' . $_locale);

    $referer = $request->headers->get('referer');
    if (!$referer) {
        $referer = $this->generateUrl('category_index'); // Fallback URL
    }
    $logger->info('Referer: ' . $referer);

    return new RedirectResponse($referer);
}

    
}
