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
        $__internal_8990efd7da2bef3e771a931f361ad8ce9c3653a15efa6d48721dfa3d85795695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8990efd7da2bef3e771a931f361ad8ce9c3653a15efa6d48721dfa3d85795695->enter($__internal_8990efd7da2bef3e771a931f361ad8ce9c3653a15efa6d48721dfa3d85795695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_bab21116069d2d80dfface109d33504abed792e623acc845fecb3db033df80c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab21116069d2d80dfface109d33504abed792e623acc845fecb3db033df80c8->enter($__internal_bab21116069d2d80dfface109d33504abed792e623acc845fecb3db033df80c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8990efd7da2bef3e771a931f361ad8ce9c3653a15efa6d48721dfa3d85795695->leave($__internal_8990efd7da2bef3e771a931f361ad8ce9c3653a15efa6d48721dfa3d85795695_prof);

        
        $__internal_bab21116069d2d80dfface109d33504abed792e623acc845fecb3db033df80c8->leave($__internal_bab21116069d2d80dfface109d33504abed792e623acc845fecb3db033df80c8_prof);

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
