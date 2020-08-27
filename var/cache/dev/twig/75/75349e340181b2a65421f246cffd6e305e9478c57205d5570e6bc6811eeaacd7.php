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

/* sortie/sortie_afficher.html.twig */
class __TwigTemplate_33b5f749f7d115fdf058de7fbdb74dc2cbb6525168e8bcc8cf44f705a95c0af8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sortie/sortie_afficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sortie/sortie_afficher.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "sortie/sortie_afficher.html.twig", 1);
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
        echo "    <div class=\"col d-none d-md-block\">
        <h1>Afficher une sortie</h1>
    </div>
    <div class=\"d-block d-md-none\">
        <h3><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/Local/") . "24730e81feb5acfc65d93c6dd9ec8487.png"), "html", null, true);
        echo " \" width=\"35\" alt=\"\"><a class=\"aMenu\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">  Sortir.com</a></h3>
    </div>
<div>
    <div>
        <label>Nom de la sortie :</label>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 12, $this->source); })()), "nomSortie", [], "any", false, false, false, 12), "html", null, true);
        echo " <br>
        <label>Date et heure de la sortie :</label>";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 13, $this->source); })()), "dateHeure", [], "any", false, false, false, 13), "m/d/Y"), "html", null, true);
        echo " <br>
        <label>Date limite d'inscription :</label>";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 14, $this->source); })()), "dateLimiteInscription", [], "any", false, false, false, 14), "m/d/Y"), "html", null, true);
        echo " <br>
        <label>Nombre de places :</label>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 15, $this->source); })()), "nbplaces", [], "any", false, false, false, 15), "html", null, true);
        echo " <br>
        <label>Durée :</label>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 16, $this->source); })()), "duree", [], "any", false, false, false, 16), "html", null, true);
        echo " <br>
    </div>
    <div>
        <label>Description et infos :</label> ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), "html", null, true);
        echo " <br>
        <label>Campus :</label>    ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 20, $this->source); })()), "campus", [], "any", false, false, false, 20), "nomCampus", [], "any", false, false, false, 20), "html", null, true);
        echo " <br>
        <label>Ville :</label> ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 21, $this->source); })()), "ville", [], "any", false, false, false, 21), "nomVilles", [], "any", false, false, false, 21), "html", null, true);
        echo "<br>
        <label>Rue :</label> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 22, $this->source); })()), "rue", [], "any", false, false, false, 22), "html", null, true);
        echo " <br>
        <label>Code Postal :</label> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 23, $this->source); })()), "codePostal", [], "any", false, false, false, 23), "html", null, true);
        echo " <br>

        ";
        // line 25
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 25, $this->source); })()), "etat", [], "any", false, false, false, 25), "Annulée")) {
            // line 26
            echo "        <label>Motif d'annulation :</label> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 26, $this->source); })()), "motifAnnulation", [], "any", false, false, false, 26), "html", null, true);
            echo "
        ";
        }
        // line 28
        echo "    </div>
</div>

    <div class=\"col d-none d-md-block\">
        <h3>Listes des participants inscrits :</h3>
    </div>
    <div class=\"d-block d-md-none\">
        <h4>Listes des participants inscrits :</h4>
    </div>
";
        // line 37
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 37, $this->source); })()), "inscrie", [], "any", false, false, false, 37))) {
            // line 38
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tableauInscrie"]) || array_key_exists("tableauInscrie", $context) ? $context["tableauInscrie"] : (function () { throw new RuntimeError('Variable "tableauInscrie" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
                // line 39
                echo "            <table class=\"inscries tableauSortie\">
                <thead>
                <tr>
                    <th>  Pseudo  </th>
                    <th>  Nom  </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "username", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                    <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "prenom", [], "any", false, false, false, 49), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "nom", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
                </tr>
                </tbody>
            </table>
            <div class=\"d-block d-md-none\">
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 57
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sortie/sortie_afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 57,  167 => 49,  163 => 48,  152 => 39,  147 => 38,  145 => 37,  134 => 28,  128 => 26,  126 => 25,  121 => 23,  117 => 22,  113 => 21,  109 => 20,  105 => 19,  99 => 16,  95 => 15,  91 => 14,  87 => 13,  83 => 12,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block main %}
    <div class=\"col d-none d-md-block\">
        <h1>Afficher une sortie</h1>
    </div>
    <div class=\"d-block d-md-none\">
        <h3><img src=\"{{ asset('photos/Local/') ~'24730e81feb5acfc65d93c6dd9ec8487.png' }} \" width=\"35\" alt=\"\"><a class=\"aMenu\" href=\"{{ path('accueil') }}\">  Sortir.com</a></h3>
    </div>
<div>
    <div>
        <label>Nom de la sortie :</label>{{ sortie.nomSortie }} <br>
        <label>Date et heure de la sortie :</label>{{ sortie.dateHeure|date(\"m/d/Y\") }} <br>
        <label>Date limite d'inscription :</label>{{ sortie.dateLimiteInscription|date(\"m/d/Y\") }} <br>
        <label>Nombre de places :</label>{{ sortie.nbplaces }} <br>
        <label>Durée :</label>{{ sortie.duree }} <br>
    </div>
    <div>
        <label>Description et infos :</label> {{ sortie.description }} <br>
        <label>Campus :</label>    {{ sortie.campus.nomCampus }} <br>
        <label>Ville :</label> {{ sortie.ville.nomVilles }}<br>
        <label>Rue :</label> {{ sortie.rue }} <br>
        <label>Code Postal :</label> {{ sortie.codePostal }} <br>

        {% if sortie.etat == \"Annulée\" %}
        <label>Motif d'annulation :</label> {{ sortie.motifAnnulation }}
        {% endif %}
    </div>
</div>

    <div class=\"col d-none d-md-block\">
        <h3>Listes des participants inscrits :</h3>
    </div>
    <div class=\"d-block d-md-none\">
        <h4>Listes des participants inscrits :</h4>
    </div>
{% if sortie.inscrie is not empty %}
        {% for utilisateur in tableauInscrie %}
            <table class=\"inscries tableauSortie\">
                <thead>
                <tr>
                    <th>  Pseudo  </th>
                    <th>  Nom  </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{utilisateur.username}}</td>
                    <td>{{ utilisateur.prenom }} {{ utilisateur.nom }}</td>
                </tr>
                </tbody>
            </table>
            <div class=\"d-block d-md-none\">
            </div>
        {% endfor %}
{% endif %}

{% endblock %}", "sortie/sortie_afficher.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/sortie/sortie_afficher.html.twig");
    }
}
