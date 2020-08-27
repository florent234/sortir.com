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

/* photo/photos.html.twig */
class __TwigTemplate_a67231ca25a80d0cbe795d12f2024533c328a793961857c0111818d9db65d7eb extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "photo/photos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["photos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 5
            echo "        <div>
            ";
            // line 6
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["photo"], "photoId", [], "any", false, false, false, 6), 1)) {
                // line 7
                echo "                <h3>Logo de l'application</h3>
            ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 8
$context["photo"], "photoId", [], "any", false, false, false, 8), 2)) {
                // line 9
                echo "                <h3>Photo par défault des utilisateurs</h3>
            ";
            }
            // line 11
            echo "
            <div>
                <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/Local/") . twig_get_attribute($this->env, $this->source, $context["photo"], "codePhoto", [], "any", false, false, false, 13)), "html", null, true);
            echo " \" width=\"150\" alt=\"\">
            </div>

            <div id=\"actionsProfils\">
                <button class=\"btnAdministrateur\"><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("photo_modifier", ["id" => twig_get_attribute($this->env, $this->source, $context["photo"], "photoId", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">Modifier</a></button>
            </div>
                ";
            // line 27
            echo "        </div><br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "photo/photos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 27,  80 => 17,  73 => 13,  69 => 11,  65 => 9,  63 => 8,  60 => 7,  58 => 6,  55 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "photo/photos.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/photo/photos.html.twig");
    }
}
