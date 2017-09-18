<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_f148fa25fac21362cb4bcaa877387459178e664cf878ee2ec52e0542741f1fb6 extends Twig_Template
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
        $__internal_665ec725766420becee287b2e616f2045b88d3917b8010decdcf6b6423dac430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665ec725766420becee287b2e616f2045b88d3917b8010decdcf6b6423dac430->enter($__internal_665ec725766420becee287b2e616f2045b88d3917b8010decdcf6b6423dac430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_f04a23e6ffa9c1615b127f6c3a830d2188cb9e695c73b9190b91f2b47526b181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04a23e6ffa9c1615b127f6c3a830d2188cb9e695c73b9190b91f2b47526b181->enter($__internal_f04a23e6ffa9c1615b127f6c3a830d2188cb9e695c73b9190b91f2b47526b181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_665ec725766420becee287b2e616f2045b88d3917b8010decdcf6b6423dac430->leave($__internal_665ec725766420becee287b2e616f2045b88d3917b8010decdcf6b6423dac430_prof);

        
        $__internal_f04a23e6ffa9c1615b127f6c3a830d2188cb9e695c73b9190b91f2b47526b181->leave($__internal_f04a23e6ffa9c1615b127f6c3a830d2188cb9e695c73b9190b91f2b47526b181_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
