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
        $__internal_8f50412551d9165d90e65f4a9b5bafc2636d812ef9810351434bea78e52510c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f50412551d9165d90e65f4a9b5bafc2636d812ef9810351434bea78e52510c1->enter($__internal_8f50412551d9165d90e65f4a9b5bafc2636d812ef9810351434bea78e52510c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_55204bc7d3601e12cdfdd52bfe9da109b0bec34df7162c5cb293a5d8de1a5987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55204bc7d3601e12cdfdd52bfe9da109b0bec34df7162c5cb293a5d8de1a5987->enter($__internal_55204bc7d3601e12cdfdd52bfe9da109b0bec34df7162c5cb293a5d8de1a5987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8f50412551d9165d90e65f4a9b5bafc2636d812ef9810351434bea78e52510c1->leave($__internal_8f50412551d9165d90e65f4a9b5bafc2636d812ef9810351434bea78e52510c1_prof);

        
        $__internal_55204bc7d3601e12cdfdd52bfe9da109b0bec34df7162c5cb293a5d8de1a5987->leave($__internal_55204bc7d3601e12cdfdd52bfe9da109b0bec34df7162c5cb293a5d8de1a5987_prof);

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
