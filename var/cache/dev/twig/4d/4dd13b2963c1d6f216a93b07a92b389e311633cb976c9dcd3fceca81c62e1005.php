<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3ebda9fc8a1241e02beba3c0ba1d8496d1ff2cfa25232ead0dd411266372bf35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04ff0b4d1edef53758dcbee5aed9495a9f2df08c3aea06e8d598facb262b916c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ff0b4d1edef53758dcbee5aed9495a9f2df08c3aea06e8d598facb262b916c->enter($__internal_04ff0b4d1edef53758dcbee5aed9495a9f2df08c3aea06e8d598facb262b916c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_06d4c4e03c76b7579ff93bcaf0ffd5b52ab0ec75b5d90d8cb13bc03c38c67875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d4c4e03c76b7579ff93bcaf0ffd5b52ab0ec75b5d90d8cb13bc03c38c67875->enter($__internal_06d4c4e03c76b7579ff93bcaf0ffd5b52ab0ec75b5d90d8cb13bc03c38c67875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_04ff0b4d1edef53758dcbee5aed9495a9f2df08c3aea06e8d598facb262b916c->leave($__internal_04ff0b4d1edef53758dcbee5aed9495a9f2df08c3aea06e8d598facb262b916c_prof);

        
        $__internal_06d4c4e03c76b7579ff93bcaf0ffd5b52ab0ec75b5d90d8cb13bc03c38c67875->leave($__internal_06d4c4e03c76b7579ff93bcaf0ffd5b52ab0ec75b5d90d8cb13bc03c38c67875_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
