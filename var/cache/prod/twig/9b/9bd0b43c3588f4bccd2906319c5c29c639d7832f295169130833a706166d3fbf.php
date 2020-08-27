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
class __TwigTemplate_0b994eed49bce1c5c088219415515fe59a73273ebd1012ce67b763e6e7a4210b extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "nav/administrateur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 25
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Administrateur";
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
        return array (  92 => 25,  85 => 21,  81 => 20,  73 => 15,  65 => 10,  61 => 9,  57 => 8,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nav/administrateur.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/nav/administrateur.html.twig");
    }
}
