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
        $__internal_81e395eae4075f04d9385591390af321eb4a611da36807fb2acc89e4db95abe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e395eae4075f04d9385591390af321eb4a611da36807fb2acc89e4db95abe4->enter($__internal_81e395eae4075f04d9385591390af321eb4a611da36807fb2acc89e4db95abe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_56198e1553af874c7d6d72c5307ca912f2e178049f96aa75ee18c5aa08980018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56198e1553af874c7d6d72c5307ca912f2e178049f96aa75ee18c5aa08980018->enter($__internal_56198e1553af874c7d6d72c5307ca912f2e178049f96aa75ee18c5aa08980018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81e395eae4075f04d9385591390af321eb4a611da36807fb2acc89e4db95abe4->leave($__internal_81e395eae4075f04d9385591390af321eb4a611da36807fb2acc89e4db95abe4_prof);

        
        $__internal_56198e1553af874c7d6d72c5307ca912f2e178049f96aa75ee18c5aa08980018->leave($__internal_56198e1553af874c7d6d72c5307ca912f2e178049f96aa75ee18c5aa08980018_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_005c11fd5265f6861e5c07f2a41fbdcc190b634e154486a40cfd12058090cc91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_005c11fd5265f6861e5c07f2a41fbdcc190b634e154486a40cfd12058090cc91->enter($__internal_005c11fd5265f6861e5c07f2a41fbdcc190b634e154486a40cfd12058090cc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f5da9779af83736928b686b79f3801a629e726b99a3771e26d8831d26442f574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5da9779af83736928b686b79f3801a629e726b99a3771e26d8831d26442f574->enter($__internal_f5da9779af83736928b686b79f3801a629e726b99a3771e26d8831d26442f574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f5da9779af83736928b686b79f3801a629e726b99a3771e26d8831d26442f574->leave($__internal_f5da9779af83736928b686b79f3801a629e726b99a3771e26d8831d26442f574_prof);

        
        $__internal_005c11fd5265f6861e5c07f2a41fbdcc190b634e154486a40cfd12058090cc91->leave($__internal_005c11fd5265f6861e5c07f2a41fbdcc190b634e154486a40cfd12058090cc91_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9df11f3c114800e1856e5d3f58484884a5bee46b99a9350321d52e4c5194fff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9df11f3c114800e1856e5d3f58484884a5bee46b99a9350321d52e4c5194fff2->enter($__internal_9df11f3c114800e1856e5d3f58484884a5bee46b99a9350321d52e4c5194fff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4929a0639a5bcaf78710856a6358b67b45f92cad81a3ba86b19aa24b24ba76e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4929a0639a5bcaf78710856a6358b67b45f92cad81a3ba86b19aa24b24ba76e1->enter($__internal_4929a0639a5bcaf78710856a6358b67b45f92cad81a3ba86b19aa24b24ba76e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4929a0639a5bcaf78710856a6358b67b45f92cad81a3ba86b19aa24b24ba76e1->leave($__internal_4929a0639a5bcaf78710856a6358b67b45f92cad81a3ba86b19aa24b24ba76e1_prof);

        
        $__internal_9df11f3c114800e1856e5d3f58484884a5bee46b99a9350321d52e4c5194fff2->leave($__internal_9df11f3c114800e1856e5d3f58484884a5bee46b99a9350321d52e4c5194fff2_prof);

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
