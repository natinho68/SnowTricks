<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3ebda9fc8a1241e02beba3c0ba1d8496d1ff2cfa25232ead0dd411266372bf35 extends Twig_Template
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
        $__internal_0b5f85c7e6b7d2261d7825058d2343034f9379a3ca693fb228743a94d8aa750e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b5f85c7e6b7d2261d7825058d2343034f9379a3ca693fb228743a94d8aa750e->enter($__internal_0b5f85c7e6b7d2261d7825058d2343034f9379a3ca693fb228743a94d8aa750e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_2414b691c5db2361a521a4e7d69b03414baa9d97ac407b0cd037b9a436071fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2414b691c5db2361a521a4e7d69b03414baa9d97ac407b0cd037b9a436071fbd->enter($__internal_2414b691c5db2361a521a4e7d69b03414baa9d97ac407b0cd037b9a436071fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_0b5f85c7e6b7d2261d7825058d2343034f9379a3ca693fb228743a94d8aa750e->leave($__internal_0b5f85c7e6b7d2261d7825058d2343034f9379a3ca693fb228743a94d8aa750e_prof);

        
        $__internal_2414b691c5db2361a521a4e7d69b03414baa9d97ac407b0cd037b9a436071fbd->leave($__internal_2414b691c5db2361a521a4e7d69b03414baa9d97ac407b0cd037b9a436071fbd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
