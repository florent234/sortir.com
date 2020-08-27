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

/* accueilBody.html.twig */
class __TwigTemplate_56a1e2b5a3a27899e558406310179e5da21f88e26adc7a4973242fe2a3d1bdd4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueilBody.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueilBody.html.twig"));

        // line 1
        echo "
                <tr>
                    <td align=\"center\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 3, $this->source); })()), "nomSortie", [], "any", false, false, false, 3), "html", null, true);
        echo "</td>
                    <td align=\"center\">";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 4, $this->source); })()), "dateHeure", [], "any", false, false, false, 4), "d/m/Y H"), "html", null, true);
        echo "h   </td>
                    <td align=\"center\">";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 5, $this->source); })()), "dateLimiteInscription", [], "any", false, false, false, 5), "d/m/Y"), "html", null, true);
        echo "</td>
                    ";
        // line 6
        $context["sortieInscrit"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 6, $this->source); })()), "inscrie", [], "any", false, false, false, 6), "-");
        // line 7
        echo "                    <td align=\"center\">";
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, (isset($context["sortieInscrit"]) || array_key_exists("sortieInscrit", $context) ? $context["sortieInscrit"] : (function () { throw new RuntimeError('Variable "sortieInscrit" does not exist.', 7, $this->source); })())) - 1), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 7, $this->source); })()), "nbplaces", [], "any", false, false, false, 7), "html", null, true);
        echo "</td>
                    <td align=\"center\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 8, $this->source); })()), "etat", [], "any", false, false, false, 8), "html", null, true);
        echo "</td>
                    ";
        // line 9
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "username", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 9, $this->source); })()), "inscrie", [], "any", false, false, false, 9))) {
            // line 10
            echo "                        <td align=\"center\">X</td>
                    ";
        } else {
            // line 12
            echo "                        <td></td>
                    ";
        }
        // line 14
        echo "

                    <td align=\"center\"><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_afficher", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 16, $this->source); })()), "sortieId", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 16, $this->source); })()), "organisateur", [], "any", false, false, false, 16), "username", [], "any", false, false, false, 16), "html", null, true);
        echo " </a></td>
                    <td align=\"center\">

                        ";
        // line 19
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 19, $this->source); })()), "etat", [], "any", false, false, false, 19), "Ouverte") || 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 19, $this->source); })()), "etat", [], "any", false, false, false, 19), "Annulée"))) {
            // line 20
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_afficher", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 20, $this->source); })()), "sortieId", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">Afficher</a>
                        ";
        }
        // line 22
        echo "
                        ";
        // line 23
        if ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "username", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 23, $this->source); })()), "inscrie", [], "any", false, false, false, 23)) && 1 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 23, $this->source); })()), "dateLimiteInscription", [], "any", false, false, false, 23), "Y-m-d"), twig_date_format_filter($this->env, "now", "Y-m-d")))) {
            // line 24
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_desinscription", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 24, $this->source); })()), "sortieId", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" >Se désinscrire</a>
                        ";
        } elseif (((-1 === twig_compare(twig_length_filter($this->env,         // line 25
(isset($context["sortieInscrit"]) || array_key_exists("sortieInscrit", $context) ? $context["sortieInscrit"] : (function () { throw new RuntimeError('Variable "sortieInscrit" does not exist.', 25, $this->source); })())), twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 25, $this->source); })()), "nbplaces", [], "any", false, false, false, 25)) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "username", [], "any", false, false, false, 25), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 25, $this->source); })()), "organisateur", [], "any", false, false, false, 25), "username", [], "any", false, false, false, 25))) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 25, $this->source); })()), "etat", [], "any", false, false, false, 25), "Ouverte"))) {
            // line 26
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_inscription", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 26, $this->source); })()), "sortieId", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">S'inscrire</a>
                        ";
        }
        // line 28
        echo "                        ";
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "username", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 28, $this->source); })()), "organisateur", [], "any", false, false, false, 28), "username", [], "any", false, false, false, 28))) {
            // line 29
            echo "                            ";
            if (1 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 29, $this->source); })()), "dateLimiteInscription", [], "any", false, false, false, 29), "Y-m-d"), twig_date_format_filter($this->env, "now", "Y-m-d"))) {
                // line 30
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_modifier", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 30, $this->source); })()), "sortieId", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\" >Modifier</a>
                            ";
            }
            // line 32
            echo "                            ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 32, $this->source); })()), "etat", [], "any", false, false, false, 32), "En création")) {
                // line 33
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_publier", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 33, $this->source); })()), "sortieId", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\" >Publier</a>
                            ";
            }
            // line 35
            echo "                        ";
        }
        // line 36
        echo "                    </td>
                    ";
        // line 37
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "administrateur", [], "any", false, false, false, 37), 1)) {
            // line 38
            echo "                    <td align=\"conter\">
                        ";
            // line 39
            if (1 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 39, $this->source); })()), "dateLimiteInscription", [], "any", false, false, false, 39), "Y-m-d"), twig_date_format_filter($this->env, "now", "Y-m-d"))) {
                // line 40
                echo "                             <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_modifier", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 40, $this->source); })()), "sortieId", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\" >Modifier</a>
                        ";
            }
            // line 42
            echo "                        ";
            if (((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 42, $this->source); })()), "inscrie", [], "any", false, false, false, 42)) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 42, $this->source); })()), "etat", [], "any", false, false, false, 42), "Annulée")) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 42, $this->source); })()), "etat", [], "any", false, false, false, 42), "Fermée"))) {
                // line 43
                echo "                           <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_annuler", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 43, $this->source); })()), "sortieId", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\" >Annuler</a>
                        ";
            }
            // line 45
            echo "                     ";
        }
        // line 46
        echo "                    </td>
                </tr>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "accueilBody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 46,  169 => 45,  163 => 43,  160 => 42,  154 => 40,  152 => 39,  149 => 38,  147 => 37,  144 => 36,  141 => 35,  135 => 33,  132 => 32,  126 => 30,  123 => 29,  120 => 28,  114 => 26,  112 => 25,  107 => 24,  105 => 23,  102 => 22,  96 => 20,  94 => 19,  86 => 16,  82 => 14,  78 => 12,  74 => 10,  72 => 9,  68 => 8,  61 => 7,  59 => 6,  55 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
                <tr>
                    <td align=\"center\">{{ sortie.nomSortie }}</td>
                    <td align=\"center\">{{ sortie.dateHeure|date(\"d/m/Y H\") }}h   </td>
                    <td align=\"center\">{{ sortie.dateLimiteInscription|date(\"d/m/Y\") }}</td>
                    {% set sortieInscrit = sortie.inscrie|split('-') %}
                    <td align=\"center\">{{ (sortieInscrit|length)-1 }}/{{ sortie.nbplaces }}</td>
                    <td align=\"center\">{{ sortie.etat }}</td>
                    {%if(app.user.username in sortie.inscrie) %}
                        <td align=\"center\">X</td>
                    {% else %}
                        <td></td>
                    {% endif %}


                    <td align=\"center\"><a href=\"{{ path('profil_afficher', {'id':sortie.sortieId }) }}\">{{ sortie.organisateur.username }} </a></td>
                    <td align=\"center\">

                        {%  if (sortie.etat == \"Ouverte\" or sortie.etat ==\"Annulée\") %}
                        <a href=\"{{ path('sortie_afficher', {'id':sortie.sortieId }) }}\">Afficher</a>
                        {% endif %}

                        {%if(app.user.username in sortie.inscrie and sortie.dateLimiteInscription|date(\"Y-m-d\")> \"now\"|date(\"Y-m-d\") ) %}
                            <a href=\"{{ path('sortie_desinscription', {'id':sortie.sortieId }) }}\" >Se désinscrire</a>
                        {% elseif((sortieInscrit|length) < sortie.nbplaces) and (app.user.username!=sortie.organisateur.username) and sortie.etat ==\"Ouverte\" %}
                            <a href=\"{{ path('sortie_inscription', {'id':sortie.sortieId }) }}\">S'inscrire</a>
                        {% endif %}
                        {% if app.user.username==sortie.organisateur.username %}
                            {% if (sortie.dateLimiteInscription|date(\"Y-m-d\")> \"now\"|date(\"Y-m-d\") ) %}
                                <a href=\"{{ path('sortie_modifier', {'id':sortie.sortieId }) }}\" >Modifier</a>
                            {%  endif %}
                            {% if (sortie.etat==\"En création\") %}
                                <a href=\"{{ path('sortie_publier', {'id':sortie.sortieId }) }}\" >Publier</a>
                            {% endif %}
                        {% endif %}
                    </td>
                    {% if app.user.administrateur ==1 %}
                    <td align=\"conter\">
                        {% if (sortie.dateLimiteInscription|date(\"Y-m-d\")> \"now\"|date(\"Y-m-d\") ) %}
                             <a href=\"{{ path('sortie_modifier', {'id':sortie.sortieId }) }}\" >Modifier</a>
                        {%  endif %}
                        {% if (sortie.inscrie is empty and sortie.etat != \"Annulée\" and sortie.etat != \"Fermée\") %}
                           <a href=\"{{ path('sortie_annuler', {'id':sortie.sortieId }) }}\" >Annuler</a>
                        {% endif %}
                     {% endif %}
                    </td>
                </tr>
", "accueilBody.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/accueilBody.html.twig");
    }
}
