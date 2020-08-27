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
class __TwigTemplate_83baf8065534d5ef1787eb4b85c12ffc6c74c963e5ed67963642fa342ee300d1 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "sortie/sortie_afficher.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "nomSortie", [], "any", false, false, false, 12), "html", null, true);
        echo " <br>
        <label>Date et heure de la sortie :</label>";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "dateHeure", [], "any", false, false, false, 13), "m/d/Y"), "html", null, true);
        echo " <br>
        <label>Date limite d'inscription :</label>";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "dateLimiteInscription", [], "any", false, false, false, 14), "m/d/Y"), "html", null, true);
        echo " <br>
        <label>Nombre de places :</label>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "nbplaces", [], "any", false, false, false, 15), "html", null, true);
        echo " <br>
        <label>Durée :</label>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "duree", [], "any", false, false, false, 16), "html", null, true);
        echo " <br>
    </div>
    <div>
        <label>Description et infos :</label> ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "description", [], "any", false, false, false, 19), "html", null, true);
        echo " <br>
        <label>Campus :</label>    ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "campus", [], "any", false, false, false, 20), "nomCampus", [], "any", false, false, false, 20), "html", null, true);
        echo " <br>
        <label>Ville :</label> ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "ville", [], "any", false, false, false, 21), "nomVilles", [], "any", false, false, false, 21), "html", null, true);
        echo "<br>
        <label>Rue :</label> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "rue", [], "any", false, false, false, 22), "html", null, true);
        echo " <br>
        <label>Code Postal :</label> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "codePostal", [], "any", false, false, false, 23), "html", null, true);
        echo " <br>

        ";
        // line 25
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "etat", [], "any", false, false, false, 25), "Annulée")) {
            // line 26
            echo "        <label>Motif d'annulation :</label> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "motifAnnulation", [], "any", false, false, false, 26), "html", null, true);
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "inscrie", [], "any", false, false, false, 37))) {
            // line 38
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tableauInscrie"] ?? null));
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
        return array (  165 => 57,  149 => 49,  145 => 48,  134 => 39,  129 => 38,  127 => 37,  116 => 28,  110 => 26,  108 => 25,  103 => 23,  99 => 22,  95 => 21,  91 => 20,  87 => 19,  81 => 16,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  56 => 8,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sortie/sortie_afficher.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/sortie/sortie_afficher.html.twig");
    }
}
