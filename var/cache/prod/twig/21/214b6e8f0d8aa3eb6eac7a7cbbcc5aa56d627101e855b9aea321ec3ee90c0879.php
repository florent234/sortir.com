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

/* layout.html.twig */
class __TwigTemplate_948e8f9b3df6a665aee57bad04b8b788c354a2978baf8c96dfb9d5503dab4121 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">


    <link rel=\"stylesheet\" href=\"/sortir.com/public/css/app.css\">




</head>
<body>
    <header>

        <div class=\"titre\">
            <h1 id=\"h1Layout\">Sortir.com</h1>
        </div>

        <div class=\"nav\">
            ";
        // line 26
        $this->loadTemplate("nav/nav.html.twig", "layout.html.twig", 26)->display($context);
        // line 27
        echo "        </div>

    </header>
    <main>
        ";
        // line 31
        $this->displayBlock('main', $context, $blocks);
        // line 34
        echo "    </main>
    <!--<footer>
        &copy; 20";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "y"), "html", null, true);
        echo "

    </footer>-->
    <script>
        var button = document.querySelector('#btnFiltre');
        var divFiltre = document.querySelector('#divFiltre');

        button.addEventListener('click', filtre);

        function filtre() {

            if (divFiltre.style.display=='none'){
                divFiltre.style.display='block';
            }
            else{

                    divFiltre.style.display='none';


            }
        }
    </script>
</body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Sortir.Com";
    }

    // line 31
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 32,  118 => 31,  111 => 8,  83 => 36,  79 => 34,  77 => 31,  71 => 27,  69 => 26,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.html.twig", "/Applications/MAMP/htdocs/sortir.com/templates/layout.html.twig");
    }
}
