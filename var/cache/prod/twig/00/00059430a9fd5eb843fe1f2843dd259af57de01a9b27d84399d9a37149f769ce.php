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

/* accueil.html.twig */
class __TwigTemplate_06cf13021342856b8803b82d255d2da7ab993c48c7bfeca9eb228e5126d996dc extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "accueil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <!-- Parti uniquement visible sur smartphone -->
<div class=\"d-block d-md-none\">
    <h3><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/Local/") . "24730e81feb5acfc65d93c6dd9ec8487.png"), "html", null, true);
        echo " \" width=\"35\" alt=\"\"><a class=\"aMenu\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">  Sortir.com</a></h3>
    <table class=\"tableauSortie\">
        <h3>Mes Sorties :</h3>
        <thead>
        <tr>
            <th>Nom de la sortie</th>
            <th >Date de la sortie</th>
            <th >Lieux</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sorties"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sortie"]) {
            // line 20
            echo "        <tr>
            <td align=\"center\"><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_afficher", ["id" => twig_get_attribute($this->env, $this->source, $context["sortie"], "sortieId", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "nomSortie", [], "any", false, false, false, 21), "html", null, true);
            echo " </a></td>
            <td align=\"center\">";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "dateHeure", [], "any", false, false, false, 22), "d/m/Y H"), "html", null, true);
            echo "h   </td>
            <td align=\"center\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sortie"], "ville", [], "any", false, false, false, 23), "nomVilles", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sortie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>

</div>
    <!--Parti uniquement visible sur tablette et ordinateur -->

    <!-- ////////////////////////  Filtre  ///////////////////////////////////-->
    <button id=\"btnFiltre\">Filtres</button>

<div id=\"divFiltre\" >
    <br><h3>Filtrer les sorties</h3>
    <form method=\"post\" action=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\" id=\"formFiltre\" name=\"filtre\" class=\"filtre\">

        <div id=\"form1\">
            <div id=\"b1\">
                <label for=\"search\"> Nom de la sortie:</label>
                <input id=\"search\" name=\"search\" type=\"text\">
            </div>

        <div id=\"b2\">
            <label>Entre:</label>
            <input name=\"dateDebut\" type=\"date\">
            <label>et:</label>
            <input name=\"dateFin\"  type=\"date\">
        </div>

            <div id=\"b6\">
               <label>Campus</label>
               <select id=\"selecCampus\" name=\"selectCampus\"  >
                   ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["campus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["camp"]) {
            // line 56
            echo "                         ";
            if (0 === twig_compare($context["camp"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 56), "campus", [], "any", false, false, false, 56))) {
                // line 57
                echo "                               <option ";
                echo twig_escape_filter($this->env, ($context["optionUser"] ?? null), "html", null, true);
                echo " value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["camp"], "nomCampus", [], "any", false, false, false, 57), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["camp"], "nomCampus", [], "any", false, false, false, 57), "html", null, true);
                echo "</option>
                         ";
            }
            // line 59
            echo "                         ";
            if ((0 !== twig_compare($context["camp"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 59), "campus", [], "any", false, false, false, 59)) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["camp"], "nomCampus", [], "any", false, false, false, 59), ($context["selectCampus"] ?? null)))) {
                // line 60
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["camp"], "nomCampus", [], "any", false, false, false, 60), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["camp"], "nomCampus", [], "any", false, false, false, 60), "html", null, true);
                echo "</option>
                         ";
            }
            // line 62
            echo "                       ";
            if ((0 !== twig_compare($context["camp"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 62), "campus", [], "any", false, false, false, 62)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["camp"], "nomCampus", [], "any", false, false, false, 62), ($context["selectCampus"] ?? null)))) {
                // line 63
                echo "                           <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["camp"], "nomCampus", [], "any", false, false, false, 63), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, ($context["optionOther"] ?? null), "html", null, true);
                echo " >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["camp"], "nomCampus", [], "any", false, false, false, 63), "html", null, true);
                echo "</option>
                       ";
            }
            // line 65
            echo "                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['camp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "               </select><br>
            </div>

            <div id=\"b4\" class=\"filtre_3 col-md-3\">
                <button name=\"rechercher\">Rechercher</button>
            </div>
        </div>

        <div id=\"form2\">
            <!-- /////////////    Les Checkbox  //////////////////////////// -->
                <input type=\"checkbox\" class=\"ib6\" id=\"organisateur\" name=\"organisateur\" ";
        // line 76
        echo twig_escape_filter($this->env, ($context["organisateurCheck"] ?? null), "html", null, true);
        echo " ><label>Sorties dont je suis l'organisateur/trice</label><br>
                <input type=\"checkbox\" class=\"ib6\" id=\"inscrit\" name=\"inscrit\" ";
        // line 77
        echo twig_escape_filter($this->env, ($context["inscritCheck"] ?? null), "html", null, true);
        echo " ><label>Sorties auxquelles je suis inscrit/e</label><br>
                <input type=\"checkbox\" class=\"ib6\" id=\"pasInscrit\" name=\"pasInscrit\"";
        // line 78
        echo twig_escape_filter($this->env, ($context["pasInscritCheck"] ?? null), "html", null, true);
        echo " ><label>Sorties auxquelles je ne suis pas inscrit/e</label><br>
                <input type=\"checkbox\" class=\"ib6\" id=\"passees\" name=\"passees\" ";
        // line 79
        echo twig_escape_filter($this->env, ($context["passeesCheck"] ?? null), "html", null, true);
        echo " ><label>Sorties passées</label>
        </div>
    </form><br><br>

    <!-- ///////////////// Le tableau des Sorties /////-->
