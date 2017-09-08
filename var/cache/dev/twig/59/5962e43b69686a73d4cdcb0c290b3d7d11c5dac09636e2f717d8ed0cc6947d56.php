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
        $__internal_a80f81069c3e60612b66d137d481292685b8d9f122c721c56d58375c3936becf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a80f81069c3e60612b66d137d481292685b8d9f122c721c56d58375c3936becf->enter($__internal_a80f81069c3e60612b66d137d481292685b8d9f122c721c56d58375c3936becf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_9b0fba35b11e8a2bf98e9af2622a77ef98fc8a3b3f3a2a566154c1ed1e518dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b0fba35b11e8a2bf98e9af2622a77ef98fc8a3b3f3a2a566154c1ed1e518dac->enter($__internal_9b0fba35b11e8a2bf98e9af2622a77ef98fc8a3b3f3a2a566154c1ed1e518dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a80f81069c3e60612b66d137d481292685b8d9f122c721c56d58375c3936becf->leave($__internal_a80f81069c3e60612b66d137d481292685b8d9f122c721c56d58375c3936becf_prof);

        
        $__internal_9b0fba35b11e8a2bf98e9af2622a77ef98fc8a3b3f3a2a566154c1ed1e518dac->leave($__internal_9b0fba35b11e8a2bf98e9af2622a77ef98fc8a3b3f3a2a566154c1ed1e518dac_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_279cf01cf1b37b208e4b6c5dca43c3a6c7444cc7ae6cd96521c34fa5ff3b50b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_279cf01cf1b37b208e4b6c5dca43c3a6c7444cc7ae6cd96521c34fa5ff3b50b6->enter($__internal_279cf01cf1b37b208e4b6c5dca43c3a6c7444cc7ae6cd96521c34fa5ff3b50b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_344c4878a6070702e880085f83a7fd4637d8ce1250e623cd424534d0c78c2f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344c4878a6070702e880085f83a7fd4637d8ce1250e623cd424534d0c78c2f7e->enter($__internal_344c4878a6070702e880085f83a7fd4637d8ce1250e623cd424534d0c78c2f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_344c4878a6070702e880085f83a7fd4637d8ce1250e623cd424534d0c78c2f7e->leave($__internal_344c4878a6070702e880085f83a7fd4637d8ce1250e623cd424534d0c78c2f7e_prof);

        
        $__internal_279cf01cf1b37b208e4b6c5dca43c3a6c7444cc7ae6cd96521c34fa5ff3b50b6->leave($__internal_279cf01cf1b37b208e4b6c5dca43c3a6c7444cc7ae6cd96521c34fa5ff3b50b6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_35c3147b0224e9c20e57ccaeec3ea5d5de75874661765883a2236e491f1641a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c3147b0224e9c20e57ccaeec3ea5d5de75874661765883a2236e491f1641a0->enter($__internal_35c3147b0224e9c20e57ccaeec3ea5d5de75874661765883a2236e491f1641a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1ef8f3c69bd3763b0b92e6864306bf3b76a244c94ccc00779e20497e9968956b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef8f3c69bd3763b0b92e6864306bf3b76a244c94ccc00779e20497e9968956b->enter($__internal_1ef8f3c69bd3763b0b92e6864306bf3b76a244c94ccc00779e20497e9968956b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1ef8f3c69bd3763b0b92e6864306bf3b76a244c94ccc00779e20497e9968956b->leave($__internal_1ef8f3c69bd3763b0b92e6864306bf3b76a244c94ccc00779e20497e9968956b_prof);

        
        $__internal_35c3147b0224e9c20e57ccaeec3ea5d5de75874661765883a2236e491f1641a0->leave($__internal_35c3147b0224e9c20e57ccaeec3ea5d5de75874661765883a2236e491f1641a0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d19601acb59da834fac09b6f9755f8e6398c279b1cf457bf4ac359713a16963a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d19601acb59da834fac09b6f9755f8e6398c279b1cf457bf4ac359713a16963a->enter($__internal_d19601acb59da834fac09b6f9755f8e6398c279b1cf457bf4ac359713a16963a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8aff43fe844421f8443475e23a922e1db6d287d9cfe54b12dde01bf87e9d3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8aff43fe844421f8443475e23a922e1db6d287d9cfe54b12dde01bf87e9d3b8->enter($__internal_c8aff43fe844421f8443475e23a922e1db6d287d9cfe54b12dde01bf87e9d3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c8aff43fe844421f8443475e23a922e1db6d287d9cfe54b12dde01bf87e9d3b8->leave($__internal_c8aff43fe844421f8443475e23a922e1db6d287d9cfe54b12dde01bf87e9d3b8_prof);

        
        $__internal_d19601acb59da834fac09b6f9755f8e6398c279b1cf457bf4ac359713a16963a->leave($__internal_d19601acb59da834fac09b6f9755f8e6398c279b1cf457bf4ac359713a16963a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0aee6c7786c538250225f8d3f4cf6554ce937159caad6f17f7e59d89c3352a81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aee6c7786c538250225f8d3f4cf6554ce937159caad6f17f7e59d89c3352a81->enter($__internal_0aee6c7786c538250225f8d3f4cf6554ce937159caad6f17f7e59d89c3352a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9c43a401eb3be893b8847bf6bec0d4ccadd4602597c3f06f47cd6d90c68aaa30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c43a401eb3be893b8847bf6bec0d4ccadd4602597c3f06f47cd6d90c68aaa30->enter($__internal_9c43a401eb3be893b8847bf6bec0d4ccadd4602597c3f06f47cd6d90c68aaa30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9c43a401eb3be893b8847bf6bec0d4ccadd4602597c3f06f47cd6d90c68aaa30->leave($__internal_9c43a401eb3be893b8847bf6bec0d4ccadd4602597c3f06f47cd6d90c68aaa30_prof);

        
        $__internal_0aee6c7786c538250225f8d3f4cf6554ce937159caad6f17f7e59d89c3352a81->leave($__internal_0aee6c7786c538250225f8d3f4cf6554ce937159caad6f17f7e59d89c3352a81_prof);

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
