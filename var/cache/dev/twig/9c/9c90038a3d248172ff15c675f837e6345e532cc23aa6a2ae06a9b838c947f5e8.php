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
        $__internal_037c4831035e10ee37ee3fd7206b08c6c9d7f0723ce64e2ff7880a3626b0e4d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_037c4831035e10ee37ee3fd7206b08c6c9d7f0723ce64e2ff7880a3626b0e4d0->enter($__internal_037c4831035e10ee37ee3fd7206b08c6c9d7f0723ce64e2ff7880a3626b0e4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_b7cdb76ab36d11edcb206ea9eaa0256d78dfa9c68c2205e578f2e1e09ac8bac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7cdb76ab36d11edcb206ea9eaa0256d78dfa9c68c2205e578f2e1e09ac8bac6->enter($__internal_b7cdb76ab36d11edcb206ea9eaa0256d78dfa9c68c2205e578f2e1e09ac8bac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_037c4831035e10ee37ee3fd7206b08c6c9d7f0723ce64e2ff7880a3626b0e4d0->leave($__internal_037c4831035e10ee37ee3fd7206b08c6c9d7f0723ce64e2ff7880a3626b0e4d0_prof);

        
        $__internal_b7cdb76ab36d11edcb206ea9eaa0256d78dfa9c68c2205e578f2e1e09ac8bac6->leave($__internal_b7cdb76ab36d11edcb206ea9eaa0256d78dfa9c68c2205e578f2e1e09ac8bac6_prof);

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
