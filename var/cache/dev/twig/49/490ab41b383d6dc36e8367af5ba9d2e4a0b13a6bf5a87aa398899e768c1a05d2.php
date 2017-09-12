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
        $__internal_1a9f73c3229fa9c9ea3c1c57c9410c25766c5c23962f821da810dd37779c6835 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a9f73c3229fa9c9ea3c1c57c9410c25766c5c23962f821da810dd37779c6835->enter($__internal_1a9f73c3229fa9c9ea3c1c57c9410c25766c5c23962f821da810dd37779c6835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_8104b86a1fb60b493a11c59642160e624f1c2dc5f88d1204be5ae6daa427587e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8104b86a1fb60b493a11c59642160e624f1c2dc5f88d1204be5ae6daa427587e->enter($__internal_8104b86a1fb60b493a11c59642160e624f1c2dc5f88d1204be5ae6daa427587e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1a9f73c3229fa9c9ea3c1c57c9410c25766c5c23962f821da810dd37779c6835->leave($__internal_1a9f73c3229fa9c9ea3c1c57c9410c25766c5c23962f821da810dd37779c6835_prof);

        
        $__internal_8104b86a1fb60b493a11c59642160e624f1c2dc5f88d1204be5ae6daa427587e->leave($__internal_8104b86a1fb60b493a11c59642160e624f1c2dc5f88d1204be5ae6daa427587e_prof);

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
