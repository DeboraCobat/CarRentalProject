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

/* admin/master.html.twig */
class __TwigTemplate_4b9001700b448bec92476d501525c8be extends Template
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
        echo "
";
        // line 44
        echo "

<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 49
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <!-- Combined CSS -->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/\">
        ";
        // line 54
        $this->displayBlock('addHead', $context, $blocks);
        // line 55
        echo "    </head>
     <body>

        <div class=\"admin-container\">
            <div class=\"admin-sidebar\">
                ";
        // line 60
        $this->loadTemplate("admin/adminpanel.html.twig", "admin/master.html.twig", 60)->display($context);
        // line 61
        echo "            </div>
            
            <div class=\"admin-content\">
                 <div class=\"container\">
                    <div class=\"centeredContent\">
                    ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "                    </div>
                 </div>
            </div>
        </div>
        
        <!-- CDNs for jQuery, Popper.js and Bootstrap JS -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
        ";
        // line 76
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "        
        <div class=\"footer\">
            ";
        // line 79
        $this->displayBlock('footer', $context, $blocks);
        // line 82
        echo "        </div>
    </body>
</html>";
    }

    // line 49
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 54
    public function block_addHead($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 66
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 76
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 79
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "                &copy; ";
        echo 2023;
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "admin/master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 80,  129 => 79,  123 => 76,  117 => 66,  111 => 54,  105 => 49,  99 => 82,  97 => 79,  93 => 77,  91 => 76,  80 => 67,  78 => 66,  71 => 61,  69 => 60,  62 => 55,  60 => 54,  52 => 49,  45 => 44,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{# <!DOCTYPE html>
<html>
    <head>
        <title>{% block title %}{% endblock %}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <!-- Combined CSS -->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/\">
        {% block addHead %}{% endblock %}
    </head>
    <body>
        <div class=\"container\">
            <div class=\"centeredContent\">
                {% block content %}{% endblock %}
            </div>
        </div>

        <div class=\"admin-container\">
            <div class=\"admin-sidebar\">
                {% include 'admin/adminpanel.html.twig' %}
            </div>
        </div>

        <div class=\"admin-content\">
            {% block body %}{% endblock %}
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
</html>
 #}


<!DOCTYPE html>
<html>
    <head>
        <title>{% block title %}{% endblock %}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <!-- Combined CSS -->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/\">
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
</html>", "admin/master.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/admin/master.html.twig");
    }
}
