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
        $__internal_332b9df82cabcd9e936df8cbf6e0eccb8d25b4d406fc68e0d9fa7e20c910608a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_332b9df82cabcd9e936df8cbf6e0eccb8d25b4d406fc68e0d9fa7e20c910608a->enter($__internal_332b9df82cabcd9e936df8cbf6e0eccb8d25b4d406fc68e0d9fa7e20c910608a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_fdba7ff88ab8377a30bcfdb728ac67a9da082d280e39560b7dd5c55d0971b6a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdba7ff88ab8377a30bcfdb728ac67a9da082d280e39560b7dd5c55d0971b6a0->enter($__internal_fdba7ff88ab8377a30bcfdb728ac67a9da082d280e39560b7dd5c55d0971b6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_332b9df82cabcd9e936df8cbf6e0eccb8d25b4d406fc68e0d9fa7e20c910608a->leave($__internal_332b9df82cabcd9e936df8cbf6e0eccb8d25b4d406fc68e0d9fa7e20c910608a_prof);

        
        $__internal_fdba7ff88ab8377a30bcfdb728ac67a9da082d280e39560b7dd5c55d0971b6a0->leave($__internal_fdba7ff88ab8377a30bcfdb728ac67a9da082d280e39560b7dd5c55d0971b6a0_prof);

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
