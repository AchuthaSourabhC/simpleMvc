<?php

/* user/forgotpass.html */
class __TwigTemplate_0ba88bddd1def1b413777e8dfc90080c091647009633a8731c8532fe6dc0f8b9 extends Twig_Template
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
    \$(\"#forgot-form\").validate({
    
        // Specify the validation rules
        rules: {
            email: {
                required: true,
                email: true
            },
        },
        
        // Specify the validation error messages
        messages: {
            email: \"Please enter a valid email address\", 
        },      
        submitHandler: function(form) {
            form.submit();
        }
    });
  });
  
  </script>
";
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        // line 42
        if (((isset($context["error"]) ? $context["error"] : null) == 1)) {
            // line 43
            echo "<div class=\"error\">Sorry reset Failed.PLease Check and enter valid email.</div>
";
        }
        // line 45
        echo "<form action=\"";
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "/resetuser/sendPass\" method=\"post\" id=\"forgot-form\" novalidate=\"novalidate\">
\t<div class=\"label\">email</div><input type=\"text\" id=\"email\" name=\"email\" /><br />
   <div ><input type=\"submit\" name=\"submit\" value=\"Submit\" /></div>
</form>
";
    }

    public function getTemplateName()
    {
        return "user/forgotpass.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 45,  84 => 43,  82 => 42,  79 => 41,  48 => 12,  42 => 8,  38 => 7,  34 => 5,  32 => 4,  29 => 3,);
    }
}
