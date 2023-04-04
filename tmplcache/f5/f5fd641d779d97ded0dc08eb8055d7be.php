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
        echo "    <div style=\"display: flex;\">
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
  <input type=\"hidden\" id=\"pickDateTime\" name=\"pickDateTime\" value=\"pickDateTime\">
  <input type=\"hidden\" id=\"returnDateTime\" name=\"returnDateTime\" value=\"returnDateTime\">
  <input type=\"hidden\" id=\"rentalPrice\" name=\"rentalPrice\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 36), "html", null, true);
        echo "\">
  <input type=\"hidden\" id=\"insurance\" name=\"insurance\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "insurance_rate", [], "any", false, false, false, 37), "html", null, true);
        echo "\">
  <input type=\"hidden\" id=\"tax\" name=\"tax\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "tax_rate", [], "any", false, false, false, 38), "html", null, true);
        echo "\">
  <input type=\"hidden\" id=\"finalPrice\" name=\"finalPrice\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 39) * ($context["rentalDays"] ?? null)) * 1.15), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"make\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "make", [], "any", false, false, false, 40), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"model\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "model", [], "any", false, false, false, 41), "html", null, true);
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
        // line 81
        echo "        <div style=\"flex: 1; text-align: center;\">
            <img src=\"/";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "image_filepath", [], "any", false, false, false, 82), "html", null, true);
        echo "\" width=\"200\">
            <h1>Your Trip Details</h1>
            <p>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "make", [], "any", false, false, false, 84), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "model", [], "any", false, false, false, 84), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "seats", [], "any", false, false, false, 84), "html", null, true);
        echo " seats</p>
            <p>Pickup Date and Time: <span id=\"pickupDateTime\">";
        // line 85
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["pickupDateTime"] ?? null), "Y-m-d H:i"), "html", null, true);
        echo "</span></p>
            <p>Return Date and Time: <span id=\"returnDateTime\">";
        // line 86
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["returnDateTime"] ?? null), "Y-m-d H:i"), "html", null, true);
        echo "</span></p>


            ";
        // line 89
        $context["rentalDays"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_date_converter($this->env, ($context["returnDateTime"] ?? null)), "diff", [0 => twig_date_converter($this->env, ($context["pickupDateTime"] ?? null))], "method", false, false, false, 89), "days", [], "any", false, false, false, 89);
        // line 90
        echo "            <p>Daily Price: \$";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 90), "html", null, true);
        echo "</p>
            <p>Rental Days: ";
        // line 91
        echo twig_escape_filter($this->env, ($context["rentalDays"] ?? null), "html", null, true);
        echo "</p>

            <form style=\"text-align: center;\">
              <input type=\"checkbox\" name=\"insurance\" id=\"insurance\" checked> 
              <label for=\"insurance\">Take insurance (10% extra)</label><br><br>
              <p>Rental Price: \$<span id=\"rentalPrice\">";
        // line 96
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 96) * ($context["rentalDays"] ?? null)), "html", null, true);
        echo "</span></p>
              <p>Tax (15%): \$<span id=\"tax\">";
        // line 97
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 97) * ($context["rentalDays"] ?? null)) * 0.15), "html", null, true);
        echo "</span></p>
              <p>Final Rental Price: \$<span id=\"finalPrice\">";
        // line 98
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 98) * ($context["rentalDays"] ?? null)) * 1.15), "html", null, true);
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
        // line 117
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 117) * ($context["rentalDays"] ?? null)), "html", null, true);
        echo ";
              let tax = ";
        // line 118
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 118) * ($context["rentalDays"] ?? null)) * 0.15), "html", null, true);
        echo ";
              let finalPrice = ";
        // line 119
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 119) * ($context["rentalDays"] ?? null)) * 1.15), "html", null, true);
        echo ";

              insuranceCheckbox.addEventListener('change', function() {
                if (this.checked) {
                  totalPrice = ";
        // line 123
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 123) * ($context["rentalDays"] ?? null)) * 1.1), "html", null, true);
        echo ";
                  tax = ";
        // line 124
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 124) * ($context["rentalDays"] ?? null)) * 1.1) * 0.15), "html", null, true);
        echo ";
                  finalPrice = ";
        // line 125
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 125) * ($context["rentalDays"] ?? null)) * 1.1) * 1.15), "html", null, true);
        echo ";
                } else {
                  totalPrice = ";
        // line 127
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 127) * ($context["rentalDays"] ?? null)), "html", null, true);
        echo ";
                  tax = ";
        // line 128
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 128) * ($context["rentalDays"] ?? null)) * 0.15), "html", null, true);
        echo ";
                  finalPrice = ";
        // line 129
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 129) * ($context["rentalDays"] ?? null)) * 1.15), "html", null, true);
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
        return array (  253 => 129,  249 => 128,  245 => 127,  240 => 125,  236 => 124,  232 => 123,  225 => 119,  221 => 118,  217 => 117,  195 => 98,  191 => 97,  187 => 96,  179 => 91,  174 => 90,  172 => 89,  166 => 86,  162 => 85,  154 => 84,  149 => 82,  146 => 81,  104 => 41,  100 => 40,  96 => 39,  92 => 38,  88 => 37,  84 => 36,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'master.html.twig' %}

{% block content %}
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
  <input type=\"hidden\" id=\"pickDateTime\" name=\"pickDateTime\" value=\"pickDateTime\">
  <input type=\"hidden\" id=\"returnDateTime\" name=\"returnDateTime\" value=\"returnDateTime\">
  <input type=\"hidden\" id=\"rentalPrice\" name=\"rentalPrice\" value=\"{{ vehicle.daily_rate }}\">
  <input type=\"hidden\" id=\"insurance\" name=\"insurance\" value=\"{{ vehicle.insurance_rate }}\">
  <input type=\"hidden\" id=\"tax\" name=\"tax\" value=\"{{ vehicle.tax_rate }}\">
  <input type=\"hidden\" id=\"finalPrice\" name=\"finalPrice\" value=\"{{ vehicle.daily_rate * rentalDays * 1.15 }}\">
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
        <div style=\"flex: 1; text-align: center;\">
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
              <p>Tax (15%): \$<span id=\"tax\">{{ vehicle.daily_rate * rentalDays * 0.15 }}</span></p>
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
