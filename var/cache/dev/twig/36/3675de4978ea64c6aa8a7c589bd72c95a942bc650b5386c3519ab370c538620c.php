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

/* profil/profils.html.twig */
class __TwigTemplate_49e261c92628c0580f1e7415f140444ec85e0180f7902fde2efffc3549740798 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/profils.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/profils.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "profil/profils.html.twig", 1);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) || array_key_exists("utilisateurs", $context) ? $context["utilisateurs"] : (function () { throw new RuntimeError('Variable "utilisateurs" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 5
            echo "        <article id=\"articleProfils\">
            ";
            // line 6
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["utilisateur"], "username", [], "any", false, false, false, 6), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "username", [], "any", false, false, false, 6))) {
                // line 7
                echo "                <h3 id=\"titreProfil\">Profil de ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "username", [], "any", false, false, false, 7), "html", null, true);
                echo "</h3>
            ";
            } else {
                // line 9
                echo "                <h3 id=\"titreProfil\">Votre Profile !!</h3>
            ";
            }
            // line 11
            echo "
            ";
            // line 12
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["utilisateur"], "nomPhoto", [], "any", false, false, false, 12))) {
                // line 13
                echo "                <div id=\"photoProfils\">
                    <br><br>
                </div>            ";
            } else {
                // line 16
                echo "                <div id=\"photoProfils\">
              <br><br>  <img src=\"";
                // line 17
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/") . twig_get_attribute($this->env, $this->source, $context["utilisateur"], "nomPhoto", [], "any", false, false, false, 17)), "html", null, true);
                echo " \" width=\"150\" alt=\"\">
                </div>
            ";
            }
            // line 20
            echo "            <div id=\"profils\">
                <label>Pseudo :           </label>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "username", [], "any", false, false, false, 21), "html", null, true);
            echo " <br>
                <label>Nom :              </label>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "nom", [], "any", false, false, false, 22), "html", null, true);
            echo " <br>
                <label>Prenom :           </label>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "prenom", [], "any", false, false, false, 23), "html", null, true);
            echo " <br>
                <label>Téléphone :        </label>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "telephone", [], "any", false, false, false, 24), "html", null, true);
            echo " <br>
                <label>Email :            </label>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "email", [], "any", false, false, false, 25), "html", null, true);
            echo " <br>
                <label>Id Utilisateur :   </label>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "UserId", [], "any", false, false, false, 26), "html", null, true);
            echo " <br>
                <label>Campus :           </label>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "campus", [], "any", false, false, false, 27), "nomCampus", [], "any", false, false, false, 27), "html", null, true);
            echo " <br>
                <label>Administrateur :   </label>
                ";
            // line 29
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["utilisateur"], "administrateur", [], "any", false, false, false, 29), 1)) {
                // line 30
                echo "                    Oui
                ";
            } else {
                // line 32
                echo "                    Non
                ";
            }
            // line 33
            echo "<br>
                <label>Actif :            </label>
                ";
            // line 35
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["utilisateur"], "actif", [], "any", false, false, false, 35), 1)) {
                // line 36
                echo "                    Oui
                ";
            } else {
                // line 38
                echo "                    Non
                ";
            }
            // line 39
            echo "<br>
                <label>Password :         </label>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "password", [], "any", false, false, false, 40), "html", null, true);
            echo " <br>
                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 42
                echo "                    <div class=\"alert alert-success\">
                        ";
                // line 43
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            </div>
            <div id=\"actionsProfils\">
                <button class=\"btnAdministrateur\"><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_modifier", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "userId", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">Modifier</a></button>
                ";
            // line 49
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["utilisateur"], "actif", [], "any", false, false, false, 49), 1)) {
                // line 50
                echo "                    <button class=\"btnAdministrateur\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_bloquer", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "userId", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\">Bloquer</a></button>
                ";
            } else {
                // line 52
                echo "                    <button class=\"btnAdministrateur\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_bloquer", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "userId", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\">Débloquer</a></button>
                ";
            }
            // line 54
            echo "                <button class=\"btnAdministrateur\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_supprimer", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "userId", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\">Supprimer</a></button>
            </div>
        </article><br><br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profil/profils.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 54,  202 => 52,  196 => 50,  194 => 49,  190 => 48,  186 => 46,  177 => 43,  174 => 42,  170 => 41,  166 => 40,  163 => 39,  159 => 38,  155 => 36,  153 => 35,  149 => 33,  145 => 32,  141 => 30,  139 => 29,  134 => 27,  130 => 26,  126 => 25,  122 => 24,  118 => 23,  114 => 22,  110 => 21,  107 => 20,  101 => 17,  98 => 16,  93 => 13,  91 => 12,  88 => 11,  84 => 9,  78 => 7,  76 => 6,  73 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block main %}
    {% for utilisateur in utilisateurs %}
        <article id=\"articleProfils\">
            {% if utilisateur.username != app.user.username %}
                <h3 id=\"titreProfil\">Profil de {{ utilisateur.username }}</h3>
            {% else %}
                <h3 id=\"titreProfil\">Votre Profile !!</h3>
            {% endif %}

            {% if utilisateur.nomPhoto is empty %}
                <div id=\"photoProfils\">
                    <br><br>
                </div>            {% else %}
                <div id=\"photoProfils\">
              <br><br>  <img src=\"{{ asset('photos/') ~utilisateur.nomPhoto }} \" width=\"150\" alt=\"\">
                </div>
            {% endif %}
            <div id=\"profils\">
                <label>Pseudo :           </label>{{ utilisateur.username }} <br>
                <label>Nom :              </label>{{ utilisateur.nom }} <br>
                <label>Prenom :           </label>{{ utilisateur.prenom}} <br>
                <label>Téléphone :        </label>{{ utilisateur.telephone }} <br>
                <label>Email :            </label>{{ utilisateur.email }} <br>
                <label>Id Utilisateur :   </label>{{ utilisateur.UserId }} <br>
                <label>Campus :           </label>{{ utilisateur.campus.nomCampus }} <br>
                <label>Administrateur :   </label>
                {% if utilisateur.administrateur==1 %}
                    Oui
                {% else %}
                    Non
                {% endif %}<br>
                <label>Actif :            </label>
                {% if utilisateur.actif==1 %}
                    Oui
                {% else %}
                    Non
                {% endif %}<br>
                <label>Password :         </label>{{ utilisateur.password}} <br>
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success\">
                        {{ message }}
                    </div>
                {% endfor %}
            </div>
            <div id=\"actionsProfils\">
                <button class=\"btnAdministrateur\"><a href=\"{{ path('profil_modifier', {'id':utilisateur.userId}) }}\">Modifier</a></button>
                {% if utilisateur.actif==1 %}
                    <button class=\"btnAdministrateur\"><a href=\"{{ path('profil_bloquer', {'id':utilisateur.userId}) }}\">Bloquer</a></button>
                {% else %}
                    <button class=\"btnAdministrateur\"><a href=\"{{ path('profil_bloquer', {'id':utilisateur.userId}) }}\">Débloquer</a></button>
                {% endif %}
                <button class=\"btnAdministrateur\"><a href=\"{{ path('profil_supprimer', {'id':utilisateur.userId}) }}\">Supprimer</a></button>
            </div>
        </article><br><br>
    {% endfor %}
{% endblock %}", "profil/profils.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/profil/profils.html.twig");
    }
}
