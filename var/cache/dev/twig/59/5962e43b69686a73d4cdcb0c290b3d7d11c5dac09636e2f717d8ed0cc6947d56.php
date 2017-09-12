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
        $__internal_0ea96fd9a1f31c6103173d6463d1852e02b5182c227b21e3cc0c1cfc9a2727fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea96fd9a1f31c6103173d6463d1852e02b5182c227b21e3cc0c1cfc9a2727fa->enter($__internal_0ea96fd9a1f31c6103173d6463d1852e02b5182c227b21e3cc0c1cfc9a2727fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b70f20087656e62b7ba5caf20e018461e235ccb085db5f9f2d231585beb615a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70f20087656e62b7ba5caf20e018461e235ccb085db5f9f2d231585beb615a2->enter($__internal_b70f20087656e62b7ba5caf20e018461e235ccb085db5f9f2d231585beb615a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_0ea96fd9a1f31c6103173d6463d1852e02b5182c227b21e3cc0c1cfc9a2727fa->leave($__internal_0ea96fd9a1f31c6103173d6463d1852e02b5182c227b21e3cc0c1cfc9a2727fa_prof);

        
        $__internal_b70f20087656e62b7ba5caf20e018461e235ccb085db5f9f2d231585beb615a2->leave($__internal_b70f20087656e62b7ba5caf20e018461e235ccb085db5f9f2d231585beb615a2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4e4bbeb7fdcc323c704517c29af7f3328d3bd5e34ef323fb2d0247c4d447a84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4e4bbeb7fdcc323c704517c29af7f3328d3bd5e34ef323fb2d0247c4d447a84->enter($__internal_d4e4bbeb7fdcc323c704517c29af7f3328d3bd5e34ef323fb2d0247c4d447a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9600f85fbdf5b6ef1e981185453d41eda0b461e1c1174d8cdc7cf0669618e00d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9600f85fbdf5b6ef1e981185453d41eda0b461e1c1174d8cdc7cf0669618e00d->enter($__internal_9600f85fbdf5b6ef1e981185453d41eda0b461e1c1174d8cdc7cf0669618e00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9600f85fbdf5b6ef1e981185453d41eda0b461e1c1174d8cdc7cf0669618e00d->leave($__internal_9600f85fbdf5b6ef1e981185453d41eda0b461e1c1174d8cdc7cf0669618e00d_prof);

        
        $__internal_d4e4bbeb7fdcc323c704517c29af7f3328d3bd5e34ef323fb2d0247c4d447a84->leave($__internal_d4e4bbeb7fdcc323c704517c29af7f3328d3bd5e34ef323fb2d0247c4d447a84_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bc508285a4a90980d6b8c9088acaa6ab9a28ef8d9f3cad7921b9395ef1b03186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc508285a4a90980d6b8c9088acaa6ab9a28ef8d9f3cad7921b9395ef1b03186->enter($__internal_bc508285a4a90980d6b8c9088acaa6ab9a28ef8d9f3cad7921b9395ef1b03186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1684b0f76b9268c2b1866d898a4928cb6fcf177e9d1159de5838f2e78a1e8195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1684b0f76b9268c2b1866d898a4928cb6fcf177e9d1159de5838f2e78a1e8195->enter($__internal_1684b0f76b9268c2b1866d898a4928cb6fcf177e9d1159de5838f2e78a1e8195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1684b0f76b9268c2b1866d898a4928cb6fcf177e9d1159de5838f2e78a1e8195->leave($__internal_1684b0f76b9268c2b1866d898a4928cb6fcf177e9d1159de5838f2e78a1e8195_prof);

        
        $__internal_bc508285a4a90980d6b8c9088acaa6ab9a28ef8d9f3cad7921b9395ef1b03186->leave($__internal_bc508285a4a90980d6b8c9088acaa6ab9a28ef8d9f3cad7921b9395ef1b03186_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_df85c841a1830cf43e639741f82b23ae90931105ac6e4ec19bd5be1dfe84aaac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df85c841a1830cf43e639741f82b23ae90931105ac6e4ec19bd5be1dfe84aaac->enter($__internal_df85c841a1830cf43e639741f82b23ae90931105ac6e4ec19bd5be1dfe84aaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46b3c940e2ee63a05bab629314590bd1379e312e231caf87718d5ff62a07a8a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b3c940e2ee63a05bab629314590bd1379e312e231caf87718d5ff62a07a8a6->enter($__internal_46b3c940e2ee63a05bab629314590bd1379e312e231caf87718d5ff62a07a8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_46b3c940e2ee63a05bab629314590bd1379e312e231caf87718d5ff62a07a8a6->leave($__internal_46b3c940e2ee63a05bab629314590bd1379e312e231caf87718d5ff62a07a8a6_prof);

        
        $__internal_df85c841a1830cf43e639741f82b23ae90931105ac6e4ec19bd5be1dfe84aaac->leave($__internal_df85c841a1830cf43e639741f82b23ae90931105ac6e4ec19bd5be1dfe84aaac_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_65c34ba3c1f41f5446c33818c097208fffd65ff0d7233532b73ba86b8c27282c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65c34ba3c1f41f5446c33818c097208fffd65ff0d7233532b73ba86b8c27282c->enter($__internal_65c34ba3c1f41f5446c33818c097208fffd65ff0d7233532b73ba86b8c27282c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9953a0f83a1be2a9946e732f8dc11feec3bc070ba795ddd0d4c219695a30daa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9953a0f83a1be2a9946e732f8dc11feec3bc070ba795ddd0d4c219695a30daa7->enter($__internal_9953a0f83a1be2a9946e732f8dc11feec3bc070ba795ddd0d4c219695a30daa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9953a0f83a1be2a9946e732f8dc11feec3bc070ba795ddd0d4c219695a30daa7->leave($__internal_9953a0f83a1be2a9946e732f8dc11feec3bc070ba795ddd0d4c219695a30daa7_prof);

        
        $__internal_65c34ba3c1f41f5446c33818c097208fffd65ff0d7233532b73ba86b8c27282c->leave($__internal_65c34ba3c1f41f5446c33818c097208fffd65ff0d7233532b73ba86b8c27282c_prof);

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
