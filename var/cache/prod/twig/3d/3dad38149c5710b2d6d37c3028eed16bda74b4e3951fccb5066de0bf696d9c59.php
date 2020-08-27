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
class __TwigTemplate_354696893cec3393e9dff860a237df4e78430beff027ec922ecafc471d5dd5a4 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "sortie/sortie_annuler.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<h1>Annuler une sortie</h1>

<div>
    <div>
        <label>Nom de la sortie :</label>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "nomSortie", [], "any", false, false, false, 8), "html", null, true);
        echo " <br>
        <label>Date et heure de la sortie :</label>";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "dateHeure", [], "any", false, false, false, 9), "m/d/Y"), "html", null, true);
        echo " <br>
        <label>Campus :</label>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "campus", [], "any", false, false, false, 10), "nomCampus", [], "any", false, false, false, 10), "html", null, true);
        echo " <br>
        <label>Lieu :</label> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "rue", [], "any", false, false, false, 11), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "ville", [], "any", false, false, false, 11), "nomVilles", [], "any", false, false, false, 11), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sortie"] ?? null), "codePostal", [], "any", false, false, false, 11), "html", null, true);
        echo "<br>
        <form method=\"post\">
            <label for=\"commentaire\">Motif :</label><textarea name=\"commentaire\" id=\"commentaire\" rows=\"5\" cols=\"40\"></textarea><br>
            <input type=\"submit\" name=\"submit\" id=\"submit\" value=\"Enregister\">
            <input type=\"reset\" name=\"reset\" id=\"reset\" value=\"Annuler\">
        </form>
    </div>
</div>

";
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
        return array (  68 => 11,  64 => 10,  60 => 9,  56 => 8,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sortie/sortie_annuler.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/sortie/sortie_annuler.html.twig");
    }
}
