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
        $__internal_d96bcfc2fd45834d4c7b0d50bb9986cbfd182c64742a0c14c7d774517bc6b0b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d96bcfc2fd45834d4c7b0d50bb9986cbfd182c64742a0c14c7d774517bc6b0b0->enter($__internal_d96bcfc2fd45834d4c7b0d50bb9986cbfd182c64742a0c14c7d774517bc6b0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_00e2ac658c1b1d120c3254f5c3d35abdbfe6d05351c76f9cfacbd1aea40d6455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e2ac658c1b1d120c3254f5c3d35abdbfe6d05351c76f9cfacbd1aea40d6455->enter($__internal_00e2ac658c1b1d120c3254f5c3d35abdbfe6d05351c76f9cfacbd1aea40d6455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_d96bcfc2fd45834d4c7b0d50bb9986cbfd182c64742a0c14c7d774517bc6b0b0->leave($__internal_d96bcfc2fd45834d4c7b0d50bb9986cbfd182c64742a0c14c7d774517bc6b0b0_prof);

        
        $__internal_00e2ac658c1b1d120c3254f5c3d35abdbfe6d05351c76f9cfacbd1aea40d6455->leave($__internal_00e2ac658c1b1d120c3254f5c3d35abdbfe6d05351c76f9cfacbd1aea40d6455_prof);

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
