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
        $__internal_47eb027b277d9d9505783c43fcc4240355df2f9f429bdffeab60720005655fe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47eb027b277d9d9505783c43fcc4240355df2f9f429bdffeab60720005655fe1->enter($__internal_47eb027b277d9d9505783c43fcc4240355df2f9f429bdffeab60720005655fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_526646ee5c578d4eccb940291806a75a4f4ebe4d62fb61151b0e9c7de9df4599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_526646ee5c578d4eccb940291806a75a4f4ebe4d62fb61151b0e9c7de9df4599->enter($__internal_526646ee5c578d4eccb940291806a75a4f4ebe4d62fb61151b0e9c7de9df4599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_47eb027b277d9d9505783c43fcc4240355df2f9f429bdffeab60720005655fe1->leave($__internal_47eb027b277d9d9505783c43fcc4240355df2f9f429bdffeab60720005655fe1_prof);

        
        $__internal_526646ee5c578d4eccb940291806a75a4f4ebe4d62fb61151b0e9c7de9df4599->leave($__internal_526646ee5c578d4eccb940291806a75a4f4ebe4d62fb61151b0e9c7de9df4599_prof);

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
