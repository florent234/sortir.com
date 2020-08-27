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

/* villes/villes.html.twig */
class __TwigTemplate_176b87a7ecf25a5dc2d722a0a2316819b5b83f5e9f632d92604cd095e20d359e extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "villes/villes.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "

    <table>
        <tr>
            <th>Villes</th>
            <th>Code Postal</th>
            <th>Actions</th>
        </tr>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["villes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 13
            echo "            <tr>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "nomVilles", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "codePostal", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("villes_modifier", ["id" => twig_get_attribute($this->env, $this->source, $context["ville"], "VillesId", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\">Modifier</a>
                    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("villes_supprimer", ["id" => twig_get_attribute($this->env, $this->source, $context["ville"], "VillesId", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">Supprimer</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formVilles"] ?? null), 'form_start');
        echo "
        <td>";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formVilles"] ?? null), "nomVilles", [], "any", false, false, false, 21), 'widget');
        echo "</td>
        <td>";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formVilles"] ?? null), "codePostal", [], "any", false, false, false, 22), 'widget');
        echo "</td>
        <td><button type=\"submit\" name=\"submit\" id=\"submit\">Ajouter</button></td>
        ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formVilles"] ?? null), 'form_end');
        echo "
    </table>

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
        return "villes/villes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 29,  103 => 24,  98 => 22,  94 => 21,  89 => 20,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  65 => 13,  61 => 12,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "villes/villes.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/villes/villes.html.twig");
    }
}
