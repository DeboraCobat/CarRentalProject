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
        echo "Edit Vehicle";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  <div class=\"container\">
  <div class=\"row justify-content-center mt-5 mb-5\">
    <div class=\"col-md-8 col-lg-6\">
    <h1>Edit Vehicle</h1>

    <form method=\"POST\" action=\"/admin/editvehicle/";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
      <div class=\"form-group\">
        <label for=\"make\">Make:</label>
        <input type=\"text\" id=\"make\" name=\"make\" class=\"form-control\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "make", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
      </div>

      <div class=\"form-group\">
        <label for=\"model\">Model:</label>
        <input type=\"text\" id=\"model\" name=\"model\" class=\"form-control\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "model", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
      </div>

      <div class=\"form-group\">
        <label for=\"year\">Year:</label>
        <input type=\"number\" id=\"year\" name=\"year\" class=\"form-control\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "year", [], "any", false, false, false, 24), "html", null, true);
        echo "\">
      </div>

      <div class=\"form-group\">
        <label for=\"color\">Color:</label>
        <input type=\"text\" id=\"color\" name=\"color\" class=\"form-control\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "color", [], "any", false, false, false, 29), "html", null, true);
        echo "\">
      </div>

      <div class=\"form-group\">
        <label for=\"license_plate\">License Plate:</label>
        <input type=\"text\" id=\"license_plate\" name=\"license_plate\" class=\"form-control\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "license_plate", [], "any", false, false, false, 34), "html", null, true);
        echo "\">
      </div>

      <div class=\"form-group\">
        <label for=\"daily_rate\">Daily Rate:</label>
        <input type=\"number\" id=\"daily_rate\" name=\"daily_rate\" step=\"0.01\" class=\"form-control\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 39), "html", null, true);
        echo "\">
      </div>

      <div class=\"form-group\">
        <label for=\"availability\">Availability:</label>
        <input type=\"text\" id=\"availability\" name=\"availability\" class=\"form-control\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "availability", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
      </div>

      <div class=\"form-group\">
        <label for=\"seats\">Seats:</label>
        <input type=\"number\" id=\"seats\" name=\"seats\" class=\"form-control\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "seats", [], "any", false, false, false, 49), "html", null, true);
        echo "\">
      </div>

      <div class=\"form-group\">
        <label for=\"lper100\">L/100km:</label>
        <input type=\"number\" id=\"lper100\" name=\"lper100\" step=\"0.01\" class=\"form-control\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "lper100", [], "any", false, false, false, 54), "html", null, true);
        echo "\">
      </div>

      <button type=\"submit\" class=\"btn btn-primary btn-sm\">Save Changes</button>
    </form>
  </div>
";
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
        return array (  135 => 54,  127 => 49,  119 => 44,  111 => 39,  103 => 34,  95 => 29,  87 => 24,  79 => 19,  71 => 14,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/adminmaster.html.twig\" %}

{% block title %}Edit Vehicle{% endblock %}

{% block content %}
  <div class=\"container\">
  <div class=\"row justify-content-center mt-5 mb-5\">
    <div class=\"col-md-8 col-lg-6\">
    <h1>Edit Vehicle</h1>

    <form method=\"POST\" action=\"/admin/editvehicle/{{ vehicle.id }}\">
      <div class=\"form-group\">
        <label for=\"make\">Make:</label>
        <input type=\"text\" id=\"make\" name=\"make\" class=\"form-control\" value=\"{{ vehicle.make }}\">
      </div>

      <div class=\"form-group\">
        <label for=\"model\">Model:</label>
        <input type=\"text\" id=\"model\" name=\"model\" class=\"form-control\" value=\"{{ vehicle.model }}\">
      </div>

      <div class=\"form-group\">
        <label for=\"year\">Year:</label>
        <input type=\"number\" id=\"year\" name=\"year\" class=\"form-control\" value=\"{{ vehicle.year }}\">
      </div>

      <div class=\"form-group\">
        <label for=\"color\">Color:</label>
        <input type=\"text\" id=\"color\" name=\"color\" class=\"form-control\" value=\"{{ vehicle.color }}\">
      </div>

      <div class=\"form-group\">
        <label for=\"license_plate\">License Plate:</label>
        <input type=\"text\" id=\"license_plate\" name=\"license_plate\" class=\"form-control\" value=\"{{ vehicle.license_plate }}\">
      </div>

      <div class=\"form-group\">
        <label for=\"daily_rate\">Daily Rate:</label>
        <input type=\"number\" id=\"daily_rate\" name=\"daily_rate\" step=\"0.01\" class=\"form-control\" value=\"{{ vehicle.daily_rate }}\">
      </div>

      <div class=\"form-group\">
        <label for=\"availability\">Availability:</label>
        <input type=\"text\" id=\"availability\" name=\"availability\" class=\"form-control\" value=\"{{ vehicle.availability }}\">
      </div>

      <div class=\"form-group\">
        <label for=\"seats\">Seats:</label>
        <input type=\"number\" id=\"seats\" name=\"seats\" class=\"form-control\" value=\"{{ vehicle.seats }}\">
      </div>

      <div class=\"form-group\">
        <label for=\"lper100\">L/100km:</label>
        <input type=\"number\" id=\"lper100\" name=\"lper100\" step=\"0.01\" class=\"form-control\" value=\"{{ vehicle.lper100 }}\">
      </div>

      <button type=\"submit\" class=\"btn btn-primary btn-sm\">Save Changes</button>
    </form>
  </div>
{% endblock %}


{# {% extends \"admin/master.html.twig\" %}

{% block title %}Edit Vehicle{% endblock %}

{% block content %}
  <h1>Edit Vehicle</h1>
  <form method=\"POST\" action=\"/admin/editvehicle/{{ vehicle.id }}\">
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
{% endblock %} #}
", "admin/editvehicle.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/admin/editvehicle.html.twig");
    }
}
