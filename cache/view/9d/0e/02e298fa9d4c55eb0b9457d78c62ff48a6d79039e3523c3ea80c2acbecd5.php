<?php

/* user/index.html */
class __TwigTemplate_9d0e02e298fa9d4c55eb0b9457d78c62ff48a6d79039e3523c3ea80c2acbecd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"en\">
\t<head>
\t\t<title>D-Wars</title>
\t\t";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "
\t</head>

\t<body>
\t\t<h2>user welcome</h2>
\t\t";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $this->displayBlock('footer', $context, $blocks);
        // line 22
        echo "\t</body>
</html>";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "           
        ";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "\t\tthis is content  </br>
           
        ";
    }

    // line 19
    public function block_footer($context, array $blocks = array())
    {
        // line 20
        echo "           <p>this is footer </p>
        ";
    }

    public function getTemplateName()
    {
        return "user/index.html";
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  67 => 19,  61 => 15,  58 => 14,  53 => 7,  50 => 6,  45 => 22,  43 => 19,  40 => 18,  38 => 14,  31 => 9,  29 => 6,  22 => 1,);
    }
}
