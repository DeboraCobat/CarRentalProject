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
class __TwigTemplate_fc5eca0dcc8fd12aead095544bc345b7 extends Template
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
        echo "
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-striped\">
          
      <h1>Edit Vehicle</h1>

      <form method=\"POST\" action=\"/admin/editvehicle/";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
        <table>
          <tbody>
            <tr>
              <td><label for=\"make\">Make:</label></td>
              <td><input type=\"text\" id=\"make\" name=\"make\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "make", [], "any", false, false, false, 20), "html", null, true);
        echo "\"></td>
            </tr>

            <tr>
              <td><label for=\"model\">Model:</label></td>
              <td><input type=\"text\" id=\"model\" name=\"model\" class=\"form-control\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "model", [], "any", false, false, false, 25), "html", null, true);
        echo "\"></td>
            </tr>

            <tr>
              <td><label for=\"year\">Year:</label></td>
              <td><input type=\"number\" id=\"year\" name=\"year\" class=\"form-control\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "year", [], "any", false, false, false, 30), "html", null, true);
        echo "\"></td>
            </tr>

            <tr>
              <td><label for=\"color\">Color:</label></td>
              <td><input type=\"text\" id=\"color\" name=\"color\" class=\"form-control\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "color", [], "any", false, false, false, 35), "html", null, true);
        echo "\"></td>
            </tr>

            <tr>
              <td><label for=\"license_plate\">License Plate:</label></td>
              <td><input type=\"text\" id=\"license_plate\" name=\"license_plate\" class=\"form-control\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "license_plate", [], "any", false, false, false, 40), "html", null, true);
        echo "\"></td>
            </tr>

            <tr>
              <td><label for=\"daily_rate\">Daily Rate:</label></td>
              <td><input type=\"number\" id=\"daily_rate\" name=\"daily_rate\" step=\"0.01\" class=\"form-control\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 45), "html", null, true);
        echo "\"></td>
            </tr>

            <tr>
              <td><label for=\"availability\">Availability:</label></td>
              <td><input type=\"text\" id=\"availability\" name=\"availability\" class=\"form-control\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "availability", [], "any", false, false, false, 50), "html", null, true);
        echo "\"></td>
            </tr>

            <tr>
              <td><label for=\"seats\">Seats:</label></td>
              <td><input type=\"number\" id=\"seats\" name=\"seats\" class=\"form-control\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "seats", [], "any", false, false, false, 55), "html", null, true);
        echo "\"></td>
            </tr>

            <tr>
              <td><label for=\"lper100\">L/100km:</label></td>
              <td><input type=\"number\" id=\"lper100\" name=\"lper100\" step=\"0.01\" class=\"form-control\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "lper100", [], "any", false, false, false, 60), "html", null, true);
        echo "\"></td>
            </tr>
          </tbody>
        </table>

        <button type=\"submit\" class=\"btn btn-primary btn-sm\">Save Changes</button>
      </form>
    </div>
  </div>
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
        return array (  141 => 60,  133 => 55,  125 => 50,  117 => 45,  109 => 40,  101 => 35,  93 => 30,  85 => 25,  77 => 20,  69 => 15,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/adminmaster.html.twig\" %}

{% block title %}Edit Vehicle{% endblock %}

{% block content %}

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-striped\">
          
      <h1>Edit Vehicle</h1>

      <form method=\"POST\" action=\"/admin/editvehicle/{{ vehicle.id }}\">
        <table>
          <tbody>
            <tr>
              <td><label for=\"make\">Make:</label></td>
              <td><input type=\"text\" id=\"make\" name=\"make\" class=\"form-control\" value=\"{{ vehicle.make }}\"></td>
            </tr>

            <tr>
              <td><label for=\"model\">Model:</label></td>
              <td><input type=\"text\" id=\"model\" name=\"model\" class=\"form-control\" value=\"{{ vehicle.model }}\"></td>
            </tr>

            <tr>
              <td><label for=\"year\">Year:</label></td>
              <td><input type=\"number\" id=\"year\" name=\"year\" class=\"form-control\" value=\"{{ vehicle.year }}\"></td>
            </tr>

            <tr>
              <td><label for=\"color\">Color:</label></td>
              <td><input type=\"text\" id=\"color\" name=\"color\" class=\"form-control\" value=\"{{ vehicle.color }}\"></td>
            </tr>

            <tr>
              <td><label for=\"license_plate\">License Plate:</label></td>
              <td><input type=\"text\" id=\"license_plate\" name=\"license_plate\" class=\"form-control\" value=\"{{ vehicle.license_plate }}\"></td>
            </tr>

            <tr>
              <td><label for=\"daily_rate\">Daily Rate:</label></td>
              <td><input type=\"number\" id=\"daily_rate\" name=\"daily_rate\" step=\"0.01\" class=\"form-control\" value=\"{{ vehicle.daily_rate }}\"></td>
            </tr>

            <tr>
              <td><label for=\"availability\">Availability:</label></td>
              <td><input type=\"text\" id=\"availability\" name=\"availability\" class=\"form-control\" value=\"{{ vehicle.availability }}\"></td>
            </tr>

            <tr>
              <td><label for=\"seats\">Seats:</label></td>
              <td><input type=\"number\" id=\"seats\" name=\"seats\" class=\"form-control\" value=\"{{ vehicle.seats }}\"></td>
            </tr>

            <tr>
              <td><label for=\"lper100\">L/100km:</label></td>
              <td><input type=\"number\" id=\"lper100\" name=\"lper100\" step=\"0.01\" class=\"form-control\" value=\"{{ vehicle.lper100 }}\"></td>
            </tr>
          </tbody>
        </table>

        <button type=\"submit\" class=\"btn btn-primary btn-sm\">Save Changes</button>
      </form>
    </div>
  </div>
</div>

{% endblock %}
", "admin/editvehicle.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\admin\\editvehicle.html.twig");
    }
}
