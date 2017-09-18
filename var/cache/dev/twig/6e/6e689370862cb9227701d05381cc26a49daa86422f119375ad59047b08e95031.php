<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_a5b042bb4d18214d2613c0d364ef57ba65c9e6451c208295924b354d60e82554 extends Twig_Template
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
        $__internal_af901e60d7a0b2b603ae91408d118ae5eafa77e3e94aef39629a33e70cf26329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af901e60d7a0b2b603ae91408d118ae5eafa77e3e94aef39629a33e70cf26329->enter($__internal_af901e60d7a0b2b603ae91408d118ae5eafa77e3e94aef39629a33e70cf26329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_0e893c1614c42cb603683c92a488dfd7c16cd8de695f62cc380363da8ee0be06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e893c1614c42cb603683c92a488dfd7c16cd8de695f62cc380363da8ee0be06->enter($__internal_0e893c1614c42cb603683c92a488dfd7c16cd8de695f62cc380363da8ee0be06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_af901e60d7a0b2b603ae91408d118ae5eafa77e3e94aef39629a33e70cf26329->leave($__internal_af901e60d7a0b2b603ae91408d118ae5eafa77e3e94aef39629a33e70cf26329_prof);

        
        $__internal_0e893c1614c42cb603683c92a488dfd7c16cd8de695f62cc380363da8ee0be06->leave($__internal_0e893c1614c42cb603683c92a488dfd7c16cd8de695f62cc380363da8ee0be06_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
