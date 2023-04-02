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

/* vehicle.html.twig */
class __TwigTemplate_5fb9c2795cdbbe529dda0beabd4d2e12 extends Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "vehicle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <h1>Vehicle Details</h1>
  <div class=\"row\">
    <div class=\"col-md-6\">
      <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "photo", [], "any", false, false, false, 7), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "make", [], "any", false, false, false, 7), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "model", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
    </div>
    <div class=\"col-md-6\">
      <h2>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "make", [], "any", false, false, false, 10), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "model", [], "any", false, false, false, 10), "html", null, true);
        echo "</h2>
      <p>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "description", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
      <table>
        <tr>
          <td>Year:</td>
          <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "year", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
        </tr>
        <tr>
          <td>Color:</td>
          <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "color", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
        </tr>
        <tr>
          <td>Price:</td>
          <td>\$";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "price", [], "any", false, false, false, 23), "html", null, true);
        echo "/day</td>
        </tr>
        <tr>
          <td>Availability:</td>
          <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "availability", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
        </tr>
        <tr>
          <td>Start Date:</td>
          <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["pickupDateTime"] ?? null), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
          <td>End Date:</td>
          <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["returnDateTime"] ?? null), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
      </table>
    </div>
  </div>
  <hr>
  <div class=\"row\">
    <div class=\"col-md-6\">
      <h2>Rental Details</h2>
      <form method=\"post\" action=\"/booking\">
        <input type=\"hidden\" name=\"vehicle_id\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "id", [], "any", false, false, false, 45), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"pickup_date\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["pickupDateTime"] ?? null), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"return_date\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["returnDateTime"] ?? null), "html", null, true);
        echo "\">
        <table>
          <tr>
            <td>Start Date:</td>
            <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["pickupDateTime"] ?? null), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td>End Date:</td>
            <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["returnDateTime"] ?? null), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td>Price:</td>
            <td>\$";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "price", [], "any", false, false, false, 59), "html", null, true);
        echo "/day</td>
          </tr>
          <tr>
            <td>Days:</td>
            <td>";
        // line 63
        echo twig_escape_filter($this->env, ($context["rentalDays"] ?? null), "html", null, true);
        echo "</td>
          </tr>
              <tr>
      <td>Subtotal:</td>
      <td>\$";
        // line 67
        echo twig_escape_filter($this->env, ($context["subtotal"] ?? null), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Tax (";
        // line 70
        echo twig_escape_filter($this->env, ($context["taxRate"] ?? null), "html", null, true);
        echo "%):</td>
      <td>\$";
        // line 71
        echo twig_escape_filter($this->env, ($context["taxAmount"] ?? null), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Total:</td>
      <td>\$";
        // line 75
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "</td>
    </tr>
  </table>
  <hr>
  <h2>Personal Information</h2>
  <div class=\"form-group\">
    <label for=\"name\">Name:</label>
    <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" required>
  </div>
  <div class=\"form-group\">
    <label for=\"address\">Address:</label>
    <input type=\"text\" class=\"form-control\" id=\"address\" name=\"address\" required>
  </div>
  <div class=\"form-group\">
    <label for=\"phone\">Phone:</label>
    <input type=\"text\" class=\"form-control\" id=\"phone\" name=\"phone\" required>
  </div>
  <div class=\"form-group\">
    <label for=\"email\">Email:</label>
    <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
  </div>
  <div class=\"form-group\">
    <label for=\"dob\">Date of Birth:</label>
    <input type=\"date\" class=\"form-control\" id=\"dob\" name=\"dob\" required>
  </div>
  <div class=\"form-group\">
    <label for=\"license_number\">License Number:</label>
    <input type=\"text\" class=\"form-control\" id=\"license_number\" name=\"license_number\" required>
  </div>
  <div class=\"form-group\">
    <label for=\"license_expiration\">License Expiration:</label>
    <input type=\"date\" class=\"form-control\" id=\"license_expiration\" name=\"license_expiration\" required>
  </div>
  <div class=\"form-group form-check\">
    <input type=\"checkbox\" class=\"form-check-input\" id=\"terms\" name=\"terms\" required>
    <label class=\"form-check-label\" for=\"terms\">I agree to the terms of service</label>
  </div>
  <button type=\"submit\" class=\"btn btn-primary\">Book Now</button>
</form>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "vehicle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 75,  179 => 71,  175 => 70,  169 => 67,  162 => 63,  155 => 59,  148 => 55,  141 => 51,  134 => 47,  130 => 46,  126 => 45,  113 => 35,  106 => 31,  99 => 27,  92 => 23,  85 => 19,  78 => 15,  71 => 11,  65 => 10,  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'master.html.twig' %}

{% block content %}
  <h1>Vehicle Details</h1>
  <div class=\"row\">
    <div class=\"col-md-6\">
      <img src=\"{{ vehicle.photo }}\" alt=\"{{ vehicle.make }} {{ vehicle.model }}\">
    </div>
    <div class=\"col-md-6\">
      <h2>{{ vehicle.make }} {{ vehicle.model }}</h2>
      <p>{{ vehicle.description }}</p>
      <table>
        <tr>
          <td>Year:</td>
          <td>{{ vehicle.year }}</td>
        </tr>
        <tr>
          <td>Color:</td>
          <td>{{ vehicle.color }}</td>
        </tr>
        <tr>
          <td>Price:</td>
          <td>\${{ vehicle.price }}/day</td>
        </tr>
        <tr>
          <td>Availability:</td>
          <td>{{ vehicle.availability }}</td>
        </tr>
        <tr>
          <td>Start Date:</td>
          <td>{{ pickupDateTime|date('Y-m-d H:i:s') }}</td>
        </tr>
        <tr>
          <td>End Date:</td>
          <td>{{ returnDateTime|date('Y-m-d H:i:s') }}</td>
        </tr>
      </table>
    </div>
  </div>
  <hr>
  <div class=\"row\">
    <div class=\"col-md-6\">
      <h2>Rental Details</h2>
      <form method=\"post\" action=\"/booking\">
        <input type=\"hidden\" name=\"vehicle_id\" value=\"{{ vehicle.id }}\">
        <input type=\"hidden\" name=\"pickup_date\" value=\"{{ pickupDateTime }}\">
        <input type=\"hidden\" name=\"return_date\" value=\"{{ returnDateTime }}\">
        <table>
          <tr>
            <td>Start Date:</td>
            <td>{{ pickupDateTime|date('Y-m-d H:i:s') }}</td>
          </tr>
          <tr>
            <td>End Date:</td>
            <td>{{ returnDateTime|date('Y-m-d H:i:s') }}</td>
          </tr>
          <tr>
            <td>Price:</td>
            <td>\${{ vehicle.price }}/day</td>
          </tr>
          <tr>
            <td>Days:</td>
            <td>{{ rentalDays }}</td>
          </tr>
              <tr>
      <td>Subtotal:</td>
      <td>\${{ subtotal }}</td>
    </tr>
    <tr>
      <td>Tax ({{ taxRate }}%):</td>
      <td>\${{ taxAmount }}</td>
    </tr>
    <tr>
      <td>Total:</td>
      <td>\${{ total }}</td>
    </tr>
  </table>
  <hr>
  <h2>Personal Information</h2>
  <div class=\"form-group\">
    <label for=\"name\">Name:</label>
    <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" required>
  </div>
  <div class=\"form-group\">
    <label for=\"address\">Address:</label>
    <input type=\"text\" class=\"form-control\" id=\"address\" name=\"address\" required>
  </div>
  <div class=\"form-group\">
    <label for=\"phone\">Phone:</label>
    <input type=\"text\" class=\"form-control\" id=\"phone\" name=\"phone\" required>
  </div>
  <div class=\"form-group\">
    <label for=\"email\">Email:</label>
    <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
  </div>
  <div class=\"form-group\">
    <label for=\"dob\">Date of Birth:</label>
    <input type=\"date\" class=\"form-control\" id=\"dob\" name=\"dob\" required>
  </div>
  <div class=\"form-group\">
    <label for=\"license_number\">License Number:</label>
    <input type=\"text\" class=\"form-control\" id=\"license_number\" name=\"license_number\" required>
  </div>
  <div class=\"form-group\">
    <label for=\"license_expiration\">License Expiration:</label>
    <input type=\"date\" class=\"form-control\" id=\"license_expiration\" name=\"license_expiration\" required>
  </div>
  <div class=\"form-group form-check\">
    <input type=\"checkbox\" class=\"form-check-input\" id=\"terms\" name=\"terms\" required>
    <label class=\"form-check-label\" for=\"terms\">I agree to the terms of service</label>
  </div>
  <button type=\"submit\" class=\"btn btn-primary\">Book Now</button>
</form>
  </div>
</div>
{% endblock %}
", "vehicle.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\vehicle.html.twig");
    }
}
