<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_dc1a8875c01074426ad305bf1c6da9fbe96fbe0ca276db236bcdbaa3bd1ec44b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bad2a091b2057610f20cef378e55d9824607001a2ba1a03bce44a46cc8e57607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bad2a091b2057610f20cef378e55d9824607001a2ba1a03bce44a46cc8e57607->enter($__internal_bad2a091b2057610f20cef378e55d9824607001a2ba1a03bce44a46cc8e57607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_06dfc66bdbcb04a9a5e11e57529ed0bef7e822cbc8d9befd57d2e0f1f8bf60fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06dfc66bdbcb04a9a5e11e57529ed0bef7e822cbc8d9befd57d2e0f1f8bf60fb->enter($__internal_06dfc66bdbcb04a9a5e11e57529ed0bef7e822cbc8d9befd57d2e0f1f8bf60fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bad2a091b2057610f20cef378e55d9824607001a2ba1a03bce44a46cc8e57607->leave($__internal_bad2a091b2057610f20cef378e55d9824607001a2ba1a03bce44a46cc8e57607_prof);

        
        $__internal_06dfc66bdbcb04a9a5e11e57529ed0bef7e822cbc8d9befd57d2e0f1f8bf60fb->leave($__internal_06dfc66bdbcb04a9a5e11e57529ed0bef7e822cbc8d9befd57d2e0f1f8bf60fb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de27eea504ff99e04b388e5b1b45f11b4fd462e3572a89b556e21723de9a9699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de27eea504ff99e04b388e5b1b45f11b4fd462e3572a89b556e21723de9a9699->enter($__internal_de27eea504ff99e04b388e5b1b45f11b4fd462e3572a89b556e21723de9a9699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_38f12c166bdbc2b658a1ba61e3f55af21f01c7e3331a5df7d1ca6af023c7a6bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f12c166bdbc2b658a1ba61e3f55af21f01c7e3331a5df7d1ca6af023c7a6bc->enter($__internal_38f12c166bdbc2b658a1ba61e3f55af21f01c7e3331a5df7d1ca6af023c7a6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_38f12c166bdbc2b658a1ba61e3f55af21f01c7e3331a5df7d1ca6af023c7a6bc->leave($__internal_38f12c166bdbc2b658a1ba61e3f55af21f01c7e3331a5df7d1ca6af023c7a6bc_prof);

        
        $__internal_de27eea504ff99e04b388e5b1b45f11b4fd462e3572a89b556e21723de9a9699->leave($__internal_de27eea504ff99e04b388e5b1b45f11b4fd462e3572a89b556e21723de9a9699_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_886e558588db492465d8e18b0ce3062298362f1a95e259c0d161a5036211decc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_886e558588db492465d8e18b0ce3062298362f1a95e259c0d161a5036211decc->enter($__internal_886e558588db492465d8e18b0ce3062298362f1a95e259c0d161a5036211decc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ee6814680eb24531f5d840a0b8835cff8ab58701770ee58b7200227633adec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee6814680eb24531f5d840a0b8835cff8ab58701770ee58b7200227633adec9->enter($__internal_3ee6814680eb24531f5d840a0b8835cff8ab58701770ee58b7200227633adec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_3ee6814680eb24531f5d840a0b8835cff8ab58701770ee58b7200227633adec9->leave($__internal_3ee6814680eb24531f5d840a0b8835cff8ab58701770ee58b7200227633adec9_prof);

        
        $__internal_886e558588db492465d8e18b0ce3062298362f1a95e259c0d161a5036211decc->leave($__internal_886e558588db492465d8e18b0ce3062298362f1a95e259c0d161a5036211decc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
