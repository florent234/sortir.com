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
class __TwigTemplate_b23ceca352f9484ba5fc1a4f72f5f44c989964ab1a9c90a67e8ed8c8e5dcb376 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "profil/profils.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["utilisateurs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 5
            echo "        <article id=\"articleProfils\">
            ";
            // line 6
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["utilisateur"], "username", [], "any", false, false, false, 6), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6), "username", [], "any", false, false, false, 6))) {
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 41));
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
        return array (  190 => 54,  184 => 52,  178 => 50,  176 => 49,  172 => 48,  168 => 46,  159 => 43,  156 => 42,  152 => 41,  148 => 40,  145 => 39,  141 => 38,  137 => 36,  135 => 35,  131 => 33,  127 => 32,  123 => 30,  121 => 29,  116 => 27,  112 => 26,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  92 => 21,  89 => 20,  83 => 17,  80 => 16,  75 => 13,  73 => 12,  70 => 11,  66 => 9,  60 => 7,  58 => 6,  55 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profil/profils.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/profil/profils.html.twig");
    }
}
