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
        $__internal_c243dc2c9fd2897a113aeb32c7d2040f53a0c4909ab4f65265ab8d28ee3c7e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c243dc2c9fd2897a113aeb32c7d2040f53a0c4909ab4f65265ab8d28ee3c7e3d->enter($__internal_c243dc2c9fd2897a113aeb32c7d2040f53a0c4909ab4f65265ab8d28ee3c7e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_aca11bcb8e7577fc674764e4c370844affad7b0b3ed5e598cd72c6468cc0ce68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca11bcb8e7577fc674764e4c370844affad7b0b3ed5e598cd72c6468cc0ce68->enter($__internal_aca11bcb8e7577fc674764e4c370844affad7b0b3ed5e598cd72c6468cc0ce68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_c243dc2c9fd2897a113aeb32c7d2040f53a0c4909ab4f65265ab8d28ee3c7e3d->leave($__internal_c243dc2c9fd2897a113aeb32c7d2040f53a0c4909ab4f65265ab8d28ee3c7e3d_prof);

        
        $__internal_aca11bcb8e7577fc674764e4c370844affad7b0b3ed5e598cd72c6468cc0ce68->leave($__internal_aca11bcb8e7577fc674764e4c370844affad7b0b3ed5e598cd72c6468cc0ce68_prof);

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
