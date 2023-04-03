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
    
    <form autocomplete=\"off\" method=\"post\" id=\"userForm\" style=\"text-align: center;\" action=\"checkout-charge.php\">
  
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


  <script
    id=\"stripeCheckout\"
    src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
    data-key=\"pk_test_51MsXcLJzhRIY3i5LeaGpgIQ9cHj8h0mwvZazt0JSNCk88nZyabvuDxiP2ju6wVisTEylFUPmS11X6ZuAitmtvDwZ00zwYYHn5W\"
    data-amount= finalPrice
    data-name=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "make", [], "any", false, false, false, 34), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "model", [], "any", false, false, false, 34), "html", null, true);
        echo "\"
    data-description=\"\"
    data-image=\"/";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "image_filepath", [], "any", false, false, false, 36), "html", null, true);
        echo "\"
    data-currency=\"CAD\"
    data-locale=\"auto\">
</script>
<script>
const stripeCheckout = document.getElementById('stripeCheckout');
stripeCheckout.dataset.amount = finalPrice;
</script>

 <br><br>
  
  <input type=\"checkbox\" id=\"tosCheckbox\" name=\"tosCheckbox\" required>
  <label for=\"tosCheckbox\">I have read and agree to the Terms of Service</label><br><br>
  
  <input type=\"hidden\" name=\"make\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "make", [], "any", false, false, false, 50), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"model\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "model", [], "any", false, false, false, 51), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"final_price\" value=\"<";
        // line 52
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 52) * ($context["rentalDays"] ?? null)) * 1.15), "html", null, true);
        echo ">\">

  <input type=\"submit\" value=\"Book\" id=\"bookButton\">
</form>

<script> // to ensure that the TOS button is clicked before hitting submit
  const tosCheckbox = document.getElementById('tosCheckbox');
  const bookButton = document.getElementById('bookButton');
  const userForm = document.getElementById('userForm');
  
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
        <div style=\"flex: 1; text-align: center;\">
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
            <p>Pickup Date and Time: ";
        // line 85
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["pickupDateTime"] ?? null), "Y-m-d H:i"), "html", null, true);
        echo "</p>
            <p>Return Date and Time: ";
        // line 86
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["returnDateTime"] ?? null), "Y-m-d H:i"), "html", null, true);
        echo "</p>

            ";
        // line 88
        $context["rentalDays"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_date_converter($this->env, ($context["returnDateTime"] ?? null)), "diff", [0 => twig_date_converter($this->env, ($context["pickupDateTime"] ?? null))], "method", false, false, false, 88), "days", [], "any", false, false, false, 88);
        // line 89
        echo "            <p>Daily Price: \$";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 89), "html", null, true);
        echo "</p>
            <p>Rental Days: ";
        // line 90
        echo twig_escape_filter($this->env, ($context["rentalDays"] ?? null), "html", null, true);
        echo "</p>

            <form style=\"text-align: center;\">
              <input type=\"checkbox\" name=\"insurance\" id=\"insurance\" checked> 
              <label for=\"insurance\">Take insurance (10% extra)</label><br><br>
              <p>Total Rental Price: \$<span id=\"totalPrice\">";
        // line 95
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 95) * ($context["rentalDays"] ?? null)), "html", null, true);
        echo "</span></p>
              <p>Tax (15%): \$<span id=\"tax\">";
        // line 96
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 96) * ($context["rentalDays"] ?? null)) * 0.15), "html", null, true);
        echo "</span></p>
              <p>Final Rental Price: \$<span id=\"finalPrice\">";
        // line 97
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 97) * ($context["rentalDays"] ?? null)) * 1.15), "html", null, true);
        echo "</span></p>
            </form>

            <script>
              const insuranceCheckbox = document.getElementById('insurance');
              const totalPriceElement = document.getElementById('totalPrice');
              const taxElement = document.getElementById('tax');
              const finalPriceElement = document.getElementById('finalPrice');

              let totalPrice = ";
        // line 106
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 106) * ($context["rentalDays"] ?? null)), "html", null, true);
        echo ";
              let tax = ";
        // line 107
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 107) * ($context["rentalDays"] ?? null)) * 0.15), "html", null, true);
        echo ";
              let finalPrice = ";
        // line 108
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 108) * ($context["rentalDays"] ?? null)) * 1.15), "html", null, true);
        echo ";

              insuranceCheckbox.addEventListener('change', function() {
                if (this.checked) {
                  totalPrice = ";
        // line 112
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 112) * ($context["rentalDays"] ?? null)) * 1.1), "html", null, true);
        echo ";
                  tax = ";
        // line 113
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 113) * ($context["rentalDays"] ?? null)) * 1.1) * 0.15), "html", null, true);
        echo ";
                  finalPrice = ";
        // line 114
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 114) * ($context["rentalDays"] ?? null)) * 1.1) * 1.15), "html", null, true);
        echo ";
                } else {
                  totalPrice = ";
        // line 116
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 116) * ($context["rentalDays"] ?? null)), "html", null, true);
        echo ";
                  tax = ";
        // line 117
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 117) * ($context["rentalDays"] ?? null)) * 0.15), "html", null, true);
        echo ";
                  finalPrice = ";
        // line 118
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 118) * ($context["rentalDays"] ?? null)) * 1.15), "html", null, true);
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
        return array (  240 => 118,  236 => 117,  232 => 116,  227 => 114,  223 => 113,  219 => 112,  212 => 108,  208 => 107,  204 => 106,  192 => 97,  188 => 96,  184 => 95,  176 => 90,  171 => 89,  169 => 88,  164 => 86,  160 => 85,  152 => 84,  147 => 82,  114 => 52,  110 => 51,  106 => 50,  89 => 36,  82 => 34,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'master.html.twig' %}

