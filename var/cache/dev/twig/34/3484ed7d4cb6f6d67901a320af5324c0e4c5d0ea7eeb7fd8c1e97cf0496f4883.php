<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_3171d2152f079af780bbeb8dc65ad4c99b153ed51fd43d55d90f64e063931dd2 extends Twig_Template
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
        $__internal_6f4d07cc885a99078786cb1fb0297f67bc2f32e5b69fa26a7280ec1b4ed7e89b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f4d07cc885a99078786cb1fb0297f67bc2f32e5b69fa26a7280ec1b4ed7e89b->enter($__internal_6f4d07cc885a99078786cb1fb0297f67bc2f32e5b69fa26a7280ec1b4ed7e89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_ac130adf34bddb63ab9712ba2cce2db44a7cb6fd617055c5344469554e938f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac130adf34bddb63ab9712ba2cce2db44a7cb6fd617055c5344469554e938f6d->enter($__internal_ac130adf34bddb63ab9712ba2cce2db44a7cb6fd617055c5344469554e938f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_6f4d07cc885a99078786cb1fb0297f67bc2f32e5b69fa26a7280ec1b4ed7e89b->leave($__internal_6f4d07cc885a99078786cb1fb0297f67bc2f32e5b69fa26a7280ec1b4ed7e89b_prof);

        
        $__internal_ac130adf34bddb63ab9712ba2cce2db44a7cb6fd617055c5344469554e938f6d->leave($__internal_ac130adf34bddb63ab9712ba2cce2db44a7cb6fd617055c5344469554e938f6d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
