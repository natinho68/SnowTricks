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
        $__internal_ef0f7dbab0eeaf10c1d79f0d75beb7dae0852d51ffea335e8ba19d5819174d92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef0f7dbab0eeaf10c1d79f0d75beb7dae0852d51ffea335e8ba19d5819174d92->enter($__internal_ef0f7dbab0eeaf10c1d79f0d75beb7dae0852d51ffea335e8ba19d5819174d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_34a78f2baebb076a7ae2810760196a6c7684618d5b98c1f08080586ba2f506d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a78f2baebb076a7ae2810760196a6c7684618d5b98c1f08080586ba2f506d9->enter($__internal_34a78f2baebb076a7ae2810760196a6c7684618d5b98c1f08080586ba2f506d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_ef0f7dbab0eeaf10c1d79f0d75beb7dae0852d51ffea335e8ba19d5819174d92->leave($__internal_ef0f7dbab0eeaf10c1d79f0d75beb7dae0852d51ffea335e8ba19d5819174d92_prof);

        
        $__internal_34a78f2baebb076a7ae2810760196a6c7684618d5b98c1f08080586ba2f506d9->leave($__internal_34a78f2baebb076a7ae2810760196a6c7684618d5b98c1f08080586ba2f506d9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_370e58d105c04d1daaf3f8225046257358b6011f8c0ea9a8bcd960cbb7a9de4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_370e58d105c04d1daaf3f8225046257358b6011f8c0ea9a8bcd960cbb7a9de4e->enter($__internal_370e58d105c04d1daaf3f8225046257358b6011f8c0ea9a8bcd960cbb7a9de4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_88ada2dda2f480b84bb570f2e0fd080f1e61651f095cdbf48e171fbc48fb623a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ada2dda2f480b84bb570f2e0fd080f1e61651f095cdbf48e171fbc48fb623a->enter($__internal_88ada2dda2f480b84bb570f2e0fd080f1e61651f095cdbf48e171fbc48fb623a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_88ada2dda2f480b84bb570f2e0fd080f1e61651f095cdbf48e171fbc48fb623a->leave($__internal_88ada2dda2f480b84bb570f2e0fd080f1e61651f095cdbf48e171fbc48fb623a_prof);

        
        $__internal_370e58d105c04d1daaf3f8225046257358b6011f8c0ea9a8bcd960cbb7a9de4e->leave($__internal_370e58d105c04d1daaf3f8225046257358b6011f8c0ea9a8bcd960cbb7a9de4e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0665c9be10cf90a29bc838025bf1cccfda2c0ae262d6bbeaf621b2db4e24190e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0665c9be10cf90a29bc838025bf1cccfda2c0ae262d6bbeaf621b2db4e24190e->enter($__internal_0665c9be10cf90a29bc838025bf1cccfda2c0ae262d6bbeaf621b2db4e24190e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_86cc3789405934e4d1afe2b64d2eb05e052a2e904dc2a3e2f6544a9e9a7b35e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86cc3789405934e4d1afe2b64d2eb05e052a2e904dc2a3e2f6544a9e9a7b35e6->enter($__internal_86cc3789405934e4d1afe2b64d2eb05e052a2e904dc2a3e2f6544a9e9a7b35e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_86cc3789405934e4d1afe2b64d2eb05e052a2e904dc2a3e2f6544a9e9a7b35e6->leave($__internal_86cc3789405934e4d1afe2b64d2eb05e052a2e904dc2a3e2f6544a9e9a7b35e6_prof);

        
        $__internal_0665c9be10cf90a29bc838025bf1cccfda2c0ae262d6bbeaf621b2db4e24190e->leave($__internal_0665c9be10cf90a29bc838025bf1cccfda2c0ae262d6bbeaf621b2db4e24190e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_65906b2d2c5250c535b9b67f8f53a49408411e193c528adedd612fe57271d955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65906b2d2c5250c535b9b67f8f53a49408411e193c528adedd612fe57271d955->enter($__internal_65906b2d2c5250c535b9b67f8f53a49408411e193c528adedd612fe57271d955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20dec290abbd5af32e720ef04556263b3394e5836e777a1a6e75d15b5ede4664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20dec290abbd5af32e720ef04556263b3394e5836e777a1a6e75d15b5ede4664->enter($__internal_20dec290abbd5af32e720ef04556263b3394e5836e777a1a6e75d15b5ede4664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_20dec290abbd5af32e720ef04556263b3394e5836e777a1a6e75d15b5ede4664->leave($__internal_20dec290abbd5af32e720ef04556263b3394e5836e777a1a6e75d15b5ede4664_prof);

        
        $__internal_65906b2d2c5250c535b9b67f8f53a49408411e193c528adedd612fe57271d955->leave($__internal_65906b2d2c5250c535b9b67f8f53a49408411e193c528adedd612fe57271d955_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e6102d06a5838872b5f44d7f123dc6f4594d603fe4f0aacf5a4d32ef6aef6dc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6102d06a5838872b5f44d7f123dc6f4594d603fe4f0aacf5a4d32ef6aef6dc5->enter($__internal_e6102d06a5838872b5f44d7f123dc6f4594d603fe4f0aacf5a4d32ef6aef6dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_936e7a04658fe26a1468a371de1d7653c906b455db23a767b5480a6f4039692c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_936e7a04658fe26a1468a371de1d7653c906b455db23a767b5480a6f4039692c->enter($__internal_936e7a04658fe26a1468a371de1d7653c906b455db23a767b5480a6f4039692c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_936e7a04658fe26a1468a371de1d7653c906b455db23a767b5480a6f4039692c->leave($__internal_936e7a04658fe26a1468a371de1d7653c906b455db23a767b5480a6f4039692c_prof);

        
        $__internal_e6102d06a5838872b5f44d7f123dc6f4594d603fe4f0aacf5a4d32ef6aef6dc5->leave($__internal_e6102d06a5838872b5f44d7f123dc6f4594d603fe4f0aacf5a4d32ef6aef6dc5_prof);

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
