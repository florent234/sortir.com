<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* mail/mail.html.twig */
class __TwigTemplate_bc915cc1e9616d3bc85f1fa6284607cf70d32bb7584fb52fa751de902b969e8f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<p>bonjour ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getUsername", [], "any", false, false, false, 1), "html", null, true);
        echo " !</p>

<p>Cliquez sur le lien ci-dessous pour réinitialiser votre mot de passe</p>

<a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifMdp", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userId", [], "any", false, false, false, 5), "token" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "token", [], "any", false, false, false, 5)])), "html", null, true);
        echo "\">cliquer ici</a>";
    }

    public function getTemplateName()
    {
        return "mail/mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mail/mail.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/mail/mail.html.twig");
    }
}
