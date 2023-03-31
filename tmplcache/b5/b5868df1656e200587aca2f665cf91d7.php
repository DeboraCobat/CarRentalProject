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
class __TwigTemplate_6f98c3800cdf24ecd23f44799e4c326a extends Template
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
        // line 15
        echo "<head>
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/admin.css\">
</head>

  <nav>
     <ul class=adminbar>
      <li><a href=\"userslist\">Users</a></li>
       <li><a href=\"vehicleslist\">Vehicles</a></li>
       <li><a href=\"reservationslist\">Reservations</a></li>
    </ul>
  </nav>";
    }

    public function getTemplateName()
    {
        return "admin/adminpanel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends \"master.html.twig\" %}
{% block title %}Admin Panel{% endblock %}
{% block content %}
<h1>Welcome to Admin Panel</h1>
    <p>Select an option you wish to manage</p> </br>
    <nav>
      <ul>
        <li><a href=\"userslist.html.twig\">Users</a></li>
        <li><a href=\"http://carrentalproject.org/vehicleslist\">Vehicles</a></li>
        <li><a href=\"reservationslist.html.twig\">Reservations</a></li>
      </ul>
    </nav>
    
{% endblock content %} #}
<head>
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/admin.css\">
</head>

  <nav>
     <ul class=adminbar>
      <li><a href=\"userslist\">Users</a></li>
       <li><a href=\"vehicleslist\">Vehicles</a></li>
       <li><a href=\"reservationslist\">Reservations</a></li>
    </ul>
  </nav>", "admin/adminpanel.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/admin/adminpanel.html.twig");
    }
}
