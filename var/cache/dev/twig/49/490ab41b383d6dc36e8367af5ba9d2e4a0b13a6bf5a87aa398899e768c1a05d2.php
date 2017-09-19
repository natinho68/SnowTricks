<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d7287cece306d1a9bc3389c9bbe5bd31a128f1f4e50ca893b66f1bc27a0c44aa extends Twig_Template
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
        $__internal_e02fa80d04ffa873b6985c156b66b61ccaf2210d5c390781f7c3be1b80d50d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e02fa80d04ffa873b6985c156b66b61ccaf2210d5c390781f7c3be1b80d50d0b->enter($__internal_e02fa80d04ffa873b6985c156b66b61ccaf2210d5c390781f7c3be1b80d50d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_f28ecc1df6ada5800ad330e3e36c6918a9434c53be37b616c809967134493e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28ecc1df6ada5800ad330e3e36c6918a9434c53be37b616c809967134493e5e->enter($__internal_f28ecc1df6ada5800ad330e3e36c6918a9434c53be37b616c809967134493e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e02fa80d04ffa873b6985c156b66b61ccaf2210d5c390781f7c3be1b80d50d0b->leave($__internal_e02fa80d04ffa873b6985c156b66b61ccaf2210d5c390781f7c3be1b80d50d0b_prof);

        
        $__internal_f28ecc1df6ada5800ad330e3e36c6918a9434c53be37b616c809967134493e5e->leave($__internal_f28ecc1df6ada5800ad330e3e36c6918a9434c53be37b616c809967134493e5e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
