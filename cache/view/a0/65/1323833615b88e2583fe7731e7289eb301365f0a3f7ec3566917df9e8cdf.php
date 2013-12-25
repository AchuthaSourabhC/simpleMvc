<?php

/* user/changepass.html */
class __TwigTemplate_a0651323833615b88e2583fe7731e7289eb301365f0a3f7ec3566917df9e8cdf extends Twig_Template
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

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        // line 5
        echo "  <!-- Load jQuery and the validate plugin -->
  <meta charset=\"utf-8\">
  <script src=\"";
        // line 7
        echo (isset($context["host"]) ? $context["host"] : null);
        echo "/public/js/jquery1.9.1.js\"></script>
  <script src=\"";
        // line 8
        echo (isset($context["host"]) ? $context["host"] : null);
        echo "/public/js/jquery_validate.js\"></script>
  <!-- jQuery Form Validation code -->
  
  ";
        // line 12
        echo "
  <script>
  // When the browser is ready...
  \$(function() {
  
    // Setup form validation on the #register-form element
    \$(\"#reset-form\").validate({
    
        // Specify the validation rules
        rules: {
            password: {
                required: true,
                minlength: 6
            },

        },
        
        // Specify the validation error messages
        messages: {
            password: {
                required: \"Please provide a password\",
                minlength: \"Your password must be at least 6 characters long\"
            },
        },      
        submitHandler: function(form) {
            form.submit();
        }
    });
  });
  
  </script>
";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        // line 46
        echo "<form action=\"";
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "/resetuser/changePass\" method=\"post\" id=\"reset-form\" novalidate=\"novalidate\">
  <div class=\"error\">
  </div>
    <div class=\"label\">Enter new Password</div><input type=\"password\" id=\"password\" name=\"password\" /><br />

    <div ><input type=\"submit\" name=\"submit\" value=\"Submit\" /></div>
    
</form>

";
    }

    public function getTemplateName()
    {
        return "user/changepass.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 46,  83 => 45,  48 => 12,  42 => 8,  38 => 7,  34 => 5,  32 => 4,  29 => 3,);
    }
}
