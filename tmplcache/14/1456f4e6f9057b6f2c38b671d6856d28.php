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

/* admin/adduser.html.twig */
class __TwigTemplate_9a12b06ad057d52f7b44bad87ef3fab0 extends Template
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
        $this->parent = $this->loadTemplate("admin/adminmaster.html.twig", "admin/adduser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Add User";
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
            echo "  <ul>
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "      <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "  </ul>
";
        }
        // line 14
        echo "
<div class=\"container\">
  <div class=\"row justify-content-left mt-5 mb-5\">
    <div class=\"col-md-8 col-lg-6\">
      <h1>Add a User</h1>

      <form method=\"post\" action=\"/admin/adduser\">

        <div class=\"form-group\">
          <label for=\"first_name\">First Name:</label>
          <input type=\"text\" class=\"form-control\" id=\"first_name\" name=\"first_name\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "first_name", [], "any", false, false, false, 24), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
          <label for=\"last_name\">Last Name:</label>
          <input type=\"text\" class=\"form-control\" id=\"last_name\" name=\"last_name\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "last_name", [], "any", false, false, false, 29), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
          <label for=\"address\">Address:</label>
          <input type=\"text\" class=\"form-control\" id=\"address\" name=\"address\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "address", [], "any", false, false, false, 34), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
          <label for=\"phone\">Phone:</label>
          <input type=\"text\" class=\"form-control\" id=\"phone\" name=\"phone\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "phone", [], "any", false, false, false, 39), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
          <label for=\"email\">Email:</label>
          <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "email", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
          <label for=\"dob\">Date of Birth:</label>
          <input type=\"date\" class=\"form-control\" id=\"dob\" name=\"dob\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "dob", [], "any", false, false, false, 49), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
          <label for=\"license\">Driver's License:</label>
          <input type=\"text\" class=\"form-control\" id=\"license\" name=\"license\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "license", [], "any", false, false, false, 54), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
          <label for=\"license_expiration\">License Expiration:</label>
          <input type=\"date\" class=\"form-control\" id=\"license_expiration\" name=\"license_expiration\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "license_expiration", [], "any", false, false, false, 59), "html", null, true);
        echo "\">
        </div>

        <button type=\"submit\" class=\"btn btn-primary btn-sm\">Add User</button>

      </form>
    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "admin/adduser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 59,  143 => 54,  135 => 49,  127 => 44,  119 => 39,  111 => 34,  103 => 29,  95 => 24,  83 => 14,  79 => 12,  70 => 10,  66 => 9,  63 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/adminmaster.html.twig\" %}

{% block title %}Add User{% endblock %}

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
      <h1>Add a User</h1>

      <form method=\"post\" action=\"/admin/adduser\">

        <div class=\"form-group\">
          <label for=\"first_name\">First Name:</label>
          <input type=\"text\" class=\"form-control\" id=\"first_name\" name=\"first_name\" value=\"{{ u.first_name }}\">
        </div>

        <div class=\"form-group\">
          <label for=\"last_name\">Last Name:</label>
          <input type=\"text\" class=\"form-control\" id=\"last_name\" name=\"last_name\" value=\"{{ u.last_name }}\">
        </div>

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

        <button type=\"submit\" class=\"btn btn-primary btn-sm\">Add User</button>

      </form>
    </div>
  </div>
</div>

{% endblock content %}


{# {% extends \"admin/adminmaster.html.twig\" %}

{% block title %}Add User{% endblock %}

{% block content %}

{% if errorList %}
<ul>
{% for error in errorList %}
<li>{{ error }}</li>
{% endfor %}
</ul>
{% endif %}

<h1>Add a user</h1>
<form method=\"post\" action=\"/admin/adduser\">
    
<label for=\"first_name\">First Name:</label>
<input type=\"text\" id=\"first_name\" name=\"first_name\" value=\"{{ u.first_name }}\"><br>
    
<label for=\"last_name\">Last Name:</label>
<input type=\"text\" id=\"last_name\" name=\"last_name\" value=\"{{ u.last_name }}\"><br>

{# <label for=\"user_type\">User Type:</label>
<select id=\"user_type\" name=\"user_type\">
    <option value=\"admin\">Admin</option>
    <option value=\"customer\">Customer</option>
</select><br> #}

{# <label for=\"address\">Address:</label>
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

<input type=\"submit\" value=\"Add User\">

</form>
{% endblock content %} #}", "admin/adduser.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/admin/adduser.html.twig");
    }
}
