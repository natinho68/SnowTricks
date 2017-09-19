<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_59ac452d7b6fe043af2e999a7a4a1daae2629df18965a14e2fd59f3dd44a6d76 extends Twig_Template
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
        $__internal_478bd9f1b869787336c4d92468b6239d8a9efa27c1bf95114e632a92dc129564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_478bd9f1b869787336c4d92468b6239d8a9efa27c1bf95114e632a92dc129564->enter($__internal_478bd9f1b869787336c4d92468b6239d8a9efa27c1bf95114e632a92dc129564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_49230fbef46fd6de1705763debfc030f105bf0844a14e1e3e9c05079d850a75e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49230fbef46fd6de1705763debfc030f105bf0844a14e1e3e9c05079d850a75e->enter($__internal_49230fbef46fd6de1705763debfc030f105bf0844a14e1e3e9c05079d850a75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_478bd9f1b869787336c4d92468b6239d8a9efa27c1bf95114e632a92dc129564->leave($__internal_478bd9f1b869787336c4d92468b6239d8a9efa27c1bf95114e632a92dc129564_prof);

        
        $__internal_49230fbef46fd6de1705763debfc030f105bf0844a14e1e3e9c05079d850a75e->leave($__internal_49230fbef46fd6de1705763debfc030f105bf0844a14e1e3e9c05079d850a75e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
