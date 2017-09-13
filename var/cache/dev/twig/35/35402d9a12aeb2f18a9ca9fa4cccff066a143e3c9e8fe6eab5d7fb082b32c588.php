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
        $__internal_429393b692d247c09ad794d266444ee0849a3c3c14b4b92ee9fab2e3ea7fabf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429393b692d247c09ad794d266444ee0849a3c3c14b4b92ee9fab2e3ea7fabf3->enter($__internal_429393b692d247c09ad794d266444ee0849a3c3c14b4b92ee9fab2e3ea7fabf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_d6599d462f41b4c52092c459784b8ac3cb840e8b4e7657b80e5c1ca40e4dac03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6599d462f41b4c52092c459784b8ac3cb840e8b4e7657b80e5c1ca40e4dac03->enter($__internal_d6599d462f41b4c52092c459784b8ac3cb840e8b4e7657b80e5c1ca40e4dac03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_429393b692d247c09ad794d266444ee0849a3c3c14b4b92ee9fab2e3ea7fabf3->leave($__internal_429393b692d247c09ad794d266444ee0849a3c3c14b4b92ee9fab2e3ea7fabf3_prof);

        
        $__internal_d6599d462f41b4c52092c459784b8ac3cb840e8b4e7657b80e5c1ca40e4dac03->leave($__internal_d6599d462f41b4c52092c459784b8ac3cb840e8b4e7657b80e5c1ca40e4dac03_prof);

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
