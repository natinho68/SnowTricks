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
        $__internal_ad3d7b8b47614c8f64d933161144e4c490c7845c2804a00587b28fbd9fc6a02c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad3d7b8b47614c8f64d933161144e4c490c7845c2804a00587b28fbd9fc6a02c->enter($__internal_ad3d7b8b47614c8f64d933161144e4c490c7845c2804a00587b28fbd9fc6a02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_a8dae655fc1d433ef1b3e007d3b41fb2c4a82a01f6775262b78fabdf932b6efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8dae655fc1d433ef1b3e007d3b41fb2c4a82a01f6775262b78fabdf932b6efa->enter($__internal_a8dae655fc1d433ef1b3e007d3b41fb2c4a82a01f6775262b78fabdf932b6efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_ad3d7b8b47614c8f64d933161144e4c490c7845c2804a00587b28fbd9fc6a02c->leave($__internal_ad3d7b8b47614c8f64d933161144e4c490c7845c2804a00587b28fbd9fc6a02c_prof);

        
        $__internal_a8dae655fc1d433ef1b3e007d3b41fb2c4a82a01f6775262b78fabdf932b6efa->leave($__internal_a8dae655fc1d433ef1b3e007d3b41fb2c4a82a01f6775262b78fabdf932b6efa_prof);

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
