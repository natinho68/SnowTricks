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
        $__internal_4e90f9c174c07e4d0e53f6807abd7c3536a8a9c2e01abdabd1a7e4c74ac995f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e90f9c174c07e4d0e53f6807abd7c3536a8a9c2e01abdabd1a7e4c74ac995f1->enter($__internal_4e90f9c174c07e4d0e53f6807abd7c3536a8a9c2e01abdabd1a7e4c74ac995f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_6d1c126467283e1274e9ea5a411a06c5d6684a8a0e733c34cb2d459fe91e2644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1c126467283e1274e9ea5a411a06c5d6684a8a0e733c34cb2d459fe91e2644->enter($__internal_6d1c126467283e1274e9ea5a411a06c5d6684a8a0e733c34cb2d459fe91e2644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_4e90f9c174c07e4d0e53f6807abd7c3536a8a9c2e01abdabd1a7e4c74ac995f1->leave($__internal_4e90f9c174c07e4d0e53f6807abd7c3536a8a9c2e01abdabd1a7e4c74ac995f1_prof);

        
        $__internal_6d1c126467283e1274e9ea5a411a06c5d6684a8a0e733c34cb2d459fe91e2644->leave($__internal_6d1c126467283e1274e9ea5a411a06c5d6684a8a0e733c34cb2d459fe91e2644_prof);

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
