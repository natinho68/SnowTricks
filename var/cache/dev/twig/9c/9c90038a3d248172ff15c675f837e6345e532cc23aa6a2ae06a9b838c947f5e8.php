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
        $__internal_ce654dcb040d699b4725d8d9526de3c597a090da83a92d542d3286b51b63a472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce654dcb040d699b4725d8d9526de3c597a090da83a92d542d3286b51b63a472->enter($__internal_ce654dcb040d699b4725d8d9526de3c597a090da83a92d542d3286b51b63a472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_074601606d4f0ce3efe6321a0f8b62d55efd438a1a33c7643649d49a6c6eb487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074601606d4f0ce3efe6321a0f8b62d55efd438a1a33c7643649d49a6c6eb487->enter($__internal_074601606d4f0ce3efe6321a0f8b62d55efd438a1a33c7643649d49a6c6eb487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ce654dcb040d699b4725d8d9526de3c597a090da83a92d542d3286b51b63a472->leave($__internal_ce654dcb040d699b4725d8d9526de3c597a090da83a92d542d3286b51b63a472_prof);

        
        $__internal_074601606d4f0ce3efe6321a0f8b62d55efd438a1a33c7643649d49a6c6eb487->leave($__internal_074601606d4f0ce3efe6321a0f8b62d55efd438a1a33c7643649d49a6c6eb487_prof);

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
