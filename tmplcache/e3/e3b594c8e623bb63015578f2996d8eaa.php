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

      <form method=\"post\" action=\"/register\">
          
        <div class=\"form-group\">
          <label for=\"first_name\">First Name:</label>
          <input type=\"text\" class=\"form-control form-control-sm\" id=\"first_name\" name=\"first_name\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "first_name", [], "any", false, false, false, 16), "html", null, true);
        echo "\">
        </div>
        
        <div class=\"form-group\">
          <label for=\"last_name\">Last Name:</label>
          <input type=\"text\" class=\"form-control form-control-sm\" id=\"last_name\" name=\"last_name\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "last_name", [], "any", false, false, false, 21), "html", null, true);
        echo "\">
        </div>
        
        ";
        // line 31
        echo "        
        <div class=\"form-group\">
          <label for=\"address\">Address:</label>
          <input type=\"text\" class=\"form-control form-control-sm\" id=\"address\" name=\"address\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "address", [], "any", false, false, false, 34), "html", null, true);
        echo "\">
        </div>
        
        <div class=\"form-group\">
          <label for=\"phone\">Phone:</label>
          <input type=\"text\" class=\"form-control form-control-sm\" id=\"phone\" name=\"phone\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "phone", [], "any", false, false, false, 39), "html", null, true);
        echo "\">
        </div>
        
        <div class=\"form-group\">
          <label for=\"email\">Email:</label>
          <input type=\"email\" class=\"form-control form-control-sm\" id=\"email\" name=\"email\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "email", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
        </div>
        
        <div class=\"form-group\">
          <label for=\"dob\">Date of Birth:</label>
          <input type=\"date\" class=\"form-control form-control-sm\" id=\"dob\" name=\"dob\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "dob", [], "any", false, false, false, 49), "html", null, true);
        echo "\">
        </div>
        
        ";
        // line 62
        echo "        <div class=\"form-group\">
          <label for=\"password\">Password</label>
          <input type=\"password\" class=\"form-control form-control-sm\" id=\"password\" name=\"password\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "password", [], "any", false, false, false, 64), "html", null, true);
        echo "\">
        </div>

         ";
        // line 71
        echo "
        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
      </form>
      
    </div>
  </div>
</div>

";
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
        return array (  129 => 71,  123 => 64,  119 => 62,  113 => 49,  105 => 44,  97 => 39,  89 => 34,  84 => 31,  78 => 21,  70 => 16,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
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

      <form method=\"post\" action=\"/register\">
          
        <div class=\"form-group\">
          <label for=\"first_name\">First Name:</label>
          <input type=\"text\" class=\"form-control form-control-sm\" id=\"first_name\" name=\"first_name\" value=\"{{ u.first_name }}\">
        </div>
        
        <div class=\"form-group\">
          <label for=\"last_name\">Last Name:</label>
          <input type=\"text\" class=\"form-control form-control-sm\" id=\"last_name\" name=\"last_name\" value=\"{{ u.last_name }}\">
        </div>
        
        {# <div class=\"form-group\">
          <label for=\"user_type\">User Type:</label>
          <select class=\"form-control form-control-sm\" id=\"user_type\" name=\"user_type\">
            <option value=\"admin\">Admin</option>
            <option value=\"customer\">Customer</option>
          </select>
        </div> #}
        
        <div class=\"form-group\">
          <label for=\"address\">Address:</label>
          <input type=\"text\" class=\"form-control form-control-sm\" id=\"address\" name=\"address\" value=\"{{ u.address }}\">
        </div>
        
        <div class=\"form-group\">
          <label for=\"phone\">Phone:</label>
          <input type=\"text\" class=\"form-control form-control-sm\" id=\"phone\" name=\"phone\" value=\"{{ u.phone }}\">
        </div>
        
        <div class=\"form-group\">
          <label for=\"email\">Email:</label>
          <input type=\"email\" class=\"form-control form-control-sm\" id=\"email\" name=\"email\" value=\"{{ u.email }}\">
        </div>
        
        <div class=\"form-group\">
          <label for=\"dob\">Date of Birth:</label>
          <input type=\"date\" class=\"form-control form-control-sm\" id=\"dob\" name=\"dob\" value=\"{{ u.dob }}\">
        </div>
        
        {# <div class=\"form-group\">
          <label for=\"license\">Driver's License:</label>
          <input type=\"text\" class=\"form-control form-control-sm\" id=\"license\" name=\"license\" value=\"{{ u.license }}\">
        </div>
        
        <div class=\"form-group\">
          <label for=\"license_expiration\">License Expiration:</label>
          <input type=\"date\" class=\"form-control form-control-sm\" id=\"license_expiration\" name=\"license_expiration\" value=\"{{ u.license_expiration }}\">
        </div>
         #}
        <div class=\"form-group\">
          <label for=\"password\">Password</label>
          <input type=\"password\" class=\"form-control form-control-sm\" id=\"password\" name=\"password\" value=\"{{ u.password }}\">
        </div>

         {# <div class=\"form-group\">
          <label for=\"confirm_password\">Confirm Password</label>
          <input type=\"password\" class=\"form-control form-control-sm\" id=\"confirm_password\" name=\"confirm_password\" value=\"{{ u.password }}\">
        </div> #}

        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
      </form>
      
    </div>
  </div>
</div>

{% endblock content %}
", "register.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/register.html.twig");
    }
}
