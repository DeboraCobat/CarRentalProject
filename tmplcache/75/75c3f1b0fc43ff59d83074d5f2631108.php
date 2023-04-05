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
class __TwigTemplate_48da17407afdf76003e66ab3674915d7 extends Template
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
  <input type=\"hidden\" id=\"returnDateTime\" name=\"returnDateTime\" value=\"\">

  ";
        // line 39
        echo "  <input type=\"hidden\" id=\"rentalPrice\" name=\"rentalPrice\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 39), "html", null, true);
        echo "\">
  <input type=\"hidden\" id=\"insurance\" name=\"insurance\" value=\"insurance\">
  <input type=\"hidden\" id=\"tax\" name=\"tax\" value=\"tax\">
  <input type=\"hidden\" id=\"finalPrice\" name=\"finalPrice\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 42) * ($context["rentalDays"] ?? null)) * 1.100000000000000088817841970012523233890533447265625), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"make\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "make", [], "any", false, false, false, 43), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"model\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "model", [], "any", false, false, false, 44), "html", null, true);
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
        // line 85
        echo "        <div style=\"flex: 1; text-align: center; margin-left: 15%;\">
            <img src=\"/";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "image_filepath", [], "any", false, false, false, 86), "html", null, true);
        echo "\" width=\"200\">
            <h1>Your Trip Details</h1>
            <p>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "make", [], "any", false, false, false, 88), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "model", [], "any", false, false, false, 88), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "seats", [], "any", false, false, false, 88), "html", null, true);
        echo " seats</p>
            <p>Pickup Date and Time: <span id=\"pickupDateTime\">";
        // line 89
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["pickupDateTime"] ?? null), "Y-m-d H:i"), "html", null, true);
        echo "</span></p>
            <p>Return Date and Time: <span id=\"returnDateTime\">";
        // line 90
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["returnDateTime"] ?? null), "Y-m-d H:i"), "html", null, true);
        echo "</span></p>


            ";
        // line 93
        $context["rentalDays"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_date_converter($this->env, ($context["returnDateTime"] ?? null)), "diff", [0 => twig_date_converter($this->env, ($context["pickupDateTime"] ?? null))], "method", false, false, false, 93), "days", [], "any", false, false, false, 93);
        // line 94
        echo "            <p>Daily Price: \$";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 94), "html", null, true);
        echo "</p>
            <p>Rental Days: ";
        // line 95
        echo twig_escape_filter($this->env, ($context["rentalDays"] ?? null), "html", null, true);
        echo "</p>

            <form style=\"text-align: center;\">
              ";
        // line 99
        echo "              ";
        // line 100
        echo "              <p>Rental Price: \$<span id=\"rentalPrice\">";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 100) * ($context["rentalDays"] ?? null)), "html", null, true);
        echo "</span></p>
              <br>
              <p>Tax (15%): \$<span id=\"tax\">";
        // line 102
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 102) * ($context["rentalDays"] ?? null)) * 0.1499999999999999944488848768742172978818416595458984375), "html", null, true);
        echo "</span></p>
              <br>
              <p>Final Rental Price: \$<span id=\"finalPrice\">";
        // line 104
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 104) * ($context["rentalDays"] ?? null)) * 1.149999999999999911182158029987476766109466552734375), "html", null, true);
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
        // line 123
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 123) * ($context["rentalDays"] ?? null)), "html", null, true);
        echo ";
              let tax = ";
        // line 124
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 124) * ($context["rentalDays"] ?? null)) * 0.1499999999999999944488848768742172978818416595458984375), "html", null, true);
        echo ";
              let finalPrice = ";
        // line 125
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 125) * ($context["rentalDays"] ?? null)) * 1.149999999999999911182158029987476766109466552734375), "html", null, true);
        echo ";

              insuranceCheckbox.addEventListener('change', function() {
                if (this.checked) {
                  totalPrice = ";
        // line 129
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 129) * ($context["rentalDays"] ?? null)) * 1.100000000000000088817841970012523233890533447265625), "html", null, true);
        echo ";
                  tax = ";
        // line 130
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 130) * ($context["rentalDays"] ?? null)) * 1.100000000000000088817841970012523233890533447265625) * 0.1499999999999999944488848768742172978818416595458984375), "html", null, true);
        echo ";
                  finalPrice = ";
        // line 131
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 131) * ($context["rentalDays"] ?? null)) * 1.100000000000000088817841970012523233890533447265625) * 1.149999999999999911182158029987476766109466552734375), "html", null, true);
        echo ";
                } else {
                  totalPrice = ";
        // line 133
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 133) * ($context["rentalDays"] ?? null)), "html", null, true);
        echo ";
                  tax = ";
        // line 134
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 134) * ($context["rentalDays"] ?? null)) * 0.1499999999999999944488848768742172978818416595458984375), "html", null, true);
        echo ";
                  finalPrice = ";
        // line 135
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 135) * ($context["rentalDays"] ?? null)) * 1.149999999999999911182158029987476766109466552734375), "html", null, true);
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
        return array (  254 => 135,  250 => 134,  246 => 133,  241 => 131,  237 => 130,  233 => 129,  226 => 125,  222 => 124,  218 => 123,  196 => 104,  191 => 102,  185 => 100,  183 => 99,  177 => 95,  172 => 94,  170 => 93,  164 => 90,  160 => 89,  152 => 88,  147 => 86,  144 => 85,  101 => 44,  97 => 43,  93 => 42,  86 => 39,  50 => 4,  46 => 3,  35 => 1,);
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
  <input type=\"hidden\" id=\"returnDateTime\" name=\"returnDateTime\" value=\"\">

  {# <input type=\"hidden\" id=\"returnDateTime\" name=\"returnDateTime\" value=\"\"> #}
  <input type=\"hidden\" id=\"rentalPrice\" name=\"rentalPrice\" value=\"{{ vehicle.daily_rate }}\">
  <input type=\"hidden\" id=\"insurance\" name=\"insurance\" value=\"insurance\">
  <input type=\"hidden\" id=\"tax\" name=\"tax\" value=\"tax\">
  <input type=\"hidden\" id=\"finalPrice\" name=\"finalPrice\" value=\"{{ vehicle.daily_rate * rentalDays * 1.10 }}\">
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
              {# <input type=\"checkbox\" name=\"insurance\" id=\"insurance\" checked>  #}
              {# <label for=\"insurance\">Take insurance (10% extra)</label><br><br> #}
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
", "booking.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/booking.html.twig");
    }
}
