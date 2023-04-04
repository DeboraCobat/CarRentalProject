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

/* booking.html.twig */
class __TwigTemplate_2728883367898cc197915d3c18220298 extends Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "booking.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<body class=\"bookingvehicle\">
    <div style=\"display: flex;\">
        <div style=\"flex: 1;\">
            <div style=\"flex: 1;\">
    
<form autocomplete=\"off\" method=\"post\" id=\"userForm\" style=\"text-align: center;\" action=\"\">
  
  <label for=\"firstName\">First Name:</label>
  <input type=\"text\" id=\"firstName\" name=\"firstName\" required><br><br>
  
  <label for=\"lastName\">Last Name:</label>
  <input type=\"text\" id=\"lastName\" name=\"lastName\" required><br><br>
  
  <label for=\"address\">Address:</label>
  <input type=\"text\" id=\"address\" name=\"address\" required><br><br>
  
  <label for=\"phone\">Phone:</label>
  <input type=\"text\" id=\"phone\" name=\"phone\" required><br><br>
  
  <label for=\"email\">Email:</label>
  <input type=\"email\" id=\"email\" name=\"email\" required><br><br>
  
  <label for=\"dob\">Date of Birth:</label>
  <input type=\"date\" id=\"dob\" name=\"dob\" required><br><br>
 <br><br>
  
  <input type=\"checkbox\" id=\"tosCheckbox\" name=\"tosCheckbox\" required>
  <label for=\"tosCheckbox\">I have read and agree to the Terms of Service</label><br><br>
  

  <input type=\"hidden\" id=\"vehicleId\" name=\"vehicleId\" value=\"\">
  <input type=\"hidden\" id=\"pickDateTime\" name=\"pickDateTime\" value=\"\">

  ";
        // line 37
        $context["returnDateTime"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "query", [], "any", false, false, false, 37), "get", [0 => "returnDate"], "method", false, false, false, 37) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "query", [], "any", false, false, false, 37), "get", [0 => "returnTime"], "method", false, false, false, 37));
        // line 38
        echo "<input type=\"hidden\" id=\"returnDateTime\" name=\"returnDateTime\" value=\"";
        echo twig_escape_filter($this->env, ($context["returnDateTime"] ?? null), "html", null, true);
        echo "\">

  ";
        // line 41
        echo "  <input type=\"hidden\" id=\"rentalPrice\" name=\"rentalPrice\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
  <input type=\"hidden\" id=\"insurance\" name=\"insurance\" value=\"insurance\">
  <input type=\"hidden\" id=\"tax\" name=\"tax\" value=\"tax\">
  <input type=\"hidden\" id=\"finalPrice\" name=\"finalPrice\" value=\"finalPrice\">
  <input type=\"hidden\" name=\"make\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "make", [], "any", false, false, false, 45), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"model\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "model", [], "any", false, false, false, 46), "html", null, true);
        echo "\">

  <input type=\"submit\" value=\"Book\" id=\"bookButton\">
</form>




<script> // to ensure that the TOS button is clicked before hitting submit
  const tosCheckbox = document.getElementById('tosCheckbox');
  const bookButton = document.getElementById('bookButton');
  const userForm = document.getElementById('userForm');
  
  // id of vehicle is brought over
const vehicleIdInput = document.getElementById('vehicleId');
const vehicleId = new URLSearchParams(window.location.search).get('vehicleId');
console.log('Vehicle ID:', vehicleId);
vehicleIdInput.value = vehicleId;


  tosCheckbox.addEventListener('change', function() {
    if (this.checked) {
      bookButton.disabled = false;
    } else {
      bookButton.disabled = true;
    }
  });
  
  userForm.addEventListener('submit', function(event) {
    if (!tosCheckbox.checked) {
      event.preventDefault();
      alert('Please accept the Terms of Service to continue.');
    }
  });

  </script>

