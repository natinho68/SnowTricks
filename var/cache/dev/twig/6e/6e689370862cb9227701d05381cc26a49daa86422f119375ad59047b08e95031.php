<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_a5b042bb4d18214d2613c0d364ef57ba65c9e6451c208295924b354d60e82554 extends Twig_Template
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
        $__internal_4ed9f7b5dcdb67d9186dcf1f168d1ab50efc156084e0733bc6979113c8063a47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ed9f7b5dcdb67d9186dcf1f168d1ab50efc156084e0733bc6979113c8063a47->enter($__internal_4ed9f7b5dcdb67d9186dcf1f168d1ab50efc156084e0733bc6979113c8063a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_16ee4fdfd29f1ee020b8ca63c88d2ec7e009abd19db984ac7300151c308f2ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ee4fdfd29f1ee020b8ca63c88d2ec7e009abd19db984ac7300151c308f2ede->enter($__internal_16ee4fdfd29f1ee020b8ca63c88d2ec7e009abd19db984ac7300151c308f2ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4ed9f7b5dcdb67d9186dcf1f168d1ab50efc156084e0733bc6979113c8063a47->leave($__internal_4ed9f7b5dcdb67d9186dcf1f168d1ab50efc156084e0733bc6979113c8063a47_prof);

        
        $__internal_16ee4fdfd29f1ee020b8ca63c88d2ec7e009abd19db984ac7300151c308f2ede->leave($__internal_16ee4fdfd29f1ee020b8ca63c88d2ec7e009abd19db984ac7300151c308f2ede_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
