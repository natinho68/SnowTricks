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
        $__internal_da164189c6c5c83811450884db02036a0d44d9b368e0dfdfb2056f1f1094213a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da164189c6c5c83811450884db02036a0d44d9b368e0dfdfb2056f1f1094213a->enter($__internal_da164189c6c5c83811450884db02036a0d44d9b368e0dfdfb2056f1f1094213a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_17c9856af837ae53e7290dbfdf1cd896cde5397a8122fbebc79ce79723211976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c9856af837ae53e7290dbfdf1cd896cde5397a8122fbebc79ce79723211976->enter($__internal_17c9856af837ae53e7290dbfdf1cd896cde5397a8122fbebc79ce79723211976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_da164189c6c5c83811450884db02036a0d44d9b368e0dfdfb2056f1f1094213a->leave($__internal_da164189c6c5c83811450884db02036a0d44d9b368e0dfdfb2056f1f1094213a_prof);

        
        $__internal_17c9856af837ae53e7290dbfdf1cd896cde5397a8122fbebc79ce79723211976->leave($__internal_17c9856af837ae53e7290dbfdf1cd896cde5397a8122fbebc79ce79723211976_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb6040078c95d060d53cec8f30007daa453be6d8655ec85492c68f5150f713e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb6040078c95d060d53cec8f30007daa453be6d8655ec85492c68f5150f713e2->enter($__internal_eb6040078c95d060d53cec8f30007daa453be6d8655ec85492c68f5150f713e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_666519101d2e3911102807027b672491bd6e1c2933231687e8bc224232adc980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666519101d2e3911102807027b672491bd6e1c2933231687e8bc224232adc980->enter($__internal_666519101d2e3911102807027b672491bd6e1c2933231687e8bc224232adc980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_666519101d2e3911102807027b672491bd6e1c2933231687e8bc224232adc980->leave($__internal_666519101d2e3911102807027b672491bd6e1c2933231687e8bc224232adc980_prof);

        
        $__internal_eb6040078c95d060d53cec8f30007daa453be6d8655ec85492c68f5150f713e2->leave($__internal_eb6040078c95d060d53cec8f30007daa453be6d8655ec85492c68f5150f713e2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c2e46a8b8bd96bc3e000852af4a40d8111777de50000f889e9f7b61e0abb0343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e46a8b8bd96bc3e000852af4a40d8111777de50000f889e9f7b61e0abb0343->enter($__internal_c2e46a8b8bd96bc3e000852af4a40d8111777de50000f889e9f7b61e0abb0343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f8bf20a45c53b7ead0e54af10d7871dac00b0a4787955760534f10a14a8ace56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8bf20a45c53b7ead0e54af10d7871dac00b0a4787955760534f10a14a8ace56->enter($__internal_f8bf20a45c53b7ead0e54af10d7871dac00b0a4787955760534f10a14a8ace56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f8bf20a45c53b7ead0e54af10d7871dac00b0a4787955760534f10a14a8ace56->leave($__internal_f8bf20a45c53b7ead0e54af10d7871dac00b0a4787955760534f10a14a8ace56_prof);

        
        $__internal_c2e46a8b8bd96bc3e000852af4a40d8111777de50000f889e9f7b61e0abb0343->leave($__internal_c2e46a8b8bd96bc3e000852af4a40d8111777de50000f889e9f7b61e0abb0343_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd7ff8b02ab3a10519f2a5b9f2e1a01c0c24994d8e7124e7194794bf3faa8759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd7ff8b02ab3a10519f2a5b9f2e1a01c0c24994d8e7124e7194794bf3faa8759->enter($__internal_cd7ff8b02ab3a10519f2a5b9f2e1a01c0c24994d8e7124e7194794bf3faa8759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_255143b1aae9e9eaede3600bc79aa08193657bf83484e29df9e547546e143495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_255143b1aae9e9eaede3600bc79aa08193657bf83484e29df9e547546e143495->enter($__internal_255143b1aae9e9eaede3600bc79aa08193657bf83484e29df9e547546e143495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_255143b1aae9e9eaede3600bc79aa08193657bf83484e29df9e547546e143495->leave($__internal_255143b1aae9e9eaede3600bc79aa08193657bf83484e29df9e547546e143495_prof);

        
        $__internal_cd7ff8b02ab3a10519f2a5b9f2e1a01c0c24994d8e7124e7194794bf3faa8759->leave($__internal_cd7ff8b02ab3a10519f2a5b9f2e1a01c0c24994d8e7124e7194794bf3faa8759_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_219fecc76734b3a34ed1c81421405f2c73c35068f3e5d0b60dc0d5de1be6a8a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219fecc76734b3a34ed1c81421405f2c73c35068f3e5d0b60dc0d5de1be6a8a4->enter($__internal_219fecc76734b3a34ed1c81421405f2c73c35068f3e5d0b60dc0d5de1be6a8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a3ea3cc0a0128e6f76b7fd199a7e5e155d151c3182a1d40d8981a08b37ac925d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ea3cc0a0128e6f76b7fd199a7e5e155d151c3182a1d40d8981a08b37ac925d->enter($__internal_a3ea3cc0a0128e6f76b7fd199a7e5e155d151c3182a1d40d8981a08b37ac925d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a3ea3cc0a0128e6f76b7fd199a7e5e155d151c3182a1d40d8981a08b37ac925d->leave($__internal_a3ea3cc0a0128e6f76b7fd199a7e5e155d151c3182a1d40d8981a08b37ac925d_prof);

        
        $__internal_219fecc76734b3a34ed1c81421405f2c73c35068f3e5d0b60dc0d5de1be6a8a4->leave($__internal_219fecc76734b3a34ed1c81421405f2c73c35068f3e5d0b60dc0d5de1be6a8a4_prof);

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
