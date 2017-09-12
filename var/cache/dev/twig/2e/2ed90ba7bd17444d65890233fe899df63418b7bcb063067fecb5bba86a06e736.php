<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_9ea9014fa5c362fa1e72c4ddc70ca824387834cc5adbe2b7eb539b126f4eb679 extends Twig_Template
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
        $__internal_b614f9f0b07ecc438d04d88995a9b8621f9d427a37629d3372ab1f1e4afc60da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b614f9f0b07ecc438d04d88995a9b8621f9d427a37629d3372ab1f1e4afc60da->enter($__internal_b614f9f0b07ecc438d04d88995a9b8621f9d427a37629d3372ab1f1e4afc60da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_bca0f32ce5645f48c0456c054a15631a04e63e270bb92a7e3ae543e93c9a11c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca0f32ce5645f48c0456c054a15631a04e63e270bb92a7e3ae543e93c9a11c8->enter($__internal_bca0f32ce5645f48c0456c054a15631a04e63e270bb92a7e3ae543e93c9a11c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_b614f9f0b07ecc438d04d88995a9b8621f9d427a37629d3372ab1f1e4afc60da->leave($__internal_b614f9f0b07ecc438d04d88995a9b8621f9d427a37629d3372ab1f1e4afc60da_prof);

        
        $__internal_bca0f32ce5645f48c0456c054a15631a04e63e270bb92a7e3ae543e93c9a11c8->leave($__internal_bca0f32ce5645f48c0456c054a15631a04e63e270bb92a7e3ae543e93c9a11c8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