</div>
   </div>

   ";
        // line 87
        echo "        <div style=\"flex: 1; text-align: center; margin-left: 15%;\">
            <img src=\"/";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "image_filepath", [], "any", false, false, false, 88), "html", null, true);
        echo "\" width=\"200\">
            <h1>Your Trip Details</h1>
            <p>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "make", [], "any", false, false, false, 90), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "model", [], "any", false, false, false, 90), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "seats", [], "any", false, false, false, 90), "html", null, true);
        echo " seats</p>
            <p>Pickup Date and Time: <span id=\"pickupDateTime\">";
        // line 91
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["pickupDateTime"] ?? null), "Y-m-d H:i"), "html", null, true);
        echo "</span></p>
            <p>Return Date and Time: <span id=\"returnDateTime\">";
        // line 92
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["returnDateTime"] ?? null), "Y-m-d H:i"), "html", null, true);
        echo "</span></p>


            ";
        // line 95
        $context["rentalDays"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_date_converter($this->env, ($context["returnDateTime"] ?? null)), "diff", [0 => twig_date_converter($this->env, ($context["pickupDateTime"] ?? null))], "method", false, false, false, 95), "days", [], "any", false, false, false, 95);
        // line 96
        echo "            <p>Daily Price: \$";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 96), "html", null, true);
        echo "</p>
            <p>Rental Days: ";
        // line 97
        echo twig_escape_filter($this->env, ($context["rentalDays"] ?? null), "html", null, true);
        echo "</p>

            <form style=\"text-align: center;\">
              <input type=\"checkbox\" name=\"insurance\" id=\"insurance\" checked> 
              <label for=\"insurance\">Take insurance (10% extra)</label><br><br>
              <p>Rental Price: \$<span id=\"rentalPrice\">";
        // line 102
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 102) * ($context["rentalDays"] ?? null)), "html", null, true);
        echo "</span></p>
              <br>
              <p>Tax (15%): \$<span id=\"tax\">";
        // line 104
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 104) * ($context["rentalDays"] ?? null)) * 0.15), "html", null, true);
        echo "</span></p>
              <br>
              <p>Final Rental Price: \$<span id=\"finalPrice\">";
        // line 106
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 106) * ($context["rentalDays"] ?? null)) * 1.15), "html", null, true);
        echo "</span></p>
            </form>

            <script>

                const pickupDateTimeSpan = document.getElementById('pickupDateTime');
                const returnDateTimeSpan = document.getElementById('returnDateTime');

                const pickupDateTime = pickupDateTimeSpan.innerText;
                const returnDateTime = returnDateTimeSpan.innerText;

                document.getElementById('pickDateTime').value = pickupDateTime;
                document.getElementById('returnDateTime').value = returnDateTime;

              const insuranceCheckbox = document.getElementById('insurance');
              const totalPriceElement = document.getElementById('totalPrice');
              const taxElement = document.getElementById('tax');
              const finalPriceElement = document.getElementById('finalPrice');

              let totalPrice = ";
        // line 125
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 125) * ($context["rentalDays"] ?? null)), "html", null, true);
        echo ";
              let tax = ";
        // line 126
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 126) * ($context["rentalDays"] ?? null)) * 0.15), "html", null, true);
        echo ";
              let finalPrice = ";
        // line 127
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 127) * ($context["rentalDays"] ?? null)) * 1.15), "html", null, true);
        echo ";

              insuranceCheckbox.addEventListener('change', function() {
                if (this.checked) {
                  totalPrice = ";
        // line 131
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 131) * ($context["rentalDays"] ?? null)) * 1.1), "html", null, true);
        echo ";
                  tax = ";
        // line 132
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 132) * ($context["rentalDays"] ?? null)) * 1.1) * 0.15), "html", null, true);
        echo ";
                  finalPrice = ";
        // line 133
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 133) * ($context["rentalDays"] ?? null)) * 1.1) * 1.15), "html", null, true);
        echo ";
                } else {
                  totalPrice = ";
        // line 135
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 135) * ($context["rentalDays"] ?? null)), "html", null, true);
        echo ";
                  tax = ";
        // line 136
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 136) * ($context["rentalDays"] ?? null)) * 0.15), "html", null, true);
        echo ";
                  finalPrice = ";
        // line 137
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 137) * ($context["rentalDays"] ?? null)) * 1.15), "html", null, true);
        echo ";
                }

                totalPriceElement.textContent = totalPrice.toFixed(2);
                taxElement.textContent = tax.toFixed(2);
                finalPriceElement.textContent = finalPrice.toFixed(2);
              });


            </script>

        </div> 
    </div>
