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

/* admin/adminpanel.html.twig */
class __TwigTemplate_fa3bf5d6c070cbd036ad9ae8803198c4 extends Template
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
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/adminstyle.css\">
</head>
<body>
    <nav class=\"navbar navbar-expand-sm bg-light justify-content-center\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-sm\" href=\"userslist\">Users</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-sm\" href=\"vehicleslist\">Vehicles</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-sm\" href=\"reservationslist\">Reservations</a>
                 <li class=\"nav-item\">
                <a class=\"nav-link btn btn-sm\" href=\"logout\">Logout</a>
            </li>
            </li>
        </ul>
    </nav>";
    }

    public function getTemplateName()
    {
        return "admin/adminpanel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/adminstyle.css\">
</head>
<body>
    <nav class=\"navbar navbar-expand-sm bg-light justify-content-center\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-sm\" href=\"userslist\">Users</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-sm\" href=\"vehicleslist\">Vehicles</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-sm\" href=\"reservationslist\">Reservations</a>
                 <li class=\"nav-item\">
                <a class=\"nav-link btn btn-sm\" href=\"logout\">Logout</a>
            </li>
            </li>
        </ul>
    </nav>", "admin/adminpanel.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\admin\\adminpanel.html.twig");
    }
}
