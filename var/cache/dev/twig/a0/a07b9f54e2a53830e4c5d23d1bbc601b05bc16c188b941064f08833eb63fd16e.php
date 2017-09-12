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
        $__internal_3944f297cffe61ccfc3b4288d578016c0419b4a6ae8fcb2481ee1c869accb80e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3944f297cffe61ccfc3b4288d578016c0419b4a6ae8fcb2481ee1c869accb80e->enter($__internal_3944f297cffe61ccfc3b4288d578016c0419b4a6ae8fcb2481ee1c869accb80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_185519a51c5219b9d90749bf78dcfef0c1ba882b6ac07be5ba2788958f7f5843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185519a51c5219b9d90749bf78dcfef0c1ba882b6ac07be5ba2788958f7f5843->enter($__internal_185519a51c5219b9d90749bf78dcfef0c1ba882b6ac07be5ba2788958f7f5843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_3944f297cffe61ccfc3b4288d578016c0419b4a6ae8fcb2481ee1c869accb80e->leave($__internal_3944f297cffe61ccfc3b4288d578016c0419b4a6ae8fcb2481ee1c869accb80e_prof);

        
        $__internal_185519a51c5219b9d90749bf78dcfef0c1ba882b6ac07be5ba2788958f7f5843->leave($__internal_185519a51c5219b9d90749bf78dcfef0c1ba882b6ac07be5ba2788958f7f5843_prof);

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
