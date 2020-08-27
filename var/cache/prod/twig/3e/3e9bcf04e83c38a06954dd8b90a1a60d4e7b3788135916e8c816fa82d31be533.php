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

/* photo/photo_modifier.html.twig */
class __TwigTemplate_8a2937e10084e067472e7e8b6bcad6dabb7ba488f06b9a3b49cb76be6517ef67 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "photo/photo_modifier.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["photo"] ?? null), "photoId", [], "any", false, false, false, 4), 1)) {
            // line 5
            echo "        <h3>Modifier le logo du site</h3>
    ";
        } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 6
($context["photo"] ?? null), "photoId", [], "any", false, false, false, 6), 2)) {
            // line 7
            echo "        <h3>Modifier la photo par défault des utilisateurs</h3>
    ";
        }
        // line 9
        echo "



        <!-- Le type d'encodage des données, enctype, DOIT être spécifié comme ce qui suit
        <form method=\"post\" name=\"form\"> -->
        <!-- MAX_FILE_SIZE doit précéder le champ input de type file -->
            <!-- Le nom de l'élément input détermine le nom dans le tableau \$_FILES
        Envoyez ce fichier : <input name=\"userfile\" type=\"file\" /> -->
            ";
        // line 19
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formPhoto"] ?? null), 'form_start');
        echo "
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formPhoto"] ?? null), 'widget');
        echo "






        <button class=\"btnAdministrateur\" type=\"submit\" id=\"submit\" name=\"submit\">Enregister</button>
        <button class=\"btnAdministrateur\" type=\"reset\" id=\"reset\" name=\"reset\">Annuler</button>
    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formPhoto"] ?? null), 'form_end');
        echo "


";
    }

    public function getTemplateName()
    {
        return "photo/photo_modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  78 => 20,  73 => 19,  62 => 9,  58 => 7,  56 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "photo/photo_modifier.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/photo/photo_modifier.html.twig");
    }
}