</div>
        <table class=\"tableauSortie col-md-12 col-lg-12 d-none d-md-block\">
            <thead>
            <tr>
                <th>Nom de la sortie</th>
                <th >Date de la sortie</th>
                <th >Clôture</th>
                <th>Inscrits/Places</th>
                <th>Etat</th>
                <th>Inscrit</th>
                <th>Organisateur</th>
                <th>Actions</th>
                ";
        // line 96
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 96), "administrateur", [], "any", false, false, false, 96), 1)) {
            // line 97
            echo "                    <th>Actions Administrateur</th>
                ";
        }
        // line 99
        echo "            </tr>
            </thead>
            <tbody>
            ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["sorties"] ?? null), function ($__sortie__) use ($context, $macros) { $context["sortie"] = $__sortie__; return (-1 === twig_compare(($context["dateDebut"] ?? null), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "dateHeure", [], "any", false, false, false, 102), "Y-m-d")) && 1 === twig_compare(($context["dateFin"] ?? null), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "dateHeure", [], "any", false, false, false, 102), "Y-m-d"))); }));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["sortie"]) {
            // line 103
            echo "                ";
            if (0 === twig_compare(($context["search"] ?? null), "search")) {
                // line 104
                echo "                     ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tableauRecherche"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["sortieRecherche"]) {
                    // line 105
                    echo "                        ";
                    if (0 === twig_compare($context["sortieRecherche"], twig_get_attribute($this->env, $this->source, $context["sortie"], "nomSortie", [], "any", false, false, false, 105))) {
                        // line 106
                        echo "                            ";
                        $this->loadTemplate("accueilBody.html.twig", "accueil.html.twig", 106)->display($context);
                        // line 107
                        echo "                         ";
                    }
                    // line 108
                    echo "                     ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sortieRecherche'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "                ";
            } else {
                // line 110
                echo "                    ";
                $this->loadTemplate("accueilBody.html.twig", "accueil.html.twig", 110)->display($context);
                // line 111
                echo "                ";
            }
            // line 112
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sortie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "
            ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["sorties2"] ?? null), function ($__sortie__) use ($context, $macros) { $context["sortie"] = $__sortie__; return ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sortie"], "campus", [], "any", false, false, false, 114), "nomCampus", [], "any", false, false, false, 114), ($context["selectCampus"] ?? null)) && -1 === twig_compare(($context["dateDebut"] ?? null), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "dateHeure", [], "any", false, false, false, 114), "Y-m-d"))) && 1 === twig_compare(($context["dateFin"] ?? null), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "dateHeure", [], "any", false, false, false, 114), "Y-m-d"))); }));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["sortie"]) {
            // line 115
            echo "                    ";
            $this->loadTemplate("accueilBody.html.twig", "accueil.html.twig", 115)->display($context);
            // line 116
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sortie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "
            ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["sorties3"] ?? null), function ($__sortie__) use ($context, $macros) { $context["sortie"] = $__sortie__; return (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sortie"], "campus", [], "any", false, false, false, 118), "nomCampus", [], "any", false, false, false, 118), ($context["selectCampus"] ?? null)) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sortie"], "organisateur", [], "any", false, false, false, 118), "username", [], "any", false, false, false, 118), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 118), "username", [], "any", false, false, false, 118))) && -1 === twig_compare(($context["dateDebut"] ?? null), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "dateHeure", [], "any", false, false, false, 118), "Y-m-d"))) && 1 === twig_compare(($context["dateFin"] ?? null), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "dateHeure", [], "any", false, false, false, 118), "Y-m-d"))); }));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["sortie"]) {
            // line 119
            echo "                    ";
            $this->loadTemplate("accueilBody.html.twig", "accueil.html.twig", 119)->display($context);
            // line 120
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sortie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "
            ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["sorties4"] ?? null), function ($__sortie__) use ($context, $macros) { $context["sortie"] = $__sortie__; return (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sortie"], "campus", [], "any", false, false, false, 122), "nomCampus", [], "any", false, false, false, 122), ($context["selectCampus"] ?? null)) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sortie"], "organisateur", [], "any", false, false, false, 122), "username", [], "any", false, false, false, 122), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 122), "username", [], "any", false, false, false, 122))) && -1 === twig_compare(($context["dateDebut"] ?? null), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "dateHeure", [], "any", false, false, false, 122), "Y-m-d"))) && 1 === twig_compare(($context["dateFin"] ?? null), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "dateHeure", [], "any", false, false, false, 122), "Y-m-d"))); }));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["sortie"]) {
            // line 123
            echo "                    ";
            $this->loadTemplate("accueilBody.html.twig", "accueil.html.twig", 123)->display($context);
            // line 124
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sortie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "            ";
        if (0 !== twig_compare(($context["sorties"] ?? null), "premiereBoucle")) {
            // line 126
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["sorties5"] ?? null), function ($__sortie__) use ($context, $macros) { $context["sortie"] = $__sortie__; return ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sortie"], "campus", [], "any", false, false, false, 126), "nomCampus", [], "any", false, false, false, 126), ($context["selectCampus"] ?? null)) && -1 === twig_compare(($context["dateDebut"] ?? null), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "dateHeure", [], "any", false, false, false, 126), "Y-m-d"))) && 1 === twig_compare(($context["dateFin"] ?? null), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "dateHeure", [], "any", false, false, false, 126), "Y-m-d"))); }));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["sortie"]) {
                // line 127
                echo "                ";
                $this->loadTemplate("accueilBody.html.twig", "accueil.html.twig", 127)->display($context);
                // line 128
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sortie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "            ";
        }
        // line 130
        echo "
            </tbody>
        </table><br>

    <div class=\"col d-none d-md-block\">
        <a id=\"creerSortie\" href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_creation");
        echo "\">Créer une sortie</a>
    </div><br>
";
    }

    // line 138
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil";
    }

    public function getTemplateName()
    {
        return "accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 138,  477 => 135,  470 => 130,  467 => 129,  453 => 128,  450 => 127,  432 => 126,  429 => 125,  415 => 124,  412 => 123,  395 => 122,  392 => 121,  378 => 120,  375 => 119,  358 => 118,  355 => 117,  341 => 116,  338 => 115,  321 => 114,  318 => 113,  304 => 112,  301 => 111,  298 => 110,  295 => 109,  281 => 108,  278 => 107,  275 => 106,  272 => 105,  254 => 104,  251 => 103,  234 => 102,  229 => 99,  225 => 97,  223 => 96,  203 => 79,  199 => 78,  195 => 77,  191 => 76,  179 => 66,  173 => 65,  163 => 63,  160 => 62,  152 => 60,  149 => 59,  139 => 57,  136 => 56,  132 => 55,  111 => 37,  98 => 26,  89 => 23,  85 => 22,  79 => 21,  76 => 20,  72 => 19,  56 => 8,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "accueil.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/accueil.html.twig");
    }
}
