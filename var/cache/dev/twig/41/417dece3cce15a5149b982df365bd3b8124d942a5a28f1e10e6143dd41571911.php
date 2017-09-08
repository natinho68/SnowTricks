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
        $__internal_9e599b950b2758c62f89093ad8cbafdc2cdb206578c44947f535093d82795d81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e599b950b2758c62f89093ad8cbafdc2cdb206578c44947f535093d82795d81->enter($__internal_9e599b950b2758c62f89093ad8cbafdc2cdb206578c44947f535093d82795d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_11b616f7f07431467c28cc14d845f5a3156b25ba7742542e1d2a455bfbcd4239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11b616f7f07431467c28cc14d845f5a3156b25ba7742542e1d2a455bfbcd4239->enter($__internal_11b616f7f07431467c28cc14d845f5a3156b25ba7742542e1d2a455bfbcd4239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e599b950b2758c62f89093ad8cbafdc2cdb206578c44947f535093d82795d81->leave($__internal_9e599b950b2758c62f89093ad8cbafdc2cdb206578c44947f535093d82795d81_prof);

        
        $__internal_11b616f7f07431467c28cc14d845f5a3156b25ba7742542e1d2a455bfbcd4239->leave($__internal_11b616f7f07431467c28cc14d845f5a3156b25ba7742542e1d2a455bfbcd4239_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f1b5228586533dc7ed9a7237f2b0ffe9d5b1a6f8d3aed24a0853a1c85475f46d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1b5228586533dc7ed9a7237f2b0ffe9d5b1a6f8d3aed24a0853a1c85475f46d->enter($__internal_f1b5228586533dc7ed9a7237f2b0ffe9d5b1a6f8d3aed24a0853a1c85475f46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e3d16c48a49a92584e4aa37724f8c083fe19abfdb3d3197c2717f92d60146e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d16c48a49a92584e4aa37724f8c083fe19abfdb3d3197c2717f92d60146e9f->enter($__internal_e3d16c48a49a92584e4aa37724f8c083fe19abfdb3d3197c2717f92d60146e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e3d16c48a49a92584e4aa37724f8c083fe19abfdb3d3197c2717f92d60146e9f->leave($__internal_e3d16c48a49a92584e4aa37724f8c083fe19abfdb3d3197c2717f92d60146e9f_prof);

        
        $__internal_f1b5228586533dc7ed9a7237f2b0ffe9d5b1a6f8d3aed24a0853a1c85475f46d->leave($__internal_f1b5228586533dc7ed9a7237f2b0ffe9d5b1a6f8d3aed24a0853a1c85475f46d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1ad3085234a23b7a2dc077277f19e2bbaeb443dd69d98987ce4475e76ea4dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1ad3085234a23b7a2dc077277f19e2bbaeb443dd69d98987ce4475e76ea4dfe->enter($__internal_a1ad3085234a23b7a2dc077277f19e2bbaeb443dd69d98987ce4475e76ea4dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dad0c6f6ae5ed68835579073f9e176652ff0ed2d54836f1cbb95d1c2333e41b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad0c6f6ae5ed68835579073f9e176652ff0ed2d54836f1cbb95d1c2333e41b8->enter($__internal_dad0c6f6ae5ed68835579073f9e176652ff0ed2d54836f1cbb95d1c2333e41b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dad0c6f6ae5ed68835579073f9e176652ff0ed2d54836f1cbb95d1c2333e41b8->leave($__internal_dad0c6f6ae5ed68835579073f9e176652ff0ed2d54836f1cbb95d1c2333e41b8_prof);

        
        $__internal_a1ad3085234a23b7a2dc077277f19e2bbaeb443dd69d98987ce4475e76ea4dfe->leave($__internal_a1ad3085234a23b7a2dc077277f19e2bbaeb443dd69d98987ce4475e76ea4dfe_prof);

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
