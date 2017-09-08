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
        $__internal_3a2722e0b3203cb600a773f851974f5a643cd6b383acd3e1e9926097fc6d3b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2722e0b3203cb600a773f851974f5a643cd6b383acd3e1e9926097fc6d3b28->enter($__internal_3a2722e0b3203cb600a773f851974f5a643cd6b383acd3e1e9926097fc6d3b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_4e28acee77a402d4d77701b53886e34835bcc4740081c1cb022575399e288ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e28acee77a402d4d77701b53886e34835bcc4740081c1cb022575399e288ab3->enter($__internal_4e28acee77a402d4d77701b53886e34835bcc4740081c1cb022575399e288ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3a2722e0b3203cb600a773f851974f5a643cd6b383acd3e1e9926097fc6d3b28->leave($__internal_3a2722e0b3203cb600a773f851974f5a643cd6b383acd3e1e9926097fc6d3b28_prof);

        
        $__internal_4e28acee77a402d4d77701b53886e34835bcc4740081c1cb022575399e288ab3->leave($__internal_4e28acee77a402d4d77701b53886e34835bcc4740081c1cb022575399e288ab3_prof);

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
