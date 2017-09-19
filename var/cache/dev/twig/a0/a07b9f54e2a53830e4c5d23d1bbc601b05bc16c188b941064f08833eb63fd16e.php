<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_530200b443199baf08c5448d10aa713924815ab41c12095a45db150991b9f05d extends Twig_Template
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
        $__internal_f03c499d5f6fb0ab743e14a1dfd470d3a2794ceeacda0a3b18612b2951a7c850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f03c499d5f6fb0ab743e14a1dfd470d3a2794ceeacda0a3b18612b2951a7c850->enter($__internal_f03c499d5f6fb0ab743e14a1dfd470d3a2794ceeacda0a3b18612b2951a7c850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_ad0a350aed1b288e90d5a75498e3df9c2eef4b66a90eece7716cde6805e4b3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0a350aed1b288e90d5a75498e3df9c2eef4b66a90eece7716cde6805e4b3ba->enter($__internal_ad0a350aed1b288e90d5a75498e3df9c2eef4b66a90eece7716cde6805e4b3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_f03c499d5f6fb0ab743e14a1dfd470d3a2794ceeacda0a3b18612b2951a7c850->leave($__internal_f03c499d5f6fb0ab743e14a1dfd470d3a2794ceeacda0a3b18612b2951a7c850_prof);

        
        $__internal_ad0a350aed1b288e90d5a75498e3df9c2eef4b66a90eece7716cde6805e4b3ba->leave($__internal_ad0a350aed1b288e90d5a75498e3df9c2eef4b66a90eece7716cde6805e4b3ba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
