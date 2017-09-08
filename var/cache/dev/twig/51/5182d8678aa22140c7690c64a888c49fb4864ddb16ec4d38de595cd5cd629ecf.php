<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_964b81ea1c522292805afae326a9ca94d4c051ce5fa5db2c0f9a9faab96e2cfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a50ab281fe6517ad68fe85f88ee03f57e36385a7d5d55b7bfaa4d2dadca78ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a50ab281fe6517ad68fe85f88ee03f57e36385a7d5d55b7bfaa4d2dadca78ac->enter($__internal_1a50ab281fe6517ad68fe85f88ee03f57e36385a7d5d55b7bfaa4d2dadca78ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9856dd0cd45a18a2f696687e93dddb583f8762d4f4bb9636bd93350c6a373a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9856dd0cd45a18a2f696687e93dddb583f8762d4f4bb9636bd93350c6a373a3c->enter($__internal_9856dd0cd45a18a2f696687e93dddb583f8762d4f4bb9636bd93350c6a373a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a50ab281fe6517ad68fe85f88ee03f57e36385a7d5d55b7bfaa4d2dadca78ac->leave($__internal_1a50ab281fe6517ad68fe85f88ee03f57e36385a7d5d55b7bfaa4d2dadca78ac_prof);

        
        $__internal_9856dd0cd45a18a2f696687e93dddb583f8762d4f4bb9636bd93350c6a373a3c->leave($__internal_9856dd0cd45a18a2f696687e93dddb583f8762d4f4bb9636bd93350c6a373a3c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_37bd25aa4418551ef9e5ffa24d1c31ebba782f6bc986e97ff45f4acc62bcbc33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37bd25aa4418551ef9e5ffa24d1c31ebba782f6bc986e97ff45f4acc62bcbc33->enter($__internal_37bd25aa4418551ef9e5ffa24d1c31ebba782f6bc986e97ff45f4acc62bcbc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_85d9c619a601def6711e22466bf2a0fdf1fab137f6cd56fc6563f5eee10bb774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d9c619a601def6711e22466bf2a0fdf1fab137f6cd56fc6563f5eee10bb774->enter($__internal_85d9c619a601def6711e22466bf2a0fdf1fab137f6cd56fc6563f5eee10bb774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_85d9c619a601def6711e22466bf2a0fdf1fab137f6cd56fc6563f5eee10bb774->leave($__internal_85d9c619a601def6711e22466bf2a0fdf1fab137f6cd56fc6563f5eee10bb774_prof);

        
        $__internal_37bd25aa4418551ef9e5ffa24d1c31ebba782f6bc986e97ff45f4acc62bcbc33->leave($__internal_37bd25aa4418551ef9e5ffa24d1c31ebba782f6bc986e97ff45f4acc62bcbc33_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_64d108dbe8e2ac4e22bf566703379630a014590bcdb47b58d9eb6cbcbd09b3de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d108dbe8e2ac4e22bf566703379630a014590bcdb47b58d9eb6cbcbd09b3de->enter($__internal_64d108dbe8e2ac4e22bf566703379630a014590bcdb47b58d9eb6cbcbd09b3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a06d162b05d4fd19a5b8e27dc67168b0cc1900474479a246f71e7c7c6c70b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a06d162b05d4fd19a5b8e27dc67168b0cc1900474479a246f71e7c7c6c70b64->enter($__internal_8a06d162b05d4fd19a5b8e27dc67168b0cc1900474479a246f71e7c7c6c70b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8a06d162b05d4fd19a5b8e27dc67168b0cc1900474479a246f71e7c7c6c70b64->leave($__internal_8a06d162b05d4fd19a5b8e27dc67168b0cc1900474479a246f71e7c7c6c70b64_prof);

        
        $__internal_64d108dbe8e2ac4e22bf566703379630a014590bcdb47b58d9eb6cbcbd09b3de->leave($__internal_64d108dbe8e2ac4e22bf566703379630a014590bcdb47b58d9eb6cbcbd09b3de_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d63c5274d3a67251b4077a2df3261c72a3f91a0bcf545201d6d610c7aa59eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d63c5274d3a67251b4077a2df3261c72a3f91a0bcf545201d6d610c7aa59eb4->enter($__internal_5d63c5274d3a67251b4077a2df3261c72a3f91a0bcf545201d6d610c7aa59eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_726f2f85ca01209d796484060f9287807b2eea54d3ada5cbc1405ca8e10a53cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726f2f85ca01209d796484060f9287807b2eea54d3ada5cbc1405ca8e10a53cf->enter($__internal_726f2f85ca01209d796484060f9287807b2eea54d3ada5cbc1405ca8e10a53cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_726f2f85ca01209d796484060f9287807b2eea54d3ada5cbc1405ca8e10a53cf->leave($__internal_726f2f85ca01209d796484060f9287807b2eea54d3ada5cbc1405ca8e10a53cf_prof);

        
        $__internal_5d63c5274d3a67251b4077a2df3261c72a3f91a0bcf545201d6d610c7aa59eb4->leave($__internal_5d63c5274d3a67251b4077a2df3261c72a3f91a0bcf545201d6d610c7aa59eb4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
