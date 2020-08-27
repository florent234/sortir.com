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

/* villes/modifier.html.twig */
class __TwigTemplate_030c18e1a717fc93610f91a3c39eb25d221f64428b0a5bbaae9390b3d6f2c992 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "villes/modifier.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <table>
        <tr>
            <th>Villes</th>
            <th>Code Postal</th>
            <th>Actions</th>
        </tr>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["villes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 11
            echo "            <tr>
             ";
            // line 12
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["ville"], "VillesId", [], "any", false, false, false, 12), ($context["id"] ?? null))) {
                // line 13
                echo "                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "nomVilles", [], "any", false, false, false, 13), "html", null, true);
                echo "</td>
                 <td>";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "codePostal", [], "any", false, false, false, 14), "html", null, true);
                echo "</td>
                <td>Modifier Supprimer</td>
             ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 16
$context["ville"], "VillesId", [], "any", false, false, false, 16), ($context["id"] ?? null))) {
                // line 17
                echo "                 ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formVilles"] ?? null), 'form_start');
                echo "
                 <td>";
                // line 18
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formVilles"] ?? null), "nomVilles", [], "any", false, false, false, 18), 'widget');
                echo "</td>
                 <td>";
                // line 19
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formVilles"] ?? null), "codePostal", [], "any", false, false, false, 19), 'widget');
                echo "</td>
                 <td><button type=\"submit\" name=\"submit\" id=\"submit\">Modifier</button></td>
                 ";
                // line 21
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formVilles"] ?? null), 'form_end');
                echo "
            ";
            }
            // line 23
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </table>

";
    }

    // line 29
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Campus";
    }

    public function getTemplateName()
    {
        return "villes/modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 29,  106 => 25,  99 => 23,  94 => 21,  89 => 19,  85 => 18,  80 => 17,  78 => 16,  73 => 14,  68 => 13,  66 => 12,  63 => 11,  59 => 10,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "villes/modifier.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/villes/modifier.html.twig");
    }
}
