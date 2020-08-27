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

/* sortie/sortie_annuler.html.twig */
class __TwigTemplate_87e486e8e2e5bc7a2e84707b993c2e1d487dcb92c64c1fbcebb222a62a3449f5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sortie/sortie_annuler.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sortie/sortie_annuler.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "sortie/sortie_annuler.html.twig", 1);
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
        echo "<h1>Annuler une sortie</h1>

<div>
    <div>
        <label>Nom de la sortie :</label>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 8, $this->source); })()), "nomSortie", [], "any", false, false, false, 8), "html", null, true);
        echo " <br>
        <label>Date et heure de la sortie :</label>";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 9, $this->source); })()), "dateHeure", [], "any", false, false, false, 9), "m/d/Y"), "html", null, true);
        echo " <br>
        <label>Campus :</label>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 10, $this->source); })()), "campus", [], "any", false, false, false, 10), "nomCampus", [], "any", false, false, false, 10), "html", null, true);
        echo " <br>
        <label>Lieu :</label> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 11, $this->source); })()), "rue", [], "any", false, false, false, 11), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 11, $this->source); })()), "ville", [], "any", false, false, false, 11), "nomVilles", [], "any", false, false, false, 11), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 11, $this->source); })()), "codePostal", [], "any", false, false, false, 11), "html", null, true);
        echo "<br>
        <form method=\"post\">
            <label for=\"commentaire\">Motif :</label><textarea name=\"commentaire\" id=\"commentaire\" rows=\"5\" cols=\"40\"></textarea><br>
            <input type=\"submit\" name=\"submit\" id=\"submit\" value=\"Enregister\">
            <input type=\"reset\" name=\"reset\" id=\"reset\" value=\"Annuler\">
        </form>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sortie/sortie_annuler.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 11,  82 => 10,  78 => 9,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block main %}
<h1>Annuler une sortie</h1>

<div>
    <div>
        <label>Nom de la sortie :</label>{{ sortie.nomSortie }} <br>
        <label>Date et heure de la sortie :</label>{{ sortie.dateHeure|date(\"m/d/Y\") }} <br>
        <label>Campus :</label>{{ sortie.campus.nomCampus }} <br>
        <label>Lieu :</label> {{ sortie.rue }} {{ sortie.ville.nomVilles }} {{ sortie.codePostal }}<br>
        <form method=\"post\">
            <label for=\"commentaire\">Motif :</label><textarea name=\"commentaire\" id=\"commentaire\" rows=\"5\" cols=\"40\"></textarea><br>
            <input type=\"submit\" name=\"submit\" id=\"submit\" value=\"Enregister\">
            <input type=\"reset\" name=\"reset\" id=\"reset\" value=\"Annuler\">
        </form>
    </div>
</div>

{% endblock %}", "sortie/sortie_annuler.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/sortie/sortie_annuler.html.twig");
    }
}
