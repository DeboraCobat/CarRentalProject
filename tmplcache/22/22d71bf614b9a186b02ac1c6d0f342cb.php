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

/* index.html.twig */
class __TwigTemplate_c606d0a249defb463cf6a743bdf3d7cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("master.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "home page
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<div class=\"container\">
\t\t<div class=\"row justify-content-center mt-5 mb-5\">
\t\t\t<div class=\"col-md-8 col-lg-6\">

\t\t\t\t<h1>Enter trip details</h1>
\t\t\t\t<form method=\"post\" class=\"form-group\" action=\"/selectvehicle\">
\t\t\t\t\t<label for=\"pickup_date\">Pickup date:</label>
\t\t\t\t\t<input type=\"date\" class=\"form-group\" id=\"pickup_date\" name=\"pickup_date\" required>

\t\t\t\t\t<label for=\"pickup_time\">Pickup time:</label>
\t\t\t\t\t<input type=\"time\" class=\"form-group\" id=\"pickup_time\" name=\"pickup_time\" required>
\t\t\t\t\t<br>
\t\t\t\t\t<label for=\"return_date\">Return date:</label>
\t\t\t\t\t<input type=\"date\" class=\"form-group\" id=\"return_date\" name=\"return_date\" required>

\t\t\t\t\t<label for=\"return_time\">Return time:</label>
\t\t\t\t\t<input type=\"time\" class=\"form-group\" id=\"return_time\" name=\"return_time\" required>
\t\t\t\t\t<br><br>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Select Vehicle</button>
\t\t\t\t</form>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}home page
{% endblock %}

{% block content %}
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center mt-5 mb-5\">
\t\t\t<div class=\"col-md-8 col-lg-6\">

\t\t\t\t<h1>Enter trip details</h1>
\t\t\t\t<form method=\"post\" class=\"form-group\" action=\"/selectvehicle\">
\t\t\t\t\t<label for=\"pickup_date\">Pickup date:</label>
\t\t\t\t\t<input type=\"date\" class=\"form-group\" id=\"pickup_date\" name=\"pickup_date\" required>

\t\t\t\t\t<label for=\"pickup_time\">Pickup time:</label>
\t\t\t\t\t<input type=\"time\" class=\"form-group\" id=\"pickup_time\" name=\"pickup_time\" required>
\t\t\t\t\t<br>
\t\t\t\t\t<label for=\"return_date\">Return date:</label>
\t\t\t\t\t<input type=\"date\" class=\"form-group\" id=\"return_date\" name=\"return_date\" required>

\t\t\t\t\t<label for=\"return_time\">Return time:</label>
\t\t\t\t\t<input type=\"time\" class=\"form-group\" id=\"return_time\" name=\"return_time\" required>
\t\t\t\t\t<br><br>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Select Vehicle</button>
\t\t\t\t</form>
\t\t\t{% endblock %}
", "index.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\index.html.twig");
    }
}
