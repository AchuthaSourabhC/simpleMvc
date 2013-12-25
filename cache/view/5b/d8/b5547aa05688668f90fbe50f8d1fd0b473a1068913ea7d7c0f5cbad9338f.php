<?php

/* dashboard/index.html */
class __TwigTemplate_5bd8b5547aa05688668f90fbe50f8d1fd0b473a1068913ea7d7c0f5cbad9338f extends Twig_Template
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
\t\t<h1>Dashboard</h1>
\t\t<h2>Welcome u have logged in</h2>
\t\t";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('footer', $context, $blocks);
        // line 23
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

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "\t\t </br>
           
        ";
    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        // line 21
        echo "           <p>this is footer </p>
        ";
    }

    public function getTemplateName()
    {
        return "dashboard/index.html";
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  68 => 20,  62 => 16,  59 => 15,  54 => 7,  51 => 6,  46 => 23,  44 => 20,  41 => 19,  39 => 15,  31 => 9,  29 => 6,  22 => 1,);
    }
}
