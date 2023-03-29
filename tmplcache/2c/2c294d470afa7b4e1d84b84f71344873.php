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

/* editvehicle.html.twig */
class __TwigTemplate_4d43a107c8de574f83bb2902849140b3 extends Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "editvehicle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Edit Vehicle";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  <h1>Edit Vehicle</h1>
  <form method=\"POST\" action=\"/editvehicle/";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
    <label for=\"make\">Make:</label>
    <input type=\"text\" id=\"make\" name=\"make\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "make", [], "any", false, false, false, 9), "html", null, true);
        echo "\"><br>

    <label for=\"model\">Model:</label>
    <input type=\"text\" id=\"model\" name=\"model\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "model", [], "any", false, false, false, 12), "html", null, true);
        echo "\"><br>

    <label for=\"year\">Year:</label>
    <input type=\"number\" id=\"year\" name=\"year\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "year", [], "any", false, false, false, 15), "html", null, true);
        echo "\"><br>

    <label for=\"color\">Color:</label>
    <input type=\"text\" id=\"color\" name=\"color\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "color", [], "any", false, false, false, 18), "html", null, true);
        echo "\"><br>

    <label for=\"license_plate\">License Plate:</label>
    <input type=\"text\" id=\"license_plate\" name=\"license_plate\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "license_plate", [], "any", false, false, false, 21), "html", null, true);
        echo "\"><br>

    <label for=\"daily_rate\">Daily Rate:</label>
    <input type=\"number\" id=\"daily_rate\" name=\"daily_rate\" step=\"0.01\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 24), "html", null, true);
        echo "\"><br>

    <label for=\"availability\">Availability:</label>
    <input type=\"text\" id=\"availability\" name=\"availability\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "availability", [], "any", false, false, false, 27), "html", null, true);
        echo "\"><br>

    <label for=\"seats\">Seats:</label>
    <input type=\"number\" id=\"seats\" name=\"seats\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "seats", [], "any", false, false, false, 30), "html", null, true);
        echo "\"><br>

    <label for=\"lper100\">L/100km:</label>
    <input type=\"number\" id=\"lper100\" name=\"lper100\" step=\"0.01\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "lper100", [], "any", false, false, false, 33), "html", null, true);
        echo "\"><br>

    <input type=\"submit\" value=\"Save Changes\">
  </form>
";
    }

    public function getTemplateName()
    {
        return "editvehicle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 33,  108 => 30,  102 => 27,  96 => 24,  90 => 21,  84 => 18,  78 => 15,  72 => 12,  66 => 9,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Edit Vehicle{% endblock %}

{% block content %}
  <h1>Edit Vehicle</h1>
  <form method=\"POST\" action=\"/editvehicle/{{ vehicle.id }}\">
    <label for=\"make\">Make:</label>
    <input type=\"text\" id=\"make\" name=\"make\" value=\"{{ vehicle.make }}\"><br>

    <label for=\"model\">Model:</label>
    <input type=\"text\" id=\"model\" name=\"model\" value=\"{{ vehicle.model }}\"><br>

    <label for=\"year\">Year:</label>
    <input type=\"number\" id=\"year\" name=\"year\" value=\"{{ vehicle.year }}\"><br>

    <label for=\"color\">Color:</label>
    <input type=\"text\" id=\"color\" name=\"color\" value=\"{{ vehicle.color }}\"><br>

    <label for=\"license_plate\">License Plate:</label>
    <input type=\"text\" id=\"license_plate\" name=\"license_plate\" value=\"{{ vehicle.license_plate }}\"><br>

    <label for=\"daily_rate\">Daily Rate:</label>
    <input type=\"number\" id=\"daily_rate\" name=\"daily_rate\" step=\"0.01\" value=\"{{ vehicle.daily_rate }}\"><br>

    <label for=\"availability\">Availability:</label>
    <input type=\"text\" id=\"availability\" name=\"availability\" value=\"{{ vehicle.availability }}\"><br>

    <label for=\"seats\">Seats:</label>
    <input type=\"number\" id=\"seats\" name=\"seats\" value=\"{{ vehicle.seats }}\"><br>

    <label for=\"lper100\">L/100km:</label>
    <input type=\"number\" id=\"lper100\" name=\"lper100\" step=\"0.01\" value=\"{{ vehicle.lper100 }}\"><br>

    <input type=\"submit\" value=\"Save Changes\">
  </form>
{% endblock %}
", "editvehicle.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\editvehicle.html.twig");
    }
}
