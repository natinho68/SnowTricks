<?php

/* ::base.html.twig */
class __TwigTemplate_fd2866f57d6bf127c645f28be59ccbee40ea71826226d3a4cd0c0744e3cd6f76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f76fb92ced72d42ed91c276ca1af99e5460db46fb610d00eeea7b2823717498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f76fb92ced72d42ed91c276ca1af99e5460db46fb610d00eeea7b2823717498->enter($__internal_7f76fb92ced72d42ed91c276ca1af99e5460db46fb610d00eeea7b2823717498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_13d47fb92219bcef1529ed3e6ebc79e1c7655015541390a6a1c415cad1e9ed28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d47fb92219bcef1529ed3e6ebc79e1c7655015541390a6a1c415cad1e9ed28->enter($__internal_13d47fb92219bcef1529ed3e6ebc79e1c7655015541390a6a1c415cad1e9ed28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7f76fb92ced72d42ed91c276ca1af99e5460db46fb610d00eeea7b2823717498->leave($__internal_7f76fb92ced72d42ed91c276ca1af99e5460db46fb610d00eeea7b2823717498_prof);

        
        $__internal_13d47fb92219bcef1529ed3e6ebc79e1c7655015541390a6a1c415cad1e9ed28->leave($__internal_13d47fb92219bcef1529ed3e6ebc79e1c7655015541390a6a1c415cad1e9ed28_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7fcba1b4f815c56510ac0df2a7af6d30e23b1eba65428ad870556f86da119d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7fcba1b4f815c56510ac0df2a7af6d30e23b1eba65428ad870556f86da119d3->enter($__internal_a7fcba1b4f815c56510ac0df2a7af6d30e23b1eba65428ad870556f86da119d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_70b9e4743da6c6f1d8e5423f4d37580587f9bc20ceaea1a8b4bc19a4ca6ab521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b9e4743da6c6f1d8e5423f4d37580587f9bc20ceaea1a8b4bc19a4ca6ab521->enter($__internal_70b9e4743da6c6f1d8e5423f4d37580587f9bc20ceaea1a8b4bc19a4ca6ab521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_70b9e4743da6c6f1d8e5423f4d37580587f9bc20ceaea1a8b4bc19a4ca6ab521->leave($__internal_70b9e4743da6c6f1d8e5423f4d37580587f9bc20ceaea1a8b4bc19a4ca6ab521_prof);

        
        $__internal_a7fcba1b4f815c56510ac0df2a7af6d30e23b1eba65428ad870556f86da119d3->leave($__internal_a7fcba1b4f815c56510ac0df2a7af6d30e23b1eba65428ad870556f86da119d3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6455e685ba3c0642cf15a456b464a16a208b3d1d60629a6396fb5f16ceee0fbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6455e685ba3c0642cf15a456b464a16a208b3d1d60629a6396fb5f16ceee0fbe->enter($__internal_6455e685ba3c0642cf15a456b464a16a208b3d1d60629a6396fb5f16ceee0fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6676847438fa53143c8ed571a452d47a59c09cd209279ca867bc7234938009a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6676847438fa53143c8ed571a452d47a59c09cd209279ca867bc7234938009a6->enter($__internal_6676847438fa53143c8ed571a452d47a59c09cd209279ca867bc7234938009a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6676847438fa53143c8ed571a452d47a59c09cd209279ca867bc7234938009a6->leave($__internal_6676847438fa53143c8ed571a452d47a59c09cd209279ca867bc7234938009a6_prof);

        
        $__internal_6455e685ba3c0642cf15a456b464a16a208b3d1d60629a6396fb5f16ceee0fbe->leave($__internal_6455e685ba3c0642cf15a456b464a16a208b3d1d60629a6396fb5f16ceee0fbe_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc71bb3efd4f88287ffe06f4daae33012021b35c79e1ff00c1c76266cf4c0d86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc71bb3efd4f88287ffe06f4daae33012021b35c79e1ff00c1c76266cf4c0d86->enter($__internal_dc71bb3efd4f88287ffe06f4daae33012021b35c79e1ff00c1c76266cf4c0d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e22e208c24b416a453658de341d3ab35df21a039ac415852962523d9c5711459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e22e208c24b416a453658de341d3ab35df21a039ac415852962523d9c5711459->enter($__internal_e22e208c24b416a453658de341d3ab35df21a039ac415852962523d9c5711459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e22e208c24b416a453658de341d3ab35df21a039ac415852962523d9c5711459->leave($__internal_e22e208c24b416a453658de341d3ab35df21a039ac415852962523d9c5711459_prof);

        
        $__internal_dc71bb3efd4f88287ffe06f4daae33012021b35c79e1ff00c1c76266cf4c0d86->leave($__internal_dc71bb3efd4f88287ffe06f4daae33012021b35c79e1ff00c1c76266cf4c0d86_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d3e5ca0b0c3e96c1ccbd9dd13b12efa120e546a9f0da58e260fa5e2965cc2be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e5ca0b0c3e96c1ccbd9dd13b12efa120e546a9f0da58e260fa5e2965cc2be5->enter($__internal_d3e5ca0b0c3e96c1ccbd9dd13b12efa120e546a9f0da58e260fa5e2965cc2be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7d7a22e8a0d57739f0b7b05cacb43a771b35890e11782b15bcab0b2a2537cf86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d7a22e8a0d57739f0b7b05cacb43a771b35890e11782b15bcab0b2a2537cf86->enter($__internal_7d7a22e8a0d57739f0b7b05cacb43a771b35890e11782b15bcab0b2a2537cf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7d7a22e8a0d57739f0b7b05cacb43a771b35890e11782b15bcab0b2a2537cf86->leave($__internal_7d7a22e8a0d57739f0b7b05cacb43a771b35890e11782b15bcab0b2a2537cf86_prof);

        
        $__internal_d3e5ca0b0c3e96c1ccbd9dd13b12efa120e546a9f0da58e260fa5e2965cc2be5->leave($__internal_d3e5ca0b0c3e96c1ccbd9dd13b12efa120e546a9f0da58e260fa5e2965cc2be5_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Applications/MAMP/htdocs/SnowTricks/app/Resources/views/base.html.twig");
    }
}
