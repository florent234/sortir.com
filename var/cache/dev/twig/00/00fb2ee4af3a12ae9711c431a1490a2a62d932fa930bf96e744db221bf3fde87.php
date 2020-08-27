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
class __TwigTemplate_2a2e69c685da464e1e3995c42a481ad59f34ad8454018dc64e1c12d00a501ec6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photo/photos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photo/photos.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "photo/photos.html.twig", 1);
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 4, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  103 => 27,  98 => 17,  91 => 13,  87 => 11,  83 => 9,  81 => 8,  78 => 7,  76 => 6,  73 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block main %}
    {% for photo in photos %}
        <div>
            {% if photo.photoId==1 %}
                <h3>Logo de l'application</h3>
            {% elseif (photo.photoId==2)%}
                <h3>Photo par défault des utilisateurs</h3>
            {% endif %}

            <div>
                <img src=\"{{ asset('photos/Local/') ~photo.codePhoto }} \" width=\"150\" alt=\"\">
            </div>

            <div id=\"actionsProfils\">
                <button class=\"btnAdministrateur\"><a href=\"{{ path('photo_modifier', {'id':photo.photoId}) }}\">Modifier</a></button>
            </div>
                {#    {% if utilisateur.actif==1 %}
                       <button><a href=\"{{ path('profil_bloquer', {'id':utilisateur.userId}) }}\">Bloquer</a></button>
                   {% else %}
                       <button><a href=\"{{ path('profil_bloquer', {'id':utilisateur.userId}) }}\">Débloquer</a></button>
                   {% endif %}
                   <button><a href=\"{{ path('profil_supprimer', {'id':utilisateur.userId}) }}\">Supprimer</a></button>
               </div>
               #}
        </div><br>
    {% endfor %}
{% endblock %}", "photo/photos.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/photo/photos.html.twig");
    }
}
