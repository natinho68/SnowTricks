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
        $__internal_e7b2821166443ff09dc8bad33625987b0f2bb1689612e0055e70a2043dc5ba04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7b2821166443ff09dc8bad33625987b0f2bb1689612e0055e70a2043dc5ba04->enter($__internal_e7b2821166443ff09dc8bad33625987b0f2bb1689612e0055e70a2043dc5ba04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_341a1f441aa5aca5b5f12a97845f45974f5af19704db4531b39faebc5cd77ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341a1f441aa5aca5b5f12a97845f45974f5af19704db4531b39faebc5cd77ea6->enter($__internal_341a1f441aa5aca5b5f12a97845f45974f5af19704db4531b39faebc5cd77ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e7b2821166443ff09dc8bad33625987b0f2bb1689612e0055e70a2043dc5ba04->leave($__internal_e7b2821166443ff09dc8bad33625987b0f2bb1689612e0055e70a2043dc5ba04_prof);

        
        $__internal_341a1f441aa5aca5b5f12a97845f45974f5af19704db4531b39faebc5cd77ea6->leave($__internal_341a1f441aa5aca5b5f12a97845f45974f5af19704db4531b39faebc5cd77ea6_prof);

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
