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
        $__internal_1eaa3a8b2229b5782e1f63e0ceada520c922f3b75dc6a80085545c9e146e6f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eaa3a8b2229b5782e1f63e0ceada520c922f3b75dc6a80085545c9e146e6f1b->enter($__internal_1eaa3a8b2229b5782e1f63e0ceada520c922f3b75dc6a80085545c9e146e6f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_1509b1e758eee7205efde46dc8e303d966556ef577ac20ac5596af07b64e2c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1509b1e758eee7205efde46dc8e303d966556ef577ac20ac5596af07b64e2c41->enter($__internal_1509b1e758eee7205efde46dc8e303d966556ef577ac20ac5596af07b64e2c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_1eaa3a8b2229b5782e1f63e0ceada520c922f3b75dc6a80085545c9e146e6f1b->leave($__internal_1eaa3a8b2229b5782e1f63e0ceada520c922f3b75dc6a80085545c9e146e6f1b_prof);

        
        $__internal_1509b1e758eee7205efde46dc8e303d966556ef577ac20ac5596af07b64e2c41->leave($__internal_1509b1e758eee7205efde46dc8e303d966556ef577ac20ac5596af07b64e2c41_prof);

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