";
    }

    public function getTemplateName()
    {
        return "booking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 137,  253 => 136,  249 => 135,  244 => 133,  240 => 132,  236 => 131,  229 => 127,  225 => 126,  221 => 125,  199 => 106,  194 => 104,  189 => 102,  181 => 97,  176 => 96,  174 => 95,  168 => 92,  164 => 91,  156 => 90,  151 => 88,  148 => 87,  105 => 46,  101 => 45,  93 => 41,  87 => 38,  85 => 37,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'master.html.twig' %}

{% block content %}
<body class=\"bookingvehicle\">
    <div style=\"display: flex;\">
        <div style=\"flex: 1;\">
            <div style=\"flex: 1;\">
    
<form autocomplete=\"off\" method=\"post\" id=\"userForm\" style=\"text-align: center;\" action=\"\">
  
  <label for=\"firstName\">First Name:</label>
  <input type=\"text\" id=\"firstName\" name=\"firstName\" required><br><br>
  
  <label for=\"lastName\">Last Name:</label>
  <input type=\"text\" id=\"lastName\" name=\"lastName\" required><br><br>
  
  <label for=\"address\">Address:</label>
  <input type=\"text\" id=\"address\" name=\"address\" required><br><br>
  
  <label for=\"phone\">Phone:</label>
  <input type=\"text\" id=\"phone\" name=\"phone\" required><br><br>
  
  <label for=\"email\">Email:</label>
  <input type=\"email\" id=\"email\" name=\"email\" required><br><br>
  
  <label for=\"dob\">Date of Birth:</label>
  <input type=\"date\" id=\"dob\" name=\"dob\" required><br><br>
 <br><br>
  
  <input type=\"checkbox\" id=\"tosCheckbox\" name=\"tosCheckbox\" required>
  <label for=\"tosCheckbox\">I have read and agree to the Terms of Service</label><br><br>
  

  <input type=\"hidden\" id=\"vehicleId\" name=\"vehicleId\" value=\"\">
  <input type=\"hidden\" id=\"pickDateTime\" name=\"pickDateTime\" value=\"\">

  {% set returnDateTime = request.query.get('returnDate') ~ ' ' ~ request.query.get('returnTime') %}
<input type=\"hidden\" id=\"returnDateTime\" name=\"returnDateTime\" value=\"{{ returnDateTime }}\">

  {# <input type=\"hidden\" id=\"returnDateTime\" name=\"returnDateTime\" value=\"\"> #}
  <input type=\"hidden\" id=\"rentalPrice\" name=\"rentalPrice\" value=\"{{ vehicle.daily_rate }}\">
  <input type=\"hidden\" id=\"insurance\" name=\"insurance\" value=\"insurance\">
  <input type=\"hidden\" id=\"tax\" name=\"tax\" value=\"tax\">
  <input type=\"hidden\" id=\"finalPrice\" name=\"finalPrice\" value=\"finalPrice\">
  <input type=\"hidden\" name=\"make\" value=\"{{ vehicle.make }}\">
  <input type=\"hidden\" name=\"model\" value=\"{{ vehicle.model }}\">

  <input type=\"submit\" value=\"Book\" id=\"bookButton\">
</form>




<script> // to ensure that the TOS button is clicked before hitting submit
  const tosCheckbox = document.getElementById('tosCheckbox');
  const bookButton = document.getElementById('bookButton');
  const userForm = document.getElementById('userForm');
  
  // id of vehicle is brought over
const vehicleIdInput = document.getElementById('vehicleId');
const vehicleId = new URLSearchParams(window.location.search).get('vehicleId');
console.log('Vehicle ID:', vehicleId);
vehicleIdInput.value = vehicleId;


  tosCheckbox.addEventListener('change', function() {
    if (this.checked) {
      bookButton.disabled = false;
    } else {
      bookButton.disabled = true;
    }
  });
  
  userForm.addEventListener('submit', function(event) {
    if (!tosCheckbox.checked) {
      event.preventDefault();
      alert('Please accept the Terms of Service to continue.');
    }
  });

  </script>

</div>
   </div>

   {# /////////////////////////////////////////////////////////////// TRIP DETAILS #}
        <div style=\"flex: 1; text-align: center; margin-left: 15%;\">
            <img src=\"/{{ vehicle.image_filepath }}\" width=\"200\">
            <h1>Your Trip Details</h1>
            <p>{{ vehicle.make }} {{ vehicle.model }}, {{ vehicle.seats }} seats</p>
            <p>Pickup Date and Time: <span id=\"pickupDateTime\">{{ pickupDateTime|date('Y-m-d H:i') }}</span></p>
            <p>Return Date and Time: <span id=\"returnDateTime\">{{ returnDateTime|date('Y-m-d H:i') }}</span></p>


            {% set rentalDays = date(returnDateTime).diff(date(pickupDateTime)).days %}
            <p>Daily Price: \${{ vehicle.daily_rate }}</p>
            <p>Rental Days: {{ rentalDays }}</p>

            <form style=\"text-align: center;\">
              <input type=\"checkbox\" name=\"insurance\" id=\"insurance\" checked> 
              <label for=\"insurance\">Take insurance (10% extra)</label><br><br>
              <p>Rental Price: \$<span id=\"rentalPrice\">{{ vehicle.daily_rate * rentalDays }}</span></p>
              <br>
              <p>Tax (15%): \$<span id=\"tax\">{{ vehicle.daily_rate * rentalDays * 0.15 }}</span></p>
              <br>
              <p>Final Rental Price: \$<span id=\"finalPrice\">{{ vehicle.daily_rate * rentalDays * 1.15 }}</span></p>
            </form>

            <script>

                const pickupDateTimeSpan = document.getElementById('pickupDateTime');
                const returnDateTimeSpan = document.getElementById('returnDateTime');

                const pickupDateTime = pickupDateTimeSpan.innerText;
                const returnDateTime = returnDateTimeSpan.innerText;

                document.getElementById('pickDateTime').value = pickupDateTime;
                document.getElementById('returnDateTime').value = returnDateTime;

              const insuranceCheckbox = document.getElementById('insurance');
              const totalPriceElement = document.getElementById('totalPrice');
              const taxElement = document.getElementById('tax');
              const finalPriceElement = document.getElementById('finalPrice');

              let totalPrice = {{ vehicle.daily_rate * rentalDays }};
              let tax = {{ vehicle.daily_rate * rentalDays * 0.15 }};
              let finalPrice = {{ vehicle.daily_rate * rentalDays * 1.15 }};

              insuranceCheckbox.addEventListener('change', function() {
                if (this.checked) {
                  totalPrice = {{ vehicle.daily_rate * rentalDays * 1.1 }};
                  tax = {{ vehicle.daily_rate * rentalDays * 1.1 * 0.15 }};
                  finalPrice = {{ vehicle.daily_rate * rentalDays * 1.1 * 1.15 }};
                } else {
                  totalPrice = {{ vehicle.daily_rate * rentalDays }};
                  tax = {{ vehicle.daily_rate * rentalDays * 0.15 }};
                  finalPrice = {{ vehicle.daily_rate * rentalDays * 1.15 }};
                }

                totalPriceElement.textContent = totalPrice.toFixed(2);
                taxElement.textContent = tax.toFixed(2);
                finalPriceElement.textContent = finalPrice.toFixed(2);
              });


            </script>

        </div> 
    </div>
{% endblock %}
", "booking.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\booking.html.twig");
    }
}
