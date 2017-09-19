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
        $__internal_b98689699054e69add5e21196eac5a20518e6a8171c94a3ad228af29e59f1287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b98689699054e69add5e21196eac5a20518e6a8171c94a3ad228af29e59f1287->enter($__internal_b98689699054e69add5e21196eac5a20518e6a8171c94a3ad228af29e59f1287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_0ef8b2ed26c0bdb2c5bb43f598d21304c64de11d50109ed0128ee70cfa5654a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef8b2ed26c0bdb2c5bb43f598d21304c64de11d50109ed0128ee70cfa5654a0->enter($__internal_0ef8b2ed26c0bdb2c5bb43f598d21304c64de11d50109ed0128ee70cfa5654a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_b98689699054e69add5e21196eac5a20518e6a8171c94a3ad228af29e59f1287->leave($__internal_b98689699054e69add5e21196eac5a20518e6a8171c94a3ad228af29e59f1287_prof);

        
        $__internal_0ef8b2ed26c0bdb2c5bb43f598d21304c64de11d50109ed0128ee70cfa5654a0->leave($__internal_0ef8b2ed26c0bdb2c5bb43f598d21304c64de11d50109ed0128ee70cfa5654a0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_895a2c41bab1c46d8530182d2cd50a19a6493764fb4515eb4c288e68bea80e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_895a2c41bab1c46d8530182d2cd50a19a6493764fb4515eb4c288e68bea80e47->enter($__internal_895a2c41bab1c46d8530182d2cd50a19a6493764fb4515eb4c288e68bea80e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_154c68725e905ee220628dc3873c77d5c3dee6be06082fb4b92d04821ecc5b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154c68725e905ee220628dc3873c77d5c3dee6be06082fb4b92d04821ecc5b84->enter($__internal_154c68725e905ee220628dc3873c77d5c3dee6be06082fb4b92d04821ecc5b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_154c68725e905ee220628dc3873c77d5c3dee6be06082fb4b92d04821ecc5b84->leave($__internal_154c68725e905ee220628dc3873c77d5c3dee6be06082fb4b92d04821ecc5b84_prof);

        
        $__internal_895a2c41bab1c46d8530182d2cd50a19a6493764fb4515eb4c288e68bea80e47->leave($__internal_895a2c41bab1c46d8530182d2cd50a19a6493764fb4515eb4c288e68bea80e47_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d8b5191b3bc370e27d4c6972c48f81cc3400a628e063b7c0d6155399e7173cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8b5191b3bc370e27d4c6972c48f81cc3400a628e063b7c0d6155399e7173cfc->enter($__internal_d8b5191b3bc370e27d4c6972c48f81cc3400a628e063b7c0d6155399e7173cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cb25e5bc7c41df32f28120f54f1871e809d07622f4ee2b670b26dadcaac9ee96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb25e5bc7c41df32f28120f54f1871e809d07622f4ee2b670b26dadcaac9ee96->enter($__internal_cb25e5bc7c41df32f28120f54f1871e809d07622f4ee2b670b26dadcaac9ee96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cb25e5bc7c41df32f28120f54f1871e809d07622f4ee2b670b26dadcaac9ee96->leave($__internal_cb25e5bc7c41df32f28120f54f1871e809d07622f4ee2b670b26dadcaac9ee96_prof);

        
        $__internal_d8b5191b3bc370e27d4c6972c48f81cc3400a628e063b7c0d6155399e7173cfc->leave($__internal_d8b5191b3bc370e27d4c6972c48f81cc3400a628e063b7c0d6155399e7173cfc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_74786679d86d85abb945822742425f67e574d62fa36eeacc0f60bd80c0d5a018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74786679d86d85abb945822742425f67e574d62fa36eeacc0f60bd80c0d5a018->enter($__internal_74786679d86d85abb945822742425f67e574d62fa36eeacc0f60bd80c0d5a018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18cf75c81f8e61948b268f61ed0c905578c8ea7c4098eb670809d905eb8a6d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18cf75c81f8e61948b268f61ed0c905578c8ea7c4098eb670809d905eb8a6d69->enter($__internal_18cf75c81f8e61948b268f61ed0c905578c8ea7c4098eb670809d905eb8a6d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_18cf75c81f8e61948b268f61ed0c905578c8ea7c4098eb670809d905eb8a6d69->leave($__internal_18cf75c81f8e61948b268f61ed0c905578c8ea7c4098eb670809d905eb8a6d69_prof);

        
        $__internal_74786679d86d85abb945822742425f67e574d62fa36eeacc0f60bd80c0d5a018->leave($__internal_74786679d86d85abb945822742425f67e574d62fa36eeacc0f60bd80c0d5a018_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7fab9f9a598c6908c70777cb1ea6c5447245b37ecb39348b4dc5d676239a9085 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fab9f9a598c6908c70777cb1ea6c5447245b37ecb39348b4dc5d676239a9085->enter($__internal_7fab9f9a598c6908c70777cb1ea6c5447245b37ecb39348b4dc5d676239a9085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_643d7460a64599e5f5d6e8b6d05fe433a4b9dbcdae72bb5b6205219ca2175934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643d7460a64599e5f5d6e8b6d05fe433a4b9dbcdae72bb5b6205219ca2175934->enter($__internal_643d7460a64599e5f5d6e8b6d05fe433a4b9dbcdae72bb5b6205219ca2175934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_643d7460a64599e5f5d6e8b6d05fe433a4b9dbcdae72bb5b6205219ca2175934->leave($__internal_643d7460a64599e5f5d6e8b6d05fe433a4b9dbcdae72bb5b6205219ca2175934_prof);

        
        $__internal_7fab9f9a598c6908c70777cb1ea6c5447245b37ecb39348b4dc5d676239a9085->leave($__internal_7fab9f9a598c6908c70777cb1ea6c5447245b37ecb39348b4dc5d676239a9085_prof);

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
