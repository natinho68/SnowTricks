<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_9132cc0f17e2db740ff0538f3c8c82ecd74788b65a8f60039a8f3bee7c7e3575 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f771d3ec7eefb7d79be33ea9575a476ce9d11a374d9c81e428843aceb9192f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f771d3ec7eefb7d79be33ea9575a476ce9d11a374d9c81e428843aceb9192f53->enter($__internal_f771d3ec7eefb7d79be33ea9575a476ce9d11a374d9c81e428843aceb9192f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_fd190bca0be43e4c12711449e14bae0f77e558a6a06acd74121ef9abdf75c3dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd190bca0be43e4c12711449e14bae0f77e558a6a06acd74121ef9abdf75c3dc->enter($__internal_fd190bca0be43e4c12711449e14bae0f77e558a6a06acd74121ef9abdf75c3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f771d3ec7eefb7d79be33ea9575a476ce9d11a374d9c81e428843aceb9192f53->leave($__internal_f771d3ec7eefb7d79be33ea9575a476ce9d11a374d9c81e428843aceb9192f53_prof);

        
        $__internal_fd190bca0be43e4c12711449e14bae0f77e558a6a06acd74121ef9abdf75c3dc->leave($__internal_fd190bca0be43e4c12711449e14bae0f77e558a6a06acd74121ef9abdf75c3dc_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_c9ef787046d615f7c035312b783893e7177986cc83edaf8dc72264a1646a37e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9ef787046d615f7c035312b783893e7177986cc83edaf8dc72264a1646a37e9->enter($__internal_c9ef787046d615f7c035312b783893e7177986cc83edaf8dc72264a1646a37e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_1ec84ceb51f9193e7033b7e76f525cb364aaff2fa17ca317de2fc75ff08f3f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec84ceb51f9193e7033b7e76f525cb364aaff2fa17ca317de2fc75ff08f3f24->enter($__internal_1ec84ceb51f9193e7033b7e76f525cb364aaff2fa17ca317de2fc75ff08f3f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_1ec84ceb51f9193e7033b7e76f525cb364aaff2fa17ca317de2fc75ff08f3f24->leave($__internal_1ec84ceb51f9193e7033b7e76f525cb364aaff2fa17ca317de2fc75ff08f3f24_prof);

        
        $__internal_c9ef787046d615f7c035312b783893e7177986cc83edaf8dc72264a1646a37e9->leave($__internal_c9ef787046d615f7c035312b783893e7177986cc83edaf8dc72264a1646a37e9_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_130a8fa3c181381bef8b05c95c6e0a223dcc39d61ae323c22a88f7e574983e5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_130a8fa3c181381bef8b05c95c6e0a223dcc39d61ae323c22a88f7e574983e5c->enter($__internal_130a8fa3c181381bef8b05c95c6e0a223dcc39d61ae323c22a88f7e574983e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7fa3054135741c351727d04b996d91cb57824772f4f1d3b80adba1f94cbfacc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa3054135741c351727d04b996d91cb57824772f4f1d3b80adba1f94cbfacc3->enter($__internal_7fa3054135741c351727d04b996d91cb57824772f4f1d3b80adba1f94cbfacc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7fa3054135741c351727d04b996d91cb57824772f4f1d3b80adba1f94cbfacc3->leave($__internal_7fa3054135741c351727d04b996d91cb57824772f4f1d3b80adba1f94cbfacc3_prof);

        
        $__internal_130a8fa3c181381bef8b05c95c6e0a223dcc39d61ae323c22a88f7e574983e5c->leave($__internal_130a8fa3c181381bef8b05c95c6e0a223dcc39d61ae323c22a88f7e574983e5c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
