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
        $__internal_8bdc77210fa6a3ba69bd0701cd6dee7684f22ec971603c6daa3960ba2c653cc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bdc77210fa6a3ba69bd0701cd6dee7684f22ec971603c6daa3960ba2c653cc9->enter($__internal_8bdc77210fa6a3ba69bd0701cd6dee7684f22ec971603c6daa3960ba2c653cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_16af9c559eb2022489006af8573f197963e6aa48d648217eb6e4b00c7ad40b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16af9c559eb2022489006af8573f197963e6aa48d648217eb6e4b00c7ad40b7e->enter($__internal_16af9c559eb2022489006af8573f197963e6aa48d648217eb6e4b00c7ad40b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8bdc77210fa6a3ba69bd0701cd6dee7684f22ec971603c6daa3960ba2c653cc9->leave($__internal_8bdc77210fa6a3ba69bd0701cd6dee7684f22ec971603c6daa3960ba2c653cc9_prof);

        
        $__internal_16af9c559eb2022489006af8573f197963e6aa48d648217eb6e4b00c7ad40b7e->leave($__internal_16af9c559eb2022489006af8573f197963e6aa48d648217eb6e4b00c7ad40b7e_prof);

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
