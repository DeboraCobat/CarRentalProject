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

/* admin/addvehicle.html.twig */
class __TwigTemplate_af35f9dd5995ffc8b369b56dff8e4498 extends Template
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
        $this->parent = $this->loadTemplate("admin/adminmaster.html.twig", "admin/addvehicle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Add Vehicle";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
";
        // line 7
        if (($context["errorList"] ?? null)) {
            // line 8
            echo "    <ul>
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "        <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </ul>
";
        }
        // line 14
        echo "
<div class=\"container\">
  <div class=\"row justify-content-left mt-5 mb-5\">
    <div class=\"col-md-8 col-lg-6\">
      <h1>Add Vehicle</h1>

  <form method=\"post\" action=\"/admin/addvehicle\" enctype=\"multipart/form-data\">
    <div class=\"form-group\">
      <label for=\"make\">Make:</label>
      <input type=\"text\" class=\"form-control\" id=\"make\" name=\"make\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "make", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <label for=\"model\">Model:</label>
      <input type=\"text\" class=\"form-control\" id=\"model\" name=\"model\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "model", [], "any", false, false, false, 28), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <label for=\"year\">Year:</label>
      <input type=\"number\" class=\"form-control\" id=\"year\" name=\"year\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "year", [], "any", false, false, false, 33), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <label for=\"color\">Color:</label>
      <input type=\"text\" class=\"form-control\" id=\"color\" name=\"color\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "color", [], "any", false, false, false, 38), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <label for=\"license_plate\">License Plate:</label>
      <input type=\"text\" class=\"form-control\" id=\"license_plate\" name=\"license_plate\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "license_plate", [], "any", false, false, false, 43), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <label for=\"daily_rate\">Daily Rate:</label>
      <input type=\"number\" class=\"form-control\" id=\"daily_rate\" name=\"daily_rate\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "daily_rate", [], "any", false, false, false, 48), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <label for=\"availability\">Availability:</label>
      <input type=\"text\" class=\"form-control\" id=\"availability\" name=\"availability\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "availability", [], "any", false, false, false, 53), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <label for=\"seats\">Number of Seats:</label>
      <input type=\"number\" class=\"form-control\" id=\"seats\" name=\"seats\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "seats", [], "any", false, false, false, 58), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <label for=\"lper100\">Fuel Consumption (L/100km):</label>
      <input type=\"number\" class=\"form-control\" id=\"lper100\" name=\"lper100\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "lper100", [], "any", false, false, false, 63), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <label for=\"image\">Upload Image:</label>
      <input type=\"file\" class=\"form-control-file\" id=\"file\" name=\"file\">
    </div>

    ";
        // line 75
        echo "
    <button type=\"submit\" class=\"btn btn-primary btn-sm\">Add Vehicle</button>
  </form>
</div>


";
    }

    public function getTemplateName()
    {
        return "admin/addvehicle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 75,  158 => 63,  150 => 58,  142 => 53,  134 => 48,  126 => 43,  118 => 38,  110 => 33,  102 => 28,  94 => 23,  83 => 14,  79 => 12,  70 => 10,  66 => 9,  63 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/adminmaster.html.twig\" %}

{% block title %}Add Vehicle{% endblock %}

{% block content %}

{% if errorList %}
    <ul>
    {% for error in errorList %}
        <li>{{ error }}</li>
    {% endfor %}
    </ul>
{% endif %}

<div class=\"container\">
  <div class=\"row justify-content-left mt-5 mb-5\">
    <div class=\"col-md-8 col-lg-6\">
      <h1>Add Vehicle</h1>

  <form method=\"post\" action=\"/admin/addvehicle\" enctype=\"multipart/form-data\">
    <div class=\"form-group\">
      <label for=\"make\">Make:</label>
      <input type=\"text\" class=\"form-control\" id=\"make\" name=\"make\" value=\"{{ v.make }}\">
    </div>

    <div class=\"form-group\">
      <label for=\"model\">Model:</label>
      <input type=\"text\" class=\"form-control\" id=\"model\" name=\"model\" value=\"{{ v.model }}\">
    </div>

    <div class=\"form-group\">
      <label for=\"year\">Year:</label>
      <input type=\"number\" class=\"form-control\" id=\"year\" name=\"year\" value=\"{{ v.year }}\">
    </div>

    <div class=\"form-group\">
      <label for=\"color\">Color:</label>
      <input type=\"text\" class=\"form-control\" id=\"color\" name=\"color\" value=\"{{ v.color }}\">
    </div>

    <div class=\"form-group\">
      <label for=\"license_plate\">License Plate:</label>
      <input type=\"text\" class=\"form-control\" id=\"license_plate\" name=\"license_plate\" value=\"{{ v.license_plate }}\">
    </div>

    <div class=\"form-group\">
      <label for=\"daily_rate\">Daily Rate:</label>
      <input type=\"number\" class=\"form-control\" id=\"daily_rate\" name=\"daily_rate\" value=\"{{ v.daily_rate }}\">
    </div>

    <div class=\"form-group\">
      <label for=\"availability\">Availability:</label>
      <input type=\"text\" class=\"form-control\" id=\"availability\" name=\"availability\" value=\"{{ v.availability }}\">
    </div>

    <div class=\"form-group\">
      <label for=\"seats\">Number of Seats:</label>
      <input type=\"number\" class=\"form-control\" id=\"seats\" name=\"seats\" value=\"{{ v.seats }}\">
    </div>

    <div class=\"form-group\">
      <label for=\"lper100\">Fuel Consumption (L/100km):</label>
      <input type=\"number\" class=\"form-control\" id=\"lper100\" name=\"lper100\" value=\"{{ v.lper100 }}\">
    </div>

    <div class=\"form-group\">
      <label for=\"image\">Upload Image:</label>
      <input type=\"file\" class=\"form-control-file\" id=\"file\" name=\"file\">
    </div>

    {# <div class=\"form-group\">
      <label for=\"image_filepath\">Image Filepath:</label>
      <input type=\"text\" class=\"form-control\" id=\"image_filepath\" name=\"image_filepath\" value=\"{{ v.image_filepath }}\">
    </div> #}

    <button type=\"submit\" class=\"btn btn-primary btn-sm\">Add Vehicle</button>
  </form>
</div>


{% endblock content %}
", "admin/addvehicle.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/admin/addvehicle.html.twig");
    }
}
