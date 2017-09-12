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
        $__internal_b181f37d890f6053dfe07e208f626c32b3ca0084ece34f396279974cbec6f860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b181f37d890f6053dfe07e208f626c32b3ca0084ece34f396279974cbec6f860->enter($__internal_b181f37d890f6053dfe07e208f626c32b3ca0084ece34f396279974cbec6f860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_e87dd82ba354a8ff73f7b89902ac9b76c53b0e4a84ab3f49aa4304847d632ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87dd82ba354a8ff73f7b89902ac9b76c53b0e4a84ab3f49aa4304847d632ede->enter($__internal_e87dd82ba354a8ff73f7b89902ac9b76c53b0e4a84ab3f49aa4304847d632ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_b181f37d890f6053dfe07e208f626c32b3ca0084ece34f396279974cbec6f860->leave($__internal_b181f37d890f6053dfe07e208f626c32b3ca0084ece34f396279974cbec6f860_prof);

        
        $__internal_e87dd82ba354a8ff73f7b89902ac9b76c53b0e4a84ab3f49aa4304847d632ede->leave($__internal_e87dd82ba354a8ff73f7b89902ac9b76c53b0e4a84ab3f49aa4304847d632ede_prof);

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
