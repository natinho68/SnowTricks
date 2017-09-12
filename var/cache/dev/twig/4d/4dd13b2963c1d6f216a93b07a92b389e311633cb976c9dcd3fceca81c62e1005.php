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
        $__internal_ac1286388667325b4998c793f216d536a1935d1eda7ea21fc5ed51bda0a382a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac1286388667325b4998c793f216d536a1935d1eda7ea21fc5ed51bda0a382a7->enter($__internal_ac1286388667325b4998c793f216d536a1935d1eda7ea21fc5ed51bda0a382a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_d7e0ea6b61acf1766bd767631dc11f790cc274d4cd5e5460441780d17bf43b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e0ea6b61acf1766bd767631dc11f790cc274d4cd5e5460441780d17bf43b48->enter($__internal_d7e0ea6b61acf1766bd767631dc11f790cc274d4cd5e5460441780d17bf43b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_ac1286388667325b4998c793f216d536a1935d1eda7ea21fc5ed51bda0a382a7->leave($__internal_ac1286388667325b4998c793f216d536a1935d1eda7ea21fc5ed51bda0a382a7_prof);

        
        $__internal_d7e0ea6b61acf1766bd767631dc11f790cc274d4cd5e5460441780d17bf43b48->leave($__internal_d7e0ea6b61acf1766bd767631dc11f790cc274d4cd5e5460441780d17bf43b48_prof);

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
