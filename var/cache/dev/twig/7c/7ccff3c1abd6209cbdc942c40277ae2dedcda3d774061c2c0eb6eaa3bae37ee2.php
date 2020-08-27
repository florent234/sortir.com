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
class __TwigTemplate_a13e66c8b9d865c2966874b2bf9ad8a1a99c602085d6d997b2f3280ab1a50574 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "accueil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["sorties"]) || array_key_exists("sorties", $context) ? $context["sorties"] : (function () { throw new RuntimeError('Variable "sorties" does not exist.', 19, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["campus"]) || array_key_exists("campus", $context) ? $context["campus"] : (function () { throw new RuntimeError('Variable "campus" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["camp"]) {
            // line 56
            echo "                         ";
            if (0 === twig_compare($context["camp"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "campus", [], "any", false, false, false, 56))) {
                // line 57
                echo "                               <option ";
                echo twig_escape_filter($this->env, (isset($context["optionUser"]) || array_key_exists("optionUser", $context) ? $context["optionUser"] : (function () { throw new RuntimeError('Variable "optionUser" does not exist.', 57, $this->source); })()), "html", null, true);
                echo " value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["camp"], "nomCampus", [], "any", false, false, false, 57), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["camp"], "nomCampus", [], "any", false, false, false, 57), "html", null, true);
                echo "</option>
                         ";
            }
            // line 59
            echo "                         ";
            if ((0 !== twig_compare($context["camp"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "campus", [], "any", false, false, false, 59)) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["camp"], "nomCampus", [], "any", false, false, false, 59), (isset($context["selectCampus"]) || array_key_exists("selectCampus", $context) ? $context["selectCampus"] : (function () { throw new RuntimeError('Variable "selectCampus" does not exist.', 59, $this->source); })())))) {
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
            if ((0 !== twig_compare($context["camp"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "campus", [], "any", false, false, false, 62)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["camp"], "nomCampus", [], "any", false, false, false, 62), (isset($context["selectCampus"]) || array_key_exists("selectCampus", $context) ? $context["selectCampus"] : (function () { throw new RuntimeError('Variable "selectCampus" does not exist.', 62, $this->source); })())))) {
                // line 63
                echo "                           <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["camp"], "nomCampus", [], "any", false, false, false, 63), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, (isset($context["optionOther"]) || array_key_exists("optionOther", $context) ? $context["optionOther"] : (function () { throw new RuntimeError('Variable "optionOther" does not exist.', 63, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["organisateurCheck"]) || array_key_exists("organisateurCheck", $context) ? $context["organisateurCheck"] : (function () { throw new RuntimeError('Variable "organisateurCheck" does not exist.', 76, $this->source); })()), "html", null, true);
        echo " ><label>Sorties dont je suis l'organisateur/trice</label><br>
                <input type=\"checkbox\" class=\"ib6\" id=\"inscrit\" name=\"inscrit\" ";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["inscritCheck"]) || array_key_exists("inscritCheck", $context) ? $context["inscritCheck"] : (function () { throw new RuntimeError('Variable "inscritCheck" does not exist.', 77, $this->source); })()), "html", null, true);
        echo " ><label>Sorties auxquelles je suis inscrit/e</label><br>
                <input type=\"checkbox\" class=\"ib6\" id=\"pasInscrit\" name=\"pasInscrit\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["pasInscritCheck"]) || array_key_exists("pasInscritCheck", $context) ? $context["pasInscritCheck"] : (function () { throw new RuntimeError('Variable "pasInscritCheck" does not exist.', 78, $this->source); })()), "html", null, true);
        echo " ><label>Sorties auxquelles je ne suis pas inscrit/e</label><br>
                <input type=\"checkbox\" class=\"ib6\" id=\"passees\" name=\"passees\" ";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["passeesCheck"]) || array_key_exists("passeesCheck", $context) ? $context["passeesCheck"] : (function () { throw new RuntimeError('Variable "passeesCheck" does not exist.', 79, $this->source); })()), "html", null, true);
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
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "user", [], "any", false, false, false, 96), "administrateur", [], "any", false, false, false, 96), 1)) {
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
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["sorties"]) || array_key_exists("sorties", $context) ? $context["sorties"] : (function () { throw new RuntimeError('Variable "sorties" does not exist.', 102, $this->source); })()), function ($__sortie__) use ($context, $macros) { $context["sortie"] = $__sortie__; return (-1 === twig_compare((isset($context["dateDebut"]) || array_key_exists("dateDebut", $context) ? $context["dateDebut"] : (function () { throw new RuntimeError('Variable "dateDebut" does not exist.', 102, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "dateHeure", [], "any", false, false, false, 102), "Y-m-d")) && 1 === twig_compare((isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 102, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "dateHeure", [], "any", false, false, false, 102), "Y-m-d"))); }));
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
            if (0 === twig_compare((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 103, $this->source); })()), "search")) {
                // line 104
                echo "                     ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tableauRecherche"]) || array_key_exists("tableauRecherche", $context) ? $context["tableauRecherche"] : (function () { throw new RuntimeError('Variable "tableauRecherche" does not exist.', 104, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["sorties2"]) || array_key_exists("sorties2", $context) ? $context["sorties2"] : (function () { throw new RuntimeError('Variable "sorties2" does not exist.', 114, $this->source); })()), function ($__sortie__) use ($context, $macros) { $context["sortie"] = $__sortie__; return ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sortie"], "campus", [], "any", false, false, false, 114), "nomCampus", [], "any", false, false, false, 114), (isset($context["selectCampus"]) || array_key_exists("selectCampus", $context) ? $context["selectCampus"] : (function () { throw new RuntimeError('Variable "selectCampus" does not exist.', 114, $this->source); })())) && -1 === twig_compare((isset($context["dateDebut"]) || array_key_exists("dateDebut", $context) ? $context["dateDebut"] : (function () { throw new RuntimeError('Variable "dateDebut" does not exist.', 114, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "dateHeure", [], "any", false, false, false, 114), "Y-m-d"))) && 1 === twig_compare((isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 114, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "dateHeure", [], "any", false, false, false, 114), "Y-m-d"))); }));
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
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["sorties3"]) || array_key_exists("sorties3", $context) ? $context["sorties3"] : (function () { throw new RuntimeError('Variable "sorties3" does not exist.', 118, $this->source); })()), function ($__sortie__) use ($context, $macros) { $context["sortie"] = $__sortie__; return (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sortie"], "campus", [], "any", false, false, false, 118), "nomCampus", [], "any", false, false, false, 118), (isset($context["selectCampus"]) || array_key_exists("selectCampus", $context) ? $context["selectCampus"] : (function () { throw new RuntimeError('Variable "selectCampus" does not exist.', 118, $this->source); })())) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sortie"], "organisateur", [], "any", false, false, false, 118), "username", [], "any", false, false, false, 118), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "user", [], "any", false, false, false, 118), "username", [], "any", false, false, false, 118))) && -1 === twig_compare((isset($context["dateDebut"]) || array_key_exists("dateDebut", $context) ? $context["dateDebut"] : (function () { throw new RuntimeError('Variable "dateDebut" does not exist.', 118, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "dateHeure", [], "any", false, false, false, 118), "Y-m-d"))) && 1 === twig_compare((isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 118, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "dateHeure", [], "any", false, false, false, 118), "Y-m-d"))); }));
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
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["sorties4"]) || array_key_exists("sorties4", $context) ? $context["sorties4"] : (function () { throw new RuntimeError('Variable "sorties4" does not exist.', 122, $this->source); })()), function ($__sortie__) use ($context, $macros) { $context["sortie"] = $__sortie__; return (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sortie"], "campus", [], "any", false, false, false, 122), "nomCampus", [], "any", false, false, false, 122), (isset($context["selectCampus"]) || array_key_exists("selectCampus", $context) ? $context["selectCampus"] : (function () { throw new RuntimeError('Variable "selectCampus" does not exist.', 122, $this->source); })())) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sortie"], "organisateur", [], "any", false, false, false, 122), "username", [], "any", false, false, false, 122), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "username", [], "any", false, false, false, 122))) && -1 === twig_compare((isset($context["dateDebut"]) || array_key_exists("dateDebut", $context) ? $context["dateDebut"] : (function () { throw new RuntimeError('Variable "dateDebut" does not exist.', 122, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "dateHeure", [], "any", false, false, false, 122), "Y-m-d"))) && 1 === twig_compare((isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 122, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "dateHeure", [], "any", false, false, false, 122), "Y-m-d"))); }));
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
        if (0 !== twig_compare((isset($context["sorties"]) || array_key_exists("sorties", $context) ? $context["sorties"] : (function () { throw new RuntimeError('Variable "sorties" does not exist.', 125, $this->source); })()), "premiereBoucle")) {
            // line 126
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["sorties5"]) || array_key_exists("sorties5", $context) ? $context["sorties5"] : (function () { throw new RuntimeError('Variable "sorties5" does not exist.', 126, $this->source); })()), function ($__sortie__) use ($context, $macros) { $context["sortie"] = $__sortie__; return ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sortie"], "campus", [], "any", false, false, false, 126), "nomCampus", [], "any", false, false, false, 126), (isset($context["selectCampus"]) || array_key_exists("selectCampus", $context) ? $context["selectCampus"] : (function () { throw new RuntimeError('Variable "selectCampus" does not exist.', 126, $this->source); })())) && -1 === twig_compare((isset($context["dateDebut"]) || array_key_exists("dateDebut", $context) ? $context["dateDebut"] : (function () { throw new RuntimeError('Variable "dateDebut" does not exist.', 126, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "dateHeure", [], "any", false, false, false, 126), "Y-m-d"))) && 1 === twig_compare((isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 126, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "dateHeure", [], "any", false, false, false, 126), "Y-m-d"))); }));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 138
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  508 => 138,  495 => 135,  488 => 130,  485 => 129,  471 => 128,  468 => 127,  450 => 126,  447 => 125,  433 => 124,  430 => 123,  413 => 122,  410 => 121,  396 => 120,  393 => 119,  376 => 118,  373 => 117,  359 => 116,  356 => 115,  339 => 114,  336 => 113,  322 => 112,  319 => 111,  316 => 110,  313 => 109,  299 => 108,  296 => 107,  293 => 106,  290 => 105,  272 => 104,  269 => 103,  252 => 102,  247 => 99,  243 => 97,  241 => 96,  221 => 79,  217 => 78,  213 => 77,  209 => 76,  197 => 66,  191 => 65,  181 => 63,  178 => 62,  170 => 60,  167 => 59,  157 => 57,  154 => 56,  150 => 55,  129 => 37,  116 => 26,  107 => 23,  103 => 22,  97 => 21,  94 => 20,  90 => 19,  74 => 8,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig'%}


{%  block main %}

    <!-- Parti uniquement visible sur smartphone -->
<div class=\"d-block d-md-none\">
    <h3><img src=\"{{ asset('photos/Local/') ~'24730e81feb5acfc65d93c6dd9ec8487.png' }} \" width=\"35\" alt=\"\"><a class=\"aMenu\" href=\"{{ path('accueil') }}\">  Sortir.com</a></h3>
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
        {% for sortie in sorties %}
        <tr>
            <td align=\"center\"><a href=\"{{ path('sortie_afficher', {'id':sortie.sortieId }) }}\">{{ sortie.nomSortie }} </a></td>
            <td align=\"center\">{{ sortie.dateHeure|date(\"d/m/Y H\") }}h   </td>
            <td align=\"center\">{{ sortie.ville.nomVilles }}</td>
        </tr>
        {% endfor %}
        </tbody>
    </table>

</div>
    <!--Parti uniquement visible sur tablette et ordinateur -->

    <!-- ////////////////////////  Filtre  ///////////////////////////////////-->
    <button id=\"btnFiltre\">Filtres</button>

<div id=\"divFiltre\" >
    <br><h3>Filtrer les sorties</h3>
    <form method=\"post\" action=\"{{ path('accueil') }}\" id=\"formFiltre\" name=\"filtre\" class=\"filtre\">

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
                   {% for camp in campus %}
                         {% if camp == app.user.campus %}
                               <option {{ optionUser }} value=\"{{ camp.nomCampus }}\" >{{ camp.nomCampus }}</option>
                         {% endif %}
                         {% if camp != app.user.campus and camp.nomCampus != selectCampus%}
                            <option value=\"{{ camp.nomCampus }}\" >{{ camp.nomCampus }}</option>
                         {% endif %}
                       {% if camp != app.user.campus and camp.nomCampus == selectCampus%}
                           <option value=\"{{ camp.nomCampus }}\" {{ optionOther }} >{{ camp.nomCampus }}</option>
                       {% endif %}
                   {% endfor %}
               </select><br>
            </div>

            <div id=\"b4\" class=\"filtre_3 col-md-3\">
                <button name=\"rechercher\">Rechercher</button>
            </div>
        </div>

        <div id=\"form2\">
            <!-- /////////////    Les Checkbox  //////////////////////////// -->
                <input type=\"checkbox\" class=\"ib6\" id=\"organisateur\" name=\"organisateur\" {{ organisateurCheck }} ><label>Sorties dont je suis l'organisateur/trice</label><br>
                <input type=\"checkbox\" class=\"ib6\" id=\"inscrit\" name=\"inscrit\" {{ inscritCheck }} ><label>Sorties auxquelles je suis inscrit/e</label><br>
                <input type=\"checkbox\" class=\"ib6\" id=\"pasInscrit\" name=\"pasInscrit\"{{ pasInscritCheck}} ><label>Sorties auxquelles je ne suis pas inscrit/e</label><br>
                <input type=\"checkbox\" class=\"ib6\" id=\"passees\" name=\"passees\" {{ passeesCheck }} ><label>Sorties passées</label>
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
                {% if app.user.administrateur==1 %}
                    <th>Actions Administrateur</th>
                {% endif %}
            </tr>
            </thead>
            <tbody>
            {% for sortie in sorties|filter(sortie=> dateDebut<sortie.dateHeure|date(\"Y-m-d\") and dateFin>sortie.dateHeure|date(\"Y-m-d\")) %}
                {% if search == \"search\"   %}
                     {% for sortieRecherche in tableauRecherche %}
                        {% if (sortieRecherche == sortie.nomSortie ) %}
                            {% include 'accueilBody.html.twig' %}
                         {% endif %}
                     {% endfor %}
                {% else %}
                    {% include 'accueilBody.html.twig' %}
                {% endif %}
            {% endfor %}

            {% for sortie in sorties2|filter(sortie=> sortie.campus.nomCampus != selectCampus and dateDebut<sortie.dateHeure|date(\"Y-m-d\") and dateFin>sortie.dateHeure|date(\"Y-m-d\")) %}
                    {% include 'accueilBody.html.twig' %}
            {% endfor %}

            {% for sortie in sorties3|filter(sortie=> sortie.campus.nomCampus != selectCampus  and sortie.organisateur.username != app.user.username and dateDebut<sortie.dateHeure|date(\"Y-m-d\") and dateFin>sortie.dateHeure|date(\"Y-m-d\")) %}
                    {% include 'accueilBody.html.twig' %}
            {% endfor %}

            {% for sortie in sorties4|filter(sortie=> sortie.campus.nomCampus != selectCampus and  sortie.organisateur.username != app.user.username and dateDebut<sortie.dateHeure|date(\"Y-m-d\") and dateFin>sortie.dateHeure|date(\"Y-m-d\")) %}
                    {% include 'accueilBody.html.twig' %}
            {% endfor %}
            {% if sorties != \"premiereBoucle\" %}
            {% for sortie in sorties5|filter(sortie=> sortie.campus.nomCampus == selectCampus and dateDebut<sortie.dateHeure|date(\"Y-m-d\") and dateFin>sortie.dateHeure|date(\"Y-m-d\")) %}
                {% include 'accueilBody.html.twig' %}
            {% endfor %}
            {% endif %}

            </tbody>
        </table><br>

    <div class=\"col d-none d-md-block\">
        <a id=\"creerSortie\" href=\"{{ path('sortie_creation') }}\">Créer une sortie</a>
    </div><br>
{% endblock %}
{% block title %}Accueil{% endblock %}", "accueil.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/accueil.html.twig");
    }
}
