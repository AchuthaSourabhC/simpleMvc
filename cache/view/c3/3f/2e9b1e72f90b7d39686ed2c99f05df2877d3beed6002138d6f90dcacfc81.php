<?php

/* user/register.html */
class __TwigTemplate_c33f2e9b1e72f90b7d39686ed2c99f05df2877d3beed6002138d6f90dcacfc81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("user/index.html");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "user/index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        // line 6
        echo "  <!-- Load jQuery and the validate plugin -->
  <meta charset=\"utf-8\">
  <script src=\"";
        // line 8
        echo (isset($context["public"]) ? $context["public"] : null);
        echo "/js/jquery1.9.1.js\"></script>
  <script src=\"";
        // line 9
        echo (isset($context["public"]) ? $context["public"] : null);
        echo "/js/jquery_validate.js\"></script>
  <script src=\"";
        // line 10
        echo (isset($context["public"]) ? $context["public"] : null);
        echo "/js/jquery_ui.js\"></script>

  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo (isset($context["public"]) ? $context["public"] : null);
        echo "/css/jquery_ui.css\">
  <!-- jQuery Form Validation code -->
  <script>
  ";
        // line 16
        echo "  // When the browser is ready...
  \$(function() {
    // Setup form validation on the #register-form element
    \$(\"#register-form\").validate({
        // Specify the validation rules
        rules: {
            username: \"required\",
            name: \"required\",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6
            },

            datepicker: \"required\"
        },
        
        // Specify the validation error messages
        messages: {
            username: \"Please enter your unique username\",
            name: \"Please enter your Actual name\",
            password: {
                required: \"Please provide a password\",
                minlength: \"Your password must be at least 5 characters long\"
            },
            email: \"Please enter a valid email address\",
            datepicker: \"Please select date of birth\"
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });
  });
  </script>
  
  <script>
    \$(function() {
    \$( \"#datepicker\" ).datepicker();
    \$( \"#datepicker\" ).datepicker( \"option\", \"dateFormat\", \"yy-mm-dd\" );
    \$( \"#datepicker\" ).datepicker( \"option\", \"changeYear\", true );
    var yearRange = \$( \"#datepicker\" ).datepicker( \"option\", \"yearRange\" );
    \$( \"#datepicker\" ).datepicker( \"option\", \"yearRange\", \"-100:+10\" );
  });
  </script>
";
    }

    // line 66
    public function block_content($context, array $blocks = array())
    {
        // line 67
        echo "  <h1>Register here ";
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo " </h1>

  <!--  The form that will be parsed by jQuery before submit  -->
    <form action=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "/user/newuser\" method=\"post\" id=\"register-form\" novalidate=\"novalidate\">
    ";
        // line 71
        if (((isset($context["error"]) ? $context["error"] : null) == 1)) {
            // line 72
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "username", array(), "array"), "html", null, true);
            echo "
    ";
        }
        // line 74
        echo "    <div class=\"label\">Userame</div><input type=\"text\" id=\"username\" name=\"username\" /><br />
    <div class=\"label\">Actual Name</div><input type=\"text\" id=\"name\" name=\"name\" /><br />
    ";
        // line 76
        if (((isset($context["error"]) ? $context["error"] : null) == 1)) {
            // line 77
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "email", array(), "array"), "html", null, true);
            echo "
    ";
        }
        // line 79
        echo "    <div class=\"label\">Email</div><input type=\"text\" id=\"email\" name=\"email\" /><br />
    <div class=\"label\">Password</div><input type=\"password\" id=\"password\" name=\"password\" /><br />
    <div class=\"label\">Date of Birth</div><input type=\"text\" id=\"datepicker\" name=\"datepicker\" ><br />
    <div ><input type=\"submit\" name=\"submit\" value=\"Submit\" /></div>
    
  </form>
  
";
    }

    public function getTemplateName()
    {
        return "user/register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 79,  137 => 77,  135 => 76,  131 => 74,  125 => 72,  123 => 71,  119 => 70,  112 => 67,  109 => 66,  57 => 16,  51 => 12,  46 => 10,  42 => 9,  38 => 8,  34 => 6,  32 => 5,  29 => 4,);
    }
}