{% block content %}
    <div style=\"display: flex;\">
        <div style=\"flex: 1;\">
            <div style=\"flex: 1;\">
    
    <form autocomplete=\"off\" method=\"post\" id=\"userForm\" style=\"text-align: center;\" action=\"checkout-charge.php\">
  
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


  <script
    id=\"stripeCheckout\"
    src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
    data-key=\"pk_test_51MsXcLJzhRIY3i5LeaGpgIQ9cHj8h0mwvZazt0JSNCk88nZyabvuDxiP2ju6wVisTEylFUPmS11X6ZuAitmtvDwZ00zwYYHn5W\"
    data-amount= finalPrice
    data-name=\"{{ vehicle.make }} {{ vehicle.model }}\"
    data-description=\"\"
    data-image=\"/{{ vehicle.image_filepath }}\"
    data-currency=\"CAD\"
    data-locale=\"auto\">
</script>
<script>
const stripeCheckout = document.getElementById('stripeCheckout');
stripeCheckout.dataset.amount = finalPrice;
</script>

 <br><br>
  
  <input type=\"checkbox\" id=\"tosCheckbox\" name=\"tosCheckbox\" required>
  <label for=\"tosCheckbox\">I have read and agree to the Terms of Service</label><br><br>
  
  <input type=\"hidden\" name=\"make\" value=\"{{ vehicle.make }}\">
  <input type=\"hidden\" name=\"model\" value=\"{{ vehicle.model }}\">
  <input type=\"hidden\" name=\"final_price\" value=\"<{{ vehicle.daily_rate * rentalDays * 1.15 }}>\">

  <input type=\"submit\" value=\"Book\" id=\"bookButton\">
</form>

<script> // to ensure that the TOS button is clicked before hitting submit
  const tosCheckbox = document.getElementById('tosCheckbox');
  const bookButton = document.getElementById('bookButton');
  const userForm = document.getElementById('userForm');
  
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
        <div style=\"flex: 1; text-align: center;\">
            <img src=\"/{{ vehicle.image_filepath }}\" width=\"200\">
            <h1>Your Trip Details</h1>
            <p>{{ vehicle.make }} {{ vehicle.model }}, {{ vehicle.seats }} seats</p>
            <p>Pickup Date and Time: {{ pickupDateTime|date('Y-m-d H:i') }}</p>
            <p>Return Date and Time: {{ returnDateTime|date('Y-m-d H:i') }}</p>

            {% set rentalDays = date(returnDateTime).diff(date(pickupDateTime)).days %}
            <p>Daily Price: \${{ vehicle.daily_rate }}</p>
            <p>Rental Days: {{ rentalDays }}</p>

            <form style=\"text-align: center;\">
              <input type=\"checkbox\" name=\"insurance\" id=\"insurance\" checked> 
              <label for=\"insurance\">Take insurance (10% extra)</label><br><br>
              <p>Total Rental Price: \$<span id=\"totalPrice\">{{ vehicle.daily_rate * rentalDays }}</span></p>
              <p>Tax (15%): \$<span id=\"tax\">{{ vehicle.daily_rate * rentalDays * 0.15 }}</span></p>
              <p>Final Rental Price: \$<span id=\"finalPrice\">{{ vehicle.daily_rate * rentalDays * 1.15 }}</span></p>
            </form>

            <script>
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
