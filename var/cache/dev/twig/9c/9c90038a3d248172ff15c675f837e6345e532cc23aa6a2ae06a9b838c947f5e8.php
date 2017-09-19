<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4504efcb1ba9b56b01467a86a1f7890cca3c585a3f0f8b9d65df2e0ae06c1442 extends Twig_Template
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
        $__internal_6f7b9ed59dfb394e7e3743bd6afe18ae94520fb84c132d5fa1640f12792d63c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f7b9ed59dfb394e7e3743bd6afe18ae94520fb84c132d5fa1640f12792d63c4->enter($__internal_6f7b9ed59dfb394e7e3743bd6afe18ae94520fb84c132d5fa1640f12792d63c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e7f2384ef4a90e04d595cbe3ffbd0c487becc5b01216f8ab0459108396821905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f2384ef4a90e04d595cbe3ffbd0c487becc5b01216f8ab0459108396821905->enter($__internal_e7f2384ef4a90e04d595cbe3ffbd0c487becc5b01216f8ab0459108396821905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6f7b9ed59dfb394e7e3743bd6afe18ae94520fb84c132d5fa1640f12792d63c4->leave($__internal_6f7b9ed59dfb394e7e3743bd6afe18ae94520fb84c132d5fa1640f12792d63c4_prof);

        
        $__internal_e7f2384ef4a90e04d595cbe3ffbd0c487becc5b01216f8ab0459108396821905->leave($__internal_e7f2384ef4a90e04d595cbe3ffbd0c487becc5b01216f8ab0459108396821905_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
