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
        $__internal_0ee3c9311a0e0d6617eb964326f18b355bf78f8d3a55f0c6b6f7a112df118580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ee3c9311a0e0d6617eb964326f18b355bf78f8d3a55f0c6b6f7a112df118580->enter($__internal_0ee3c9311a0e0d6617eb964326f18b355bf78f8d3a55f0c6b6f7a112df118580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_57ace1a708bb39375cbbf1364f6582785afc99887b4e10a7b3619ea05e900fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ace1a708bb39375cbbf1364f6582785afc99887b4e10a7b3619ea05e900fd2->enter($__internal_57ace1a708bb39375cbbf1364f6582785afc99887b4e10a7b3619ea05e900fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_0ee3c9311a0e0d6617eb964326f18b355bf78f8d3a55f0c6b6f7a112df118580->leave($__internal_0ee3c9311a0e0d6617eb964326f18b355bf78f8d3a55f0c6b6f7a112df118580_prof);

        
        $__internal_57ace1a708bb39375cbbf1364f6582785afc99887b4e10a7b3619ea05e900fd2->leave($__internal_57ace1a708bb39375cbbf1364f6582785afc99887b4e10a7b3619ea05e900fd2_prof);

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
