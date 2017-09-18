<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_530200b443199baf08c5448d10aa713924815ab41c12095a45db150991b9f05d extends Twig_Template
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
        $__internal_ec127d7bd9915fe356968552c692d38a4992771290e746314ae039d082a55060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec127d7bd9915fe356968552c692d38a4992771290e746314ae039d082a55060->enter($__internal_ec127d7bd9915fe356968552c692d38a4992771290e746314ae039d082a55060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_80c573279da326457776837f27fe50ba4bb913d4a77bf451f6d6efb41465f98b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c573279da326457776837f27fe50ba4bb913d4a77bf451f6d6efb41465f98b->enter($__internal_80c573279da326457776837f27fe50ba4bb913d4a77bf451f6d6efb41465f98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_ec127d7bd9915fe356968552c692d38a4992771290e746314ae039d082a55060->leave($__internal_ec127d7bd9915fe356968552c692d38a4992771290e746314ae039d082a55060_prof);

        
        $__internal_80c573279da326457776837f27fe50ba4bb913d4a77bf451f6d6efb41465f98b->leave($__internal_80c573279da326457776837f27fe50ba4bb913d4a77bf451f6d6efb41465f98b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
