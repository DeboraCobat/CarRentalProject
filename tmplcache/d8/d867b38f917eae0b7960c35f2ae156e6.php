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

/* admin/adminpanel2.html.twig */
class __TwigTemplate_e65c3028b219e147c6ae641d251bd5ab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<head>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/admin.css\">
\t";
        // line 8
        echo "</head>

<div class=\"admin-sidebar\">
    <nav class=\"sidebar\">
        <a href=\"userslist\" class=\"list-group-item\">Users</a>
        <a href=\"vehicleslist\" class=\"list-group-item\">Vehicles</a>
        <a href=\"reservationslist\" class=\"list-group-item\">Reservations</a>
    </nav>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/adminpanel2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/admin.css\">
\t{# <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script> #}
</head>

<div class=\"admin-sidebar\">
    <nav class=\"sidebar\">
        <a href=\"userslist\" class=\"list-group-item\">Users</a>
        <a href=\"vehicleslist\" class=\"list-group-item\">Vehicles</a>
        <a href=\"reservationslist\" class=\"list-group-item\">Reservations</a>
    </nav>
</div>
", "admin/adminpanel2.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/admin/adminpanel2.html.twig");
    }
}
