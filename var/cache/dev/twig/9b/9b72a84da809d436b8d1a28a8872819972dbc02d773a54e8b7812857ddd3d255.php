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
        $__internal_1ae4ceb8a833d6ebe5650b5b77466efe8090cf95de63be85c0fc8464d7b7adaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae4ceb8a833d6ebe5650b5b77466efe8090cf95de63be85c0fc8464d7b7adaa->enter($__internal_1ae4ceb8a833d6ebe5650b5b77466efe8090cf95de63be85c0fc8464d7b7adaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_bc9a8e042007fddcc15ff48111ffdf5600af7d70cc564d54cddf6bb08af8bcf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc9a8e042007fddcc15ff48111ffdf5600af7d70cc564d54cddf6bb08af8bcf9->enter($__internal_bc9a8e042007fddcc15ff48111ffdf5600af7d70cc564d54cddf6bb08af8bcf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_1ae4ceb8a833d6ebe5650b5b77466efe8090cf95de63be85c0fc8464d7b7adaa->leave($__internal_1ae4ceb8a833d6ebe5650b5b77466efe8090cf95de63be85c0fc8464d7b7adaa_prof);

        
        $__internal_bc9a8e042007fddcc15ff48111ffdf5600af7d70cc564d54cddf6bb08af8bcf9->leave($__internal_bc9a8e042007fddcc15ff48111ffdf5600af7d70cc564d54cddf6bb08af8bcf9_prof);

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
