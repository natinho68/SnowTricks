<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b7fb912a3210372fa146cb1091a9afc7276463a833acc3ceff09a8f31da91ef5 extends Twig_Template
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
        $__internal_b1ecbabfcff0a75637d6e813f05b0475d62a96cca717c8d6fffa5a6990bdc68b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ecbabfcff0a75637d6e813f05b0475d62a96cca717c8d6fffa5a6990bdc68b->enter($__internal_b1ecbabfcff0a75637d6e813f05b0475d62a96cca717c8d6fffa5a6990bdc68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_e2a8396d74a227adfdf40300af8b5bda0af1378185c2488c1f7e17ec045285b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a8396d74a227adfdf40300af8b5bda0af1378185c2488c1f7e17ec045285b5->enter($__internal_e2a8396d74a227adfdf40300af8b5bda0af1378185c2488c1f7e17ec045285b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_b1ecbabfcff0a75637d6e813f05b0475d62a96cca717c8d6fffa5a6990bdc68b->leave($__internal_b1ecbabfcff0a75637d6e813f05b0475d62a96cca717c8d6fffa5a6990bdc68b_prof);

        
        $__internal_e2a8396d74a227adfdf40300af8b5bda0af1378185c2488c1f7e17ec045285b5->leave($__internal_e2a8396d74a227adfdf40300af8b5bda0af1378185c2488c1f7e17ec045285b5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
