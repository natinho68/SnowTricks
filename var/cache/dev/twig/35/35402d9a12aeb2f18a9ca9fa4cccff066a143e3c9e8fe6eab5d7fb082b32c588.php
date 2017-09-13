<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_21ae4b8c211583f864b4b5cd189c164b582fb5b106fc09723fa8f4dcaa1291b5 extends Twig_Template
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
        $__internal_e9978fef6cdb665409d93962bafc648b2309e22dd5c903cfa5ef07526ecb706f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9978fef6cdb665409d93962bafc648b2309e22dd5c903cfa5ef07526ecb706f->enter($__internal_e9978fef6cdb665409d93962bafc648b2309e22dd5c903cfa5ef07526ecb706f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_e55e6ee7b6bd9bf9ef9142bc107abae221e052041ad6f58b74fef303b52e0aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55e6ee7b6bd9bf9ef9142bc107abae221e052041ad6f58b74fef303b52e0aaf->enter($__internal_e55e6ee7b6bd9bf9ef9142bc107abae221e052041ad6f58b74fef303b52e0aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_e9978fef6cdb665409d93962bafc648b2309e22dd5c903cfa5ef07526ecb706f->leave($__internal_e9978fef6cdb665409d93962bafc648b2309e22dd5c903cfa5ef07526ecb706f_prof);

        
        $__internal_e55e6ee7b6bd9bf9ef9142bc107abae221e052041ad6f58b74fef303b52e0aaf->leave($__internal_e55e6ee7b6bd9bf9ef9142bc107abae221e052041ad6f58b74fef303b52e0aaf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
