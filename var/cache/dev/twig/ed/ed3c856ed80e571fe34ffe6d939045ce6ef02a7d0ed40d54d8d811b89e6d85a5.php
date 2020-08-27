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

/* nav/nav.html.twig */
class __TwigTemplate_9c2258fc318fef6c3ba46bcbb503ae629571ef4b5aced46c5fc41dc8fccc2aff extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav/nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav/nav.html.twig"));

        // line 1
        echo "
<div id=\"nav\">


    ";
        // line 5
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "        <a class=\"aMenu\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
            echo "\">Accueil</a>
        <a class=\"aMenu\" href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_modifier", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "UserId", [], "any", false, false, false, 7)]), "html", null, true);
            echo "\">Mon Profil</a>
        <a class=\"aMenu\" href=\"";
            // line 8
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Se Déconnecter</a><br>

            ";
            // line 10
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 11
                echo "                <a class=\"aMenu\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administrateur");
                echo "\">Administrateur</a>
            ";
            }
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "            <a class=\"aMenu\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connection");
            echo "\">Se connecter</a>
    ";
        }
        // line 16
        echo "</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "nav/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 16,  76 => 14,  73 => 13,  67 => 11,  65 => 10,  60 => 8,  56 => 7,  51 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div id=\"nav\">


    {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
        <a class=\"aMenu\" href=\"{{ path('accueil') }}\">Accueil</a>
        <a class=\"aMenu\" href=\"{{ path('profil_modifier', {'id':app.user.UserId})}}\">Mon Profil</a>
        <a class=\"aMenu\" href=\"{{ path('logout') }}\">Se Déconnecter</a><br>

            {% if is_granted('ROLE_ADMIN') %}
                <a class=\"aMenu\" href=\"{{ path('administrateur') }}\">Administrateur</a>
            {% endif %}
    {% else %}
            <a class=\"aMenu\" href=\"{{ path('connection') }}\">Se connecter</a>
    {% endif %}
</div>

", "nav/nav.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/nav/nav.html.twig");
    }
}
