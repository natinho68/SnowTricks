<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d7287cece306d1a9bc3389c9bbe5bd31a128f1f4e50ca893b66f1bc27a0c44aa extends Twig_Template
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
        $__internal_1b3b1a3489718f10bb69ec5c7715aaf8cc9fa21fb29cae4a2b1a167c26dcc333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b3b1a3489718f10bb69ec5c7715aaf8cc9fa21fb29cae4a2b1a167c26dcc333->enter($__internal_1b3b1a3489718f10bb69ec5c7715aaf8cc9fa21fb29cae4a2b1a167c26dcc333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_5959436cde5eb670882a5b281ae5cbd7c572994e0bb67e8ca1a82c7d06c0de7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5959436cde5eb670882a5b281ae5cbd7c572994e0bb67e8ca1a82c7d06c0de7d->enter($__internal_5959436cde5eb670882a5b281ae5cbd7c572994e0bb67e8ca1a82c7d06c0de7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1b3b1a3489718f10bb69ec5c7715aaf8cc9fa21fb29cae4a2b1a167c26dcc333->leave($__internal_1b3b1a3489718f10bb69ec5c7715aaf8cc9fa21fb29cae4a2b1a167c26dcc333_prof);

        
        $__internal_5959436cde5eb670882a5b281ae5cbd7c572994e0bb67e8ca1a82c7d06c0de7d->leave($__internal_5959436cde5eb670882a5b281ae5cbd7c572994e0bb67e8ca1a82c7d06c0de7d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
