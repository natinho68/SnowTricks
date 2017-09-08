<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e0af928166cb9fef112792e9d86f25507714feb76f468929df08c918305c15ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f37b628b056bffc2ae27e8b22afa5001c1621a4ecebe785c224e057d10148287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f37b628b056bffc2ae27e8b22afa5001c1621a4ecebe785c224e057d10148287->enter($__internal_f37b628b056bffc2ae27e8b22afa5001c1621a4ecebe785c224e057d10148287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_ba7344c0dbfdbcbd3e74c238c969fb7b45e6f07ab09fba2d9f76adb46060711b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7344c0dbfdbcbd3e74c238c969fb7b45e6f07ab09fba2d9f76adb46060711b->enter($__internal_ba7344c0dbfdbcbd3e74c238c969fb7b45e6f07ab09fba2d9f76adb46060711b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f37b628b056bffc2ae27e8b22afa5001c1621a4ecebe785c224e057d10148287->leave($__internal_f37b628b056bffc2ae27e8b22afa5001c1621a4ecebe785c224e057d10148287_prof);

        
        $__internal_ba7344c0dbfdbcbd3e74c238c969fb7b45e6f07ab09fba2d9f76adb46060711b->leave($__internal_ba7344c0dbfdbcbd3e74c238c969fb7b45e6f07ab09fba2d9f76adb46060711b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1229e0010fff0e1e7644bb5c04db7054db2c357ef06607d39a4b5fafa50b59e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1229e0010fff0e1e7644bb5c04db7054db2c357ef06607d39a4b5fafa50b59e4->enter($__internal_1229e0010fff0e1e7644bb5c04db7054db2c357ef06607d39a4b5fafa50b59e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fcfc06b8453590ed933ad1e66c763a4fea6a6e768e0331d9c06fa047d0d86b7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcfc06b8453590ed933ad1e66c763a4fea6a6e768e0331d9c06fa047d0d86b7f->enter($__internal_fcfc06b8453590ed933ad1e66c763a4fea6a6e768e0331d9c06fa047d0d86b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fcfc06b8453590ed933ad1e66c763a4fea6a6e768e0331d9c06fa047d0d86b7f->leave($__internal_fcfc06b8453590ed933ad1e66c763a4fea6a6e768e0331d9c06fa047d0d86b7f_prof);

        
        $__internal_1229e0010fff0e1e7644bb5c04db7054db2c357ef06607d39a4b5fafa50b59e4->leave($__internal_1229e0010fff0e1e7644bb5c04db7054db2c357ef06607d39a4b5fafa50b59e4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
