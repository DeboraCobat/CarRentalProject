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

/* addvehicle.html.twig */
class __TwigTemplate_f78bc624fa2f5d5620956ae8b65d6dc3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("master.html.twig", "addvehicle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
";
        // line 5
        if (($context["errorList"] ?? null)) {
            // line 6
            echo "    <ul>
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 8
                echo "        <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </ul>
";
        }
        // line 12
        echo "
<form method=\"post\" action=\"/addvehicle\">
    <label for=\"make\">Make:</label>
    <input type=\"text\" id=\"make\" name=\"make\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "make", [], "any", false, false, false, 15), "html", null, true);
        echo "\"><br>

    <label for=\"model\">Model:</label>
    <input type=\"text\" id=\"model\" name=\"model\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "model", [], "any", false, false, false, 18), "html", null, true);
        echo "\"><br>

    <label for=\"year\">Year:</label>
    <input type=\"number\" id=\"year\" name=\"year\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "year", [], "any", false, false, false, 21), "html", null, true);
        echo "\"><br>

    <label for=\"color\">Color:</label>
    <input type=\"text\" id=\"color\" name=\"color\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "color", [], "any", false, false, false, 24), "html", null, true);
        echo "\"><br>

    <label for=\"license_plate\">License Plate:</label>
    <input type=\"text\" id=\"license_plate\" name=\"license_plate\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "license_plate", [], "any", false, false, false, 27), "html", null, true);
        echo "\"><br>

    <label for=\"daily_rate\">Daily Rate:</label>
    <input type=\"number\" id=\"daily_rate\" name=\"daily_rate\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "daily_rate", [], "any", false, false, false, 30), "html", null, true);
        echo "\"><br>

    <label for=\"availability\">Availability:</label>
    <input type=\"text\" id=\"availability\" name=\"availability\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "availability", [], "any", false, false, false, 33), "html", null, true);
        echo "\"><br>

    <label for=\"seats\">Number of Seats:</label>
    <input type=\"number\" id=\"seats\" name=\"seats\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "seats", [], "any", false, false, false, 36), "html", null, true);
        echo "\"><br>

    <label for=\"lper100\">Fuel Consumption (L/100km):</label>
    <input type=\"number\" id=\"lper100\" name=\"lper100\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "lper100", [], "any", false, false, false, 39), "html", null, true);
        echo "\"><br>

    <label for=\"image\">Upload Image:</label>
    <input type=\"file\" id=\"image\" name=\"image\"><br>

    ";
        // line 46
        echo "
    <input type=\"submit\" value=\"Add Vehicle\">
</form>

";
    }

    public function getTemplateName()
    {
        return "addvehicle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 46,  128 => 39,  122 => 36,  116 => 33,  110 => 30,  104 => 27,  98 => 24,  92 => 21,  86 => 18,  80 => 15,  75 => 12,  71 => 10,  62 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block content %}

{% if errorList %}
    <ul>
    {% for error in errorList %}
        <li>{{ error }}</li>
    {% endfor %}
    </ul>
{% endif %}

<form method=\"post\" action=\"/addvehicle\">
    <label for=\"make\">Make:</label>
    <input type=\"text\" id=\"make\" name=\"make\" value=\"{{ v.make }}\"><br>

    <label for=\"model\">Model:</label>
    <input type=\"text\" id=\"model\" name=\"model\" value=\"{{ v.model }}\"><br>

    <label for=\"year\">Year:</label>
    <input type=\"number\" id=\"year\" name=\"year\" value=\"{{ v.year }}\"><br>

    <label for=\"color\">Color:</label>
    <input type=\"text\" id=\"color\" name=\"color\" value=\"{{ v.color }}\"><br>

    <label for=\"license_plate\">License Plate:</label>
    <input type=\"text\" id=\"license_plate\" name=\"license_plate\" value=\"{{ v.license_plate }}\"><br>

    <label for=\"daily_rate\">Daily Rate:</label>
    <input type=\"number\" id=\"daily_rate\" name=\"daily_rate\" value=\"{{ v.daily_rate }}\"><br>

    <label for=\"availability\">Availability:</label>
    <input type=\"text\" id=\"availability\" name=\"availability\" value=\"{{ v.availability }}\"><br>

    <label for=\"seats\">Number of Seats:</label>
    <input type=\"number\" id=\"seats\" name=\"seats\" value=\"{{ v.seats }}\"><br>

    <label for=\"lper100\">Fuel Consumption (L/100km):</label>
    <input type=\"number\" id=\"lper100\" name=\"lper100\" value=\"{{ v.lper100 }}\"><br>

    <label for=\"image\">Upload Image:</label>
    <input type=\"file\" id=\"image\" name=\"image\"><br>

    {# <label for=\"image_filepath\">Image Filepath:</label>
    <input type=\"text\" id=\"image_filepath\" name=\"image_filepath\" value=\"{{ v.image_filepath }}\"><br> #}

    <input type=\"submit\" value=\"Add Vehicle\">
</form>

{% endblock content %}
", "addvehicle.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\addvehicle.html.twig");
    }
}
