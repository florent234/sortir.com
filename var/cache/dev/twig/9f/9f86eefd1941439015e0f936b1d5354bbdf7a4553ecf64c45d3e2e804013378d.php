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
class __TwigTemplate_b08548894b47c0215696e907f5ffc47795e1d095f25ee79c37159e8eef63b995 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photo/photo_modifier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photo/photo_modifier.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "photo/photo_modifier.html.twig", 1);
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
        echo "    ";
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["photo"]) || array_key_exists("photo", $context) ? $context["photo"] : (function () { throw new RuntimeError('Variable "photo" does not exist.', 4, $this->source); })()), "photoId", [], "any", false, false, false, 4), 1)) {
            // line 5
            echo "        <h3>Modifier le logo du site</h3>
    ";
        } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["photo"]) || array_key_exists("photo", $context) ? $context["photo"] : (function () { throw new RuntimeError('Variable "photo" does not exist.', 6, $this->source); })()), "photoId", [], "any", false, false, false, 6), 2)) {
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPhoto"]) || array_key_exists("formPhoto", $context) ? $context["formPhoto"] : (function () { throw new RuntimeError('Variable "formPhoto" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formPhoto"]) || array_key_exists("formPhoto", $context) ? $context["formPhoto"] : (function () { throw new RuntimeError('Variable "formPhoto" does not exist.', 20, $this->source); })()), 'widget');
        echo "






        <button class=\"btnAdministrateur\" type=\"submit\" id=\"submit\" name=\"submit\">Enregister</button>
        <button class=\"btnAdministrateur\" type=\"reset\" id=\"reset\" name=\"reset\">Annuler</button>
    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPhoto"]) || array_key_exists("formPhoto", $context) ? $context["formPhoto"] : (function () { throw new RuntimeError('Variable "formPhoto" does not exist.', 29, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  108 => 29,  96 => 20,  91 => 19,  80 => 9,  76 => 7,  74 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block main %}
    {% if photo.photoId==1 %}
        <h3>Modifier le logo du site</h3>
    {% elseif (photo.photoId==2)%}
        <h3>Modifier la photo par défault des utilisateurs</h3>
    {% endif %}




        <!-- Le type d'encodage des données, enctype, DOIT être spécifié comme ce qui suit
        <form method=\"post\" name=\"form\"> -->
        <!-- MAX_FILE_SIZE doit précéder le champ input de type file -->
            <!-- Le nom de l'élément input détermine le nom dans le tableau \$_FILES
        Envoyez ce fichier : <input name=\"userfile\" type=\"file\" /> -->
            {# <input type=\"submit\" value=\"Envoyer le fichier\" />#}
    {{ form_start(formPhoto) }}
    {{ form_widget(formPhoto) }}






        <button class=\"btnAdministrateur\" type=\"submit\" id=\"submit\" name=\"submit\">Enregister</button>
        <button class=\"btnAdministrateur\" type=\"reset\" id=\"reset\" name=\"reset\">Annuler</button>
    {{ form_end(formPhoto) }}


{% endblock %}", "photo/photo_modifier.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/photo/photo_modifier.html.twig");
    }
}
