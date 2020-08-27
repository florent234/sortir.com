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

/* campus/modifier.html.twig */
class __TwigTemplate_93360b77379ebfc7084c98fdf21984a518571b68ea5c32e69ede6cf108764138 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "campus/modifier.html.twig", 1);
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
             ";
            // line 11
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["camp"], "campusId", [], "any", false, false, false, 11), ($context["id"] ?? null))) {
                // line 12
                echo "                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["camp"], "nomCampus", [], "any", false, false, false, 12), "html", null, true);
                echo "</td>
                <td>Modifier Supprimer</td>
             ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 14
$context["camp"], "campusId", [], "any", false, false, false, 14), ($context["id"] ?? null))) {
                // line 15
                echo "                 ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formCampus"] ?? null), 'form_start');
                echo "
                 <td>";
                // line 16
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formCampus"] ?? null), 'widget');
                echo "</td>
                 <td><button type=\"submit\" name=\"submit\" id=\"submit\">Modifier</button></td>
                 ";
                // line 18
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formCampus"] ?? null), 'form_end');
                echo "
            ";
            }
            // line 20
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['camp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </table>

";
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Campus";
    }

    public function getTemplateName()
    {
        return "campus/modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 26,  97 => 22,  90 => 20,  85 => 18,  80 => 16,  75 => 15,  73 => 14,  67 => 12,  65 => 11,  62 => 10,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "campus/modifier.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/campus/modifier.html.twig");
    }
}
