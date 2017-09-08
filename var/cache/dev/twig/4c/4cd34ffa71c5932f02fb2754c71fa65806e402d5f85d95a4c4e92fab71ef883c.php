<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d0cfe97a765e1d0a4d4c0995ae1a9332bdfa9efa59ab0170d655c78af19ee431 extends Twig_Template
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
        $__internal_5e8784fcf7a4aa0231cbd1472099378d5acf5c62b658b18888821e656ca62d27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e8784fcf7a4aa0231cbd1472099378d5acf5c62b658b18888821e656ca62d27->enter($__internal_5e8784fcf7a4aa0231cbd1472099378d5acf5c62b658b18888821e656ca62d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_99140a9b2e25413439ad009f810f381a8c7624c8be52cd3a8638ec9c992fcece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99140a9b2e25413439ad009f810f381a8c7624c8be52cd3a8638ec9c992fcece->enter($__internal_99140a9b2e25413439ad009f810f381a8c7624c8be52cd3a8638ec9c992fcece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5e8784fcf7a4aa0231cbd1472099378d5acf5c62b658b18888821e656ca62d27->leave($__internal_5e8784fcf7a4aa0231cbd1472099378d5acf5c62b658b18888821e656ca62d27_prof);

        
        $__internal_99140a9b2e25413439ad009f810f381a8c7624c8be52cd3a8638ec9c992fcece->leave($__internal_99140a9b2e25413439ad009f810f381a8c7624c8be52cd3a8638ec9c992fcece_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
