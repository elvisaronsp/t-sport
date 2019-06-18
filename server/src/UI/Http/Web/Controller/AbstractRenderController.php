<?php

declare(strict_types=1);

namespace App\UI\Http\Web\Controller;

use Symfony\Component\HttpFoundation\Response;


class AbstractRenderController
{

    /**
     * @param string $view
     * @param array $parameters
     * @param int $code
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    protected function render(string $view, array $parameters = [], int $code = Response::HTTP_OK): Response
    {
        $content = $this->template->render($view, $parameters);
        return new Response($content, $code);
    }
    protected function exec($command): void
    {
        $this->commandBus->handle($command);
    }
    protected function ask($query)
    {
        return $this->queryBus->handle($query);
    }
    public function __construct(\Twig_Environment $template/*, CommandBus $commandBus, CommandBus $queryBus*/)
    {
        $this->template = $template;
        /*
         $this->commandBus = $commandBus;
        $this->queryBus = $queryBus;
        */
    }

    /**
     * @var CommandBus
     *
    private $commandBus;
    /**
     * @var CommandBus
     *
    private $queryBus;
     */

    /**
     * @var \Twig_Environment
     */
    private $template;
}