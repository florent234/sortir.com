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

/* profil/profil_afficher.html.twig */
class __TwigTemplate_e3c4600c9ae3a6a87d7d581a2ccf25814bc3189930ccec8c7a05b6c7074e90ac extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html.twig", "profil/profil_afficher.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <h1>Afficher Profil ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "username", [], "any", false, false, false, 5), "html", null, true);
        echo "</h1>

    <div>
            <label>Nom:</label>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "nom", [], "any", false, false, false, 8), "html", null, true);
        echo " <br>
            <label>Prenom :</label>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "prenom", [], "any", false, false, false, 9), "html", null, true);
        echo " <br>
            <label>Téléphone :</label>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "telephone", [], "any", false, false, false, 10), "html", null, true);
        echo " <br>
            <label>Email :</label>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "email", [], "any", false, false, false, 11), "html", null, true);
        echo " <br>
            <label>Campus :</label>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "campus", [], "any", false, false, false, 12), "nomCampus", [], "any", false, false, false, 12), "html", null, true);
        echo " <br>
    </div>
<form method=\"post\">
    <br> <a id=\"creerSortie\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Retour</a>
</form>
";
    }

    public function getTemplateName()
    {
        return "profil/profil_afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  75 => 12,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profil/profil_afficher.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/profil/profil_afficher.html.twig");
    }
}
