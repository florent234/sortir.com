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
class __TwigTemplate_5c13fdfd0eb4d21f81ae8ab2d4f2c4ca46d0428719c659ebbf56ffadcf9e364c extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "connection/connection.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 40
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Login";
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
        return array (  91 => 40,  77 => 29,  51 => 5,  47 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "connection/connection.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/connection/connection.html.twig");
    }
}
