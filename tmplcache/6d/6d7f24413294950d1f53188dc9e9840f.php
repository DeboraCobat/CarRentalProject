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

/* admin/editvehicle.html.twig */
class __TwigTemplate_baccfb79c0425ecd0b23ab34f9e1b09c extends Template
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
        return "admin/adminmaster.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/adminmaster.html.twig", "admin/editvehicle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Edit Vehicle
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-bordered table-striped\">

\t\t\t\t\t\t<h1>Edit Vehicle</h1>

\t\t\t\t\t\t<form method=\"POST\" action=\"/admin/editvehicle/";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"make\">Make:</label>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" id=\"make\" name=\"make\" class=\"form-control\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "make", [], "any", false, false, false, 23), "html", null, true);
        echo "\"></td>
\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"model\">Model:</label>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" id=\"model\" name=\"model\" class=\"form-control\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "model", [], "any", false, false, false, 30), "html", null, true);
        echo "\"></td>
\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"year\">Year:</label>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"number\" id=\"year\" name=\"year\" class=\"form-control\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "year", [], "any", false, false, false, 37), "html", null, true);
        echo "\"></td>
\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"color\">Color:</label>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" id=\"color\" name=\"color\" class=\"form-control\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "color", [], "any", false, false, false, 44), "html", null, true);
        echo "\"></td>
\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"license_plate\">License Plate:</label>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" id=\"license_plate\" name=\"license_plate\" class=\"form-control\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "license_plate", [], "any", false, false, false, 51), "html", null, true);
        echo "\"></td>
\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"daily_rate\">Daily Rate:</label>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"number\" id=\"daily_rate\" name=\"daily_rate\" step=\"0.01\" class=\"form-control\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 58), "html", null, true);
        echo "\"></td>
\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"availability\">Availability:</label>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" id=\"availability\" name=\"availability\" class=\"form-control\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "availability", [], "any", false, false, false, 65), "html", null, true);
        echo "\"></td>
\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"seats\">Seats:</label>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"number\" id=\"seats\" name=\"seats\" class=\"form-control\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "seats", [], "any", false, false, false, 72), "html", null, true);
        echo "\"></td>
\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"lper100\">L/100km:</label>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"number\" id=\"lper100\" name=\"lper100\" step=\"0.01\" class=\"form-control\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "lper100", [], "any", false, false, false, 79), "html", null, true);
        echo "\"></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\">Save Changes</button>


\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t";
    }

    public function getTemplateName()
    {
        return "admin/editvehicle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 79,  150 => 72,  140 => 65,  130 => 58,  120 => 51,  110 => 44,  100 => 37,  90 => 30,  80 => 23,  70 => 16,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/adminmaster.html.twig\" %}

{% block title %}Edit Vehicle
{% endblock %}

{% block content %}

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-bordered table-striped\">

\t\t\t\t\t\t<h1>Edit Vehicle</h1>

\t\t\t\t\t\t<form method=\"POST\" action=\"/admin/editvehicle/{{ vehicle.id }}\">
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"make\">Make:</label>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" id=\"make\" name=\"make\" class=\"form-control\" value=\"{{ vehicle.make }}\"></td>
\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"model\">Model:</label>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" id=\"model\" name=\"model\" class=\"form-control\" value=\"{{ vehicle.model }}\"></td>
\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"year\">Year:</label>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"number\" id=\"year\" name=\"year\" class=\"form-control\" value=\"{{ vehicle.year }}\"></td>
\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"color\">Color:</label>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" id=\"color\" name=\"color\" class=\"form-control\" value=\"{{ vehicle.color }}\"></td>
\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"license_plate\">License Plate:</label>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" id=\"license_plate\" name=\"license_plate\" class=\"form-control\" value=\"{{ vehicle.license_plate }}\"></td>
\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"daily_rate\">Daily Rate:</label>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"number\" id=\"daily_rate\" name=\"daily_rate\" step=\"0.01\" class=\"form-control\" value=\"{{ vehicle.daily_rate }}\"></td>
\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"availability\">Availability:</label>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" id=\"availability\" name=\"availability\" class=\"form-control\" value=\"{{ vehicle.availability }}\"></td>
\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"seats\">Seats:</label>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"number\" id=\"seats\" name=\"seats\" class=\"form-control\" value=\"{{ vehicle.seats }}\"></td>
\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"lper100\">L/100km:</label>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"number\" id=\"lper100\" name=\"lper100\" step=\"0.01\" class=\"form-control\" value=\"{{ vehicle.lper100 }}\"></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\">Save Changes</button>


\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t{% endblock %}
", "admin/editvehicle.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/admin/editvehicle.html.twig");
    }
}
