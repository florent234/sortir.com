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
class __TwigTemplate_cdef525736b4b2ce6ae27c5ec700a71433ae56f472727b3e1a18b951c7fd711b extends Template
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
        echo "
                <tr>
                    <td align=\"center\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "nomSortie", [], "any", false, false, false, 3), "html", null, true);
        echo "</td>
                    <td align=\"center\">";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "dateHeure", [], "any", false, false, false, 4), "d/m/Y H"), "html", null, true);
        echo "h   </td>
                    <td align=\"center\">";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "dateLimiteInscription", [], "any", false, false, false, 5), "d/m/Y"), "html", null, true);
        echo "</td>
                    ";
        // line 6
        $context["sortieInscrit"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "inscrie", [], "any", false, false, false, 6), "-");
        // line 7
        echo "                    <td align=\"center\">";
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, ($context["sortieInscrit"] ?? null)) - 1), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "nbplaces", [], "any", false, false, false, 7), "html", null, true);
        echo "</td>
                    <td align=\"center\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "etat", [], "any", false, false, false, 8), "html", null, true);
        echo "</td>
                    ";
        // line 9
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 9), "username", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "inscrie", [], "any", false, false, false, 9))) {
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_afficher", ["id" => twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "sortieId", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "organisateur", [], "any", false, false, false, 16), "username", [], "any", false, false, false, 16), "html", null, true);
        echo " </a></td>
                    <td align=\"center\">

                        ";
        // line 19
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "etat", [], "any", false, false, false, 19), "Ouverte") || 0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "etat", [], "any", false, false, false, 19), "Annulée"))) {
            // line 20
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_afficher", ["id" => twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "sortieId", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">Afficher</a>
                        ";
        }
        // line 22
        echo "
                        ";
        // line 23
        if ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 23), "username", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "inscrie", [], "any", false, false, false, 23)) && 1 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "dateLimiteInscription", [], "any", false, false, false, 23), "Y-m-d"), twig_date_format_filter($this->env, "now", "Y-m-d")))) {
            // line 24
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_desinscription", ["id" => twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "sortieId", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" >Se désinscrire</a>
                        ";
        } elseif (((-1 === twig_compare(twig_length_filter($this->env,         // line 25
($context["sortieInscrit"] ?? null)), twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "nbplaces", [], "any", false, false, false, 25)) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 25), "username", [], "any", false, false, false, 25), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "organisateur", [], "any", false, false, false, 25), "username", [], "any", false, false, false, 25))) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "etat", [], "any", false, false, false, 25), "Ouverte"))) {
            // line 26
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_inscription", ["id" => twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "sortieId", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">S'inscrire</a>
                        ";
        }
        // line 28
        echo "                        ";
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 28), "username", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "organisateur", [], "any", false, false, false, 28), "username", [], "any", false, false, false, 28))) {
            // line 29
            echo "                            ";
            if (1 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "dateLimiteInscription", [], "any", false, false, false, 29), "Y-m-d"), twig_date_format_filter($this->env, "now", "Y-m-d"))) {
                // line 30
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_modifier", ["id" => twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "sortieId", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\" >Modifier</a>
                            ";
            }
            // line 32
            echo "                            ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "etat", [], "any", false, false, false, 32), "En création")) {
                // line 33
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_publier", ["id" => twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "sortieId", [], "any", false, false, false, 33)]), "html", null, true);
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
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 37), "administrateur", [], "any", false, false, false, 37), 1)) {
            // line 38
            echo "                    <td align=\"conter\">
                        ";
            // line 39
            if (1 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "dateLimiteInscription", [], "any", false, false, false, 39), "Y-m-d"), twig_date_format_filter($this->env, "now", "Y-m-d"))) {
                // line 40
                echo "                             <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_modifier", ["id" => twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "sortieId", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\" >Modifier</a>
                        ";
            }
            // line 42
            echo "                        ";
            if (((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "inscrie", [], "any", false, false, false, 42)) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "etat", [], "any", false, false, false, 42), "Annulée")) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "etat", [], "any", false, false, false, 42), "Fermée"))) {
                // line 43
                echo "                           <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_annuler", ["id" => twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "sortieId", [], "any", false, false, false, 43)]), "html", null, true);
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
        return array (  166 => 46,  163 => 45,  157 => 43,  154 => 42,  148 => 40,  146 => 39,  143 => 38,  141 => 37,  138 => 36,  135 => 35,  129 => 33,  126 => 32,  120 => 30,  117 => 29,  114 => 28,  108 => 26,  106 => 25,  101 => 24,  99 => 23,  96 => 22,  90 => 20,  88 => 19,  80 => 16,  76 => 14,  72 => 12,  68 => 10,  66 => 9,  62 => 8,  55 => 7,  53 => 6,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "accueilBody.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/accueilBody.html.twig");
    }
}
