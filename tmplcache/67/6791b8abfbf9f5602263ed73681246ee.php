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

/* findmyreservation.html.twig */
class __TwigTemplate_16d1cb20b395c46c0d277baf5d878fae extends Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "findmyreservation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "find my reservation
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

\t\t\t\t<h1>Find my reservation</h1>
\t\t\t\t<form method=\"post\" action=\"/findmyreservation\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"reservationId\">Reservation ID</label>
\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"reservationId\" name=\"reservationId\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["reservationId"] ?? null), "html", null, true);
        echo "\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\">Find Reservation</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "findmyreservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}find my reservation
{% endblock %}

{% block content %}
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center mt-5 mb-5\">
\t\t\t<div class=\"col-md-8 col-lg-6\">

\t\t\t\t<h1>Find my reservation</h1>
\t\t\t\t<form method=\"post\" action=\"/findmyreservation\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"reservationId\">Reservation ID</label>
\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"reservationId\" name=\"reservationId\" value=\"{{ reservationId }}\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\">Find Reservation</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "findmyreservation.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/findmyreservation.html.twig");
    }
}
