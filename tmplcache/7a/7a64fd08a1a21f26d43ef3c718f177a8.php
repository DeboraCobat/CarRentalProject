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

/* admin/adminmaster.html.twig */
class __TwigTemplate_0260e8fcb314b196e2c68818ab4ee086 extends Template
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
            'addHead' => [$this, 'block_addHead'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <!-- Combined CSS -->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/admin.css\">
        ";
        // line 9
        $this->displayBlock('addHead', $context, $blocks);
        // line 10
        echo "    </head>
     <body>

        <div class=\"admin-container\">
            <div class=\"admin-sidebar\">
                ";
        // line 15
        $this->loadTemplate("admin/adminpanel.html.twig", "admin/adminmaster.html.twig", 15)->display($context);
        // line 16
        echo "            </div>
            
            <div class=\"admin-content\">
                 <div class=\"container\">
                    <div class=\"centeredContent\">
                    ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "                    </div>
                 </div>
            </div>
        </div>
        
        <!-- CDNs for jQuery, Popper.js and Bootstrap JS -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
        ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "        
        <div class=\"footer\">
            ";
        // line 34
        $this->displayBlock('footer', $context, $blocks);
        // line 37
        echo "        </div>
    </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_addHead($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 34
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "                &copy; ";
        echo 2023;
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "admin/adminmaster.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  124 => 34,  118 => 31,  112 => 21,  106 => 9,  100 => 4,  94 => 37,  92 => 34,  88 => 32,  86 => 31,  75 => 22,  73 => 21,  66 => 16,  64 => 15,  57 => 10,  55 => 9,  47 => 4,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <title>{% block title %}{% endblock %}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <!-- Combined CSS -->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/admin.css\">
        {% block addHead %}{% endblock %}
    </head>
     <body>

        <div class=\"admin-container\">
            <div class=\"admin-sidebar\">
                {% include 'admin/adminpanel.html.twig' %}
            </div>
            
            <div class=\"admin-content\">
                 <div class=\"container\">
                    <div class=\"centeredContent\">
                    {% block content %}{% endblock %}
                    </div>
                 </div>
            </div>
        </div>
        
        <!-- CDNs for jQuery, Popper.js and Bootstrap JS -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
        {% block javascripts %}{% endblock %}
        
        <div class=\"footer\">
            {% block footer %}
                &copy; {{ 2023 }}
            {% endblock %}
        </div>
    </body>
</html>", "admin/adminmaster.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\admin\\adminmaster.html.twig");
    }
}
