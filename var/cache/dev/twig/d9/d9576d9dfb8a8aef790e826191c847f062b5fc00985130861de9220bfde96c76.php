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

/* connection/connection.html.twig */
class __TwigTemplate_de6a5bdde05cb8b02d6840f01ad6affd5e256fca39830ce2f10ffd8050d1cce6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connection/connection.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connection/connection.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "connection/connection.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "
<div id=\"wrap\">
    <div id=\"formCon\">
    <form method=\"post\" id=\"formConnexion\" class=\"col-md-12\">

        <h2 id=\"h2FormConnexion\">Bienvenue</h2>

            <div>
                <label class=\"sr-only\" for=\"username\">Identifant :   </label>
                <input class=\"inputConnexion form-control-plaintext\" type=\"text\" name=\"_username\" id=\"username\"  placeholder=\"Pseudo\"><br>
            </div>

            <div>
                <label class=\"sr-only\" for=\"password\">Mot de passe : </label>
                <input type=\"password\" name=\"_password\" id=\"password\" class=\"inputConnexion form-control-plaintext\" placeholder=\"Mot de passe\">
            </div>

        <button class=\"btnConnexion\" type=\"submit\">Connexion</button>

    </form>
    </div>
    <div id=\"divSouvenir\">
        <label id=\"lblRemember\">Se souvenir de moi</label><input  type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked><br>
    </div>
    <p id=\"pMdpOublier\"><a id=\"aMdpOublier\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mdp_oublier");
        echo "\">mot de passe oublié ?</a></p>
</div>







";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "connection/connection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 40,  95 => 29,  69 => 5,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'layout.html.twig' %}

{%  block main %}

<div id=\"wrap\">
    <div id=\"formCon\">
    <form method=\"post\" id=\"formConnexion\" class=\"col-md-12\">

        <h2 id=\"h2FormConnexion\">Bienvenue</h2>

            <div>
                <label class=\"sr-only\" for=\"username\">Identifant :   </label>
                <input class=\"inputConnexion form-control-plaintext\" type=\"text\" name=\"_username\" id=\"username\"  placeholder=\"Pseudo\"><br>
            </div>

            <div>
                <label class=\"sr-only\" for=\"password\">Mot de passe : </label>
                <input type=\"password\" name=\"_password\" id=\"password\" class=\"inputConnexion form-control-plaintext\" placeholder=\"Mot de passe\">
            </div>

        <button class=\"btnConnexion\" type=\"submit\">Connexion</button>

    </form>
    </div>
    <div id=\"divSouvenir\">
        <label id=\"lblRemember\">Se souvenir de moi</label><input  type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked><br>
    </div>
    <p id=\"pMdpOublier\"><a id=\"aMdpOublier\" href=\"{{ path('mdp_oublier') }}\">mot de passe oublié ?</a></p>
</div>







{% endblock %}

{% block title %}Login{% endblock %}", "connection/connection.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/connection/connection.html.twig");
    }
}
