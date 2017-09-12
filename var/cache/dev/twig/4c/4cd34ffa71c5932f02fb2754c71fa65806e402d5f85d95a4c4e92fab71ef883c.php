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
        $__internal_37e361d8ce5c172307f051af3138da549af191eaef22de5cfd4aad40498a8d16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37e361d8ce5c172307f051af3138da549af191eaef22de5cfd4aad40498a8d16->enter($__internal_37e361d8ce5c172307f051af3138da549af191eaef22de5cfd4aad40498a8d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_86b3cc3cafa53b469b4dd76a525861fc3fb46415d7015d7b81604035603f0c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b3cc3cafa53b469b4dd76a525861fc3fb46415d7015d7b81604035603f0c7c->enter($__internal_86b3cc3cafa53b469b4dd76a525861fc3fb46415d7015d7b81604035603f0c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_37e361d8ce5c172307f051af3138da549af191eaef22de5cfd4aad40498a8d16->leave($__internal_37e361d8ce5c172307f051af3138da549af191eaef22de5cfd4aad40498a8d16_prof);

        
        $__internal_86b3cc3cafa53b469b4dd76a525861fc3fb46415d7015d7b81604035603f0c7c->leave($__internal_86b3cc3cafa53b469b4dd76a525861fc3fb46415d7015d7b81604035603f0c7c_prof);

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
