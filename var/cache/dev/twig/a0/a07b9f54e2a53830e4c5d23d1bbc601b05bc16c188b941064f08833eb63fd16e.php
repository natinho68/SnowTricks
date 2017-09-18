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
        $__internal_efc6918cb86370185cb2f8ca607879c9907c62e123c46fd4a876f8fabd664d87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc6918cb86370185cb2f8ca607879c9907c62e123c46fd4a876f8fabd664d87->enter($__internal_efc6918cb86370185cb2f8ca607879c9907c62e123c46fd4a876f8fabd664d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_8b1795ce5ab0efefa94c63a6bcde2d383823eced601db98e787d7c77eccd239a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1795ce5ab0efefa94c63a6bcde2d383823eced601db98e787d7c77eccd239a->enter($__internal_8b1795ce5ab0efefa94c63a6bcde2d383823eced601db98e787d7c77eccd239a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_efc6918cb86370185cb2f8ca607879c9907c62e123c46fd4a876f8fabd664d87->leave($__internal_efc6918cb86370185cb2f8ca607879c9907c62e123c46fd4a876f8fabd664d87_prof);

        
        $__internal_8b1795ce5ab0efefa94c63a6bcde2d383823eced601db98e787d7c77eccd239a->leave($__internal_8b1795ce5ab0efefa94c63a6bcde2d383823eced601db98e787d7c77eccd239a_prof);

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
