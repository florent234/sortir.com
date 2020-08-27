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

/* nav/administrateur.html.twig */
class __TwigTemplate_d3cfc04b9e61644790591a2bef8e3b1220291bd3cca0090e731e5d9f4a618ba0 extends Template
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
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav/administrateur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav/administrateur.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "nav/administrateur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"divAdmin\">
   <h1 class=\"adminTitre1\">Page Administrateur</h1>

    <h3 class=\"adminTitre\">Utilisateurs :</h3>
    <label>Afficher les utilisateurs : </label><button class=\"btnAdministrateur\" ><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profils");
        echo "\">Utilisateurs</a></button><br>
    <label>Créer un nouveau utilisateur : </label><button class=\"btnAdministrateur\" ><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">Inscription</a></button><br>
    <label>Ajouter des utilisateurs par fichier CSV : </label ><button class=\"btnAdministrateur\"><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSV_afficher");
        echo "\">CSV</a></button><br>



 <br><h3 class=\"adminTitre\">Gestions des fichiers :</h3>
    <label>Bibliotheque de photo: </label><button class=\"btnAdministrateur\" ><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("photo_afficher");
        echo "\">Bibliotheque</a></button>



    <br><h3 class=\"adminTitre\">Gestions des lieux :</h3>
    <label>Gestions des Campus : </label><button class=\"btnAdministrateur\" ><a  href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campus");
        echo "\">Campus</a></button><br>
    <label>Gestions des Campus : </label><button class=\"btnAdministrateur\" ><a  href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("villes");
        echo "\">Villes</a></button>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Administrateur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "nav/administrateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 25,  103 => 21,  99 => 20,  91 => 15,  83 => 10,  79 => 9,  75 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block main %}
<div class=\"divAdmin\">
   <h1 class=\"adminTitre1\">Page Administrateur</h1>

    <h3 class=\"adminTitre\">Utilisateurs :</h3>
    <label>Afficher les utilisateurs : </label><button class=\"btnAdministrateur\" ><a href=\"{{ path('profils') }}\">Utilisateurs</a></button><br>
    <label>Créer un nouveau utilisateur : </label><button class=\"btnAdministrateur\" ><a href=\"{{ path('inscription') }}\">Inscription</a></button><br>
    <label>Ajouter des utilisateurs par fichier CSV : </label ><button class=\"btnAdministrateur\"><a href=\"{{ path('CSV_afficher') }}\">CSV</a></button><br>



 <br><h3 class=\"adminTitre\">Gestions des fichiers :</h3>
    <label>Bibliotheque de photo: </label><button class=\"btnAdministrateur\" ><a href=\"{{ path('photo_afficher') }}\">Bibliotheque</a></button>



    <br><h3 class=\"adminTitre\">Gestions des lieux :</h3>
    <label>Gestions des Campus : </label><button class=\"btnAdministrateur\" ><a  href=\"{{ path('campus') }}\">Campus</a></button><br>
    <label>Gestions des Campus : </label><button class=\"btnAdministrateur\" ><a  href=\"{{ path('villes') }}\">Villes</a></button>
</div>
{% endblock %}

{% block title %}Administrateur{% endblock %}", "nav/administrateur.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/nav/administrateur.html.twig");
    }
}
