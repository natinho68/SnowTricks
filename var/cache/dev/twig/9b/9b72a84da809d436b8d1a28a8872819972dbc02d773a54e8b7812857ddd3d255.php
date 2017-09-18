<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7ff99f20b26d328ca365f7b9f0bf69ee72050fe88ef6e9d23b877094b0493eab extends Twig_Template
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
        $__internal_0f683644cc5728a40e8e6e9d1f939d844045f42f2000fe9d8b94a2f0d85c2752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f683644cc5728a40e8e6e9d1f939d844045f42f2000fe9d8b94a2f0d85c2752->enter($__internal_0f683644cc5728a40e8e6e9d1f939d844045f42f2000fe9d8b94a2f0d85c2752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_4fe1c09540c5d189d5ce7791a7af30aa6d9365507558ac9f02e4acaea3b1609b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe1c09540c5d189d5ce7791a7af30aa6d9365507558ac9f02e4acaea3b1609b->enter($__internal_4fe1c09540c5d189d5ce7791a7af30aa6d9365507558ac9f02e4acaea3b1609b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0f683644cc5728a40e8e6e9d1f939d844045f42f2000fe9d8b94a2f0d85c2752->leave($__internal_0f683644cc5728a40e8e6e9d1f939d844045f42f2000fe9d8b94a2f0d85c2752_prof);

        
        $__internal_4fe1c09540c5d189d5ce7791a7af30aa6d9365507558ac9f02e4acaea3b1609b->leave($__internal_4fe1c09540c5d189d5ce7791a7af30aa6d9365507558ac9f02e4acaea3b1609b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
