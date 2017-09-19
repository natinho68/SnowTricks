<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b410644ae4785e2bb25dabd30ca43e9cb83e8e86a3e4b4a43b4739f0c2dac477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f852526f724e2d2875b08111b62e3af383a81c916900a850c2d9e32554c49fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f852526f724e2d2875b08111b62e3af383a81c916900a850c2d9e32554c49fa->enter($__internal_8f852526f724e2d2875b08111b62e3af383a81c916900a850c2d9e32554c49fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_41cd6df64a4b169a5a49f6300e691dc2b4c11680f797f44929291a5d27f2deba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41cd6df64a4b169a5a49f6300e691dc2b4c11680f797f44929291a5d27f2deba->enter($__internal_41cd6df64a4b169a5a49f6300e691dc2b4c11680f797f44929291a5d27f2deba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f852526f724e2d2875b08111b62e3af383a81c916900a850c2d9e32554c49fa->leave($__internal_8f852526f724e2d2875b08111b62e3af383a81c916900a850c2d9e32554c49fa_prof);

        
        $__internal_41cd6df64a4b169a5a49f6300e691dc2b4c11680f797f44929291a5d27f2deba->leave($__internal_41cd6df64a4b169a5a49f6300e691dc2b4c11680f797f44929291a5d27f2deba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff616f8db3f03c3cb2af1c21000c6bfe6f1f4b575995e1b39cad29cb3299ca87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff616f8db3f03c3cb2af1c21000c6bfe6f1f4b575995e1b39cad29cb3299ca87->enter($__internal_ff616f8db3f03c3cb2af1c21000c6bfe6f1f4b575995e1b39cad29cb3299ca87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d5893d53ca211136921e2c3660c0392a3b751dcdb6af49827c4d057393a36704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5893d53ca211136921e2c3660c0392a3b751dcdb6af49827c4d057393a36704->enter($__internal_d5893d53ca211136921e2c3660c0392a3b751dcdb6af49827c4d057393a36704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d5893d53ca211136921e2c3660c0392a3b751dcdb6af49827c4d057393a36704->leave($__internal_d5893d53ca211136921e2c3660c0392a3b751dcdb6af49827c4d057393a36704_prof);

        
        $__internal_ff616f8db3f03c3cb2af1c21000c6bfe6f1f4b575995e1b39cad29cb3299ca87->leave($__internal_ff616f8db3f03c3cb2af1c21000c6bfe6f1f4b575995e1b39cad29cb3299ca87_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a1ab472b2b96e47f899fbe76d83c6c6944354a3d23c549c6508e044eb56e948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a1ab472b2b96e47f899fbe76d83c6c6944354a3d23c549c6508e044eb56e948->enter($__internal_7a1ab472b2b96e47f899fbe76d83c6c6944354a3d23c549c6508e044eb56e948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2c01bf95b70335eebe386590c3e622b99c5653b77ca74a5b01841aa17f41a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c01bf95b70335eebe386590c3e622b99c5653b77ca74a5b01841aa17f41a3b->enter($__internal_d2c01bf95b70335eebe386590c3e622b99c5653b77ca74a5b01841aa17f41a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d2c01bf95b70335eebe386590c3e622b99c5653b77ca74a5b01841aa17f41a3b->leave($__internal_d2c01bf95b70335eebe386590c3e622b99c5653b77ca74a5b01841aa17f41a3b_prof);

        
        $__internal_7a1ab472b2b96e47f899fbe76d83c6c6944354a3d23c549c6508e044eb56e948->leave($__internal_7a1ab472b2b96e47f899fbe76d83c6c6944354a3d23c549c6508e044eb56e948_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
