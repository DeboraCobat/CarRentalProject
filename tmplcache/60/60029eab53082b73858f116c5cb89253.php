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

/* selectdate.html.twig */
class __TwigTemplate_7ea5fc7c54e60cf037f264d16a0c3c42 extends Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "selectdate.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Rent a car";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<h1>Select a pick-up date</h1>
 
<form method=\"post\">
  <label for=\"departure-date\">Departure date:</label>
  <input type=\"date\" id=\"departure-date\" name=\"departure_date\" required>
  <label for=\"return-date\">Return date:</label>
  <input type=\"date\" id=\"return-date\" name=\"return_date\" required>
  <button type=\"submit\">Submit</button>
</form>

";
        // line 17
        if ((array_key_exists("departureDate", $context) && array_key_exists("returnDate", $context))) {
            // line 18
            echo "  <p>You selected a departure date of ";
            echo twig_escape_filter($this->env, ($context["departureDate"] ?? null), "html", null, true);
            echo " and a return date of ";
            echo twig_escape_filter($this->env, ($context["returnDate"] ?? null), "html", null, true);
            echo ".</p>
";
        }
        // line 20
        echo "

 ";
    }

    public function getTemplateName()
    {
        return "selectdate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  73 => 18,  71 => 17,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Rent a car{% endblock %}

{% block content %}

<h1>Select a pick-up date</h1>
 
<form method=\"post\">
  <label for=\"departure-date\">Departure date:</label>
  <input type=\"date\" id=\"departure-date\" name=\"departure_date\" required>
  <label for=\"return-date\">Return date:</label>
  <input type=\"date\" id=\"return-date\" name=\"return_date\" required>
  <button type=\"submit\">Submit</button>
</form>

{% if departureDate is defined and returnDate is defined %}
  <p>You selected a departure date of {{ departureDate }} and a return date of {{ returnDate }}.</p>
{% endif %}


 {% endblock %}
", "selectdate.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/selectdate.html.twig");
    }
}
