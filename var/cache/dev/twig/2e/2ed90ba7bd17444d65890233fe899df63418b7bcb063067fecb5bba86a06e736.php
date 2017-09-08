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
        $__internal_f3fa13382801acf7e747492d816d34ac844a81429fccb7f923f8d2d7968673bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3fa13382801acf7e747492d816d34ac844a81429fccb7f923f8d2d7968673bf->enter($__internal_f3fa13382801acf7e747492d816d34ac844a81429fccb7f923f8d2d7968673bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_332dfcda360591eb9c635af8f95cf87f4e744fedbbeb3e2e467ae94fd60bd825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332dfcda360591eb9c635af8f95cf87f4e744fedbbeb3e2e467ae94fd60bd825->enter($__internal_332dfcda360591eb9c635af8f95cf87f4e744fedbbeb3e2e467ae94fd60bd825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_f3fa13382801acf7e747492d816d34ac844a81429fccb7f923f8d2d7968673bf->leave($__internal_f3fa13382801acf7e747492d816d34ac844a81429fccb7f923f8d2d7968673bf_prof);

        
        $__internal_332dfcda360591eb9c635af8f95cf87f4e744fedbbeb3e2e467ae94fd60bd825->leave($__internal_332dfcda360591eb9c635af8f95cf87f4e744fedbbeb3e2e467ae94fd60bd825_prof);

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
