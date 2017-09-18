<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_a1f2ae991ddb121188c39da0cae72cdad8ce37b92927c1fba9d62391dad6d21c extends Twig_Template
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
        $__internal_38f983b4ed9dda242a14c1634e39010f239c9e3ada9bf183bf22ce10450be6e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f983b4ed9dda242a14c1634e39010f239c9e3ada9bf183bf22ce10450be6e2->enter($__internal_38f983b4ed9dda242a14c1634e39010f239c9e3ada9bf183bf22ce10450be6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_ce7a8f1b5e4e17a50a1c0f878d8f92b0e46ad272d277593676e0d321da1b04bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7a8f1b5e4e17a50a1c0f878d8f92b0e46ad272d277593676e0d321da1b04bf->enter($__internal_ce7a8f1b5e4e17a50a1c0f878d8f92b0e46ad272d277593676e0d321da1b04bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_38f983b4ed9dda242a14c1634e39010f239c9e3ada9bf183bf22ce10450be6e2->leave($__internal_38f983b4ed9dda242a14c1634e39010f239c9e3ada9bf183bf22ce10450be6e2_prof);

        
        $__internal_ce7a8f1b5e4e17a50a1c0f878d8f92b0e46ad272d277593676e0d321da1b04bf->leave($__internal_ce7a8f1b5e4e17a50a1c0f878d8f92b0e46ad272d277593676e0d321da1b04bf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
