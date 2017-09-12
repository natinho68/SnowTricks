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
        $__internal_79953f1bd80a9d26f33f40fdd87cc1ff51f2266df493f429e437d7ae347ffd0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79953f1bd80a9d26f33f40fdd87cc1ff51f2266df493f429e437d7ae347ffd0f->enter($__internal_79953f1bd80a9d26f33f40fdd87cc1ff51f2266df493f429e437d7ae347ffd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_ee14088004f587bf3dedb2f399795fd364b6c9bc5dd4f110cfb556b13199aeeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee14088004f587bf3dedb2f399795fd364b6c9bc5dd4f110cfb556b13199aeeb->enter($__internal_ee14088004f587bf3dedb2f399795fd364b6c9bc5dd4f110cfb556b13199aeeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_79953f1bd80a9d26f33f40fdd87cc1ff51f2266df493f429e437d7ae347ffd0f->leave($__internal_79953f1bd80a9d26f33f40fdd87cc1ff51f2266df493f429e437d7ae347ffd0f_prof);

        
        $__internal_ee14088004f587bf3dedb2f399795fd364b6c9bc5dd4f110cfb556b13199aeeb->leave($__internal_ee14088004f587bf3dedb2f399795fd364b6c9bc5dd4f110cfb556b13199aeeb_prof);

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
