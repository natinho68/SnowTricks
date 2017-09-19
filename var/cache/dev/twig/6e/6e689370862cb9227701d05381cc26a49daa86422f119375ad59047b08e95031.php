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
        $__internal_2b0eb73323e3be17ef58bc5bd5daf32e16f3c38fd54843058d1676b2339f606b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b0eb73323e3be17ef58bc5bd5daf32e16f3c38fd54843058d1676b2339f606b->enter($__internal_2b0eb73323e3be17ef58bc5bd5daf32e16f3c38fd54843058d1676b2339f606b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_a7df3eb1910abf8f87572c071f28d2a705bac8cbfeb439d713b3fc5a6f61d43b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7df3eb1910abf8f87572c071f28d2a705bac8cbfeb439d713b3fc5a6f61d43b->enter($__internal_a7df3eb1910abf8f87572c071f28d2a705bac8cbfeb439d713b3fc5a6f61d43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2b0eb73323e3be17ef58bc5bd5daf32e16f3c38fd54843058d1676b2339f606b->leave($__internal_2b0eb73323e3be17ef58bc5bd5daf32e16f3c38fd54843058d1676b2339f606b_prof);

        
        $__internal_a7df3eb1910abf8f87572c071f28d2a705bac8cbfeb439d713b3fc5a6f61d43b->leave($__internal_a7df3eb1910abf8f87572c071f28d2a705bac8cbfeb439d713b3fc5a6f61d43b_prof);

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
