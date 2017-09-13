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
        $__internal_a880d4f91fed82def8c1633a68f0c485182ce2166b9cd741d37ce0cc279915c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a880d4f91fed82def8c1633a68f0c485182ce2166b9cd741d37ce0cc279915c0->enter($__internal_a880d4f91fed82def8c1633a68f0c485182ce2166b9cd741d37ce0cc279915c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_b6891cb70d3d0015f57cdf1ac05c0f2fbdab85fd7f0f73f9ab6c95e5ce243b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6891cb70d3d0015f57cdf1ac05c0f2fbdab85fd7f0f73f9ab6c95e5ce243b6b->enter($__internal_b6891cb70d3d0015f57cdf1ac05c0f2fbdab85fd7f0f73f9ab6c95e5ce243b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a880d4f91fed82def8c1633a68f0c485182ce2166b9cd741d37ce0cc279915c0->leave($__internal_a880d4f91fed82def8c1633a68f0c485182ce2166b9cd741d37ce0cc279915c0_prof);

        
        $__internal_b6891cb70d3d0015f57cdf1ac05c0f2fbdab85fd7f0f73f9ab6c95e5ce243b6b->leave($__internal_b6891cb70d3d0015f57cdf1ac05c0f2fbdab85fd7f0f73f9ab6c95e5ce243b6b_prof);

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
