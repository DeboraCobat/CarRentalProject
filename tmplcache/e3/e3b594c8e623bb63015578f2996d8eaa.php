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

/* register.html.twig */
class __TwigTemplate_fdeb42060499aa367ddcacd63954b50a extends Template
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
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("master.html.twig", "register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Registration";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "   

<div class=\"container\">
  <div class=\"row justify-content-center mt-5 mb-5\">
    <div class=\"col-md-8 col-lg-6\">
      <h1>Registration</h1>
        ";
        // line 12
        if (($context["register"] ?? null)) {
            // line 13
            echo "
      <form method=\"post\" action=\"/register\">
          
        <div class=\"form-group\">
          <label for=\"first_name\">First Name:</label>
          <input type=\"text\" class=\"form-control\" id=\"first_name\" name=\"first_name\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "first_name", [], "any", false, false, false, 18), "html", null, true);
            echo "\">
        </div>
        
        <div class=\"form-group\">
          <label for=\"last_name\">Last Name:</label>
          <input type=\"text\" class=\"form-control\" id=\"last_name\" name=\"last_name\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "last_name", [], "any", false, false, false, 23), "html", null, true);
            echo "\">
        </div>
        
        ";
            // line 33
            echo "        
        <div class=\"form-group\">
          <label for=\"address\">Address:</label>
          <input type=\"text\" class=\"form-control\" id=\"address\" name=\"address\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "address", [], "any", false, false, false, 36), "html", null, true);
            echo "\">
        </div>
        
        <div class=\"form-group\">
          <label for=\"phone\">Phone:</label>
          <input type=\"text\" class=\"form-control\" id=\"phone\" name=\"phone\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "phone", [], "any", false, false, false, 41), "html", null, true);
            echo "\">
        </div>
        
        <div class=\"form-group\">
          <label for=\"email\">Email:</label>
          <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "email", [], "any", false, false, false, 46), "html", null, true);
            echo "\">
        </div>
        
        <div class=\"form-group\">
          <label for=\"dob\">Date of Birth:</label>
          <input type=\"date\" class=\"form-control\" id=\"dob\" name=\"dob\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "dob", [], "any", false, false, false, 51), "html", null, true);
            echo "\">
        </div>
        
        <div class=\"form-group\">
          <label for=\"license\">Driver's License:</label>
          <input type=\"text\" class=\"form-control\" id=\"license\" name=\"license\" value=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "license", [], "any", false, false, false, 56), "html", null, true);
            echo "\">
        </div>
        
        <div class=\"form-group\">
          <label for=\"license_expiration\">License Expiration:</label>
          <input type=\"date\" class=\"form-control\" id=\"license_expiration\" name=\"license_expiration\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "license_expiration", [], "any", false, false, false, 61), "html", null, true);
            echo "\">
        </div>
        
        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
      </form>
      
    </div>
  </div>
</div>
";
        } else {
            // line 71
            echo "        <p>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 71,  134 => 61,  126 => 56,  118 => 51,  110 => 46,  102 => 41,  94 => 36,  89 => 33,  83 => 23,  75 => 18,  68 => 13,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Registration{% endblock %}

{% block content %}
   

<div class=\"container\">
  <div class=\"row justify-content-center mt-5 mb-5\">
    <div class=\"col-md-8 col-lg-6\">
      <h1>Registration</h1>
        {% if register %}

      <form method=\"post\" action=\"/register\">
          
        <div class=\"form-group\">
          <label for=\"first_name\">First Name:</label>
          <input type=\"text\" class=\"form-control\" id=\"first_name\" name=\"first_name\" value=\"{{ u.first_name }}\">
        </div>
        
        <div class=\"form-group\">
          <label for=\"last_name\">Last Name:</label>
          <input type=\"text\" class=\"form-control\" id=\"last_name\" name=\"last_name\" value=\"{{ u.last_name }}\">
        </div>
        
        {# <div class=\"form-group\">
          <label for=\"user_type\">User Type:</label>
          <select class=\"form-control\" id=\"user_type\" name=\"user_type\">
            <option value=\"admin\">Admin</option>
            <option value=\"customer\">Customer</option>
          </select>
        </div> #}
        
        <div class=\"form-group\">
          <label for=\"address\">Address:</label>
          <input type=\"text\" class=\"form-control\" id=\"address\" name=\"address\" value=\"{{ u.address }}\">
        </div>
        
        <div class=\"form-group\">
          <label for=\"phone\">Phone:</label>
          <input type=\"text\" class=\"form-control\" id=\"phone\" name=\"phone\" value=\"{{ u.phone }}\">
        </div>
        
        <div class=\"form-group\">
          <label for=\"email\">Email:</label>
          <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"{{ u.email }}\">
        </div>
        
        <div class=\"form-group\">
          <label for=\"dob\">Date of Birth:</label>
          <input type=\"date\" class=\"form-control\" id=\"dob\" name=\"dob\" value=\"{{ u.dob }}\">
        </div>
        
        <div class=\"form-group\">
          <label for=\"license\">Driver's License:</label>
          <input type=\"text\" class=\"form-control\" id=\"license\" name=\"license\" value=\"{{ u.license }}\">
        </div>
        
        <div class=\"form-group\">
          <label for=\"license_expiration\">License Expiration:</label>
          <input type=\"date\" class=\"form-control\" id=\"license_expiration\" name=\"license_expiration\" value=\"{{ u.license_expiration }}\">
        </div>
        
        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
      </form>
      
    </div>
  </div>
</div>
{% else %}
        <p>{{ message }}</p>
    {% endif %}
{% endblock content %}

{# 
{% block title %}Registration{% endblock %}

{% block content %}

<h1>Registration</h1>

<form method=\"post\" action=\"/register\">
    
<label for=\"first_name\">First Name:</label>
<input type=\"text\" id=\"first_name\" name=\"first_name\" value=\"{{ u.first_name }}\"><br>
    
<label for=\"last_name\">Last Name:</label>
<input type=\"text\" id=\"last_name\" name=\"last_name\" value=\"{{ u.last_name }}\"><br>

<label for=\"user_type\">User Type:</label>
<select id=\"user_type\" name=\"user_type\">
    <option value=\"admin\">Admin</option>
    <option value=\"customer\">Customer</option>
</select><br>

<label for=\"address\">Address:</label>
<input type=\"text\" id=\"address\" name=\"address\" value=\"{{ u.address }}\"><br>

<label for=\"phone\">Phone:</label>
<input type=\"text\" id=\"phone\" name=\"phone\" value=\"{{ u.phone }}\"><br>

<label for=\"email\">Email:</label>
<input type=\"email\" id=\"email\" name=\"email\" value=\"{{ u.email }}\"><br>

<label for=\"dob\">Date of Birth:</label>
<input type=\"date\" id=\"dob\" name=\"dob\" value=\"{{ u.dob }}\"><br>

<label for=\"license\">Driver's License:</label>
<input type=\"text\" id=\"license\" name=\"license\" value=\"{{ u.license }}\"><br>

<label for=\"license_expiration\">License Expiration:</label>
<input type=\"date\" id=\"license_expiration\" name=\"license_expiration\" value=\"{{ u.license_expiration }}\"><br>

<input type=\"submit\" value=\"Submit\">

</form>
{% endblock content %} #} ", "register.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/register.html.twig");
    }
}
