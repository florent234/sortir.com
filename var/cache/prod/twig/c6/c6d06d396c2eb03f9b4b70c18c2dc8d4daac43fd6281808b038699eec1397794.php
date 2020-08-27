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

/* campus/campus.html.twig */
class __TwigTemplate_ea23ef7d83ff32273b39df9ee4400039eebff3c7478326688a922cae9b17b349 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "campus/campus.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <table>
        <tr>
            <th>Campus</th>
            <th>Actions</th>
        </tr>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["campus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["camp"]) {
            // line 10
            echo "            <tr>
                <td>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["camp"], "nomCampus", [], "any", false, false, false, 11), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campus_modifier", ["id" => twig_get_attribute($this->env, $this->source, $context["camp"], "campusId", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\">Modifier</a>
                    <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campus_supprimer", ["id" => twig_get_attribute($this->env, $this->source, $context["camp"], "campusId", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">Supprimer</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['camp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formCampus"] ?? null), 'form_start');
        echo "
        <td>";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formCampus"] ?? null), 'widget');
        echo "</td>
        <td><button type=\"submit\" name=\"submit\" id=\"submit\">Ajouter</button></td>
        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formCampus"] ?? null), 'form_end');
        echo "
    </table>

";
    }

    // line 24
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Campus";
    }

    public function getTemplateName()
    {
        return "campus/campus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 24,  92 => 19,  87 => 17,  82 => 16,  73 => 13,  69 => 12,  65 => 11,  62 => 10,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "campus/campus.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/campus/campus.html.twig");
    }
}
