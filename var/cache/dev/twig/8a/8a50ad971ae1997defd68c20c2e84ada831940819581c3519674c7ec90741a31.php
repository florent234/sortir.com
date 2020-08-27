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

/* CSV/CSVFiles.html.twig */
class __TwigTemplate_d0dbf0970f57f08bb0bb9a0b9afc229e907311322546bc77688d2020305df57c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "CSV/CSVFiles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "CSV/CSVFiles.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "CSV/CSVFiles.html.twig", 1);
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
        echo "    <label>Importer un fichier CSV: </label><button><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSV_creation");
        echo "\">CSV création</a></button>
    <h3>Fichiers CSV déja importés :</h3>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["csv"]) || array_key_exists("csv", $context) ? $context["csv"] : (function () { throw new RuntimeError('Variable "csv" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["csvfile"]) {
            // line 7
            echo "        <div>
                <label>ID du CSV : </label>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["csvfile"], "Id", [], "any", false, false, false, 8), "html", null, true);
            echo " <br>
                <label>Nom du CSV : </label>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["csvfile"], "nom", [], "any", false, false, false, 9), "html", null, true);
            echo "<br>
            <button><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSV_importation", ["id" => twig_get_attribute($this->env, $this->source, $context["csvfile"], "Id", [], "any", false, false, false, 10)]), "html", null, true);
            echo "\">Importer</a></button><br>

            ";
            // line 23
            echo "        </div><br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['csvfile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "CSV/CSVFiles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  89 => 10,  85 => 9,  81 => 8,  78 => 7,  74 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block main %}
    <label>Importer un fichier CSV: </label><button><a href=\"{{ path('CSV_creation') }}\">CSV création</a></button>
    <h3>Fichiers CSV déja importés :</h3>
    {% for csvfile in csv %}
        <div>
                <label>ID du CSV : </label>{{ csvfile.Id }} <br>
                <label>Nom du CSV : </label>{{ csvfile.nom }}<br>
            <button><a href=\"{{ path('CSV_importation', {'id': csvfile.Id }) }}\">Importer</a></button><br>

            {#
            <div id=\"actionsProfils\">
                <button><a href=\"{{ path('profil_afficher', {'id':utilisateur.userId}) }}\">Modifier</a></button>
                {% if utilisateur.actif==1 %}
                    <button><a href=\"{{ path('profil_bloquer', {'id':utilisateur.userId}) }}\">Bloquer</a></button>
                {% else %}
                    <button><a href=\"{{ path('profil_bloquer', {'id':utilisateur.userId}) }}\">Débloquer</a></button>
                {% endif %}
                <button><a href=\"{{ path('profil_supprimer', {'id':utilisateur.userId}) }}\">Supprimer</a></button>
            </div>
            #}
        </div><br>
    {% endfor %}
{% endblock %}", "CSV/CSVFiles.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/CSV/CSVFiles.html.twig");
    }
}
