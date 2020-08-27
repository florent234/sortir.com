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

/* profil/profil.html.twig */
class __TwigTemplate_5243d13cff1c579eeed3d28b06a08c34e675fa6225f2df0a4ddc272fd2935c59 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "profil/profil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h2 id=\"h2Profil\"> Modifier Profil</h2>
    <div id=\"container\">
        <div id=\"photoProfils\">
            <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/") . ($context["photo"] ?? null)), "html", null, true);
        echo " \" width=\"150\" alt=\"\">
        </div>
        <div class=\"formProfil form-inline\">
            ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formInscription"] ?? null), 'form_start');
        echo "
            ";
        // line 11
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 11), "administrateur", [], "any", false, false, false, 11), 0)) {
            // line 12
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "administrateur", [], "any", false, false, false, 12), 'widget', ["disabled" => true, "attr" => ["hidden" => true]]);
            echo "
                ";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "actif", [], "any", false, false, false, 13), 'widget', ["disabled" => true, "attr" => ["hidden" => true]]);
            echo "
            ";
        }
        // line 15
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formInscription"] ?? null), 'widget');
        echo "

            <div id=\"btnProfil\">
                <button type=\"submit\" id=\"submit\" name=\"submit\">Enregistrer</button>
                <button type=\"reset\" id=\"reset\" name=\"reset\">Annuler</button><br><br>
            </div>
                ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formInscription"] ?? null), 'form_end');
        echo "
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "profil/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  77 => 15,  72 => 13,  67 => 12,  65 => 11,  61 => 10,  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profil/profil.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/profil/profil.html.twig");
    }
}
