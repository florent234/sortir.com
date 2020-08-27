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
class __TwigTemplate_0aa6b1cfdf2bb22b198bb761128bfe5d8a8f1e21d8e85e1e0e76c79b6c5c3ce2 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "CSV/CSVFiles.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <label>Importer un fichier CSV: </label><button><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSV_creation");
        echo "\">CSV création</a></button>
    <h3>Fichiers CSV déja importés :</h3>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["csv"] ?? null));
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
        return array (  76 => 23,  71 => 10,  67 => 9,  63 => 8,  60 => 7,  56 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "CSV/CSVFiles.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/CSV/CSVFiles.html.twig");
    }
}
